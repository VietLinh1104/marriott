<!-- navbar -->

<?php

$city = $_GET["city"];
$dateStart = $_GET["date-start"];
$dateEnd = $_GET["date-end"];
$roomType = $_GET["room-type"];

$timestampS = strtotime($dateStart);
$timestampE = strtotime($dateEnd);

    include($_SERVER['DOCUMENT_ROOT']. "/hien/app/core/convertDate.php");
    $timeStart = convert($timestampS);
    $timeEnd = convert($timestampE);
    
?>

<nav class=" navbar navbar-expand-lg bg-white shadow-sm fixed-top align-items-center py-0 px-5 m-holder">
    <div class="container-sm w-100 d-flex  align-items-center p-0">
        <div class="container-fluid p-0">
            <div class="row my-4" >
                <div class="col-3 d-flex flex-column ps-4">
                    <label for="address" class="fs-14 text-gray">Điểm đến</label>
                    <a href="#" class="font-normal" name="address"><?php echo $city  ?></a>

                </div>
                <div class="col border-end border-gray d-flex flex-column ">
                    <label for="address" class="fs-14 text-gray">Ngày</label>
                    <a href="#" class="font-normal" name="address"><?php  echo ($timeStart." - " .$timeEnd); ?></a>

                </div>
                <div class="col d-flex ps-4 ">
                    <div class="w-50 d-flex flex-column">
                        <label for="address" class="fs-14 text-gray">Phòng & Khách</label>
                        <a href="#" class="font-normal" name="address"><?php echo $roomType?> / Phòng</a>
                    </div>
                    <button class="col btn btn-outline-square btn-find-room ms-5 me-4" onClick="window.location.href='/hien/app/page/order';" action="submit" name="btn" > CHỈNH SỬA</button>

                </div>
                
            </div>

        </div>
    </div>
    </nav>
    <!-- navbar -->

    <!-- navbar -->
    <nav class=" navbar navbar-expand-lg bg-white shadow-sm fixed-top align-items-center py-0  ">
    <div class="container-sm w-100 d-flex  align-items-center">
        <!-- Logo -->
        <div class="container">
            <div class="row">
                <div class="col   d-flex ">
                    <ul class="d-flex ms-auto fs-14">
                        <a href="#" class="me-2 my-auto"> <li class="px-1 m-0">Trợ Giúp</li></a>
                        <a href="#" class="me-2 my-auto"> <li class="px-1 m-0">Tiếng Việt</li></a>
                        <a href="#" class="me-2 my-auto"> <li class="px-1 m-0">Chuyến Đi Của Tôi</li></a>
                        <a href="#" class="me-2 my-auto me-3"> <li class="px-1 m-0">Đăng Nhập Hoặc Tham Gia</li></a>
                        <a href="/hien/app/page/home" class="navbar-brand m-0 p-0 d-flex align-items-center">
                            <img src="../../media/logo-2.png" alt="Logo" class="logo-size-2 m-0 shadow">
                        </a>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</nav>
    <!-- navbar -->