<?php

session_start();
error_reporting(0);
include("dbcon.php");
$userpic =  $_SESSION['email'];
if($userpic==true){

}else{
    // header("location:select.php");
}
echo "welcome".$userpic;
$query = "SELECT * FROM registration WHERE email = '$userpic'";

    $sql = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($sql);
    // echo $result['file'];





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        i.fa.fa-trash {
            color: red;
        }

        button.btn.btn-warning.btn-lg.ms-2 {
            position: absolute;
            top: 16px;
            right: 30px;
            text-decoration: none;
        }
    </style>
    <title>select query</title>
</head>

<body>

    <img src="<?php echo $result['file'];?>" alt="" srcset="" height="50px" width="50px">
    <a href="logout.php">logout</a>
    <div class="viki">
        <table class="table align-middle mb-0 bg-white">
            <h1>List of Registration table</h1>
            <thead class="bg-light">
                <tr>
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>mothername</th>
                    <th>fathername</th>
                    <th>address</th>
                    <th>pincode</th>
                    <th>course</th>
                    <th>email</th>
                    <th>password</th>
                    <th>images</th>
                    <th colspan="2">Action</th>
                </tr>
                <div class="d-flex justify-content-end pt-3">

                    <button type="submit" class="btn btn-warning btn-lg ms-2" name="submit"><a
                            href="registration.php">Back.....</a></button>
                </div>
            </thead>
            <tbody>
    </div>
    <?php
     include 'dbcon.php';

    $selectquery = "SELECT * FROM registration";


    $query = mysqli_query($conn, $selectquery);





    while ($result = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <?php echo $result['id']; ?>

            <td>
                <?php echo $result['firstname']; ?>
            </td>
            <td>
                <?php echo $result['lastname']; ?>
            </td>
            <td>
                <?php echo $result['mothername']; ?>
            </td>
            <td>
                <?php echo $result['fathername']; ?>
            </td>
            <td>
                <?php echo $result['address']; ?>
            </td>
            <td>
                <?php echo $result['pincode']; ?>
            </td>
            <td>
                <?php echo $result['course']; ?>
            </td>
            <td>
                <?php echo $result['email']; ?>
            </td>
            <td>
                <?php echo $result['password']; ?>
            </td>
            <td>
                <img src="<?php echo $result['file']; ?>" alt="" srcset="" height="50px" width="50px">
            </td>
            <td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a> </td>
            <td><a href="delete.php?id=<?php echo $result['id']; ?>" onclick=" return confirm('do you want  to delete this data'); "><i class="fa fa-trash" aria-hidden="true"></i> </a></td>

            </div>

        </tr>
    <?php }
    ?>
    </tbody>
    </table>
</body>

</html>