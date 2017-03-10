<?php
require 'connection.php';
require 'function1.php';

	$error_company_name = "";
	$error_address = "";
	$error_contact = "";
	$error_email = "";
	$error_pincode = "";


if(isset($_POST['update'])){
	$count=0;
	if($_POST['company_name']==""){
		$error_company_name = 'Please enter company name';
		$count++;
	}

	if($_POST['address']==""){
		$error_address = 'Please enter address';
		$count++;
	}

	if($_POST['contact']==""){
		$error_contact = 'Please enter contact';
		$count++;
	}

	if($_POST['email']==""){
		$error_email = 'Please enter email';
		$count++;
	}

	if($_POST['pincode']==""){
		$error_pincode = 'Please enter valid pincode';
		$count++;
	}

	if($count==0){
		echo "company_name=" . $_POST['company_name'] . "<br>";
		echo "address=" . $_POST['address'] . "<br>";
		echo "contact=" . $_POST['contact'] . "<br>";
		echo "email=" . $_POST['email'] . "<br>";
		echo "pincode=" . $_POST['pincode'] . "<br>";

		//function call...

		$result = update($id,$_POST,$connection);
		if($result['succ']==1){
			header('location:crud_list.php');

		}
	}

}
?>
//FORM...
<form method="POST">
company_name: <input type="text" name="company_name" /><br>

    <?php if($error_company_name!= ""){?>
	<p style = "color:red">
		<?php echo $error_company_name;?>
	</p>
	<?php }?>

address: <input type="text" name="address" /><br>

    <?php if($error_address!= ""){?>
	<p style = "color:red">
		<?php echo $error_address;?>
	</p>
	<?php }?>


contact: <input type="text" name="contact" /><br>

    <?php if($error_contact!= ""){?>
	<p style = "color:red">
		<?php echo $error_contact;?>
	</p>
	<?php }?>

email: <input type="text" name="email" /><br>

 <?php if($error_email!= "") {?>
 <p style = "color:red">
 	<?php echo $error_email;?>
 </p>
 <?php }?>

pincode: <input type= "text" name="pincode" /><br>

<?php if($error_pincode!="") {?>
<p style = "color:red">
	<?php echo $error_pincode; ?>
</p>
<?php } ?>

<input type ="submit" name="update" value="update">
</form>