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
    position: fixed;
    top: 0;
    text-align: right;
height:6%;
    width: 100%;
    background-color:#1a1414;
    color: #fff;
}
            html, body {
                background-color: #fff;
                color: #636b6f;
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
   border-radius: 5px;
   border: 1px solid;
   height: 30px;
}
.advanced select{
   height: 30px;
}
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


         
        </style>
    </head>
    <header>
        <div>
            <div class="header">
<ul>
<li>Join US</li>
 <li><a href="#"><img src="img/facebook.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="img/instagram.png" alt="logo" width="20" height="20" ></a></li>
 <li><a href="#"><img src="img/twitter.png" alt="logo" width="20" height="20" ></a></li>
</ul>
<ul class ="login">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>

            </div>
            <br><br>
            
            <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="img/logo.png" alt="logo" width="150" height="50" >
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="/welcome">Home</a></li>

        <li><a href="/womenParfum">Women Parfum</a></li>
        <li >
          <a href="/menParfum">Men Parfum</a> </li>
        <li><a href="#">Promotions</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <form class="navbar-form navbar-right" action="" >
      <div class="input-group" >
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
  </div>
</nav>
  
        </div>
    </header>
    <body>
	<div class="container">
   <div class="row">
      <div class="col-sm-4" id="search">

         <fieldset class="advanced" > 
   
            <legend>
               Advanced Search
            </legend>
            
            <form >
               <div >
               <label for="text" >Price:</label><br>
               <input  type="text" placeholder="put the price you want" required/>
            </div><br>
            <div >
               <label >Marque:</label><br>
               <input  type="text" placeholder="put the Marque you want" required/></div><br>
               <div >
               <label >Type:</label><br>
               <selxect name="type" >
                  <option value="volvo">Eau de parfum</option>
                  <option value="saab">Eau de toilette</option>
                  <option value="saab">Eau de cologne</option>
                  <option value="saab">Eau de toilette</option>
                </select></div><br>
                <div >
                <label>Gender:</label><br>
               <input  type="radio" name="gender" value="male">Men &nbsp;&nbsp;&nbsp;&nbsp;
               <input  type="radio" name="gender" value="female">Women
            </div> 
            <div class="contain">
               <div class="button">
                 <div class="icon">
                   <i class="fa fa-search"></i>
                 </div>
               </div>
             </div>
   
               </form>
         </fieldset>
      </div>
      
		@yield('content')
		</div>

</div>
    </body>
  
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
