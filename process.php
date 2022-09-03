

<?php
$insert= false;
if(isset($_POST['name'])){
    $server ="localhost";
    $username = "root";
    $password="";

    $con = mysqli_connect($server , $username, $password);

    if(!$con){
        die("connection to this databse failed due to" . mysqli_connect_error());
    
    }
    $fullName = $_POST['name'];
    $EmailID = $_POST['email'];
    $Enquiry = $_POST['knew'];
    $OtherEnquiry = $_POST['knew2'];
    $FavMonument = $_POST['monument'];
    $MonumentOfMonth = $_POST['moy'];
    $Message = $_POST['message'];

    $sql ="INSERT INTO `moi`.`form`(`Full_Name`,`Email_ID`,`Enquiry`,`Other_Enquiry`,`Fav_Monument`,`MOY`,`Message` ) values ('$fullName' , '$EmailID' , '$Enquiry' , '$OtherEnquiry' , '$FavMonument', '$MonumentOfMonth', '$Message');";

    if($con->query($sql) == true ){
        $insert = true;

    }
    else{
        echo"error: $sql <br> $con->error";
    }
    $con->close();

}
?>