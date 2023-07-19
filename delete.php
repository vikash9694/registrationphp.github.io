<?php


include 'dbcon.php';

$id = $_GET['id'];

$deletequery = "delete from registration where id = $id";

$query = mysqli_query($conn,$deletequery);
if($query == true){
    ?>
    <script>
        alert("DATA SUCCESFULL DELETE");
    </script>

    <?php
}else{
?>
<script>
        alert("DATA  NOT DELETE ");
    </script>
    <?php
}

header("location:select.php");




























?>