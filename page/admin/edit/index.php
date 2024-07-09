<?php include ($_SERVER['DOCUMENT_ROOT'] . '/hien/app/core/connDB.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edit Item | Điện Tử Cường Thuận</title>
    <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/hien/app/styles/sass.css">
    <link rel="icon" type="image/png" href="/hien/app/media/favicon.png">
</head>
<body>

    <?php
        // Lấy id từ URL và kiểm tra giá trị của nó
        $id = $_GET['id'];

        // Sử dụng prepared statement để tránh lỗi và cải thiện bảo mật
        $sqlQuery = "SELECT * FROM produce WHERE id = '".$id."'";

        $result = $db->query($sqlQuery);

        // Kiểm tra và lấy dữ liệu từ kết quả truy vấn
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $brandName = $row["brandName"];
              $modelName = $row["modelName"];
              $price = $row["price"];
            
            }
          } else {
            echo "0 results";
          }
        $db->close();
    ?>

    
    <div class="d-flex">
        <!-- sidebar -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/SidebarAd.php")?>

        <div id="page-content-wrapper" class="flex-grow-1">
            
            <!-- navbar -->
            <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/NavbarAd.php")?>

            <!-- container -->
            <div class="container-lg">
                <h1 class="mt-2 mb-0 font-bold- font-family-condensed">MANAGER</h1>
                <p class="font-semibold- font-family-poppins mb-2">Update Item</p>
                

                <div class="container-fluid me-4 border rounded p-1">
                    <div class="bg-white border-bottom m-0 pb-1">
                        <h4 class="m-0 font-family-poppins font-bold-">FORM UPDATE </h4>
                        <p class="text-gray-light fs-14 m-0">Điền thông tin cập nhật.</p>
                    </div>
                    
                    <div class="container-fruid pt-1">
                        <div class="row">

                            <div class="col pe-2">
                                <h5 class="font-family-poppins font-semibold- fs-16">Description</h5>
                                <p class="text-gray-light fs-14">Chỉnh sửa thông tin sản phẩm tại đây.</p>
                            </div>
                            <div class="col-10 pb-0">
                                
                                
                            <form action="/hien/app/processing/editItemProcesser.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <label for="modelName" class="font-semibold- fs-16">Tên Sản Phẩm</label>
                                        <input type="text" id="modelName" name ="modelName"  placeholder="Tên Sản Phẩm" value="<?php echo $modelName?>" class="form-control px-10px mb-10px">
                                    </div>

                                    <div class="col">
                                        <label for="brandName" class="font-semibold- fs-16">Tên Hãng</label>
                                        <input type="text" id="brandName" name ="brandName"  placeholder="Tên Hãng" value="<?php echo $brandName?>" class="form-control px-10px mb-10px">
                                    </div>
                                </div>

                                <!--  -->

                                <div class="row">
                                    <div class="col">
                                        <label for="price" class="font-semibold- fs-16">Giá Bán</label>
                                        <input type="number" id="price" name ="price"  placeholder="Giá Bán" value="<?php echo $price?>" class="form-control px-10px mb-10px ">

                                    </div>

                                    <div class="col">
                                        <label for="city" class="font-semibold- fs-16">Điểm Đến</label>
                                        <select class="form-select" name="city"  aria-label="Default select example" id="city">
                                            <option value="" selected>Chọn điểm đến</option>
                                            <option value="Hanoi, Viet Nam">Hanoi, Viet Nam</option>
                                            <option value="Da Nang, Viet Nam">Da Nang, Viet Nam</option>
                                            <option value="Nha Trang, Viet Nam">Nha Trang, Viet Nam</option>
                                        </select>

                                    </div>

                                </div>

                                <!--  -->
                                <div class="row">
                                    <div class="col">
                                        <label for="img-produce" class="font-semibold- fs-16">Ảnh Sản Phẩm:</label>
                                        <input type="file" id="img-produce"  name="img-produce" class="form-control px-10px mb-10px">
                                    </div>
                                    
                                    <div class="col">
                                        <label for="city" class="font-semibold- fs-16">Phòng</label>
                                        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/Select.php")?>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="container bg-white border-top m-0 pt-1">
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <!-- Thẻ div chứa button và được căn phải -->
                                            <div>
                                                <button class="btn btn-gray" type="submit">Add Item</button>
                                            
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                
                            </form>
                            <!-- form -->
                                
                            </div>
                        </div>

                    </div>


                    
                </div>

                
            </div>


        </div>
    </div>

    


    <style>
        
        body {
            overflow-x: hidden;
        }
    </style>

    <script>
    
    </script>
    <script src="../../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>