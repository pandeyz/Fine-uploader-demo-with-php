<?php
    $file = $_FILES['qqfile'];
    $uploadDirectory = 'upload';
    $target = $uploadDirectory.DIRECTORY_SEPARATOR.$file['name'];
    $result = null;
    if (move_uploaded_file($file['tmp_name'], $target)){
        $result = array('success'=> true);
        $result['uploadName'] = $file['name'];
    } else {
        $result = array('error'=> 'Upload failed');
    }
    header("Content-Type: text/plain");
    echo json_encode($result);
?>