
<?php

$conn = mysqli_connect("localhost","root","","spicykitchen");

mysqli_select_db($conn,'spicykitchen');
$r='select * from  menu';
$re=mysqli_query($conn,$r);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <?php
            
while($row=mysqli_fetch_array($re)){

    // echo"<tr><td>".$row['id'];
    // echo"<td>".$row['name'];
    // echo"<td>".$row['amount'];
    // echo"<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:200px;height:200px;/>";
   
    ?>
    <tr>

    <td><?php $row['id']?></td>
    <td><?php $row['name']?></td>
    <td><?php $row['amount']?></td>
    <td><?php $row['image']?></td>
    <td><a href="update.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary btn-rounded mb-2">Update</button></a></td>


    
    <tr>
        <?
}
    ?>
    <td><button class="btn btn-outline-warning mt-3" type="submit" name="edit"><a href="update.php?id=<?php echo $values['id'] ?>">EDIT</a></td>
    <td><button class="btn btn-outline-danger mt-3" type="submit" name="delete"><i class="bi bi-trash"></i>DELETE</td>

 </tbody>
</table>   
<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>