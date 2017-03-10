<?php

function insert($var,$connection){
	//echo $var;exit;
$msg = array();
if($var){
$insert = "INSERT INTO details(company_name,address,contact,email,pincode) VALUES('".$var['company_name']."' , '".$var['address']."', '".$var['contact']."', '".$var['email']."', '".$var['pincode']."')";
$exe= mysqli_query($connection, $insert);
$msg['succ']='1';

}else{
	$msg['succ'] = '0';
}
	
	return $msg;

}



function update($data,$connection,$id){

$msg = array();
	if($data){

		$update = mysqli_query($connection ,"UPDATE details SET company_name='".$data['company_name']."', address='".$data['address']."', contact= '".$data['contact']."', email= '".$data['email']."', '".$data['pincode']."'
	WHERE id='".$id."'");
		$msg['succ']= '1';
	}else{
     $msg['succ']= '0';
	}

	return $msg;

}


function listing($connection){
	$data = array();
	$select = mysqli_query($connection, "SELECT * FROM details");
	$counter = 0;
	 while($query = mysqli_fetch_assoc($select)){

        $data['all_data'][$counter]['id'] = $query['id'];
		$data['all_data'][$counter]['company_name'] = $query['company_name'];
		$data['all_data'][$counter]['address'] = $query['address'];
		$data['all_data'][$counter]['contact'] = $query['contact'];
		$data['all_data'][$counter]['email'] = $query['email'];
		$data['all_data'][$counter]['pincode'] = $query['pincode'];

		$counter++;
	 }
	return $data;
}



function delete($connection,$id){
 $msg=array();
 if($id){
 	$delete = mysqli_query($connection, "DELETE FROM details WHERE id='".$id."' ");
 	$msg['succ']='1';
 }else{
 	$msg['succ'] ='0';
 }
 return $msg;
}


?>