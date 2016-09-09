



<?php



$con = mysqli_connect("127.0.0.1", "root", "", "hamadema");





if(mysqli_connect_errno()){
      die("Database connection failed" .
           mysqli_connect_error() .   
             " ( " . mysqli_connect_errno . ")"
      );
    }
$total = 0;
$new = array();
for ($p = 0; $p < 5; $p++) {
    if (isset($_FILES['image' . $p]['name'])) {
        if ($_FILES['image' . $p]['name'] != null) {

            array_push($new, $p);
        }
    }
}
$t = time();
$date=date("Y-m-d",$t);
$time=date("h:i:sa");
$query1 = "INSERT INTO advertisement (posteddate,postedtime,category_idcategory,district_iddistrict,userdetails_iduserdetails) 
            
VALUES ('$date','$time', 1,1,1)";
    if (!mysqli_query($con, $query1)) {
        //echo "jsdbnjdsbv";
        die("Error " . mysqli_error($con));
    }
foreach ($new as $i) {
    $errors = array();
    $file_name = $_FILES['image' . $i]['name'];
    $file_size = $_FILES['image' . $i]['size'];
    $file_tmp = $_FILES['image' . $i]['tmp_name'];
    $file_type = $_FILES['image' . $i]['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image' . $i]['name'])));

    $expensions = array("jpeg", "jpg", "png", "zip", "rar", "7z", "psd", "ai", "cdr");

    if (in_array($file_ext, $expensions) === false) {
        $errors[] = " please choose a JPEG, PNG, ZIP, PSD, AI or CDR file.";
    }

    if ($file_size > 20971520 * 2) {
        $errors[] = 'File size must be excately 40 MB';
    }

    if (empty($errors) == true) {

        
        move_uploaded_file($file_tmp, "uploadedfiles/" . "{$t}" . $file_name);
        $filename = "{$t}" . $file_name;
        echo "<h1>Upload Complete</h1>";
        print_r($new);
    } else {
        print_r($errors[0]);
    }

//    $name = mysqli_real_escape_string($con, $_POST['name']);
        $name = "AAAAAADDDDDD";

//    $number = mysqli_real_escape_string($con, $_POST['number']);
            



    // $query2= mysql_query("SELECT MAX(idadvertisement) FROM advertisement");
    // $row = mysql_fetch_row($query2);
    // $highest_id = $row[0];
//$highest_id = mysqli_fetch_assoc(mysqli_query("SELECT MAX(idadvertisement) FROM advertisement", 0));
$ssql="SELECT idadvertisement FROM advertisement";
$result = $con->query($ssql);
if ($result->num_rows > 0) {
    // output data of each row
    $maxid=0;
    while($row = $result->fetch_assoc()) {
       if($maxid<$row["idadvertisement"]){
        $maxid=$row["idadvertisement"];
    }
    }}



    $query3 = "INSERT INTO adimages (url,advertisement_idadvertisement) 
            
VALUES ('$filename',$maxid)";
    if (!mysqli_query($con, $query3)) {
        //echo "jsdbnjdsbv";
        die("Error " . mysqli_error($con));
    }
}
?>