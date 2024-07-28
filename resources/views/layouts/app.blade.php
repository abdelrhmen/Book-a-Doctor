<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('doctor/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('doctor/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('doctor/css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('doctor/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('doctor/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('doctor/css/tooplate-style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>{{$contact->phone}}</span>
                         <a href="{{$contact->facebook}}"> <span class="email-icon"><i class="fa fa-facebook-square"></i></span></a>
                         <a href="{{$contact->linkedIn}}"><span class="email-icon"><i class="fa fa-linkedin"></i></span></a>

                        </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{route('home')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{route('about')}}" class="smoothScroll">About Us</a></li>
                         <li><a href="{{route('doctors_all')}}" class="smoothScroll">Doctors</a></li>
                         <li><a href="{{route('news')}}" class="smoothScroll">News</a></li>
                         <li><a href="{{route('contact')}}" class="smoothScroll">Contact</a></li>
                         <li><a href="{{route('message_get')}}" class="#appointment">Send Message</a></li>
                         @if(!auth()->user())
                         <li class="appointment-btn"><a href="{{route('login_user')}}">login</a></li>
                         @else
                         <li class="appointment-btn"><a href="/logout">logout</a></li>
                         @endif
                    </ul>
               </div>
          </div>
     </section>

<!------------------------------------------------------------------------------------------------------------------>

@yield('content')
<!------------------------------------------------------------------------------------------------------------------>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">

                  <div class="col-md-4 col-sm-4">
                       <div class="footer-thumb">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                            <p>{{$contact->description}}</p>

                            <div class="contact-info">
                                 <p><i class="fa fa-phone"></i>{{$contact->phone}}</p>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="footer-thumb">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                            @foreach ($news as $new)
                            <div class="latest-stories">
                                 <div class="stories-info">
                                      <a href="#"><h5>{{$new->title}}</h5></a>
                                      <span>{{$new->created_at->format('Y-m-d')}}</span>
                                 </div>
                            </div>
                            @endforeach
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="footer-thumb">
                            <div class="opening-hours">
                                 <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                 <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                 <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                 <p>Sunday <span>Closed</span></p>
                            </div>

                            <ul class="social-icon">
                                 <li><a href="{{$contact->facebook}}" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                 <li><a href="{{$contact->linkedIn}}" class="fa fa-linkedin"></a></li>
                            </ul>
                       </div>
                  </div>

                  <div class="col-md-12 col-sm-12 border-top">
                       <div class="col-md-6 col-sm-12">
                            <div class="copyright-text">
                                 <p>Copyright &copy; 2023 Your Company

                                 | Design: Abdelrahman EL-Desoky</p>
                            </div>
                       </div>
                       <div class="col-md-4 col-sm-3">
                            <div class="footer-link">
                                 <a href="https://abdelrahman-eldesoky.online/">Careers</a>
                            </div>
                       </div>

                  </div>

             </div>
        </div>
   </footer>

   <!-- SCRIPTS -->
   <script src="{{ asset('doctor/js/jquery.js') }}"></script>
   <script src="{{ asset('doctor/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('doctor/js/jquery.sticky.js') }}"></script>
   <script src="{{ asset('doctor/js/jquery.stellar.min.js') }}"></script>
   <script src="{{ asset('doctor/js/wow.min.js') }}"></script>
   <script src="{{ asset('doctor/js/smoothscroll.js') }}"></script>
   <script src="{{ asset('doctor/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('doctor/js/custom.js') }}"></script>
<script src="{{asset('doctor/js/my_js.js')}}"></script>
</body>
</html>
