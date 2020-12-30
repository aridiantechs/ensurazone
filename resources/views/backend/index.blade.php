@extends('backend.layouts.app')
@section('meta')
<title>{{ app_name() }} | Dashboard</title>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<style type="text/css">
#map {
  width: 100%;
  height: 500px;
}
#map .leaflet-control-container {
  display: none;
}
</style>
@endsection


@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Dashboard 6-->
		<!--begin:: Widgets/Stats-->
		<div class="kt-portlet">
			<div class="kt-portlet__body  kt-portlet__body--fit">
				<div class="row row-no-padding row-col-separator-xl">
					<div class="col-md-12 col-lg-3">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										Total Profit
									</h4>
									<span class="kt-widget24__desc">
									All Customs Value
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-brand">
								$18M 
								</span>	 
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="kt-widget24__action">
								<span class="kt-widget24__change">
								Change
								</span>
								<span class="kt-widget24__number">
								78%
								</span>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
					<div class="col-md-12 col-lg-3">
						<!--begin::New Feedbacks-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										New Inquiry
									</h4>
									<span class="kt-widget24__desc">
									Customer Inquiries
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-warning">
								1349
								</span>	 
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="kt-widget24__action">
								<span class="kt-widget24__change">
								Change
								</span>
								<span class="kt-widget24__number">
								84%
								</span>
							</div>
						</div>
						<!--end::New Feedbacks--> 
					</div>
					<div class="col-md-12 col-lg-3">
						<!--begin::New Orders-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										New Orders
									</h4>
									<span class="kt-widget24__desc">
									Fresh Order Amount
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-danger">
								567
								</span>	 
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="kt-widget24__action">
								<span class="kt-widget24__change">
								Change
								</span>
								<span class="kt-widget24__number">
								69%
								</span>
							</div>
						</div>
						<!--end::New Orders--> 
					</div>
					<div class="col-md-12 col-lg-3">
						<!--begin::New Users-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										New Users
									</h4>
									<span class="kt-widget24__desc">
									Joined New User
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-success">
								276 
								</span>	 
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="kt-widget24__action">
								<span class="kt-widget24__change">
								Change
								</span>
								<span class="kt-widget24__number">
								90%
								</span>
							</div>
						</div>
						<!--end::New Users--> 
					</div>
				</div>
			</div>
		</div>
		<!--end:: Widgets/Stats-->   


		<!--begin:: Widgets/Stats-->
		<div class="kt-portlet">
			<div class="kt-portlet__body  kt-portlet__body--fit">
				<div class="row row-no-padding row-col-separator-xl">
					<div class="col-md-12">
						<div class="kt-widget24" style="min-height: 500px;">
							<div class="kt-widget24__details">
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end:: Widgets/Stats-->   
		<!--Begin::Row-->
		<div class="row">
			<div class="col-md-6">
				<!--begin:: Widgets/Sale Reports-->
				<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Sales Reports
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
									Last Month
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
									All Time
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="kt-portlet__body">
						<!--Begin::Tab Content-->
						<div class="tab-content">
							<!--begin::tab 1 content-->
							<div class="tab-pane active" id="kt_widget11_tab1_content">
								<!--begin::Widget 11--> 
								<div class="kt-widget11">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<td style="width:1%">#</td>
													<td style="width:40%">Application</td>
													<td style="width:14%">Sales</td>
													<td style="width:15%">Change</td>
													<td style="width:15%">Status</td>
													<td style="width:15%" class="kt-align-right">Total</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single">
														<input type="checkbox"><span></span>
														</label>
													</td>
													<td>
														<a href="#" class="kt-widget11__title">Loop</a>
														<span class="kt-widget11__sub">CRM System</span>
													</td>
													<td>19,200</td>
													<td>$63</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
													<td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<a href="#" class="kt-widget11__title">Selto</a>
														<span class="kt-widget11__sub">Powerful Website Builder</span>
													</td>
													<td>24,310</td>
													<td>$39</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
													<td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<a href="#" class="kt-widget11__title">Jippo</a>
														<span class="kt-widget11__sub">The Best Selling App</span>
													</td>
													<td>9,076</td>
													<td>$105</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
													<td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<a href="#" class="kt-widget11__title">Verto</a>
														<span class="kt-widget11__sub">Web Development Tool</span>
													</td>
													<td>11,094</td>
													<td>$16</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
													<td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="kt-widget11__action kt-align-right">
										<button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
									</div>
								</div>
								<!--end::Widget 11--> 						             
							</div>
							<!--end::tab 1 content-->
							<!--begin::tab 2 content-->
							<div class="tab-pane" id="kt_widget11_tab2_content">
								<!--begin::Widget 11--> 
								<div class="kt-widget11">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<td style="width:1%">#</td>
													<td style="width:40%">Application</td>
													<td style="width:14%">Sales</td>
													<td style="width:15%">Change</td>
													<td style="width:15%">Status</td>
													<td style="width:15%" class="kt-align-right">Total</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single">
														<input type="checkbox"><span></span>
														</label>
													</td>
													<td>
														<span class="kt-widget11__title">Loop</span>
														<span class="kt-widget11__sub">CRM System</span>
													</td>
													<td>19,200</td>
													<td>$63</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
													<td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<span class="kt-widget11__title">Selto</span>
														<span class="kt-widget11__sub">Powerful Website Builder</span>
													</td>
													<td>24,310</td>
													<td>$39</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
													<td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<span class="kt-widget11__title">Jippo</span>
														<span class="kt-widget11__sub">The Best Selling App</span>
													</td>
													<td>9,076</td>
													<td>$105</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
													<td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
												</tr>
												<tr>
													<td>
														<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
													</td>
													<td>
														<span class="kt-widget11__title">Verto</span>
														<span class="kt-widget11__sub">Web Development Tool</span>
													</td>
													<td>11,094</td>
													<td>$16</td>
													<td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
													<td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="kt-widget11__action kt-align-right">
										<button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
									</div>
								</div>
								<!--end::Widget 11-->       
							</div>
							<!--end::tab 2 content-->
							<!--begin::tab 3 content-->
							<div class="tab-pane" id="kt_widget11_tab3_content">
							</div>
							<!--end::tab 3 content-->
						</div>
						<!--End::Tab Content-->
					</div>
				</div>
				<!--end:: Widgets/Sale Reports-->
			</div>
			<div class="col-md-6">
				<!--begin:: Widgets/Order Statistics-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Order Statistics
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
							Export
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<!--begin::Nav-->
								<ul class="kt-nav">
									<li class="kt-nav__head">
										Export Options                                    
										<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
													<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
													<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
												</g>
											</svg>
										</span>
									</li>
									<li class="kt-nav__separator"></li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-drop"></i>
										<span class="kt-nav__link-text">Activity</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
										<span class="kt-nav__link-text">FAQ</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
										<span class="kt-nav__link-text">Settings</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-new-email"></i>
										<span class="kt-nav__link-text">Support</span>
										<span class="kt-nav__link-badge">
										<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
										</span>
										</a>
									</li>
									<li class="kt-nav__separator"></li>
									<li class="kt-nav__foot">
										<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
										<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
									</li>
								</ul>
								<!--end::Nav-->			
							</div>
						</div>
					</div>
					<div class="kt-portlet__body kt-portlet__body--fluid">
						<div class="kt-widget12">
							<div class="kt-widget12__content">
								<div class="kt-widget12__item">
									<div class="kt-widget12__info">
										<span class="kt-widget12__desc">Annual Taxes EMS</span> 
										<span class="kt-widget12__value">$400,000</span>
									</div>
									<div class="kt-widget12__info">
										<span class="kt-widget12__desc">Finance Review Date</span>
										<span class="kt-widget12__value">July 24,2019</span> 
									</div>
								</div>
								<div class="kt-widget12__item">
									<div class="kt-widget12__info">
										<span class="kt-widget12__desc">Avarage Revenue</span> 
										<span class="kt-widget12__value">$60M</span>
									</div>
									<div class="kt-widget12__info">
										<span class="kt-widget12__desc">Revenue Margin</span> 
										<div class="kt-widget12__progress">
											<div class="progress kt-progress--sm">
												<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<span class="kt-widget12__stat">
											40%
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-widget12__chart" style="height:250px;">
								<canvas id="kt_chart_order_statistics"></canvas>
							</div>
						</div>
					</div>
				</div>
				<!--end:: Widgets/Order Statistics-->    
			</div>
		</div>
		<!--End::Row-->
		
	</div>
	<!--End::Row-->
	<!--End::Dashboard 6-->	
</div>
<!-- end:: Content -->				</div>			
<!-- end:: Footer -->			</div>
</div>
</div>
<!-- end:: Page -->
<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
	<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
	<div class="kt-quick-panel__nav">
		<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
			<li class="nav-item active">
				<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
			</li>
		</ul>
	</div>
	<div class="kt-quick-panel__content">
		<div class="tab-content">
			<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
				<div class="kt-notification">
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-line-chart kt-font-success"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New order has been received
							</div>
							<div class="kt-notification__item-time">
								2 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-box-1 kt-font-brand"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New customer is registered
							</div>
							<div class="kt-notification__item-time">
								3 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-chart2 kt-font-danger"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								Application has been approved
							</div>
							<div class="kt-notification__item-time">
								3 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-image-file kt-font-warning"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New file has been uploaded
							</div>
							<div class="kt-notification__item-time">
								5 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-drop kt-font-info"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New user feedback received
							</div>
							<div class="kt-notification__item-time">
								8 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-pie-chart-2 kt-font-success"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								System reboot has been successfully completed
							</div>
							<div class="kt-notification__item-time">
								12 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-favourite kt-font-danger"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New order has been placed
							</div>
							<div class="kt-notification__item-time">
								15 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item kt-notification__item--read">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-safe kt-font-primary"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								Company meeting canceled
							</div>
							<div class="kt-notification__item-time">
								19 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-psd kt-font-success"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New report has been received
							</div>
							<div class="kt-notification__item-time">
								23 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon-download-1 kt-font-danger"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								Finance report has been generated
							</div>
							<div class="kt-notification__item-time">
								25 hrs ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon-security kt-font-warning"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New customer comment recieved
							</div>
							<div class="kt-notification__item-time">
								2 days ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-pie-chart kt-font-warning"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title">
								New customer is registered
							</div>
							<div class="kt-notification__item-time">
								3 days ago
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
				<div class="kt-notification-v2">
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon-bell kt-font-brand"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								5 new user generated report
							</div>
							<div class="kt-notification-v2__item-desc">
								Reports based on sales
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon2-box kt-font-danger"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								2 new items submited
							</div>
							<div class="kt-notification-v2__item-desc">
								by Grog John
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon-psd kt-font-brand"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								79 PSD files generated
							</div>
							<div class="kt-notification-v2__item-desc">
								Reports based on sales
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon2-supermarket kt-font-warning"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								$2900 worth producucts sold
							</div>
							<div class="kt-notification-v2__item-desc">
								Total 234 items
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon-paper-plane-1 kt-font-success"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								4.5h-avarage response time
							</div>
							<div class="kt-notification-v2__item-desc">
								Fostest is Barry
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon2-information kt-font-danger"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								Database server is down
							</div>
							<div class="kt-notification-v2__item-desc">
								10 mins ago
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon2-mail-1 kt-font-brand"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								System report has been generated
							</div>
							<div class="kt-notification-v2__item-desc">
								Fostest is Barry
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification-v2__item">
						<div class="kt-notification-v2__item-icon">
							<i class="flaticon2-hangouts-logo kt-font-warning"></i>
						</div>
						<div class="kt-notification-v2__itek-wrapper">
							<div class="kt-notification-v2__item-title">
								4.5h-avarage response time
							</div>
							<div class="kt-notification-v2__item-desc">
								Fostest is Barry
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
				<form class="kt-form">
					<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Enable Notifications:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--success kt-switch--sm">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Enable Case Tracking:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--success kt-switch--sm">
							<label>
							<input type="checkbox"  name="quick_panel_notifications_2">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-last form-group-xs row">
						<label class="col-8 col-form-label">Support Portal:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--success kt-switch--sm">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
					<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Generate Reports:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--danger">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Enable Report Export:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--danger">
							<label>
							<input type="checkbox"  name="quick_panel_notifications_3">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-last form-group-xs row">
						<label class="col-8 col-form-label">Allow Data Collection:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--danger">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
					<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Enable Member singup:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--brand">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-xs row">
						<label class="col-8 col-form-label">Allow User Feedbacks:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--brand">
							<label>
							<input type="checkbox"  name="quick_panel_notifications_5">
							<span></span>
							</label>
							</span>
						</div>
					</div>
					<div class="form-group form-group-last form-group-xs row">
						<label class="col-8 col-form-label">Enable Customer Portal:</label>
						<div class="col-4 kt-align-right">
							<span class="kt-switch kt-switch--sm kt-switch--brand">
							<label>
							<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
							<span></span>
							</label>
							</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- end::Quick Panel -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
	<i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="kt-chat">
				<div class="kt-portlet kt-portlet--last">
					<div class="kt-portlet__head">
						<div class="kt-chat__head ">
							<div class="kt-chat__left">
								<div class="kt-chat__label">
									<a href="#" class="kt-chat__title">Jason Muller</a>
									<span class="kt-chat__status">
									<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
									</span>
								</div>
							</div>
							<div class="kt-chat__right">
								<div class="dropdown dropdown-inline">
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flaticon-more-1"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
										<!--begin::Nav-->
										<ul class="kt-nav">
											<li class="kt-nav__head">
												Messaging
												<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
											</li>
											<li class="kt-nav__separator"></li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-group"></i>
												<span class="kt-nav__link-text">New Group</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
												<span class="kt-nav__link-text">Contacts</span>
												<span class="kt-nav__link-badge">
												<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
												</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-bell-2"></i>
												<span class="kt-nav__link-text">Calls</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-dashboard"></i>
												<span class="kt-nav__link-text">Settings</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-protected"></i>
												<span class="kt-nav__link-text">Help</span>
												</a>
											</li>
											<li class="kt-nav__separator"></li>
											<li class="kt-nav__foot">
												<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
												<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
											</li>
										</ul>
										<!--end::Nav-->
									</div>
								</div>
								<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
								<i class="flaticon2-cross"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="kt-portlet__body">
						<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
							<div class="kt-chat__messages kt-chat__messages--solid">
								<div class="kt-chat__message kt-chat__message--success">
									<div class="kt-chat__user">
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/100_12.jpg') }}" alt="image">   
										</span>
										<a href="#" class="kt-chat__username">Jason Muller</span></a>
										<span class="kt-chat__datetime">2 Hours</span>
									</div>
									<div class="kt-chat__text">
										How likely are you to recommend our company<br> to your friends and family?
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
									<div class="kt-chat__user">                                
										<span class="kt-chat__datetime">30 Seconds</span>
										<a href="#" class="kt-chat__username">You</span></a>                                
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/300_21.jpg') }}" alt="image">   
										</span>
									</div>
									<div class="kt-chat__text">
										Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--success">
									<div class="kt-chat__user">
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/100_12.jpg') }}" alt="image">   
										</span>
										<a href="#" class="kt-chat__username">Jason Muller</span></a>                               
										<span class="kt-chat__datetime">30 Seconds</span>
									</div>
									<div class="kt-chat__text">
										Ok, Understood!
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
									<div class="kt-chat__user">                                
										<span class="kt-chat__datetime">Just Now</span>
										<a href="#" class="kt-chat__username">You</span></a>                                
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/300_21.jpg') }}" alt="image">   
										</span>
									</div>
									<div class="kt-chat__text">
										You’ll receive notifications for all issues, pull requests!
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--success">
									<div class="kt-chat__user">
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/100_12.jpg') }}" alt="image">   
										</span>
										<a href="#" class="kt-chat__username">Jason Muller</span></a>
										<span class="kt-chat__datetime">2 Hours</span>
									</div>
									<div class="kt-chat__text">
										You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
									<div class="kt-chat__user">                                
										<span class="kt-chat__datetime">30 Seconds</span>
										<a href="#" class="kt-chat__username">You</span></a>                                
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/300_21.jpg') }}" alt="image">   
										</span>
									</div>
									<div class="kt-chat__text">
										You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--success">
									<div class="kt-chat__user">
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/100_12.jpg') }}" alt="image">   
										</span>
										<a href="#" class="kt-chat__username">Jason Muller</span></a>                               
										<span class="kt-chat__datetime">30 Seconds</span>
									</div>
									<div class="kt-chat__text">
										Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
									<div class="kt-chat__user">                                
										<span class="kt-chat__datetime">Just Now</span>
										<a href="#" class="kt-chat__username">You</span></a>                                
										<span class="kt-media kt-media--circle kt-media--sm"> 
										<img src="{{ asset('backend/assets/media/users/300_21.jpg') }}" alt="image">   
										</span>
									</div>
									<div class="kt-chat__text">
										Most purchased Business courses during this sale!
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-chat__input">
							<div class="kt-chat__editor">
								<textarea placeholder="Type here..." style="height: 50px"></textarea>
							</div>
							<div class="kt-chat__toolbar">
								<div class="kt_chat__tools">
									<a href="#"><i class="flaticon2-link"></i></a>
									<a href="#"><i class="flaticon2-photograph"></i></a>
									<a href="#"><i class="flaticon2-photo-camera"></i></a>
								</div>
								<div class="kt_chat__actions">
									<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--ENd:: Chat-->
@endsection



@section('scripts')
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

<script src="{{ asset('backend/assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('backend/assets/js/demo6/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/js/demo6/pages/dashboard.js') }}"></script>



<script type="text/javascript">

	 const tilesUrl = 'https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png';
	 const map = L.map('map').setView([33.597, 73.0759], 5);

	 L.tileLayer(tilesUrl, {
	 	maxZoom: 20,
	 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',	 	
	 }).addTo(map);

	 const cities = [
	   { name: 'Rome', coords: [41.89, 12.51] },
	   { name: 'Chicago', coords: [41.74, -87.55] },
	   { name: 'San Francisco', coords: [37.77, -122.42] },
	   { name: 'Athens', coords: [37.98, 23.73] },
	   { name: 'Toronto', coords: [43.67, -79.42] },
	   { name: 'Toulouse', coords: [43.60, 1.44] },
	 ];
	 const markers = cities.map(c => 
	   L.marker(c.coords)
	     .addTo(map)
	     .bindPopup(`${c.name}: [${c.coords.join(', ')}]`));


	// var map = L.map('map', {
	//     center: [51.505, -0.09],
	//     zoom: 13
	// });
</script>
@endsection