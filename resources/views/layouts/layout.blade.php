<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="/css/main.css">

    

       
    </head>
    
    
    
    
    <header>
            <div class="header navbar-fixed-top" style="background-color: rgb(247, 243, 243);;">
<ul>
<li style="color: black; font-weight:600;">Join US</li>
 <li><a href="#"><img src="/img/facebook.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="/img/instagram.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="/img/twitter.png" alt="logo" width="20" height="20" ></a></li>
</ul>
<ul  class="login">
  <!-- Authentication Links -->
  @guest
      <li>
          <a  href="{{ route('login') }}"> <span class="glyphicon glyphicon-user"></span> {{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li>
              <a  href="{{ route('register') }}"> <span class="glyphicon glyphicon-log-in"></span>{{ __('Register') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             <img src="/img/user.png" width="25" height="25" /> 
             
            
            
             {{ Auth::user()->name }}
          </a>
         

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
      @if($item !=0)

      <li>
      <div style=" position: relative;text-align: center;">
        <a  href="{{ action('ordersController@Panier', Auth::user()->id) }}">
           <img src="/img/cart.png" width="20" height="20" /></a>
           <div style=" position: absolute;top: 10%;left: 90%; transform: translate(-0%, -60%);color:white;
            border-radius: 20px; background-color:rgb(211, 5, 5);width:15px;height:15px;font-size:12px">{{$item}}
            </div>
</div>
    </li>
    @else
    <li>
      
        <a  href="{{ action('ordersController@Panier', Auth::user()->id) }}">
           <img src="/img/cart.png" width="20" height="20" /></a>
          
</div>
    </li>
    @endif
  @endguest
</ul>
            </div>
            
            
          
       
     
    </header>
    <br><br>    <br>
    

 
      <div>
     
      <nav class="navbar navbar-custom"  >
        <div class="container-fluid">
          <div class="navbar-header">
            <img src="/img/logo.png" alt="l" width="180" height="80" >
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/welcome" >Home</a></li>

            <li><a href="/womenParfum">Women Parfum</a></li>
            <li >
              <a href="/menParfum">Men Parfum</a> </li>
            <li><a href="/promotion">Promotions</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="{{ action('parfumController@search') }}">
            {{csrf_field()}}
            <div class="d-flex justify-content-center h-100">
              <div class="search"> <input type="text" class="search-input" placeholder="search..." name="search"> 
                <button class="search-icon" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>            
            </div>
          </div>
          </form>
        </div>
      
      </nav>
    </div>
    @section('content')
	<div class="container" >
   <div class="row">
      <div class="col-sm-4" id="search">

         <fieldset class="advanced" > 
   
            <legend>
               Advanced Search
            </legend>
            
            <form >
              
               <div >
               <label for="text" class="col-sm-4" >Price:</label>
               <input class="col-sm-8" type="text" placeholder="put the price you want" required/>
            </div><br><br>
            <div >
               <label class="col-sm-4" >Marque:</label>
               <input class="col-sm-8" type="text" placeholder="put the Marque you want" required/></div><br><br>
               <div > 
               <label class="col-sm-4">Type:</label>

               <select name="type" class="col-sm-8" >
                  <option value="volvo">Eau de parfum</option>
                  <option value="saab">Eau de toilette</option>
                  <option value="saab">Eau de cologne</option>
                  <option value="saab">Eau de toilette</option>
                </select></div> <br><br>
                
                
                <div >
                <label class="col-sm-4">Gender:</label><br><br>
                <label  class="gender col-sm-4 offset-sm-2">Women
                  <input type="radio" checked="checked" name="gender">
                  <span class="checkmark"></span>
                </label>
                <label class="gender col-sm-8">Men
                  <input type="radio" name="gender">
                  <span class="checkmark"></span>
                </label>
            </div> 
            <br>
            <div class="contain">
               <div class="button">
                 <div class="icon">
                   <i class="fa fa-search"></i>
                 </div>
               </div>
             </div>
   
               </form>
         </fieldset>
         <div>
         <br><br><br>

        <fieldset class="advanced">
          <legend>
            TRENDING
          </legend>
          <div>
         <img class="mySlide" src="https://data.whicdn.com/images/335459731/original.jpg?t=1568983669" style="width:100%" height="200px">
         <img class="mySlide" src="https://www.hpcismart.com/images/website/CleanroomNews/DIR_9/F_82501.jpg" style="width:100%" height="200px">
         <img class="mySlide" src="https://esoligorsk.by/images/news/soligorsk/2020/february/business/sens-parfum/parfum.jpg" style="width:100%" height="200px">
         <img class="mySlide" src="https://fimgs.net/himg/o.83061.jpg" style="width:100%" height="200px">
 
        </div> 
        </fieldset>
</div>
      </div>
      
      
		@yield('content')
		</div>

</div>

<script>
   var myIndex = 0;
   carousell();
   
   function carousell() {
     var i;
     var x = document.getElementsByClassName("mySlide");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
     }
     myIndex++;
     if (myIndex > x.length) {myIndex = 1}    
     x[myIndex-1].style.display = "block";  
     setTimeout(carousell, 3000); // Change image every 3 seconds
   }
   </script>
    </body>
    <br>
  
    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

      </div>

		</footer>
</html>
