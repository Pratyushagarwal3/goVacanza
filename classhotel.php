<?php
require_once('conn.php');
class Hotel extends Connect
{
	
	public function gethotel($var)
	{
		
		$x=new Connect;
		$sql="Select hotel_name,dest_name from hotel where hotel_id='$var'";
		$c= $x->getconnect();
		$result = $c->query($sql);
		$a=array();
		if ($result->num_rows > 0) 
	   {
       while($row = $result->fetch_assoc()) 
	   {
		
				$a[]=array($row['hotel_name'],$row['dest_name']);
		}
       }
		return $a;
    }
	
}	 
?>