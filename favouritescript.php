<?php session_start();

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
	$id = $_GET['product_id'];
	$product_name = $_GET['product_name'];
	$quantity = $_GET['quantity'];
	$price = $_GET['price'];
	$image=$_GET['image'];
    $description=$_GET['description'];

	$product_arr = array(
		'product_id'=>$id,
		'product_name'=>$product_name,
		'quantity'=>$quantity,
		'price'=>$price,
		'image'=>$image,
        'description'=>$description,
	);

	if(!empty($_SESSION['favourite']))
	{
		$product_ids = array_column($_SESSION['favourite'], 'product_id');
		if(!in_array($id, $product_ids))
		{	
			$_SESSION['favourite'][] = $product_arr;
		}
	}
	else
	{
		$_SESSION['favourite'][] = $product_arr;
	}
	header("location:favourite.php");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['favourite']))
	{
		unset($_SESSION['favourite'][$index]);
		header("location:favourite.php");
	}

}


?>
