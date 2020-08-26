<?php

function validate_input_text($textValue){
    if (!empty($textValue)){
        $trim_text = trim($textValue);
        // Quitar carateres ilegales
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}


// profile image
function upload_image($path, $file){
    $targetDir = $path;
    $default = "11.jpg";

    // get the filename
    $filename = basename($file['name']);
    $targetFilePath = $targetDir . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    If(!empty($filename)){
        // allow certain file format
        $allowType = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowType)){
            // upload file to the server
            if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                return $targetFilePath;
            }
        }
    }

    // return default image
    return $path . $default;
}



