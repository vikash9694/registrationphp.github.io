<?php
 session_start();
?>

<?php
$nameErr = $lastnameErr = $mothernameErr = $fathernameErr = $addressErr = $pincodeErr = $courseErr = $emailErr = $password = $file = $date = "";
if (isset($_POST['submit'])) {
    // start    Name validatin
 
    if (empty($_POST['firstname'])) {
        $nameErr = "Plz enter tha name";
    } else {
        $name = filterdata($_POST['firstname']);
        if (!preg_match("/^[a-zA-Z'. -]+$/", $name)) {
            $nameErr = "Plz enetr tha spacial createres";
        }
    }

    // end name validation



    // start last name validatin
    if (empty($_POST['lastname'])) {
        $lastnameErr = "Plz enter tha lastname";
    } else {
        $lastname = filterdata($_POST['lastname']);
        if (!preg_match("/^[a-zA-Z'. -]+$/", $lastname)) {
            $lastnameErr = "Plz enetr tha spacial createres";
        }
    }

//  end last name validation

// mother name validation

if (empty($_POST['mothername'])) {
    $mothernameErr = "Plz enter tha lastname";
} else {
    $mothername = filterdata($_POST['mothername']);
    if (!preg_match("/^[a-zA-Z'. -]+$/", $mothername)) {
        $mothernameErr = "Plz enetr tha spacial createres";
    }
}

// end of tha father name
if (empty($_POST['fathername'])) {
    $fathernameErr = "Plz enter tha fathername";
} else {
    $fathername = filterdata($_POST['fathername']);
    if (!preg_match("/^[a-zA-Z'. -]+$/", $fathername)) {
        $fathernameErr = "Plz enetr tha spacial createres";
    }
}


}
function filterdata($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        span {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- echo htmlspecialchars($_SERVER['PHP_SELF']); -->
<body>
    <?php echo  $_SESSION['duplicate_email']; ?>
    <form action="#" method="POST" enctype="multipart/form-data">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="img.webp" alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    <div class="select">
                                        <a href="select.php">Table List</a>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <span id="name">
                                                        <?php if (isset($_POST['firstname'])){echo $nameErr;} ?>
                                                    </span>
                                                    <input type="text" id="form3Example1m" value=""
                                                        class="form-control form-control-lg" name="firstname" />


                                                    <label class="form-label" for="form3Example1m">First name</label>

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <span id="name">
                                                        <?php echo $lastnameErr; ?>
                                                    </span>
                                                    <input type="text" id="form3Example1n" name="lastname"
                                                        class="form-control form-control-lg " />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <span><?php echo $mothernameErr ?></span>
                                                    <input type="text" id="form3Example1m1" name="mothername"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m1">Mother's
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <span><?php echo $fathernameErr  ?></span>
                                                    <input type="text" id="form3Example1n1" name="fathername"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n1">Father's
                                                        name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="address"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>



                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" name="pincode"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example90">Pincode</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example99" name="course"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example99">Course</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" name="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example97" name="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="file" id="form3Example97" name="file"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">image</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="date" id="form3Example97" name="date"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">image</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2"
                                                name="submit">Submit form</button>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2" id="viki"
                                                name="submit"><a href="login.php">Log in </a></button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


</body>

</html>

<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {

//print_r($_POST);

    $email = $_POST['email'];
    $sqll = "SELECT * FROM registration WHERE `email`='$email'";

    //echo $sqll;


    $ssql = mysqli_query($conn,$sqll);
    $total =mysqli_num_rows($ssql);
// print_r($total);
    //echo count($total);
//echo $total;
    if($total>=1){
        $_SESSION['duplicate_email'] = $email."  email id is alreay exist, please try something else";
        // header("location:select.php"); 
    }
    else{


    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $mothername = mysqli_real_escape_string($conn, $_POST['mothername']);
    $fathername = mysqli_real_escape_string($conn, $_POST['fathername']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $filepath = "imges/" . $_FILES["file"]["name"];
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
    }
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));


    $insert = "INSERT INTO registration VALUES(null,'$firstname','$lastname','$mothername','$fathername','$address','$pincode','$course','$email','$password','$filepath','$date')";

  //  echo $insert;

    $connquery = mysqli_query($conn, $insert);

}
}
?>