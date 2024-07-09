<?php
  include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/connDB.php');

  

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sqlQuery = "DELETE FROM produce WHERE id = '{$id}'";

    if ($db->query($sqlQuery) === TRUE) {
        echo 'xoa thanh cong';
        echo "<a href=\"/hien/app/page/admin/list-item\">Go Back -></a>";
    } else {
        echo 'Delete failed: ' . $db->error ;
       
    }
  }else{
    echo "khong co du lieu";
  }
?>
