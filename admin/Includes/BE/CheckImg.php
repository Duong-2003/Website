<?php
  function IsAlreadyExists($target_file){
    if (file_exists($target_file)) {
        return true;
    }
    return false;
  }
  function IsExceedingFileSize($size,$sizeMax){
    if ($_FILES["fileToUpload"]["size"] > $sizeMax) {
        return true;
    }
    return false;
  }

?>