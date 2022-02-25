<style type="text/css">

html
{
	scroll-behavior: smooth;
}
	
*{margin: 0; padding: 0; box-sizing: border-box;font-family: 'Mulish', sans-serif;}

.nav_style
{
	background-color: #a29bfe!important;
}
.nav_style a{color: white;}
.main_header
{
	width: 100%;
	height: 450px;
}
.rightside h1
{
	font-size: 3em;  
}
.coronarot img
{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona
{
	0%{ transform: rotate(0);}
	100%{ transform: rotate(360deg); }
}
.leftside img
{
	animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat
{
	0% { transform: scale(.75); }
	20% { transform: scale(1); }
	40%{transform: scale(.75);}
	60%{transform: scale(1);}
	80%{transform: scale(.75);}
	100%{transform: scale(.75);}
}
/**************covidupdates*************/
.covid_updates
{
margin: 0 0 30px 0;
}
.covid_updates h3
{
color: #ff7675;
}
.covid_updates h1
{
	font-size: 2rem;
	text-align: center;
}
/*****************************About page*************************/
.sub_section
{
	background-color: #fbfafd;
}

/*****************************Footer*************************/
.footer_style
{
	background-color: #a29bfe!important;
}
.footer_style p
{
	margin-bottom: 0!important;
}
/*****************************top scroll*************************/
#myBtn
{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover
{
	background: #606060;
}

.stickyHeader{
	position: sticky;
	top: 0;
	background-color: #eeeeee;
}

</style>