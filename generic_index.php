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



//$redpage='generic_index.php';
//header('Location: '.$redpage);
}
?>
<html>
<head>
	<link rel="stylesheet" href="generic_index.css">
	
<script src="jquery-1.11.1.min.js"></script>
<script src="generic.js"></script>

</head>

<div id="top">
<div  id="goGeneric"><span class="green big">go</span><span class="white big">Generic</span></div>
<div id="nav_bar">
<div class="links"><a href="generic_index.php">Home</a></div>
<div class="links"><a href="stores.php">Stores</a></div>
<div class="links"><a href="all_medicine.php">All Medicines</a></div>
<div class="links"><a href="about.php">About Us</a></div>
</div>
</div>
<div id="search">
<form  method="post" onsubmit="" >
<input type="text" name='medicine' style="width:30%;border-radius:10px; border:1px solid black;height:20%" placeholder="&nbsp;&nbsp;Enter your Medicine Name Here... ">
<input type="submit" style="border-radius:10px;background-color:rgb(14, 6, 114) ;border:1px solid rgb(14, 6, 114);width:8%; color:white;height:20%">
</form>
</div>
<div class="center midlow">
<?php
$f=fopen('comment.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('comment.txt','w');
?>
</div>
<div class="right">
<span class="mid red show">
<?php
$f=fopen('regular.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('regular.txt','w');
?>

</span>
<br><br>
<?php
$f=fopen('searched_for.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('searched_for.txt','w');
?>
</div>
<div class="left">
<span class="mid green show" >
<?php
$f=fopen('generic.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('generic.txt','w');
?>

</span>
<br><br>
<?php
$f=fopen('generic_medicine_replacement.txt','r');
echo fread($f,1000000).'  ';

$f=fopen('generic_medicine_replacement.txt','w');
?>
</div>
<div class="center-bottom">
<span class="mid" style="color:rgb(14, 6, 114)">
<?php
$f=fopen('saved.txt','r');
echo fread($f,1000000);
$f=fopen('saved.txt','w');

?>
</span>
</div>

<img src="cross.png" id="cross">

<div id="why">
<div class="big green middle">Why Generic???...</div>

<p class="midlow middle white">
Our Government Provide subsidized medicines to all who can't afford expensive medicines provided by Private Companies at their unreasonable prices.
</p>
<p class="midlow middle white">
Even Our Doctors prescribe expensive medicines instead of affordable generic medicines as they get their share of profit.
</p>
<p class="midlow middle white">
Our Web Application goGeneric is an effort for common people to provide them access to affordable,safe and equally efficient generic medicines.
</p>
</div>
<div id="footer" class="middle center">
<a class="green" href="stores.php">Search Your Nearest Generic Store </a> 
</div>
</html>