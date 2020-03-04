<?php
    $dir_path="uploads/";
 if(is_dir($dir_path))
 {
     $files=scandir($dir_path);
     
     for($i=0;$i<count($files);$i++)
     {
         echo "<img src='$dir_path $files[$i]'>";
     }
 }
?>



