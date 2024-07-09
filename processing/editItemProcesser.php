<?php
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/connDB.php');
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/uploadFile.php');
include($_SERVER['DOCUMENT_ROOT'].'/hien/app/core/createDirectory.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $modelName = $_POST['modelName'];
    $brandName = $_POST['brandName'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $roomType = $_POST['room-type'];
    $fileItem = "img-produce";

    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $newdirItem = uploadFile($fileItem, $id);

        $sqlQuery = "
            UPDATE produce
            SET modelName = '$modelName',
                brandName = '$brandName',
                city = '$city',
                price = '$price',
                roomType = '$roomType',
                imgPath = '$newdirItem'
            WHERE id = '$id'
        ";

        if($db->query($sqlQuery) == TRUE){
            echo "Data update successfully";
        }else{
            echo "Error: ".$db->error;
        }
    
        $db->close();

        echo 'ID: '. $id.'<br>';
        echo 'modelName: '. $modelName.'<br>' ;
        echo 'brandName: '. $brandName.'<br>';
        echo 'price: '. $price.'<br>';
        echo 'city: '. $city.'<br>';
        echo 'roomType: '. $roomType.'<br>';
        echo 'img: '.$newdirItem.'<br>';

        echo "<a href=\"/hien/app/page/admin/list-item\">Go Back -></a>";
        
    }

}


?>