<?php
if (PHP_SAPI != 'cli') {
	echo "<pre>";
}

//$strings = array(
	//1 => 'BSC Hons Degree',

//);
require_once __DIR__ . '/../autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$con=mysqli_connect('localhost','root','','survey') or die(mysqli_error());
$sql=mysqli_query($con,"SELECT DISTINCT user AS ccc FROM answers ")or die(mysqli_error());  
							
$strings = array();
$sname;
$users=array();
			$acd=0;
$nonacd=0;
$twoormoreyrexp=0;
$sports=0;
$oneyearexp=0;
$creativity=0;
$internship=0;
$charity=0;
$sname;
$x=1;
$y=1;
$z=0;
while($row= mysqli_fetch_array($sql)){
	
	$users[] = $row["ccc"];

	
}
	
	
	foreach ($users as $user) {
		
		$sql1 = mysqli_query($con,"SELECT ans,user,sname FROM answers WHERE user='".$user."' LIMIT 5, 5")or die(mysqli_error());  
			while($row1= mysqli_fetch_array($sql1)){
				
		$strings[] = $row1["ans"];
		//$sname[]=$row1["sname"];
		
		
		
		}
		
	
	}

	
		foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
//echo $string;
	// output:
	//echo "String: $string\n";
	//echo "Dominant: $class, scores: ";

	
	$acd=$acd+$scores['acd'];
	$nonacd=$nonacd+$scores['nonacd'];
	$twoormoreyrexp=$twoormoreyrexp+$scores['twoormoreyrexp'];
	$sports=$sports+$scores['sports'];
	$oneyearexp=$oneyearexp+$scores['oneyearexp'];
	$creativity=$creativity+$scores['creativity'];
	$internship=$internship+$scores['internship'];
	$charity=$charity+$scores['charity'];
	
	
	//echo "\n";
	//print_r($scores);
	if($x==$y*5){
		if($acd!=0 && $acd!=0 && $nonacd!=0 && $twoormoreyrexp!=0 && $sports!=0 && $oneyearexp!=0 && $creativity!=0 && $charity!=0){
	//echo '</br>';
	//echo '------------------------------------------------------';
	//echo '</br>'.$users[$z];
	//echo 'Academic Total : '.$acd."\n";
	//echo 'Nonacademic Total : '.$nonacd."\n";
	//echo 'Tow Year More Experience Total : '.$twoormoreyrexp."\n";
	//echo 'Sports Total : '.$sports."\n";
	//echo 'One Year Experience Total : '.$oneyearexp."\n";
	//echo 'Internship Experience Total : '.$internship."\n";
	//echo 'Creativity Total : '.$creativity."\n";
	//echo 'Charity Total : '.$charity."\n";
	//echo '------------------------------------------------------';
	//echo '</br>';
	
	//save
	
	
	$result1 = mysqli_query($con,"SELECT * FROM result_tbl WHERE user='".$users[$z]."'")
	or die(mysqli_error());
	$result5 = mysqli_query($con,"SELECT * FROM answers WHERE user='".$users[$z]."'")
	or die(mysqli_error());
			while($row5= mysqli_fetch_array($result5)){
				$sname=$row5["sname"];
			}
$res=mysqli_fetch_row($result1);
		
	if($res){
	
	$sql3="update result_tbl set academic='$acd',nonacademic='$nonacd',twoyears='$twoormoreyrexp',oneyears='$oneyearexp',sports='$sports',internship='$internship',creativity='$creativity',charity='$charity',sname='$sname' WHERE user='$users[$z]'";		
	
	}else{
		
	$sql3="insert into result_tbl
		(user,academic,nonacademic,twoyears,oneyears,sports,internship,creativity,charity,sname)
		values('$users[$z]','$acd','$nonacd','$twoormoreyrexp','$oneyearexp','$sports','$internship','$creativity','$charity','$sname')";
		
		
		
		
	}
	
$con=mysqli_connect("localhost","root","","survey");
	
	if (!mysqli_query($con,$sql3)) {
							die('Error: ' . mysqli_error($con));
						}
	
	
	
	
						
						
						
						
						
						

	
	
	
	//end
	
	
		$acd=0;
		$nonacd=0;
		$twoormoreyrexp=0;
		$sports=0;
		$oneyearexp=0;
		$creativity=0;
		$internship=0;
		$charity=0;
	
	}
	$y++;
	$z++;
	}
	
	//echo "\n";
	$x=$x+1;
	
	
		}
		
		
	
	
	
	
	
		
	
	





