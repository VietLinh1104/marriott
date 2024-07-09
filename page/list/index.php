<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        
        <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/hien/app/styles/styles.css">
    
        <!-- Bootstrap Datepicker CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="/hien/app/media/favicon.png">

    </head>
    <body styles=>
        <!-- navbar -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Navbar2.php")?>
        <div class="place-holder-1"></div>

        <!-- seach box -->
        <?php
                    include_once($_SERVER['DOCUMENT_ROOT'] . '/hien/app/core/connDB.php'); 

                    $category = $_GET["city"];
                    $sql = "SELECT * FROM produce WHERE city='".$category."'";
                    $result = $db->query($sql);
                    $i = 1;
                    // echo $sql;

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/CardV.php");
                        }
                    }else{
                        echo'Không có sản phẩm nào';
                    }                
        ?>

        <!-- <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/CardV.php")?> -->

        <!-- seach box -->

        
        <!-- FOOTER -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/FooterWhite.php")?>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>