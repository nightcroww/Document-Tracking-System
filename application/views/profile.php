<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/design.css" />
	<title> Document Tracking System </title>
	<style>
		li a, .dropbtn {
		    display: inline-block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}
		li.dropdown {
		    display: inline-block;
		}
		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		    display: block;
		}
		.card {
		    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		    max-width: 300px;
		    margin: auto;
		    text-align: center;
		}

		.title {
		    color: grey;
		    font-size: 18px;
		}

		button {
		    border: none;
		    outline: 0;
		    display: inline-block;
		    padding: 8px;
		    color: white;
		    background-color: #000;
		    text-align: center;
		    cursor: pointer;
		    width: 100%;
		    font-size: 18px;
		}

		a {
		    text-decoration: none;
		    font-size: 22px;
		    color: black;
		}

		button:hover, a:hover {
		    opacity: 0.7;
		}
		.tabcontent {
		    float: left;
		    padding: 0px 12px;
		    width: 70%;
		    border-left: none;
		}
	</style>
	<script type="text/javascript">
		function openTab(evt, TabName) {
		    // Declare all variables
		    var i, tabcontent, tablinks;

		    // Get all elements with class="tabcontent" and hide them
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }

		    // Get all elements with class="tablinks" and remove the class "active"
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }

		    // Show the current tab, and add an "active" class to the link that opened the tab
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}
	</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="row">
		<div class="container-fluid" id="box-wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" id="header">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<img class="pull-left" src="<?php echo base_url('assets/images/doctrack_logo.png');?>" id="logo"/>
						<a class="navbar-brand" href="#myCarousel"> Document Tracking System </a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn"> Accounts</a>
							    <div class="dropdown-content">
							    	<a href="#">Settings</a>
							      	<a href="#">Log out</a>
							    </div>
							</li>							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    	<a href="#" class="w3-bar-item w3-button w3-padding-large">Settings</a>
    	<a href="#" class="w3-bar-item w3-button w3-padding-large">Log out</a>
  	</div>
  	
  	<div class="row">
  		<div class="container">
	  		<!-- Left Column -->
	  		<div class="col-md-3" style="position:fixed; border:solid black;">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<div class="card">
				  		<img src="<?php echo base_url('assets/images/if_account-circle_326497.png');?>" alt="John" style="width:100%">
				  		<h1>Name</h1>
				  		<p class="title">Position</p>
				  		<p>College</p> 
				  		<a href="#"><i class="fa fa-twitter"></i></a> 
				  		<a href="#"><i class="fa fa-facebook"></i></a> 
				  		<p><button> 
				  			<!-- class="tablinks" onClick="openTab(event,'Guide')" --> 
				  			Guide</button></p>
				  		<p><button>
				  		 <!-- class="tablinks" onClick="openTab(event,'MyDocument')"> -->
				  		 My Documents</button></p>
				  		<p><button> <!-- class="tablinks" onClick="openTab(event,'Offices')"> -->
				  			Offices</button></p>
				  		<p><button>
				  		 <!-- class="tablinks" onClick="openTab(event,'Settings')"> -->
				  		 Settings</button></p>
				  		<p><button> 
				  			<!-- class="tablinks" onClick="openTab(event,'Inbox')"> -->
				  			Inbox</button></p>
					</div>
				</link>
	  		</div>
	  		<!-- Right Column -->
	  		<div class="col-md-9">
	  			<!-- <div id="Guide" class="tabcontent">
					<h3>Guide</h3>
				  	<p>Lorem ipsum..............</p>
				</div>
				<div id="MyDocument" class="tabcontent">
					<h3>My Documents</h3>
				  	<p>Lorem ipsum..............</p>
				</div>
				<div id="Offices" class="tabcontent">
					<h3>Offices</h3>
				  	<p>Lorem ipsum..............</p>
				</div>
				<div id="Settings" class="tabcontent">
					<h3>Settings</h3>
				  	<p>Lorem ipsum..............</p>
				</div>
				<div id="Inbox" class="tabcontent">
					<h3>Inbox</h3>
				  	<p>Lorem ipsum..............</p>
				</div> -->
	  		</div>
  		</div>
  	</div>

	<script>
	$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>