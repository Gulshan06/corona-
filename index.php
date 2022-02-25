<!DOCTYPE html>
<html>
<head>
	<title>COVID-19 Live Status</title>
	<?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">World Corona Live Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India Corona Live Status</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksaath.png" width="350" height="350">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="coronarot"> <img src="images/coronavirus.png"> 
				</span>na Virus</h1>
				
			</div>
		</div>
	</div>
</div>
<!--*************************covid updates**********************-->
<section class="covid_updates">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 updates</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center">
		<div>
			<h1 class="count">5,000,000,000</h1>
			<p>Total test performed</p>

		</div>
		<div>
			<h1 class="count">85,732,861</h1>
			<p>Active COVID-19 cases</p>
			
		</div>
		<div>
			<h1 class="count">95,318,189</h1>
			<p>Cured/discharged cases</p>
			
		</div>
		<div>
			<h1 class="count">3,133,860</h1>
			<p>Death cases</p>
			
		</div>

	</div>
</section>
<!------------------------About page------------------>
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
		<div class="row pt-5">
			<div class="left col-lg-5 col-md-6 col-12 ml-5">
				<img src="images/aboutimage.jpg" class="img-fluid">
				
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2>What is COVID-19 (Corona-Virus)</h2>
				<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.</p>
				<p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
			</div>
			
		</div>
</div>
<!---coronasymtom---->
<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="100" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runny-nose2.png" class="img-fluid" width="100" height="120">
				<figcaption>Runny Nose</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="100" height="120">
				<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid" width="100" height="120">
				<figcaption>Cold</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/patient.png" class="img-fluid" width="100" height="120">
				<figcaption>Tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class="text-center">
				<img src="images/difficulty-breathing.png" class="img-fluid" width="100" height="120">
				<figcaption>Breathing Problem</figcaption>
				</figure>
			</div>
			
		</div>
		
	</div>
</div>
<!---prevention---->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/handwash.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub.</p>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/man.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/avoid.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/home.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay home and self-isolate from others in the household if you feel unwell.</p>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/television.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay informed by watching news & follow the recommended practices.</p>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/ill.png" class="img-fluid" width="90" height="90">
				
				</figure>	
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>If you have fever,cough and difficulty breathing,seek medical care early.</p>
				</div>
			</div>
		</div>

			</div>

		</div>
	</div>
<!---Contact Us---->
<div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
<form action="" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="Username" placeholder="Name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="Email"placeholder="name@example.com" required autocomplete="off">
  </div>
   <div class="form-group">
    <label>Mobile</label>
    <input type="number" maxlength="10" class="form-control" name="Mobile" placeholder="Mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
  	<label>Select Symptoms</label><br>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">Fever</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="difficulty">
  		<label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="feeling">
  		<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
  	</div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
			
		</div>
	</div>
</div>
<!----------top cursor------->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!-----------footer------->
<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright by Gulshan, Devanshu & shri Krishan </p>
		
	</div>
</footer>
<script type="text/javascript">

$('.count').counterUp({
	delay:10,
	time:3000
})
	mybutton=document.getElementById("myBtn");
	window.onscroll=function(){scrollFunction()};
	function scrollFunction()
	{
		if(document.body.scrollTop>100 || document.documentElement.scrollTop>100)
		{
			mybutton.style.display="block";
		}
		else
		{
			mybutton.style.display="none";
		}
	}
	function topFunction()
	{
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}
</script>
</body>
</html>

<?php

include 'corona.php';
if(isset($_POST['submit']))
{
	$Username=$_POST['Username'];
	$Email=$_POST['Email'];
	$Mobile=$_POST['Mobile'];
	$symp=$_POST['coronasym'];
	$msg=$_POST['msg'];

	$chk="";
	foreach ($symp as $chk1) {
		$chk .= $chk1.",";
	}
$insertquery="insert into coronacases(Username,Email,Mobile,Symp,Message) 
values('$Username','$Email','$Mobile','$chk','$msg')";
	$query=mysqli_query($con,$insertquery);

if($query)
{
?>
<script>
	alert("Inserted Successfully");
</script>
<?php
}
else
{
	?>
	<script>
	alert("Not Inserted");
</script>
<?php
}
}
?>