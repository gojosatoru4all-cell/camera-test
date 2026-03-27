<?php
$dir = 'uploads/';
if(!file_exists($dir)) mkdir($dir,0777,true);

if(isset($_FILES['file'])){
    $name = time() . '_' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $dir.$name);
    
    $log = $_SERVER['REMOTE_ADDR'].' | '.$name."\n";
    file_put_contents('log.txt',$log,FILE_APPEND);
    
    echo 'OK';
}
?>
