 <!DOCTYPE html>
 <html>
 <head>
 <title>Google Map Mobile Number Extractor Developed by Guddu Modok</title>
 <meta content="Guddu Modok &amp; His Company (GMHC)" itemprop="name"> <meta content="Guddu Modok &amp; His Company (GMHC)" property="og:title"> <meta content="https://lh5.googleusercontent.com/p/AF1QipPHqtZDsoOBqOc4WcUL0dVMQclWuoh7Bw5mEMlV=w256-h256-k-no-p" itemprop="image"> <meta content="https://lh5.googleusercontent.com/p/AF1QipPHqtZDsoOBqOc4WcUL0dVMQclWuoh7Bw5mEMlV=w256-h256-k-no-p" property="og:image"> <meta content="256" property="og:image:width"> <meta content="256" property="og:image:height">  <meta content="&#9733;&#9733;&#9733;&#9733;&#9733; · Website designer · Dulmi-Nadiha" itemprop="description"> <meta content="&#9733;&#9733;&#9733;&#9733;&#9733; · Website designer · Dulmi-Nadiha" property="og:description">  <meta content="Guddu Modok &amp; His Company (GMHC)" property="og:site_name">
 <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    
<style>
.bdy{
	margin-top:50px;
}
button{
	
    background-color: #ffed4c;
    color: black;
    box-shadow: 0 0 4px black;
    border: none;
    padding: 5px;
    outline: none;
    margin: 2px;
    margin-top: 5px;
    width: 100%;
    height: 30px;
}
button:active{
	background-color:magenta;
}
button:hover{
	background-color:red;
}
button:link{
	background-color:green;
}
</style>
</head>
<body>
 <?php

if(isset($_GET["submit"])){
 function rt($str) {  
	$str = preg_replace("#<(.*)/(.*)>#iUs", "", $str);
	return $str;
}
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}


$source=$_GET["url"];

$string =file_get_contents($source);

preg_match("/<title>(.+)<\/title>/siU", $string, $matches);
$title = $matches[1];

$string=strtolower($string);

$string=str_replace(" ","",$string);
$string=str_replace("+","",$string);
$string=str_replace("-","",$string);
$string=str_replace("&","",$string);
$string=str_replace("#","",$string);
$string=str_replace('"',"",$string);
$string=str_replace("null","",$string);

$string=str_replace("(","",$string);

$string=str_replace(")","",$string);

$string=str_replace("{","",$string);

$string=str_replace("}","",$string);

$string=str_replace("[","",$string);

$string=str_replace("]","",$string);

$string=str_replace("*","",$string);

$string=str_replace("?","",$string);

$string=str_replace(",","",$string);

$string=str_replace(":","",$string);
$string=str_replace("/","",$string);
$string=str_replace("

","",$string);
$string=rt($string);
$string=explode('\\',$string);
echo"<div class='bdy'><ol>";
for($i=0;$i<count($string);$i++){

    if(preg_match('/^\d{12}$/',$string[$i]))
    {
	echo"<li><a href='tel:+".$string[$i]."'><button>Call Now: +".$string[$i]."<font color='red'size='1.5'style='float:right'>Guddu Modok</font></button></a></li>";

    }

}
echo"</ol></div>";

}
 ?>
 <form action=""method="get">
<input type="text"name="url"placeholder="Enter Map Link"style="
    position: fixed;
    left: 0px;
    top: 0px;
    width: 68%;
    height: 30px;
    background-color: #00ff28;
    border: none;
    outline: none;
    padding: 1%;
    box-shadow: 0 0 9px black;
    color: #0012ff;
    font-size: 20px;
    border-radius: 10px;
    margin: 1%;"autofocus>
<input type="submit"name="submit"value="Get"style="
    position: fixed;
    right: 0px;
    top: 0px;
    width: 27%;
    height: 39px;
    background-color: #2196F3;
    border: none;
    outline: none;
    padding: 1%;
    box-shadow: 0 0 9px black;
    color: #ffffff;
    font-size: 15px;
    border-radius: 3px;
    margin: 1%;">

 </form>
 <body>
 </html>
