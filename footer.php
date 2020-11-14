<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package March_For_Our_Lives_NC
 */

?>
<!doctype html>
<head>
	<style>
		#footer-body1 a {
			color: #fff;
			text-align: center !important;
			font-weight: bold;
			text-decoration: none;
			align-content: center;
		}
		div#footer-body1 {
			padding-top: 50px;
			padding-bottom: 20px;
			padding-left: 200px;
			padding-right: 40px;
			text-align: center;
			height: 400px;
		}
		#footer-body1 p {
			color: #fff;
			font-weight: bold;
			font-size: 1em;
			margin-left: 0px;
			padding-bottom: 5px;
			text-align: center;
		}
		div#footer-body2 {
			padding-top: 20px;
			padding-bottom: 20px;
			padding-left: 200px;
			padding-right: 200px;
			text-align: center;
		}
		#footer-body2 p {
			border-width: 2px;
			border-color: #fff;
			color: #fff;
			font-weight: bold;
			border-style: solid;
			font-size: 1em !important;
		}
		div#footer-body4 {
			padding-top: 50px;
			padding-bottom: 20px;
			padding-right: 200px;
			height: 400px;
		}
		#footer-body4 p {
			color: #fff;
			font-weight: bold;
			font-size: 1em !important;
			margin-left: 0px;
			padding-bottom: 5px;
			text-align: center;
		}
		div#footer-body3 {
			padding-top: 50px;
			padding-bottom: 20px;
			height: 400px;
		}
		div#footer-body3 {
			align-content: center;
			text-align: center;
		}
		#footer-body3 a {
			text-decoration: none;
			padding: 8px;
		}
		#footer-body3 a:hover:before {
			text-decoration: none;
			visibility: hidden;
			opacity: .7;
		}
		#footer-body3 img:hover  {
			transform: scale(1.2);
			opacity: .5;
			transition: .3s;
		}
		#footer-body3 p {
			color: #fff;
			font-weight: bold;
			font-size: 1em !important;
			margin-left: 0px;
			padding-bottom: 5px;
			text-align: center;
		}
		div#footer-title {
			margin-top: 15px;
		}
		a.left
		{
   		position: relative;
		}

		a.left:before {
  		content: "";
  		position: absolute;
 		width: 0;
  		height: 2px;
  		bottom: 0;
  		left: 0;
  		background-color: #FFF;
  		visibility: hidden;
  		transition: all 0.3s ease-in-out;
		}
		
		a.left:hover:before {
  		visibility: visible;
  		width: 100%;
		}
		button.foot-action-button {
			background-color: #fff;
			color: #164686;
			width: 150px;
			border-color: #fff;
		}
		button.foot-chapter-button {
			background-color: #fff;
			color: #164686;
			width: 150px;
			border-color: #fff;
			margin-top: 15px;
			margin-bottom: 15px;
		}
		button#foot-action-button:hover, button#foot-chapter-button:hover {
			background-color: #fff;
		}
		.row:after {
  			content: "";
  			display: table;
  			clear: both;
		}
		.column {
		display: block;
  		float: left;
  		width: 33.33%;
		}	
		#myBtn {
			color: #fff;
			background-color: #164686;
			box-shadow: 0px 0px;
			border-width: 0px;
			font-size: 1.5em;
			display: block;
			margin: auto;
			padding-top: 40px;
		}
		#myBtn:hover {
			opacity: .5;
			transition;
		}
		.up {
	  		transform: rotate(-135deg);
  			-webkit-transform: rotate(-135deg);
		}
		.arrow {
  		border: solid white;
  		border-width: 0 3px 3px 0;
  		display: inline-block;
  		padding: 5px;
		margin-left: 7px;
		margin-top: -15px;
		}
		@media screen and (max-width: 600px) {
  			.column {
    		width: 100%;
  			}
		}
		
	</style>	
</head>
<footer style="height:auto;">
	<div id="footer-title" style="background:url(https://actionnetwork.org/user_files/user_files/000/050/533/original/IMG_1649.jpg)">
		<h1 style="color:#fff; text-align:center!important;">END GUN VIOLENCE.</h1>
	</div>
	<div class="row">
    <div class="column" id="footer-body1" style="background-color:#164686;">
		<p>Fight with us</p>
		<br>
		<button class="foot-action-button" onclick="location.href='/take-action'">GET INVOLVED</button>
		<br>
		<button class="foot-chapter-button" onclick="location.href='/chapters'">OUR CHAPTERS</button>
		<br>
		<a href="/organizers" class="left">ORGANIZING PORTAL</a>
		<br>
		<a href="https://marchforourlives.com/privacy-policy" class="left">PRIVACY POLICY</a>
		<br>
		<a href="/contact" class="left">CONTACT</a>
		<br>
		<a href="https://secure.actblue.com/donate/websitemfolnc" class="left">DONATE</a>
		</div>
    <div class="column" id="footer-body3" style="background-color:#164686;">
		<p>Connect with us</p>
		<br>
	      <a href="https://instagram.com/mfolnc/">
			  <img alt="Instagram" src="https://actionnetwork.org/user_files/user_files/000/050/593/original/instagram_(4).png"/ style="width:8%;"></a>
			  <a href="https://facebook.com/mfolnc">
			 <img alt="Facebook" src="https://actionnetwork.org/user_files/user_files/000/050/594/original/facebook-circular-logo.png" style="width:8%;"></a>
		 <a href="https://twitter.com/mfolnc">
			 <img alt="Twitter" src="https://actionnetwork.org/user_files/user_files/000/050/595/original/twitter_(3).png" style="width:8%;"></a>
		 <a href="mailto:northcarolina@marchforourlives.com">
			 <img alt="Email" src="https://actionnetwork.org/user_files/user_files/000/050/596/original/megaphone.png" style="width:9%;"></a>
		<br>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top<i class="arrow up"></i></button>
	</div>
    <div class="column" id="footer-body4" style="background-color:#164686;">
		<p>Join the movement!</p>
		<style>

    .at-text.FirstName {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.LastName {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.AddressLine1 {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.PostalCode {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.City {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-select.StateProvince {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.EmailAddress {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.HomePhone {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    .at-text.MobilePhone {
        font-weight: 700;
        font-family: Barlow ;
        color: #2c2c2c ;
    }
    header.at-title {
        display: none;
    }
    legend.at-legend {
    display: none;
    }
    p {
        font-family: Barlow;
    }
    .ngp-form .at-fields input[type=email], .ngp-form .at-fields input[type=tel], .ngp-form .at-fields input[type=text], .ngp-form .at-fields input[type=select], .ngp-form .at-fields textarea {
    background: #fff;
    height: 44px;
    padding: 10px 20px;
    border-radius: 0;
    transition: background .25s ease;
    float: left;
    width: 100%;
    outline: 0;
    border: 1;
    color: #404040;
    font-size: 18px;
    font-family: Barlow,sans-serif;
    font-weight: 500;
    box-shadow: 5px 5px 0 rgba(0,0,0,.23);
}
    .at-submit.btn-at.btn-primary {
        background-color: #1c7dff;
        border-color: rgba(0,0,0,0);
        color: #fff;
        outline: 0
        font-family: Barlow;
        text-transform: uppercase;
        font-weight: Bold;
    }
    .ngp-form .at-form-submit .at-submit {
    padding: 0px 0px 0px 0px;
    height: 44px;
    box-shadow: 5px 5px rgba(0, 0, 0, 0.23);
    border-radius: 0;
    background-color: #fff;
    border-color: rgba(0,0,0,0);
    color: #164686;
    font-weight: Bold;
    float: center;
    font-family: Barlow;
    margin-right: 9px !important;
    width: 93%;
    margin-top: -18px;
}
    .ngp-form:hover .at-form-submit:hover .at-submit:hover {
    padding: 0px 0px 0px 0px;
    height: 44px;
    box-shadow: 0px 0px rgba(0, 0, 0, 0.23);
    border-radius: 0;
    background-color: #fff;
    border-color: rgba(0,0,0,0);
    color: #164686;
    font-weight: Bold;
    float: center;
    font-family: Barlow;
    margin-right: 14.7px;
	transition: .3s;
}			
    .at-checkbox-title {
    color: #2c2c2c!important;
    font-family: Barlow;
    font-weight: 400;
}
    .at input[type="checkbox"]:checked+span:before {
    background-color: #228ae6;
    border-color: #228ae6;
}
    span.text {
        font-family: Barlow;
        color: #2c2c2c;
    }
    label.checkbox-list-label {
        font-family: Barlow;
        color: #2c2c2c;
        font-weight: Bold;
    }
    .icon:before, .glyphicons:before, .icomoon:before {
    font-size: inherit;
    text-shadow: inherit;
    color: #164686;
}   
    .at h1 {
    font-family: Barlow;
    font-size: 20px; 
    }
    .oa-input-unit {
        font-family: Barlow;
        font-weight: 700;
        color: #2c2c2c;
    }
    .at label {
    font-family: Barlow;
        font-weight: 700;
        color: #2c2c2c;    
    }
    .at input[type="checkbox"], .at select, .at .select2-container--default .select2-selection--multiple, .at input[type="text"], .at input[type="password"], .at input[type="date"], .at input[type="datetime"], .at input[type="datetime-local"], .at input[type="month"], .at input[type="week"], .at input[type="email"], .at input[type="number"], .at input[type="search"], .at input[type="tel"], .at input[type="time"], .at input[type="url"], .at input[type="color"], .at textarea {
    background: #fff;
    height: 44px;
    padding: 10px 20px;
    border-radius: 0;
    transition: background .25s ease;
    float: left;
    width: 100%;
    outline: 0;
    border: 1;
    color: #404040;
    font-size: 18px;
    font-family: Barlow,sans-serif;
    font-weight: 500;
    box-shadow: 5px 5px 0 rgba(0,0,0,.23);
	margin-top: -10px !important;
    }
.oa-input-container .oa-input-unit .btn-at {
    margin-top: 22px;
    padding: 0px 0px 0px 0px;
    height: 44px;
    box-shadow: 5px 5px rgba;
    box-shadow: 5px 5px rgba(0, 0, 0, 0.23);
    border-radius: 0;
    background-color: #164686
    background-color: #164686;
    border-color: rgba(0,0,0,0);
    color: #fff;
    outline: 0
    font-family: Barlow;
    text-transform: uppercase;
    font-weight: Bold;
   
}
input#LegislatorLookupSubmit, .oa-input-container .oa-input-unit .btn-at:hover {
  background-color: #1c7dff;
}
input#LegislatorLookupSubmit {
    background-color: #164686;
    font-family: Barlow;
    padding-bottom: 25px;
}
.at-inner {
    background-color: #fff0;
}

</style><script type='text/javascript' src='https://d3rse9xjbp8270.cloudfront.net/at.js' crossorigin='anonymous'></script>
 <div class="ngp-form"
     data-form-url="https://actions.everyaction.com/v1/Forms/CBrjTCad_kKnnONkLjzw6w2"
     data-id="12345" data-labels="inline"
     data-fastaction-endpoint="https://fastaction.ngpvan.com"
     data-inline-errors="true"
     data-fastaction-nologin="true"
     data-databag-endpoint="https://profile.ngpvan.com"
     data-databag="everybody"
     data-mobile-autofocus="false" >
</div>
		</div>
</div>
	<div id="footer-body2" style="background-color:#164686">
		<p>Paid For By March For Our Lives NC</p>
	</div>
			  <script>
			 //Get the button:
mybutton = document.getElementById("myBtn");
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
			 </script>
</footer>