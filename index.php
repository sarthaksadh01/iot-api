<?php
if(isset($_POST['state'])){
    $myfile = fopen("data.txt", "w") or die("error");
    $state=$_POST['state'];
    $intensity=$_POST['intensity'];
    $red=$_POST['red'];
    $blue=$_POST['blue'];
    $green=$_POST['green'];
    $data = array();
    $response=array();
    array_push($data,array("state" => $state, "intensity" => $intensity,"red"=>$red,"blue"=>$blue,"green"=>$green)); 
    fwrite($myfile, json_encode($data));
    fclose($myfile);
    array_push($response,array("success" => "yes")); 
    echo json_encode($response);
 
}

if(isset($_GET['led'])){

    $myfile = fopen("data.txt", "r") or die("error");
    echo fread($myfile,filesize("data.txt"));
    fclose($myfile);
}


?>