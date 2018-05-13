<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Zipcaars Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 37px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	#body {
		margin: 0 15px 0 15px;
	}
	#container {
		margin: 26px 23px;
		border: 2px solid #4053b9;
		box-shadow: 0 0 8px #D0D0D0;
		background-color: #4388cc;

		padding-bottom: 5px;

	}
	.show_inline{
		display: inline;

	}
	.row1{

	}
	.text-color{
 	 box-shadow: 3px 4px 2px #585858;
   background-color:white;
	 color:#4388cc;
	 height:55px;
	 border: 2px solid #ede9e3;
	 margin-top:-2px;


	}
	.inner_div{
		height:350px;
		background-color: #2e6ead;
    border: 2px solid #3646f1;
    box-shadow: 10 10 10 black;
    box-shadow: 3px 3px 6px #1d223c;
		overflow:scroll;
    overflow-x:hidden;
	}



	</style>
</head>
<body>

<div id="container" >

	<div id="body">

	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-2" style="padding: 10px;"><button type="button" class="btn" id="fblogin">Log in with Facebook</button>
<div id="result"></div>
	</div>
	<div class="col-md-4 "><div class="text-color"><p style="text-align:center;padding-top:15px;font-size:17px;font-weight: bold;">Real Time Tweeting app</p></div></div>
	<div class="col-md-3 ">

	</div>
</div>
<div class="row">

<div class="col-md-2" ></div>
<div class="col-md-7" ><span><span id="show_img" style="padding-right:5px;"></span><span id="hide_text" style="color:white;font-size:17px;">You are logged in as</span> <b id="display_name" style="color:white;font-size:17px;"></b></span></div>

<div class="col-md-3 "><a href="" style="text-decoration:none;color:white;font-size:18px;" id="logout">log-out</a></div>
</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-2"></div>
<div class="col-md-4 ">

	<div class="form-group" id="comment_area">
  <label for="comment" style="color:white;font-size:17px;">Compose New Tweet</label>
  <textarea class="form-control" rows="5" id="comment" onkeypress="onTestChange();"></textarea>

</div>
<div class="form-group" id="tweet_area">
<label for="tweet" style="color:white;font-size:17px;">Compose New Tweet</label>
<textarea class="form-control" rows="5" id="tweet" onkeypress="onTextChangeTweet();"></textarea>

</div>

<div style="color:white;float:left;">[ Maximum 160 characters allowed to tweet ]</div>
<div style="color:white;float:right;">[ Click on enter to submit ]</div>

</div>
<div class="col-md-3 "></div>
</div>

<div class="row" style="padding-top:30px;">
<div class="col-md-3"></div>

<div class="col-md-6 ">
	<div style="padding-bottom:10;margin-bottom:3px;">
	<div style="float:left;color:white;font-size:16px">Real Time Tweets</div>
	<div style="float:right;color:white;font-size:16px">Total Tweets-<b id="counter">3</b></div>
	</div>
<div class="inner_div" style="margin-top:20px">
<div class="row" style="background-color:white;padding: 11px 1px;margin:14px 14px 9px 14px;">
	<div class="col-3"><img src="http://via.placeholder.com/350x150" height="80" width="80"></div>
	<div class="col-9">
		<h6 style="font-weight:bold;">India Today</h6>
		<p>News,Views,Analysis,Conversations,India's number 1 digital news destinaton and the world's largest selling news paper</p>
	</div>
</div>
<div class="row" style="background-color:white;padding: 11px 1px;margin:14px 14px 9px 14px;">
	<div class="col-3"><img src="http://via.placeholder.com/350x150" height="80" width="80"></div>
	<div class="col-9">
		<h6 style="font-weight:bold;">India Today</h6>
		<p>News,Views,Analysis,Conversations,India's number 1 digital news destinaton and the world's largest selling news paper</p>
	</div>
</div>
<div class="row" style="background-color:white;padding: 11px 1px;margin:14px 14px 9px 14px;">
	<div class="col-3"><img src="http://via.placeholder.com/350x150" height="80" width="80"></div>
	<div class="col-9">
		<h6 style="font-weight:bold;">India Today</h6>
		<p>News,Views,Analysis,Conversations,India's number 1 digital news destinaton and the world's largest selling news paper</p>
	</div>
</div>

</div>
</div>
<div class="col-md-3 "></div>
</div>
</div>


</div>
<script>
var fb_name;
var fb_pic;
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
		$('#display_name').hide();
		$('#show_img').hide();
		$('#logout').hide();
		$('#hide_text').hide();
		$('#tweet_area').hide();
		$('#comment_area').show();


});
function onTestChange() {
	var key = window.event.keyCode;

	// If the user has pressed enter
	if (key === 13) {
			alert(" Please login to post your tweet.");
			return false;
	}
	else {
			return true;
	}
}
function onTextChangeTweet() {

	var key = window.event.keyCode;

	// If the user has pressed enter
	if (key === 13) {
		var tweet = $('#tweet').val();
		var img= '<img src='+fb_pic+'>';
		var counter =3;
        counter++ ;
    $('#counter').html(counter);
		$('.inner_div').append('<div class="row" style="background-color:white;padding: 11px 1px;margin:14px 14px 9px 14px;" ><div class="col-3">'+img+
		'</div><div class="col-9"><h6 style="font-weight:bold;">'+fb_name+'</h6><p>'+tweet+'</p></div></div>');


	}

}
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '194682161348990',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.0'
    });
		FB.getLoginStatus(function(response){
			if(response.status==='connected'){
				$('#result').html('okay you are connected');
				$('#display_name').show();
				$('#show_img').show();
				$('#logout').show();
				$('#hide_text').show();
				$('#fblogin').hide();
				$('#tweet_area').show();
				$('#comment_area').hide();
				FB.api('/me','GET',{fields:'first_name,last_name,name,picture.width(70).height(70)'},function(response){
				$('#display_name').html(response.name);
				$('#show_img').html("<img src='"+response.picture.data.url+"'>");
				fb_name = response.name;
				fb_pic = response.picture.data.url;


				 })
			}
			else if(response.status==='not_authorized'){
				$('#result').html('you are not connected');
			}
			else{
				$('#result').html('you are not logged into any facebook account');
			}
		})


  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

	 $("#fblogin").click(function(){
	         FB.login(function(response){
						 console.log(response.authResponse);
						 userId = response.authResponse.userID;
						 console.log(userId);
						 if(response.status==='connected'){

							location.reload();


			 			}
			 			else if(response.status==='not_authorized'){
			 				$('#result').html('you are not connected');
			 			}
			 			else{

			 				$('#result').html('you are not logged into any facebook account');

			 			}
					 })

	     })
	$("#logout").click(function(){
				 FB.logout(function(response) {
// user is now logged out
		});

			     })

</script>
</body>
</html>
