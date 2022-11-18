<?php  
 $file = $_FILES['file'];
    $name = $file['name'];
    $tmp_name = $file['tmp_name'];
    $size = $file['size'];
    $error = $file['error'];
    $type = $file['type'];
    $ext = explode('.', $name);
    $ext = strtolower(end($ext));
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($ext, $allowed)) {
        if ($error === 0) {
            if ($size <= 2097152) {
                $file_name_new = uniqid('', true) . '.' . $ext;
                $file_destination = 'uploads/' . $file_name_new;
                if (move_uploaded_file($tmp_name, $file_destination)) {
                    echo $file_destination;
                }
            }
        }
    }
?>