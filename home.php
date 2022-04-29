<?php
include "connection.php";


$sql =  "SELECT * FROM `product`";

$result = mysqli_query($conn, $sql);

if (isset($_GET['deleteId'])){
    $delete = $_GET['deleteId'];
    
    $sql = "DELETE FROM `product` WHERE `no`='$delete'";
 
    $result = $conn->query($sql);
 
    if ($result == TRUE) {
 
        header("Location: home.php");
 
   }else{
 
       echo "Error:" . $sql . "<br>" . $conn->error;
 
   }
 
 } 


?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
       .form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 400;
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
        </style>
</head>
<body>
<?php include_once('sideBar.php'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h4 class="heading"><strong>Note Your </strong> Product<span></span></h4>
        <div class="table-responsive">

              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>No.</th>
                   <th>Product Name</th>
                    <th>Price</th>
                      <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>
    <?php
        if ($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
            $no  = $row['no'];
             
    ?>
    <tr>
    <td><?php echo $no;?></td>
     <td><?php echo $row['productName'];?></td>
     <td><?php echo $row['price'];?></td>
     <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a href = 'edit.php?editID =<?= $no ?>' class = 'text-white'>Edit</a></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a href = 'home.php?deleteId=<?= $no ?>' class = 'text-white'>Delete</a></button></button></p></td>
    </tr>
    <?php
           }
        }
    ?>
    </tbody>
</table>
<div>
        </div>
	</div>
</div>

</body>
</html>