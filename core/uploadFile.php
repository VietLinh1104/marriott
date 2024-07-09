<?php
    function uploadFile($fileItem, $id){


        if (isset($_FILES[$fileItem]) && $_FILES[$fileItem]["error"] == 0) {
            $filename = $_FILES[$fileItem]["name"];

            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
    
            $newFilename =  $fileItem.".". $fileExtension;
    
            
            $idPath = createDirectory("upload/".$id."/");
    
            $success = move_uploaded_file($_FILES[$fileItem]["tmp_name"], "upload/".$id."/". $newFilename);

            $filePath = $id."/". $newFilename;

            if ($success) {
                return $filePath;
            } else {
                // Xử lý khi di chuyển tệp tin không thành công
                echo "Di chuyển tệp tin không thành công.";
                return false;
            }
        }
    }
?>
