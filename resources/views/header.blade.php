<?php
use App\Http\Controllers\CartController;
$count=0;
if(Auth::id()){
$count=CartController::cartItem();
}

?>





<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Restautant Management Software">
    <meta name="keywords" content="restaurant,food,reservation">
    
    <title>ZNM Restaurant – Symphony of dining</title>
    <link rel="shortcut icon" type="image/ico" href="assets/img/icons/2021-05-05/i.html">

    <!--====== Plugins CSS Files =======-->
    <link href="{{'Frontend/css/bootstrap.min.css'}}" rel="stylesheet">
        <link href="{{'Frontend/css/fontawesome/css/font-awesome.min.css'}}" rel="stylesheet">
    <link href="{{'Frontend/css/themify-icons/themify-icons.css'}}" rel="stylesheet">
    <link href=" {{'Frontend/css/animate.css'}}" rel="stylesheet">
    <link href=" {{'Frontend/css/owl.carousel.min.css'}}" rel="stylesheet">
    <link href=" {{'Frontend/css/metisMenu.min.css'}}" rel="stylesheet">
    <link href=" {{'Frontend/css/bootstrap-datepicker.min.css'}}" rel="stylesheet">
    <link href="{{'Frontend/css/clockpicker.min.css'}}" rel="stylesheet">

    <!--====== Custom CSS Files ======-->
    <link href="{{'Frontend/css/style.css'}}" rel="stylesheet">
        <link href="{{'Frontend/css/responsive.css'}}" rel="stylesheet">
    <link href="{{'Frontend/css/custom/custome.css'}}" rel="stylesheet">
    <link rel="stylesheet" href="{{'Frontend/css/custom/jquery.rateyo.min.css'}}"/>
    <script src="{{'Frontend/js/jquery-3.3.1.min.js'}}"></script>
    <script src="{{'Frontend/js/product.js.php'}}" ></script>
    <script src="{{'Frontend/js/category.js.php'}}" ></script>
 	 <!-- for whatsapp modules -->
     <!-- end whatsapp modules -->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->
</head>

<body>
   
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!--START HEADER TOP-->
    <header class="header_top_area">
        <div class="header_top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                     <a class="navbar-brand" href="#">ZNM</a>

                   
                    <div class="sidebar-toggle-btn">
                     <a class="nav-link" href="menu.html" id="navbarDropdown3" style="display:inline;color: #fff;">
                                    <i class="ti-shopping-cart"></i><span class="badge badge-notify my-cart-badge" style=";color: #fff; background: #28a745; border-radius: 50px; width: 22px;line-height: 22px; padding:0;">0</span>
                                </a>
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="ti-menu"></i>
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        	                            <li class="nav-item  active">
                                <a class="nav-link " href="{{url('/')}}" >Home</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('about.page')}}" >About Us</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('menu.page')}}" >Our Menu</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('reservation.page')}}" >Reservation</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@if (Route::has('login'))
                                   @auth
                                
                                                        <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                     <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
																	 <a class="dropdown-item" href="{{route('myorder.page')}}">Dashboard</a>
                                                                       <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                                                                    </div>
                                
                            </li>
						   @else
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('login') }}" >Log in</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@if (Route::has('register'))
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('register') }}" >Register</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@endif
							@endauth
							@endif
							           
                                                       
                                                     
                                                       
                                                       
                            
                            <li class="nav-item">
							@auth
                                <a class="nav-link" href="cart_show/{{Auth::user()->id}}" id="navbarDropdown3">
								
                                    <i class="ti-shopping-cart"></i><span class="badge badge-light">{{$count}}</span>
                                </a>
								@endauth
								@guest
                                   Cart[0]
								@endguest
                                <!--<div class="dropdown-menu cart_box" aria-labelledby="navbarDropdown3">
                                    <p>Your Cart is Empty</p>
                                </div>-->
                            </li>
							 
                        </ul>
                    </div>
                </nav>
                <!-- /. Navbar -->
                <nav id="sidebar" class="sidebar-nav">
                    <div id="dismiss">
                        <i class="ti-close"></i>
                    </div>
                    <ul class="metismenu list-unstyled" id="mobile-menu">
                    	                        <li>
                            <a href="{{url('/')}}" >Home </a>
                                                     </li>
                                                <li>
                            <a href="{{route('about.page')}}" >About Us </a>
                                                     </li>
                                                <li>
                            <a href="{{route('menu.page')}}" >Our Menu </a>
                                                     </li>
                                                <li>
                            <a href="{{route('reservation.page')}}" >Reservation </a>
                                                     </li>
                                                 @if (Route::has('login'))
                                   @auth
                                
                                                        <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                     <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
																	 <a class="dropdown-item" href="mylogin.html">Dashboard</a>
                                                                       <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                                                                    </div>
                                
                            </li>
						   @else
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('login') }}" >Log in</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@if (Route::has('register'))
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('register') }}" >Register</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@endif
							@endauth
							@endif
                                                
                                                <li>
                            <a href="menu.html" aria-expanded="false">Cart </a>
                                                     </li>
                                               
                    </ul>
                </nav>
                <div class="overlay"></div>
            </div>
        </div>
         <!--START SLIDER PART-->