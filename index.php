
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>goGeneric</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://127.0.0.1/goGeneric_new/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://127.0.0.1/goGeneric_new/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="https://127.0.0.1/goGeneric_new/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://127.0.0.1/goGeneric_new/css/creative.css" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    #login-dp{min-width: 500px;padding: 14px 14px 0;overflow:hidden;background-color:rgba(255,255,255,.8);}
    #login-dp .help-block{font-size:12px !important; }
  	#login-dp .help-block a{ color:black !important; }
  	#login-dp .bottom{ background-color:rgba(255,255,255,.8) !important; border-top:1px solid #ddd !important; clear:both !important;padding:14px !important;}
  	#login-dp .social-buttons{ margin:12px 0 !important; }
  	#login-dp .social-buttons a{ width: 49% !important; }
  	#login-dp .form-group { margin-bottom: 10px !important;}
  	#login-dp .btn-fb{ color: #fff !important; background-color:#3b5998 !important;}
  	#login-dp .btn-fb:hover{ color: #fff !important; background-color:#496ebc !important;}
  	#login-dp .btn-tw{ color: #fff !important; background-color:#55acee !important;}
  	#login-dp .btn-tw:hover{ color: #fff !important;background-color:#59b5fa !important;}

    #ask-query {position:fixed;right:0px;bottom:0px;}
    #ask-query button {border-radius:2px;background-color: #f05f40;border-color: #f05f40;color:#000;padding: 10px 80px;} 
    #ask-query .modal-header {background: #f05f40;}
    #ask-query .modal input,    #ask-query .modal textarea{color:#000;}


  	@media(max-width:768px){
  		#login-dp{background-color: #EAF2FD;color: #fff;}
      	#login-dp .bottom{background-color: #EAF2FD;border-top:0 none;}
        #ask-query button {padding: 5px 20px;}
  	}
.padd{
	padding:30px;
}
  </style>
    <script type="text/javascript">
      /*  function change (id) 
        {
            if(id=="1")
            {
                document.getElementById('otherType1').style.display='none';
                document.getElementById('otherType3').style.display='block';
            }
            else if(id=="2")
            {
                document.getElementById('otherType1').style.display='none';
                document.getElementById('otherType2').style.display='block';  
            }
            else if(id=="3")
            {
                document.getElementById('otherType2').style.display='none';
                document.getElementById('otherType1').style.display='block';
            }
            else if(id=="4")
            {
                document.getElementById('otherType2').style.display='none';
                document.getElementById('otherType3').style.display='block';
            }
            else if(id=="5")
            {
                document.getElementById('otherType3').style.display='none';
                document.getElementById('otherType1').style.display='block';
            }
            else if(id=="6")
            {
                document.getElementById('otherType3').style.display='none';
                document.getElementById('otherType2').style.display='block';
            }

        }*/
    </script>

</head>

<body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
			  <div>
          
				  <a class="navbar-brand page-scroll" href="#page-top">goGeneric<br><span class="sub"></span></a>
        </div>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style="margin-bottom:10px;">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="page-scroll" href="#about">About</a></li>
          <li><a class="page-scroll" href="#services">Services</a></li>
          <li><a class="page-scroll" href="#Developer">Developer</a></li>
          <li><a class="page-scroll" href="medicines.html">Medicines</a></li>
          <li><a class="page-scroll" href="stores.html">Stores</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
         
         </ul>
      </div>
            <!-- /.navbar-collapse -->
    </div>
        <!-- /.container-fluid -->
  </nav>

  <header>
        <div class="header-content">
            <div class="header-content-inner">
                <span style="font-size:55px;">Search Generic</span>
				<br>
				<h1 class="plus"><i class="fa fa-plus"></i></h1>
				<br>
				<span style="font-size:55px;">Place Order</span>
                <hr>
                
				<br>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Search  Generic Alternative</a>
            </div>
        </div>
  </header>

  <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Why goGeneric?</h2>
                    <hr class="light">
                    <p class="">Our Government Provide subsidized medicines to all who can't afford expensive medicines provided by Private Companies at their unreasonable prices.

Even Our Doctors prescribe expensive medicines instead of affordable generic medicines as they get their share of profit.

Our Web Application goGeneric is an effort for common people to provide them access to affordable,safe and equally efficient generic medicines.</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
  </section>

  <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
		 <div class="row" id="search">
                <div class="col-lg-12 text-center">
<form  method="post" action="https://127.0.0.1/goGeneric_new/index.php" >
<input type="text" name='medicine' style="width:30%;border-radius:10px; border:1px solid #69e83e;height:20%;" placeholder="&nbsp;&nbsp;Enter your Medicine Name Here... ">
<input type="submit" style="border-radius:10px;background-color:#69e83e ;border:1px solid #69e83e;width:8%; color:white;height:20%">
</form>
</div>
</div>
<div class="container">
<div class="row" id="search">
                <div class="col-lg-12 text-center padd">
<?php
$f=fopen('comment.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('comment.txt','w');
?>
</div>
</div>
<div class="row" >
<div class="col-lg-3 col-md-6 text-center">
</div>
                <div class="col-lg-3 col-md-6 text-center">
<h3 class="mid red show" style="color:#69e83e;">
<?php
$f=fopen('regular.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('regular.txt','w');
?>

</h3>
<?php
$f=fopen('searched_for.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('searched_for.txt','w');
?>
</div>
<div class="col-lg-3 col-md-6 text-center">

<h3 class="mid green show" style="color:#69e83e;" >
<?php
$f=fopen('generic.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('generic.txt','w');
?>

</h3>

<?php
$f=fopen('generic_medicine_replacement.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('generic_medicine_replacement.txt','w');
?>
</div>
</div>
<br>
<div class="row" id="">
<div class="col-sm-4 text-center">
</div>

                <div class="col-sm-4 text-center">
<h3 class="mid" style="color:#69e83e;">
<?php
$f=fopen('saved.txt','r');
echo fread($f,1000000);
$f=fopen('saved.txt','w');

?>
</h3>
</div>
</div>
</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-globe wow bounceIn text-primary" ></i>
                        <h3>GLOBAL</h3>
                        <p class="text-muted">Experts From All Over The World</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-star wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Developer</h3>
                        <p class="text-muted">Top Developer!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone wow bounceIn text-primary"  data-wow-delay=".2s"></i>
                        <h3>CONTACT</h3>
                        <p class="text-muted">Contact Developer Directly  .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-user wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>ASK QUESTIONS</h3>
                        <p class="text-muted">Ask questions in our forum!</p>
                    </div>
                </div>
            </div>
        </div>
  </section>

 
    <!-- Team Section -->
    <section id="Developer" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Best Developer</h2>
                    <hr class="light">

                    <!--
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member text-center">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="" style="margin: 0 auto;">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-twitter wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-facebook wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-linkedin wow bounceIn text-primary"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member text-center">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="" style="margin: 0 auto;">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-twitter wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-facebook wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-linkedin wow bounceIn text-primary"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member text-center">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="" style="margin: 0 auto;">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons center-block">
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-twitter wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-facebook wow bounceIn text-primary"></i></a>
                            </li>
                            <li><a class="w3-btn-floating" href="#"><i class="fa fa-linkedin wow bounceIn text-primary"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                <!--
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                 -->
                </div>
            </div>
            <br> <br> <br>
           
        </div>
    </section>

    <section id="contact" class="">
      <div class="container">
          <div class="row">
			       <div class="col-md-6 text-left">
                <div class="row text-center">
                  <h2 class="section-heading" style="color:#f05f40;">Let's Get In Touch!</h2>
                  <hr class="primary">
                  <p>Still Confused? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
        				<div class="row">
        					<div class="col-md-6 text-center">
        						<i class="fa fa-phone fa-2x wow bounceIn text-primary"></i>
        						<p>123-456-6789</p>
        					</div>
        					<div class="col-md-6 text-center">
        						<i class="fa fa-envelope-o fa-2x wow bounceIn text-primary" data-wow-delay=".1s"></i>
        						<p>care@oopadai.com</p>
        					</div>
        				</div>
				     </div>
			       <div class="col-md-2">
			
			       </div>
      			<div class="col-md-3 text-center">
      				<h2 style="color:#f05f40;">Follow Us At</h2>
              <hr class="primary">
      				<div>
      					<a class="w3-btn-floating" href="#" style="background-color:#3b5998;"><i class="fa fa-facebook"></i><a>
      					<a class="w3-btn-floating" href="#" style="background-color:#1dcaff;"><i class="fa fa-twitter"></i><a>
      					<a class="w3-btn-floating" href="#" style="background-color: #4875B4;"><i class="fa fa-linkedin"></i><a>
      				</div>
      			</div>
			    </div>
      </div>
    </section>
	
        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	
	
<?php
$general_medicine=array(17);
for($i=0;$i<17;$i++)
	$general_medicine[$i]=array(2);
$general_medicine[0][0]='paracetamol';
$general_medicine[1][0]='lorfast';
$general_medicine[2][0]='azithromycin';
$general_medicine[3][0]='aciloc';
$general_medicine[4][0]='cetrizen';
$general_medicine[5][0]='thyrox';
$general_medicine[6][0]='nimesulide';
$general_medicine[7][0]='saridon';
$general_medicine[8][0]='sumo';
$general_medicine[9][0]='becozine';
$general_medicine[10][0]='penicillin';
$general_medicine[11][0]='taxim';
$general_medicine[12][0]='ammoxil'; //Amoxil, Polymox, Trimox
$general_medicine[13][0]='diclofinac';
$general_medicine[14][0]='gentamycine';
$general_medicine[15][0]='mebendazole';
$general_medicine[16][0]='albendazole';
$general_medicine[17][0]='chloroquine';
//$general_medicine[][0]='';


$general_medicine[0][1]=8;
$general_medicine[1][1]=47;
$general_medicine[2][1]=45;
$general_medicine[3][1]=8;
$general_medicine[4][1]=25;
$general_medicine[5][1]=12.20;
$general_medicine[6][1]=5;
$general_medicine[7][1]=170;
$general_medicine[8][1]=75;
$general_medicine[9][1]=30;
$general_medicine[10][1]=80;
$general_medicine[11][1]=300;
$general_medicine[12][1]=138;
$general_medicine[13][1]=1150;
$general_medicine[14][1]=9;
$general_medicine[15][1]=9;
$general_medicine[16][1]=12;
$general_medicine[17][1]=14;
//$general_medicine[][1]=;

$generic_medicine=array(17);
for($i=0;$i<17;$i++)
	$generic_medicine[$i]=array(2);
$generic_medicine[0][0]='Generic paracetamol';
$generic_medicine[1][0]='loratadine';
$generic_medicine[2][0]='Generic azithromycin';
$generic_medicine[3][0]='ranitidine';
$generic_medicine[4][0]='Generic cetrizen';
$generic_medicine[5][0]='levothyroxine sodium';
$generic_medicine[6][0]='Generic nimesulide';
$generic_medicine[7][0]='propyphenazone';
$generic_medicine[8][0]='nimesulide';
$generic_medicine[9][0]='vitamin 8210';
$generic_medicine[10][0]='generic penicillin';
$generic_medicine[11][0]='cefotaxime';
$generic_medicine[12][0]='generic ammoxicilin';
$generic_medicine[13][0]='generic diclofinac';
$generic_medicine[14][0]='generic gentamycine';
$generic_medicine[15][0]='generic mebendazole';
$generic_medicine[16][0]='generic albendazole';
$generic_medicine[17][0]='generic chloroquine';
//$generic_medicine[][0]='';


$generic_medicine[0][1]=3;
$generic_medicine[1][1]=24;
$generic_medicine[2][1]=28;
$generic_medicine[3][1]=3;
$generic_medicine[4][1]=14;
$generic_medicine[5][1]=3;
$generic_medicine[6][1]=3;
$generic_medicine[7][1]=78;
$generic_medicine[8][1]=3;
$generic_medicine[9][1]=7;
$generic_medicine[10][1]=5;
$generic_medicine[11][1]=24;
$generic_medicine[12][1]=63;
$generic_medicine[13][1]=600;
$generic_medicine[14][1]=5;
$generic_medicine[15][1]=7;
$generic_medicine[16][1]=7;
$generic_medicine[17][1]=4;
//$generic_medicine[][1]=;




if(isset($_POST['medicine'])&&!empty($_POST['medicine'])){
$medicine=strtolower($_POST['medicine']);
$max=0;
for($i=0;$i<17;$i++){
	similar_text($general_medicine[$i][0],$medicine,$percent);
	if($percent>$max){
		$max=$percent;
		$id=$i;
	}
}
if($max==100){
	$f=fopen('comment.txt','w');
	fwrite($f,'You Searched for : '.$general_medicine[$id][0]);
	$f=fopen('regular.txt','w');
	fwrite($f,'Regular');
	$f=fopen('generic.txt','w');
	fwrite($f,'Generic');
	$f=fopen('generic_medicine_replacement.txt','w');
	$string=$generic_medicine[$id][0].' at Rs.'.$generic_medicine[$id][1];
	fwrite($f,$string);
	$f=fopen('searched_for.txt','w');
	$string=$general_medicine[$id][0].' at Rs.'.$general_medicine[$id][1];
	fwrite($f,$string);
	$price=fopen('saved.txt','w');
	$str='You Saved Rs. '.($general_medicine[$id][1]-$generic_medicine[$id][1]);
	fwrite($price,$str);
}else if($max>=50){
	$f=fopen('comment.txt','w');
	fwrite($f,'Do you Mean : '.$general_medicine[$id][0]);
	$f=fopen('regular.txt','w');
	fwrite($f,'Regular');
	$f=fopen('generic.txt','w');
	fwrite($f,'Generic');
	$f=fopen('generic_medicine_replacement.txt','w');
	$string=$generic_medicine[$id][0].' at Rs.'.$generic_medicine[$id][1];
	fwrite($f,$string);
	$f=fopen('searched_for.txt','w');
	$string=$general_medicine[$id][0].' at Rs.'.$general_medicine[$id][1];
	fwrite($f,$string);
	$price=fopen('saved.txt','w');
	$str='You Saved Rs. '.($general_medicine[$id][1]-$generic_medicine[$id][1]);
	fwrite($price,$str);
	}else{
		$f=fopen('comment.txt','w');
		fwrite($f,'Sorry We don\'t have queiried medicine we are still improving our data .');
	}



?>
<script>
window.location.replace("https://127.0.0.1/goGeneric_new/index.php/#services");
</script>
<?php

}
?>

</body>

</html>
