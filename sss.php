<?php
	$con = new MongoClient();
	echo "connection to database succesfully";
	
	$db = $con->up;
	echo "Database  selected :",$db;

	$collection = $db->upcol;
	
	
	
	

	$first=array('name'=>$_POST['ut1'],'sname'=>$_POST['ut2']);
	//$collection->update(array('name'=>$_POST['utu']),$first,array(multiple(true)));
	$up=$collection->update(array('name'=>$_POST['utu']),array('$set'=>$first));
	
	echo "update succesfully";
	$dis=$collection->find();
	//echo"<pre>";
	echo"<br/>";
	foreach($dis as $doc)
	{
		echo $doc['name'];
		echo $doc['sname'];
		echo"<br />";
	}
?>