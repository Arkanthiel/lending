<?php
$id = $_SESSION['id'];
$udir= "members/".$id."/";

if(!is_dir($udir)){

    mkdir("members/".$id, 0777);
}

$ufile = $udir . basename($_FILES['file']['name']);
$allexts = array("jpg", "jpeg", "gif", "png");
$ext = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 2000000)
    && in_array($ext, $allexts)){
    if (move_uploaded_file($_FILES['file']['tmp_name'], $ufile)) {
        echo "File upload was successful.";
    } else {
        echo "An error has occured. Please try again.";
    }
} else {
    echo "Invalid file type. Please try again.";
}
