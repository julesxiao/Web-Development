<?php
session_start();

//https://stackoverflow.com/questions/19825283/redirect-to-a-page-url-after-alert-button-is-pressed
function alertbox($msg, $page){
    echo "<script>";
    echo "alert('".htmlentities($msg)."');";
    echo "window.location.href ='".htmlentities($page)."';";
    echo "</script>";
    exit;
}

// Not log in, redirect to login page
if(!isset($_SESSION['username'])){
    alertbox("Please log in.","login.php");
}

$private_addr = "/srv/uploads/";
$user_names = "users.txt";
$userfolder = $_SESSION['username'];

exec("rm -r ".$private_addr.$userfolder);
//if(isdir)
$fhand = fopen($private_addr.$user_names, "r");
$userlist = [];
while(!feof($fhand)){
    //Success, redirect
    $cname = rtrim(fgets($fhand));
    if($userfolder != $cname){
        array_push($userlist, $cname);
    }
}

fclose($fhand);
$fhand = fopen($private_addr.$user_names,"w");

foreach($userlist as &$value){
    fwrite($fhand, $value.PHP_EOL);
}

fclose($fhand);
alertbox("Deletion succeed!", "logout.php");
?>



