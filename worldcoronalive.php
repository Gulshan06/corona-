<!DOCTYPE html>
<html>
<head>
	<title>COVID-19 Live Status</title>
  <?php include 'link/links.php'?>
  <?php include 'css/style.php'?>
</head>
<body onload="fetch()">
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
<section class="covid_updates container-fluid">
<div class="my-5">
    <h3 class="text-center text-uppercase">
    COVID-19 LIVE UPDATES OF THE WORLD</h3>
</div>
    <!-- <div class="table-responsive"> -->
    <div>
        
    <table class="table table-bordered table-striped text-center" style="padding:0;margin:0" id="tbval">

        <tr>
        <th class="stickyHeader">Latest Date/Time</th>    
        <th class="stickyHeader">Country</th>
        <th class="stickyHeader">Total Confirmed</th>
        <th class="stickyHeader">Total Recovered</th>
        <th class="stickyHeader">Total Deaths</th>
        <th class="stickyHeader">New Confirmed</th>
        <th class="stickyHeader">New Recovered</th>
        <th class="stickyHeader">New Deaths</th>
        </tr>
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

function fetch()
    {
        $.get("https://api.covid19api.com/summary",
              function(data)
             {
            var tbval=document.getElementById('tbval');
            for(var i=1;i<(data['Countries'].length);i++)
                {
                    var x=tbval.insertRow();
                    x.insertCell(0);
                    tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Date'];
                    tbval.rows[i].cells[0].style.background="#7a4a91";
                    tbval.rows[i].cells[0].style.color="#fff";
                    
                    x.insertCell(1)
                    tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[1].style.background="#DE3163";
                    tbval.rows[i].cells[1].style.color="#fff";
                    
                    x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[2].style.background="#4bb7d8";
                    tbval.rows[i].cells[2].style.color="#fff";
                    
                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[3].style.background="#4bb7d8";
                    tbval.rows[i].cells[3].style.color="#fff";
                    
                    x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[4].style.background="#f36e23";
                    tbval.rows[i].cells[4].style.color="#fff";
                    
                    x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[5].style.background="#4bb7d8";
                    tbval.rows[i].cells[5].style.color="#fff";
                    
                    x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[6].style.background="#9cc850";
                    tbval.rows[i].cells[6].style.color="#fff";
                    
                    x.insertCell(7);
                    tbval.rows[i].cells[7].innerHTML=data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[7].style.background="#f36e23";
                    tbval.rows[i].cells[7].style.color="#fff";
                }
        })
    }
</script>
</body>
</html>