<?php
if(isset($_POST['file'])){
    $file = '../../../manager/images/models/' . $_POST['file'];
    if(file_exists($file)){
        unlink($file);
    }
}
?>
