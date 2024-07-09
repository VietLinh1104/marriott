<?php include($_SERVER['DOCUMENT_ROOT'] . '/hien/app/core/connDB.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>List Item | Điện Tử Cường Thuận</title>
    <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/hien/app/styles/sass.css">
    <link rel="icon" type="image/png" href="/hien/app/media/favicon.png">
</head>
<body>
    
    

    <div class="d-flex">
        <!-- sidebar -->
        <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/SidebarAd.php")?>

        <div id="page-content-wrapper" class="flex-grow-1">
            
            <!-- navbar -->
            <?php include($_SERVER['DOCUMENT_ROOT']. "/hien/app/elements/NavbarAd.php")?>

            <!-- container -->
            <div class="container-lg">
                <h1 class="mt-2 mb-0 font-bold- font-family-condensed">MANAGER</h1>
                <p class="font-semibold- font-family-poppins mb-2">List Item</p>
                

                <div class="container-fluid me-4 border rounded p-1">
                    <div class="bg-white border-bottom m-0 pb-1">
                        <h4 class="m-0 font-family-poppins font-bold-">LIST TABLE </h4>
                        <p class="text-gray-light fs-14 m-0">Lorem ipsum dolor sit amet.</p>
                    </div>
                    
                    
                    <div class="container-fruid pt-1">
                        <div class="row">

                            <div class="col pe-2">
                                <h5 class="font-family-poppins font-semibold- fs-16">Description</h5>
                                <p class="text-gray-light fs-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, atque.</p>
                            </div>
                            <div class="col-10 pb-0">
                               
                                
                                

                                <table class="table" >
                                    <thead>
                                      <tr>
                                        <th scope="col" class="pt-0">#</th>
                                        <th scope="col" class="pt-0">Brand</th>
                                        <th scope="col" class="pt-0">Model</th>
                                        <th scope="col" class="pt-0">Price</th>
                                        <th scope="col" class="pt-0">Room</th>
                                        <th scope="col" class="pt-0">Image</th>
                                        <th scope="col" class="pt-0">Delete</th>
                                        <th scope="col" class="pt-0">Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                           
                                            $sql = "SELECT * FROM produce";
                                            $result = $db->query($sql);
                                            $i = 1;
                                            if ($result->num_rows > 0) {
                                            // output data of each row

                                                while($row = $result->fetch_assoc()) {
                                                    $id = $row["id"];
                                                    
                                                    $deleteUrl = '/hien/app/processing/deleteItemProcesser.php?id='.$id;
                                                    $editFromUrl = '/hien/app/page/admin/edit/?id='.$id;
                                                    echo '<tr>' .
                                                            '<td scope="row" style="vertical-align: middle;">' . $i . '</td>' .
                                                            '<td style="vertical-align: middle;">' . $row["brandName"] . '</td>' .
                                                            '<td style="vertical-align: middle;">' . $row["modelName"] . '</td>' .
                                                            '<td style="vertical-align: middle;">' . $row["price"] . '</td>' .
                                                            '<td style="vertical-align: middle;">' . $row["city"] . '</td>' .
                                                            '<td style="vertical-align: middle;"><div class="img-table"><img src="/hien/app/processing/upload/' . $row["imgPath"] . '" alt="Product Image" style="width: 150px; height: auto;"></div></td>' .
                                                            '<td style="vertical-align: middle;"><a href="' . $deleteUrl . '">Delete</a></td>' .
                                                            '<td style="vertical-align: middle;"><a href="' . $editFromUrl . '">Edit</a></td>' .
                                                        '</tr>';


                                                    $i++;
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            $db->close();

                                            
                                        ?>
                                    </tbody>
                                  </table> 
                                
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>