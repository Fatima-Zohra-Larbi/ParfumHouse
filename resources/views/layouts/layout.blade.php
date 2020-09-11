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

  
        <style>
            

.header {

   
    text-align: right;
height:6%;
    width: 100%;
    background-color:#1a1414;
    color: #fff;
}
            html, body {
                background-color:  rgb(247, 243, 243);
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            ul {
 padding:0;
 margin:0;
 list-style-type:none;
 }
li {
 margin-right:5px;
 float:left;
 padding:10px; 
 }
.login li
{
 margin-right:5px;
 float:right;
 padding:10px; 
 }
 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);
 .footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

/* ADVANCED SEARCH */

.advanced{
    border: 1px solid #1F497D;
    border-radius: 4px;
    padding: 10px 30px;
}
fieldset legend
{
   background: #467dc0;
   font-size: 15px;
   color: black;
    padding: 5px 10px ;
    border-radius: 5px;
    box-shadow: 0 0 0 2px #ddd;
 text-align-last: center;
}
 label{
color: black;
}
.advanced input{
   height: 30px;
   border: 0;
   background-color: rgb(235, 230, 230) ;
}
.advanced select{
   height: 30px;
   background-color: rgb(235, 230, 230) ;
   border: 0;


}
input[type=text]:focus{
  outline: 1px solid #467dc0;     /* oranges! yey */
}
select:focus{
outline: 1px solid #467dc0;     /* oranges! yey */
}
/* GENDER RADIO DESIGN */
.gender {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.gender input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: rgb(228, 224, 224) ;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.gender :hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.gender input:checked ~ .checkmark {
  background-color: #467dc0;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.gender input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.gender .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

/* CSS OF ADVANCED SEARCH S BUTTON */
.contain{
  width:250px;
  height:20px;
  margin: 10% auto;
  color:#467dc0;
  font-size:1rem;
  font-family:Arial,Helvetica Neue,Helvetica,sans-serif;
  
  }

.button{
  background-color: white;
  font-size:1.5rem;
  border:2px solid #467dc0;
  border-radius:100px;
  width:40px;
  height:40px;
  padding:5px;
  margin: 10% auto;
  transition: .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 
}

.icon{
 position: relative;
  top: 50%;
  transform: translateY(-50%);
 text-align:center;
  
}


.button:hover{
  width:125px;
  background-color:#467dc0;
   box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
  transition:.3s;
  color: white;
}

.button:active{
  box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
  transition: .05s
}
/* NAV BAR search */
.search {
    
    height: 40px;
    background-color: rgb(235, 230, 230) ;
    padding: 2px;
    border-radius: 5px;
}

.search-input {
    color: white;
    border-radius: 8px;
    border: 0;
    outline: 0;
    background:  rgb(235, 230, 230) ;
    width: 300px;
    margin-top: 2px;
    caret-color: transparent;
    line-height: 30px;
    transition: width 0.4s linear
}


.search .search-input {
  background:  rgb(235, 230, 230) ;

  border: 0;
    padding: 0 10px;
    width: 250px;
    caret-color: transparent;
    font-size: 16px;
    font-weight: 100;
    color: grey;
    transition: width 0.4s linear
}

.search:hover>.search-icon {
    background: #1A237E;
    color: #fff
}

.search-icon {

    height: 35px;
    border: 0;
    width: 35px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #467dc0;
}

a:link {
    text-decoration: none
}
nav{
  box-shadow: 0px 0px 10px #cac9e7;

}

li a{
  color: black;
  font-weight: bold;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

/* CSS OF PROMOTION PHOTO  */
.parent{
    position: relative;

}
.image2 {
    position: absolute;
    left: 0%;
    height: 70px;
}
.mySlide {
   display: none;
   border-radius: 5px;

  }

        </style>
    </head>
    <header>
         <div >
            <div class="header navbar-fixed-top" style="background-color: #467dc0;">
<ul>
<li style="color: black; font-weight:600;">Join US</li>
 <li><a href="#"><img src="http://www.jemome.com/cdn/2013/07/white-transparent-facebook-icon_370265.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="https://tighestimepieces.com/wp-content/uploads/2016/11/Instagram-icon-WHITE.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="https://iconsplace.com/wp-content/uploads/_icons/ffffff/256/png/twitter-icon-18-256.png" alt="logo" width="20" height="20" ></a></li>
</ul>
<ul class ="login">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>

            </div>
            
            
          
        </div>
       
     
    </header>
    <br><br>    <br>
    


    
    <body>
      <div>
      <nav class="navbar navbar-custom"  >
        <div class="container-fluid">
          <div class="navbar-header">
            <img src="img/logo.png" alt="logo" width="120" height="50" >
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
