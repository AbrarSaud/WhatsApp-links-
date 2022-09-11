<?php

if(isset($_POST ["submit"])){ 

$code = $_POST['code']; 
$input = $_POST['PhoneNumber']; 
$mess = $_POST['Message']; 


$Link = "https://api.whatsapp.com/send?phone=$code$input&text=$mess"; 

		header('Location: ' .$Link); 
}

?>
<!Doctype html>
<html>
<head>
		<title> خدمة رسائل الواتس اب </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 0.9">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href ="style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body>
<div class="container">

<div class="row">
	<div class="col-mid-4">
		<div class="get-in-touch">
			<form method="post">
				
			<h3 class="text-center"><b> أرسل رسالة واتس اب لجهة إتصال غير مسجلة لديك</b> </h3>
				<br />
				<div class="form-group">
				<input type="tel" id="telNo" name="PhoneNumber" class="form-control" placeholder ="+966555555555" required/>
				</div>
				<br />
				
				<textarea type="textarea" class="form-control" name="Message" placeholder="أكتب الرسالة التي تود أرسالها للرقم"></textarea>
				<br />
			<input type="submit" name="submit" class="btn btn-primary btn-block" value="أرسل"/>
				<br />
				<br />
			
				<div class="center">
						<ul class="social-network social-circle">
						<center>    <li><a href="https://twitter.com/AAS_110" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li> </center>
						</ul>
				</div>
			 </form>
		</div>
	</div>
</div>



  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-latest.min.js"></script>

</body>
</html>