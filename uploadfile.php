<?php
$targe_dir = "nameee";
$targe_file = $targe_dir . basename($_FILES["file"]["name"]);

if(move_uploaded_file($_FILES["file"]["tmp_name"], $targe_file)){
    echo "Dateiupload erfolgreinch";
}else{
    echo "Dateiupload fehlgeschlagen!";
}
?>