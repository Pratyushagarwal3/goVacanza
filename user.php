<?php
include_once('conn.php');
include_once('classhotel.php');
include_once('classvehicle.php');
date_default_timezone_set('UTC');
class User extends connect
{

   public function CustomHotel($var)
   {
 	   $x= new Connect;
           $c=$x->getconnect();
    
  	   $sc = $var['noofsingle'];
 	   $dc = $var['noofdouble'];
 	   $mc = $var['noofmini'];
 	   $hn = $var['hotelname'];
 	   $did = $var['did'];        #destination 
 	 
 	   $pr = array();             #price of different types of rooms
 	 
     $sql  = "select h.hotel_id,price_room_day from hotel h,hotel_room hr where h.hotel_id=hr.hotel_id and dest_name='$did' and hotel_name='$hn' and room_type='single'";

     
     $result = $c->query($sql);
		 		 	   
     if($result->num_rows>0)
	   {
		
	     while($row=$result->fetch_array())
	    {
              $pr[0] = $row['price_room_day'];
               
          }
     }

      $sql1  = "select h.hotel_id,price_room_day from hotel h,hotel_room hr where h.hotel_id=hr.hotel_id and dest_name='$did' and hotel_name='$hn' and room_type='double'";

     
     $result = $c->query($sql1);
		 		 	   
	   if($result->num_rows>0)
	   {
	  	
	     while($row=$result->fetch_array())
	     {
         $pr[1] = $row['price_room_day'];
                  
       }
     }
        
      $sql3  = "select h.hotel_id,price_room_day from hotel h,hotel_room hr where h.hotel_id=hr.hotel_id and dest_name='$did' and hotel_name='$hn' and room_type='minisuite'";

     
      $result = $c->query($sql3);
		 		 	   
		  if($result->num_rows>0)
		  {
		  	
		      while($row=$result->fetch_array())
		      {
             $pr[2] = $row['price_room_day'];
                  
           }
      }

          $hoteltotalprice = 0;
         $hoteltotalprice = (($sc * $pr[0])+($dc * $pr[1])+($mc * $pr[2]));
         var_dump ($hoteltotalprice);         
         #echo "<br><br>hotelperdayprice= ".$hoteltotalprice."<br><br>";        
		     return $hoteltotalprice;            

   }

   public function CustomVehicle($var){



   	 $x= new Connect;
     $c=$x->getconnect();
    
  	 $vtype = $var['vtype']; #vehicle type
     $nov = $var['nov'];     #no. of vehicle 
  	 $did = $var['did'];	 
  	 $sql  = "select price_day from vehicle where vehicle_type='$vtype' and dest_name='$did'";
     $prv = 0;
     
     $result = $c->query($sql);
		 		 	   
     if($result->num_rows>0)
	 {
		
	   while($row=$result->fetch_array())
	   {
         $prv = $row['price_day'];
               
       }
     }

    
   
     $vehicletotalprice = $prv;
         
     #echo "<br><br>vehicletotalprice= ".$vehicletotalprice."<br><br>";        
	 return $vehicletotalprice;            
   }
  

  public function getNoDaysInPkg($var)
  {
    $pid = $var;
    
    $x = new Connect;
    $c = $x->getconnect();
    $prv = 0;
    $sql = "select durationday from package where package_id = '$pid'";
    
    $result = $c->query($sql);

     if($result->num_rows>0)
	 {
		
	   while($row=$result->fetch_array())
	   {
         $prv = $row['durationday'];
               
       }
     }
     #echo "<br><br>durationday= ".$prv."<br><br>";
     return $prv;
  }


  public function getVehiclePriceInPkg($var)
  {
    $pid = $var;
    
    $x = new Connect;
    $c = $x->getconnect();
    $prv = 0;
    $sql = "select price_day from vehicle,package where vehicle.vehicle_id=package.vehicle_id and package_id = '$pid'";
    
    $result = $c->query($sql);

     if($result->num_rows>0)
	 {
		
	   while($row=$result->fetch_array())
	   {
         $prv = $row['price_day'];
               
       }
     }
    #echo "<br><br>price_day= ".$prv."<br><br>";
     return $prv;
  } 
public function insertdetails($email,$first,$last,$contact,$bookid,$bookeddate,$street,$city,$state,$country,$pin,$noa,$noc)
{
	$x = new Connect;
    $c = $x->getconnect();
	$date= date('Y-m-d H:i:s');
	$sql="insert into book_trip values('$email','$first','$last',$contact,'$bookid','$bookeddate','$date')";
	//var_dump($c->query($sql));
	if($c->query($sql))
	{
		
		$sql1="insert into book_address values('$bookid','$street','$city','$state','$country',$pin)";
		//echo $sql;
		if($c->query($sql1))
		{
			$sql2="insert into book_member values('$bookid',$noa,$noc)";
			if($c->query($sql2))
			{
				return 1;
			}
		}
	}
	
}
public function getuserdetails($bookid)
{
	$x = new Connect;
    $c = $x->getconnect();
	$res=$c->query("select * from book_trip where book_id='$bookid';");
	$a=array();
    if ($res->num_rows > 0) 
	{
       while($row = $res->fetch_array()) 
	   {
		  $a[]=array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
	   }
	   return $a;
    }
} 
public function getuseraddress($bookid)
{
	$x = new Connect;
    $c = $x->getconnect();
	$res=$c->query("select * from book_address where book_id='$bookid';");
	$a=array();
    if ($res->num_rows > 0) 
	{
       while($row = $res->fetch_array()) 
	   {
		  $a[]=array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
	   }
	   return $a;
    }
} 
public function getmember($bookid)
{
	$x = new Connect;
    $c = $x->getconnect();
	$res=$c->query("select * from book_member where book_id='$bookid';");
	$a=array();
    if ($res->num_rows > 0) 
	{
       while($row = $res->fetch_array()) 
	   {
		  $a[]=array($row[0],$row[1],$row[2]);
	   }
	   return $a;
    }
}  
}
if(isset($_GET['info']))
{
	
	$userobj=new User;
    $f = $userobj->insertdetails($_GET['email'],$_GET['first'],$_GET['last'],$_GET['contact'],$_GET['bookid'],$_GET['bookeddate'],$_GET['street'],$_GET['city'],$_GET['state'],$_GET['country'],$_GET['pin'],$_GET['noa'],$_GET['noc']);
	
}
?>