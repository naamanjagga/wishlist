<?php 
   session_start();
  // session_destroy();
  include "post.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	
	<div id="main">
	<?php
$product = array(
	array('a' => 0, 'id' => 101,'name' => "Basket Ball",'image' => "basketball.png",'price' => 150),
	array('a' => 1, 'id' => 102,'name' => "Football",'image' => "football.png",'price' => 120),
	array('a' => 2, 'id' => 103,'name' => "Soccer",'image' => "soccer.png",'price' => 90),
	array('a' => 3, 'id' => 104,'name' => "Table Tennis",'image' => "table-tennis.png",'price' => 110),
	array('a' => 4, 'id' => 105,'name' => "Tennis",'image' => "tennis.png",'price' => 80)
  );
  echo '<div id="products">
  <form method="post" action="">';
  $i = 0;
  foreach($product as $k => $v){
	echo '<div id="product-101" class="product">
	<img src="images/'.$v['image'].'">
	<h3 class="title"><a href="#">Product '.$v['id'].'</a></h3>
	<span>Price: $'.$v['price'].'</span>
	<input type="submit" value="add to cart" name="submit'.$i.'"> 
	<input type="submit" value="buy now" name="buynow'.$i.'"> 
    <input type="submit" value="add to wishlist" name="wishlist'.$i.'"> 
	<a class="add-to-cart" name="addtocart" href="#">Add To Cart</a>
	</div>';
    $i++;
  }
  echo '</form></div>';

?>
<form method="post" action="">
	<h1>CART</h1>
	<?php display(); ?><br>
	<h1>BUY NOW</h1>
	<?php dis(); ?><br>
    <h1>WISH LIST</h1>
	<?php wish(); ?><br>
</form>
</body>
</html>