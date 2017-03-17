<?php
require_once('conn.php');

class Package extends Connect
{
	public  $packarray=array();
	public function getpackage($destname)
	{
		
		$x= new Connect;
        $c=$x->getconnect();
		
		
		
		    $sql="select package_id,packimage,durationday,durationnight,price,hotel_id,vehicle_id from package where dest_name='$destname'";
		
	
		
		
			$packarray=array();
			$result=$c->query($sql);
		    if($result->num_rows>0)
			{
			  while($row=$result->fetch_array())
		     {
			  $packarray[]=array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
			  }
		   }
			
		    return array($packarray,count($packarray));
		
		 
		
		//$res=$c->query($sql);
		
	}
	
}

?>