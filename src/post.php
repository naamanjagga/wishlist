<?php 
 if(!isset($_SESSION['addtocart2'])){
    $_SESSION['addtocart2'] = array();
 }
 if(!isset($_SESSION['buynow'])){
    $_SESSION['buynow'] = array();
 }
 if(!isset($_SESSION["wishlist"])){
    $_SESSION["wishlist"]= array();
 }


    
     if(isset($_POST["submit0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 101'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 102'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 103'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 104'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 105'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
       
    }

    if(isset($_POST["buynow0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 101'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 102'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 103'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 104'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 105'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
       
    }

    if(isset($_POST["wishlist0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["wishlist"]) == 0) {
            array_push( $_SESSION["wishlist"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["wishlist"]) ; $i++){
                
                if($_SESSION["wishlist"][$i][1]=='Product 101'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["wishlist"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["wishlist"] ,$naman);
            }
        }
    }
    if(isset($_POST["wishlist1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["wishlist"]) == 0) {
            array_push( $_SESSION["wishlist"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["wishlist"]) ; $i++){
                
                if($_SESSION["wishlist"][$i][1]=='Product 102'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["wishlist"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["wishlist"] ,$naman);
            }
        }
    }
    if(isset($_POST["wishlist2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["wishlist"]) == 0) {
            array_push( $_SESSION["wishlist"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["wishlist"]) ; $i++){
                
                if($_SESSION["wishlist"][$i][1]=='Product 103'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["wishlist"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["wishlist"] ,$naman);
            }
        }
    }
    if(isset($_POST["wishlist3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["wishlist"]) == 0) {
            array_push( $_SESSION["wishlist"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["wishlist"]) ; $i++){
                
                if($_SESSION["wishlist"][$i][1]=='Product 104'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["wishlist"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["wishlist"] ,$naman);
            }
        }
    }
    if(isset($_POST["wishlist4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["wishlist"]) == 0) {
            array_push( $_SESSION["wishlist"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["wishlist"]) ; $i++){
                
                if($_SESSION["wishlist"][$i][1]=='Product 105'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["wishlist"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["wishlist"] ,$naman);
            }
        }
       
    }

function display() {
    echo '<table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
    echo '<button type="submit" name="remove">remove all</button>';
    echo '<button type="submit" name="add">add all to buy now</button>';
    echo '<button type="submit" name="add1">add all to wishlist</button>';
    $i = 0;
      foreach( $_SESSION["addtocart2"] as $key => $value){
          //echo $key;
           echo '<tr><td>'.$value[0].'</td>';
           echo '<td>'.$value[1].'</td>';
           echo '<td>'.$value[2].'</td>';
           echo '<td>'.$value[3].'</td>';
           echo '<td><input type="text" name="text'.$i.'"></td>';
           echo '<td><input type="submit" name="edit'.$i.'" value="Edit"></td>';
           echo '<td><input type="submit" name="del'.$i.'" value="Delete"></td>';
           echo '<td><input type="submit" name="movetowish'.$i.'" value="Add to Wishlist "></td>';
           echo '<td><input type="submit" name="move'.$i.'" value="Buy Now"></td></tr>';
           echo '<br>';
           $i++;
      }

    echo '</table>';
 }
function dis() {
    echo '<table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
    echo '<button type="submit" name="remove1">remove all</button>';
    echo '<button type="submit" name="add2">add all to cart</button>';
    echo '<button type="submit" name="add3">add all to wishlist</button>';
    $i = 0;
      foreach( $_SESSION["buynow"] as $key => $value){
           echo '<tr><td>'.$value[0].'</td>';
           echo '<td>'.$value[1].'</td>';
           echo '<td>'.$value[2].'</td>';
           echo '<td>'.$value[3].'</td>';
           echo '<td><input type="text1" name="text1'.$i.'"></td>';
           echo '<td><input type="submit" name="Edit'.$i.'" value="Edit"></td>';
           echo '<td><input type="submit" name="Del'.$i.'" value="Delete"></td>';
           echo '<td><input type="submit" name="movetowish1'.$i.'" value="Add to WishList"></td>';
           echo '<td><input type="submit" name="Move'.$i.'" value="Move To Cart"></td></tr>';
           echo '<br>';
           $i++;
      }

    echo '</table>';
}
function wish() {
    echo '<table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
    echo '<button type="submit" name="remove2">remove all</button>';
    echo '<button type="submit" name="add4">add all to cart</button>';
    echo '<button type="submit" name="add5">add all to buy now</button>';
    $i = 0;
      foreach( $_SESSION["wishlist"] as $key => $value){
           echo '<tr><td>'.$value[0].'</td>';
           echo '<td>'.$value[1].'</td>';
           echo '<td>'.$value[2].'</td>';
           echo '<td>'.$value[3].'</td>';
           echo '<td><input type="text1" name="text2'.$i.'"></td>';
           echo '<td><input type="submit" name="q_edit'.$i.'" value="Edit"></td>';
           echo '<td><input type="submit" name="delete'.$i.'" value="Delete"></td>';
           echo '<td><input type="submit" name="movetobuy'.$i.'" value="Buy Now"></td>';
           echo '<td><input type="submit" name="movetoadd'.$i.'" value="Move To Cart"></td></tr>';
           echo '<br>';
           $i++;
      }

    echo '</table>';
}

// move to cart wishlish and buy now starts here
//from add to cart to buy now
for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
    if(isset($_POST['move'.$j])) {

          array_push($_SESSION['buynow'],$_SESSION['addtocart2'][$j]);
          array_splice($_SESSION['addtocart2'],$j,1);
    }
}
//from buy now to add to cart
for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
    if(isset($_POST['Move'.$j])) {

          array_push($_SESSION['addtocart2'],$_SESSION['buynow'][$j]);
          array_splice($_SESSION['buynow'],$j,1);
    }
}
//from add to cart to wishlist
for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
    if(isset($_POST['movetowish'.$j])) {

          array_push($_SESSION['wishlist'],$_SESSION['addtocart2'][$j]);
          array_splice($_SESSION['addtocart2'],$j,1);
    }
}
//from buy now to wishlist
for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
    if(isset($_POST['movetowish1'.$j])) {

          array_push($_SESSION['wishlist'],$_SESSION['buynow'][$j]);
          array_splice($_SESSION['buynow'],$j,1);
    }
}
//from wishlist to buy now
for($j = 0;$j < count($_SESSION['wishlist']) ; $j++){
    if(isset($_POST['movetobuy'.$j])) {

          array_push($_SESSION['buynow'],$_SESSION['wishlist'][$j]);
          array_splice($_SESSION['wishlist'],$j,1);
    }
}
//from wish list to add to cart
for($j = 0;$j < count($_SESSION['wishlist']) ; $j++){
    if(isset($_POST['movetoadd'.$j])) {

          array_push($_SESSION['addtocart2'],$_SESSION['wishlist'][$j]);
          array_splice($_SESSION['wishlist'],$j,1);
    }
}
// move to cart wishlish and buy now ends here
// delete part starts
//delete from cart
for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
   
    if(isset($_POST['del'.$j])) {
        array_splice($_SESSION['addtocart2'],$j,1);
    }
 }
 //delete from buy now
 for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
   
    if(isset($_POST['Del'.$j])) {
        array_splice($_SESSION['buynow'],$j,1);
    }
 }
 //delete from wishlist
 for($j = 0;$j < count($_SESSION['wishlist']) ; $j++){
   
    if(isset($_POST['delete'.$j])) {
        array_splice($_SESSION['wishlist'],$j,1);
    }
 }
 //edit in cart
 for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
    if(isset($_POST['edit'.$j])) {
        foreach( $_SESSION["addtocart2"] as $key => $value){
            if($key == $j) {
                 $_SESSION["addtocart2"][$key][3] = $_POST['text'.$j];
            }
        }
        
    }
  
 }
 //edit in buy now
 for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
    if(isset($_POST['Edit'.$j])) {
        foreach( $_SESSION["buynow"] as $key => $value){
            if($key == $j) {
                 $_SESSION["buynow"][$key][3] = $_POST['text1'.$j];
            }
        }
        
    }
  
 }
  //edit in wishlist
  for($j = 0;$j < count($_SESSION['wishlist']) ; $j++){
    if(isset($_POST['q_edit'.$j])) {
        foreach( $_SESSION["wishlist"] as $key => $value){
            if($key == $j) {
                 $_SESSION["wishlist"][$key][3] = $_POST['text2'.$j];
            }
        }
        
    }
  
 }
 //adding all the elements of an array to another array
 //adding all to buy now
 if(isset($_POST['add'])){
    foreach($_SESSION['addtocart2'] as $key => $value){
    array_push($_SESSION['buynow'] ,$_SESSION['addtocart2'][$key]);
  }
  unset($_SESSION['addtocart2']);
   
}
//adding all to wishlist
if(isset($_POST['add1'])){
    foreach($_SESSION['addtocart2'] as $key => $value){
    array_push($_SESSION['wishlist'] ,$_SESSION['addtocart2'][$key]);
  }
  unset($_SESSION['addtocart2']);
   
}
//adding all to cart
if(isset($_POST['add2'])){
    foreach($_SESSION['buynow'] as $key => $value){
    array_push($_SESSION['addtocart2'] ,$_SESSION['buynow'][$key]);
  }
  unset($_SESSION['buynow']);
   
}
//adding all to wishlist
if(isset($_POST['add3'])){
    foreach($_SESSION['buynow'] as $key => $value){
    array_push($_SESSION['wishlist'] ,$_SESSION['buynow'][$key]);
  }
  unset($_SESSION['buynow']);
   
}
//adding all to add to cart
if(isset($_POST['add4'])){
    foreach($_SESSION['wishlist'] as $key => $value){
    array_push($_SESSION['addtocart2'] ,$_SESSION['wishlist'][$key]);
  }
  unset($_SESSION['wishlist']);
   
}
//adding all to buy now
if(isset($_POST['add5'])){
    foreach($_SESSION['wishlist'] as $key => $value){
    array_push($_SESSION['buynow'] ,$_SESSION['wishlist'][$key]);
  }
  unset($_SESSION['wishlist']);
   
}

// removing all the elements add to cart buynow and wish list
  if(isset($_POST['remove'])){
    unset($_SESSION['addtocart2']);
     
  }
 if(isset($_POST['remove1'])){
    unset($_SESSION['buynow']);
      
  }
  if(isset($_POST['remove2'])){
    unset($_SESSION['wishlist']);
      
  }


?>