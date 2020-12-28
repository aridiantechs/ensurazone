
    <!--====== Javascripts & Jquery ======-->
    <script src="{{ url('/') }}/theme/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url('/') }}/theme/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/theme/js/jquery.slicknav.min.js"></script>
    <script src="{{ url('/') }}/theme/js/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/theme/js/circle-progress.min.js"></script>
    <script src="{{ url('/') }}/theme/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('/') }}/theme/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type') }}"
            
        switch(type){
            case 'info':
            
              
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
                toastr.info("{{Session::get('message')}}");
                
                break;
    
    
            case 'success':
            
               
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
                toastr.success("{{Session::get('message')}}");
                
                break;
            case 'warning':
            
            
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
                toastr.warning("{{Session::get('message')}}");
                
                break;
            case 'error':
            
            
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
                toastr.error("{{Session::get('message')}}");
            
                break;
        }
    @endif
</script>