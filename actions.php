<?php session_start();

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
	$id = $_GET['product_id'];
	$product_name = $_GET['product_name'];
	$quantity = $_GET['quantity'];
	$price = $_GET['price'];
	$image=$_GET['image'];

	$product_arr = array(
		'product_id'=>$id,
		'product_name'=>$product_name,
		'quantity'=>$quantity,
		'price'=>$price,
		'image'=>$image,
	);

	if(!empty($_SESSION['cart']))
	{
		$product_ids = array_column($_SESSION['cart'], 'product_id');
		if(in_array($id, $product_ids))
		{
			foreach($_SESSION['cart'] as $key => $val)
			{
				if($_SESSION['cart'][$key]['product_id']==$id)
				{
					$_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $quantity;
				}
				
			}
			
		}
		else
		{
			$_SESSION['cart'][] = $product_arr;
		}
	}
	else
	{
		$_SESSION['cart'][] = $product_arr;
	}
	header("location:cart.php");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['cart']))
	{
		unset($_SESSION['cart'][$index]);
		header("location:cart.php");
	}

}


?>
