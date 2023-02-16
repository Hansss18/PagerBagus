<?php
	include('../conn.php');

	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$pcompany=$_POST['company'];
	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

        echo '$pcompany';
	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"../upload/" . $newFilename);
	$location="../upload/" . $newFilename;
	}
	
	$sql="insert into product (productname, categoryid, price, photo, company) values ('$pname', '$category', '$price', '$location', '$pcompany')";
	$conn->query($sql);

	header('location:index.php');

?>