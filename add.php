<?php
include "connection.php";

if(isset($_POST['add'])){


  $productName = $_POST['productName'];
  $price = $_POST['price'];

  $sql = "INSERT INTO `product` (`productName`, `price`) VALUES ('$productName', '$price')";
  

   if (mysqli_query($conn , $sql)){
      header("Location: home.php");
   }else{
       echo "error";
   }

}

mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>

    <style>
    form_main {
    width: 100%;
}

.body{

    margin        : 0;
   padding       : 0;
   display       : grid;
   place-content : center;
   min-height    : 100vh;

}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
   
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: center;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}

    </style>
</head>
<body>
<?php include_once('sideBar.php'); ?>
       
<object type="text/html" data="menu.html"></object>
<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Add your </strong> product <span></span></h4>
                <div class="form">
                <form  action="" method="post" >
                    <input type="text" required="" placeholder="Product" value="" name="productName" class="txt">
                    <input type="text" required="" placeholder="Price" value="" name="price" class="txt">
                     <input type="submit" value="add" name="add" class="txt2">
                </form>
            </div>
            </div>
            </div
	</div>
</div>
</body>
</html>
