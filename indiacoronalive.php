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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php">Prevention</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">World Corona Live Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India Corona Live Status</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!------Project done start------>
<section class="covid_updates">
<div class="my-5">
    <h3 class="text-center text-uppercase">
    COVID-19 LIVE UPDATES OF THE INDIA</h3>
</div>
    <div>
    <!-- <div class="table-responsive"> -->
    <table class="table table-bordered table-striped text-center" id="tbval">
      
        <tr  >
        <th class="stickyHeader">Country</th>
            <th class="stickyHeader">State</th>
            <th class="stickyHeader">Confirmed</th>
            <th class="stickyHeader">Active</th>
            <th class="stickyHeader">Recovered</th>
            <th class="stickyHeader">Deaths</th>
        </tr>

        
        
<?php
  $data=file_get_contents('https://api.covid19india.org/data.json');
  $coronalive=json_decode($data,true);
$statecount=count($coronalive['statewise']);
$i=1;
while($i<$statecount)
{
    ?>
    <tr>
    <td style="background-color:#7a4a91;color:white;"><?php  echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td style="background-color:#DE3163;color:white;"><?php  echo $coronalive['statewise'][$i]['state'] ?></td>
    <td style="background-color:#4bb7d8;color:white;"><?php  echo $coronalive['statewise'][$i]['confirmed'] ?></td>
    <td style="background-color:#4bb7d8;color:white;"><?php  echo $coronalive['statewise'][$i]['active'] ?></td>
    <td style="background-color:#f36e23;color:white"><?php  echo $coronalive['statewise'][$i]['recovered'] ?></td>
    <td style="background-color:#4bb7d8;color:#fff;"><?php  echo $coronalive['statewise'][$i]['deaths'] ?></td>


    </tr>
    <?php
    $i++;
}
    
?>
        </table>
    </div>
</section>
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Gulshan, Devanshu & shri Krishan</p>
    
  </div>
</footer>
<script type="text/javascript">

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

