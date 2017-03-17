<?php
require_once('conn.php');
class Package extends Connect
{
	public static $packarray=array();
	public function getpackage($destname,$price)
	{
		
		$x= new Connect;
        $c=$x->getconnect();
		$var=0;
		$sql;
		if($destname!="" && $price!="" && !$var)
		{
		$sql="select packimage,durationday,durationnight,price,hotelid,vehicleid, from package where dest_name='$destname' and price='$price'";
	    $var=1;
		}
		else if($destname && !$var)
		{
		    $sql="select package_id,packimage,durationday,durationnight,price,hotel_id,vehicle_id from package where dest_name='$destname'";
			$var=1;
		}
		else if($price)
		{
			$sql="select package_id,packimage,durationday,durationnight,price,hotel_id,vehicle_id from package where price=$price";
		     $var=1;
		}
		else if($destname=="" && $price=="" && !$var)
		{
			 echo "<script type='text/javascript'>alert('Enter some valid choices');</script>";
		     include('index1.php');
		}
			$packarray=array();
			$result=$c->query($sql);
		    if($result->num_rows>0)
			{
			  while($row=$result->fetch_array())
		     {
			  $packarray[]=array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
			  }
		   }
			else
		   {
			   echo "<script type='text/javascript'>alert('sorry!!!! no package available..for your query');</script>";
		       include('index1.php');
		   }
		   //var_dump($packarray);
		    return array($packarray,count($packarray));
		
		 
		
		//$res=$c->query($sql);
		
	}
	
}

/*$packobj=new Package;
$destname=$_POST['destination'];
$price=$_POST['agileinfo_search'];
$b=array();
$b=$packobj->getpackage($destname,$price);

for($k=0;$k<$b[1];$k++)
{
	echo '\n';
	for($j=0;$j<($b[2]/2);$j++)
	{
		echo $b[0][$k][$j];
		echo '\t';
	}
}*/
?>