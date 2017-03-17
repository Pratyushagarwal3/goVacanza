<?php
require_once('conn.php');
class Vehicle extends Connect
{
	
	public function getvehicle($var)
	{
		$x=new Connect;
		$sql="Select vehicle_type from vehicle where vehicle_id='$var'";
		$c= $x->getconnect();
		$result = $c->query($sql);
		$a;
		if ($result->num_rows > 0) 
	   {
       while($row = $result->fetch_assoc()) 
	   {
		
				$a=$row['vehicle_type'];
		}
       }
		return $a;
    }
		
    
	
}	 
?>