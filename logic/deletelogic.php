<?php
     if(isset($_REQUEST['delete'])){
         delete($conn, $id);
         header("Location: index.php");
         exit();
     }


?>