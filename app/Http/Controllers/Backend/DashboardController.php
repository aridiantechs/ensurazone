<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;

use App\Models\Skill;

use App\Models\SavedSearch;
use App\Search\TalentSearch;
use Illuminate\Http\Request;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
	public function dashboard()
	{
		$ra_users=\App\Models\User::whereHas('remote_assessment', function($q){
                $q->where('paid',1);
            })->get()->sum('remote_assessment.amount');
		
		$gp_users=\App\Models\User::whereHas('ground_proof', function($q){
			$q->where('paid',1);
		})->get()->sum('ground_proof.amount');

		$profit=($ra_users+$gp_users)/100;

		$ra_inquiries=\App\Models\User::whereHas('remote_assessment', function($q){
					$q->where('paid',1)->where("status","pending");
				})->get()->count('remote_assessment');
	
		$gp_inquiries=\App\Models\User::whereHas('ground_proof', function($q){
					$q->where('paid',1)->where("status","pending");
				})->get()->count('ground_proof');
		
		$total_inquiries=$ra_inquiries+$gp_inquiries;

		$users=\App\Models\User::latest()->whereMonth('created_at',
				Carbon::now()->format('m')
			)->get()->count();

		$ra_locations=\App\Models\User::whereHas('remote_assessment', function($q){
				$q->where('paid',1);
			})->with('remote_assessment:user_id,city,latitude,longitude')->get()->pluck('remote_assessment')->toArray();
		
		$map_data=new Collection;
		foreach ($ra_locations as $key => $locate) {
			$map_data->push((object)['name'=> $locate['city'],'coords'=> [$locate['latitude'],$locate['longitude']] ]);
		}
        /* dd($map_data[0]->name); */

		$data=[
			"profit"=>$profit,
			"users"=>$users,
			"total_inquiries"=>$total_inquiries,
			"map_data"=>$map_data->toArray()
		];
		/* dd($data['map_data']); */
		return view('backend.index',compact('data'));

	}

	public function viewSaveSearch()
	{
		if (count(auth()->user()->saved_search)>0) {
			$search=auth()->user()->saved_search;
			return view('web.pages.saved_search',compact('search'));
		}
		else{
			return redirect()->back()->with([
				"message" => "No Saved Searches found",
				"alert-type" => "error",
			]);
		}
	}

	public function applySaveSearch($id)
   {
		$search=SavedSearch::findOrFail($id);
		$skills=Skill::all();
		if($search){
			session()->forget('old_query');
			$get_query=json_decode($search->value,true);
			
			$search_request = new \Illuminate\Http\Request();
			$search_request->setMethod('POST');
			$search_request->request->add($get_query);
			
			$members=TalentSearch::apply($search_request);
			/* dd( session('old_query')); */
			return view('web.forms.find-talent',compact('members','skills'));
		}
   }
	
	public function saveSearch(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'ss_title' => ['required', 'string'],
		]);

		if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		if(session('old_query')){
			$search=new SavedSearch;
			$search->user_id=auth()->user()->id;
			$search->name=$request->ss_title;
			$search->value=json_encode(session('old_query'));
			$search->save();
			return redirect()->back()->with([
				"message" => "Search Saved",
				"alert-type" => "success",
			]);
		}
		else{
			return redirect()->back()->with([
				"message" => "Something went wrong",
				"alert-type" => "error",
			]);
		}
		
	}
}
