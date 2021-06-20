
    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="{{route('index')}}"><img src="{{asset('public/frontend')}}/assets/images/bay-view1.png" alt=""></a>
                            <p class="mt-3">Which morning fourth great won't is to fly bearing man. Called unto shall seed, deep, herb set seed land divide after over first creeping. First creature set upon stars deep male gathered said she'd an image spirit our</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>GEC, Chottogram</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>+8801833980380</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>abid@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget3">
                            <h5 class="mb-4">opening hours</h5>
                            <p>Monday ...................... Closed</p>
                            <p>Tue-Fri .............. 10 am - 12 pm</p>
                            <p>Sat-Sun ............... 8 am - 11 pm</p>
                            <p>Holidays ............. 10 am - 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Developed by team 12   <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{asset('public/frontend')}}/assets/js/vendor/jquery-2.2.4.min.js"></script>
	  <script src="{{asset('public/frontend')}}/assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/vendor/wow.min.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/vendor/owl-carousel.min.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/main.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/bootstrap-datetimepicker.js"></script>
    <script src="{{asset('public/frontend')}}/assets/js/bootstrap-datetimepicker.min.js"></script>


    <script type="text/javascript">
        
        $(function(){

            $('#datetimepicker1').datetimepicker({
                format: "dd MM yyyy - HH:mm p",
                autoclose:true,
                showMeridian: true,
                todayBtn:true,
                timepicker:true,
                datepicker:false

            });

        })
    </script>

<!-- Toaster nnotification -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


 <script>
     @if(Session::has('message'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
           case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
           case 'success':
               toastr.success("{{ Session::get('message') }}");
               break;
           case 'warning':
              toastr.warning("{{ Session::get('message') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('message') }}");
               break;
       }
     @endif
  </script>
</body>
</html>
