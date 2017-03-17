<?php
	include_once('conn.php'); 
	include_once('classlist.php');
	require_once('classhotel.php');
	require_once('classvehicle.php');
	require_once('admindelete.php');
	require_once('view2.php');
	$packobj=new Package;
	$destname=$_POST['destname'];
	$b=array();
	$b=$packobj->getpackage($destname);
?>
<html>
<head>
<body>
<?php
	class Package extends Connect{
		public function deletepackage($b){
			$x= new Connect;
			$c=$x->getconnect();
			$sql="Delete * from package where package_id='
			
		}
	}
?>
</body>
</head>
</html>