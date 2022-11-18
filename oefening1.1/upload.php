<?php
if(isset($_POST['submit'])) {
    $file = $FILES['file'];
    var_dump($file);
    $FileName=$FILES['file']['name'];
    echo $FileName;
}
?>