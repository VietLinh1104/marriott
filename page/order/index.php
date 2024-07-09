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
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Navbar.php")?>

        <div class="place-holder-n"></div>

        <!-- seach box -->
        <div class="container-fluid bg-white my-5 py-5">
            <div class="container-sm form-group">
                <h1 class="font-bold mb-4">Tìm kiếm 1 khách sạn</h1>

                <div class="p-2 px-0  d-flex ">
                    <ul class="d-flex font-bold">
                        <a href="#" class="me-2 menu-tab active mb-4"> <li class="px-0 fs-16">Khách sạn</li></a>
                    </ul>
                </div>

                

                <div class="container">
                    <form action="/hien/app/page/list">

                        <div class="row d-flex mb-1">
                            
                            <div class="col d-flex flex-column">
                                <label class="fs-14 text-gray" for="city">Thành phố:</label>
                                <select class="form-select p-3" name="city" required>
                                    <option value="" selected>Chọn điểm đến</option>
                                    <option value="Hanoi, Viet Nam">Hanoi, Viet Nam</option>
                                    <option value="Da Nang, Viet Nam">Da Nang, Viet Nam</option>
                                    <option value="Nha Trang, Viet Nam">Nha Trang, Viet Nam</option>
                                </select>

                            </div>

                            <div class="col">
                                <div class="input-group d-flex flex-column">
                                    <label class="fs-14 text-gray" for="date">Chọn ngày:</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control p-3" name="date-start" />
                                        <input type="date" class="form-control" name="date-end" />

                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <label class="fs-14 text-gray" for="room-type">Chọn phòng:</label>
                                <select class="form-select p-3" name="room-type" >
                                    <option value="" selected>Chọn phòng</option>
                                    <option value="1 Người Lớn">1 Người Lớn</option>
                                    <option value="2 Người Lớn">2 Người Lớn</option>
                                    <option value="2 Người Lớn, 1 Trẻ Em">2 Người Lớn, 1 Trẻ Em</option>
                                </select>
                            </div>
                        </div>

                        <div class="row d-flex mb-2">
                            <div class="col-4 d-flex flex-column">
                                <label class="fs-14 text-gray" for="discount">Mã giảm giá:</label>
                                <select class="form-select p-3" name="discount">
                                    <option value="" selected>Chọn mã giảm giá</option>
                                    <option value="">None</option>
                                </select>
                            </div>

                            <div class="col-4 d-flex flex-column">
                                <label class="fs-14 text-gray" for="brand">Thương hiệu:</label>
                                <select class="form-select p-3" name="brand">
                                    <option value="" selected>Chọn thương hiệu</option>
                                    <option value="SHERATON">SHERATON</option>
                                    <option value="JW MARRIOTT">JW MARRIOTT</option>
                                    <option value="W HOTELS">W HOTELS</option>
                                </select>
                            </div>

                            <div class="col-4 d-flex flex-column ms-auto">
                                <label class="fs-14 text-gray" for="btn"><br></label>
                                <button class="col btn btn-outline-square btn-find-room" action="submit" name="btn"> Tìm Phòng</button>
                            </div>
                        </div>

                    </form>


                </div>


            </div>
        </div>
        <!-- seach box -->

        
       <!-- FOOTER -->
       <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/FooterWhite.php")?>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>