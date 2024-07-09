<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        
        <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/hien/app/styles/styles.css">

        <link rel="icon" type="image/png" href="/hien/app/media/favicon.png">

    </head>
    <body styles=>
        <!-- navbar -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Navbar.php")?>

        <div class="place-holder-n"></div>

        <!-- banner -->
        <div class="container-fluid mb-5" id="banner">
            <!-- <div class="navbar-placeholder"></div> -->
            <div class="row">
                <div class="position-relative p-0">
    
                    <div class="col text-white  m-0 p-0 first-div">
                        <img src="/hien/app/media/banner.jpg" class="card-img-top custom-image" alt="...">
                        <div class="text-overlay gradient-bg">
                            <div class="text-banner transparent my-auto" id="text-banner">
    
                                <h1 class="font-family-condensed fs-28 font-bold">KỲ NGHỈ BIỆT THỰ,</h1>
                                <h1 class="font-family-condensed fs-16 font-medium">Hãy cùng những người thân yêu tận hưởng một chuyến đi đáng nhớ trong những căn biệt thự sang trọng, thoải mái chi tiêu tại biệt thự, cùng cơ hội tích lũy hàng ngàn điểm thưởng Marriott Bonvoy khi chu du khắp cả nước.</h1>
                                <button class="btn mt-2 btn-outline-light rounded-pill border-thick border-width-3px ">LEARN MORE</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->

        <!-- item -->
        <div class="container-sm mb-5">

            <!-- card container -->
            <div class="container-sm d-flex flex-row flex-wrap row justify-content-center">

                <div class="container-fluid px-5">
                    <h3 class="font-family-mont font-bold">Ưu đãi Nổi bật</h3>
                    <p class="font-family-mont fs-14 font-regular mb-4">Tận hưởng thêm nhiều quyền lợi hấp dẫn khi là thành viên Marriott Bonvoy</p>

                </div>

                <?php
                    include_once($_SERVER['DOCUMENT_ROOT'] . '/hien/app/core/connDB.php'); 

                    $sql = "SELECT * FROM produce";

                    $result = $db->query($sql);
                    $i = 1;

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Card.php");
                        }
                    } else {
                        echo "Không có sản phẩm nào.";
                    }

                    // $db->close();

                ?>

            </div>
            <!-- card container -->

        </div>
        <!-- item -->


        <!-- item -->
        <div class="container-sm mb-5">
            <!-- header 2 -->
            <div class="container-fluid px-5 mb-4">
                <h3 class="font-family-mont font-bold">Khám phá thêm nhiều ưu đãi hấp dẫn</h3>
            </div>

            <!-- card container -->
            <div class="container-sm m-0 d-flex flex-row flex-wrap row px-5">


                <div class="container-fluid mb-5" id="banner">
                    
                    <div class="row">
                     

                        <div class="col position-relative p-0 mx-3 card-lg">
                            <div class="col text-white  m-0 p-0 first-div">
                                <img src="/hien/app/media/1.avif" class="card-img-top custom-image card-lg" alt="...">
                                <div class="text-overlay-bottom gradient-bg">
                                    <div class="text-card transparent " id="text-banner">
            
                                        <h1 class="font-family-condensed fs-16 font-bold">Lễ hội ẩm thực Eat Out</h1>
                                        <h1 class="font-family-condensed fs-14 font-medium">Áp dụng đến 30/06/2024</h1>
                                        <button class="btn mt-2 btn-outline-light rounded-pill border-thick border-width-3px ">LEARN MORE</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       


                        <div class="col position-relative p-0 mx-3 card-lg">
                            <div class="col text-white  m-0 p-0 first-card-lgdiv">
                                <img src="/hien/app/media/2.avif" class="card-img-top custom-image " alt="...">
                                <div class="text-overlay-bottom gradient-bg">
                                    <div class="text-card transparent " id="text-banner">
            
                                        <h1 class="font-family-condensed fs-16 font-bold">Biến ý tưởng thành hiện thực</h1>
                                        <h1 class="font-family-condensed fs-14 font-medium">Áp dụng đến 30/06/2024</h1>
                                        <button class="btn mt-2 btn-outline-light rounded-pill border-thick border-width-3px ">LEARN MORE</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- card item -->

            </div>
            <!-- card container -->

        </div>
        <!-- item -->

        <!--  -->
        <div class="container-fluid mb-5 m-0 p-0">
            <img src="/hien/app/media/last-img.png" alt="" class="w-100">
        </div>

        <div class="container-sm p-4 px-5 mb-5" >
            <img src="/hien/app/media/icon-list.png" alt="" class="w-100 px-5">
        </div>
        
        <!-- FOOTER -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Footer.php")?>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>