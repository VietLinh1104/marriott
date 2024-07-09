<?php 
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/connDB.php');
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/uploadFile.php');
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/createDirectory.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = md5(uniqid('', true)); //id

        // Nhận dữ liệu từ form
        $modelName = $_POST['modelName'];
        $brandName = $_POST['brandName'];
        $city = $_POST['city'];
        $price = $_POST['price'];
        $roomType = $_POST['room-type'];
        $fileItem = "img-produce";

        $newdirItem = uploadFile($fileItem, $id);

        $sqlQuery = "INSERT INTO produce VALUES ('$id','$modelName','$brandName','$city','$price','$roomType','$newdirItem',NOW(),NOW())";

        if($db->query($sqlQuery)==TRUE){
            echo "New record created successfully";
        }else{
            echo "Error: ".$db->error;
        }

        $db->close();

        // Kiểm tra và in ra dữ liệu
        echo "<h1>Form Data</h1>";
        echo "<p><strong>Tên Loại Xe:</strong> $modelName</p>";
        echo "<p><strong>Tên Hãng:</strong> $brandName</p>";
        echo "<p><strong>Giá Bán:</strong> $price</p>";
    
        echo "<a href=\"/hien/app/page/admin/list-item\">Go Back -></a>";
    }
    
    
?>