<div class="container-sm item-card bg-white my-5 shadow-sm">
    <div class="img-container ">
        <img src="/hien/app/processing/upload/<?php echo $row["imgPath"]; ?>" alt="">
    </div>
    
    
        <div class="col body-container border-end border-gray container-fluid me-0">
            <h5 class="font-bold mb-1"><?php echo $row["modelName"]; ?></h5>
            <p class="fs-14 ">K5 Nghi Tàm, 11 Đường Xuân Diệu, Quận Tây Hồ Hà Nội, Việt Nam</p>
            <p class="fs-14 "> <span class="bg-gray px-1 text-white rounded">3.6 km</span> từ điểm đến</p>
            <p class="fs-14 text-gray ">Khách sạn Hồ Tây, Hà Nội với nhà hàng ngay trong khuôn viên, trung tâm thể dục, hồ bơi và tầm</p>
        </div>
    
    
        <div class=" col-3 body-container  container-fluid ps-4 ms-0">
            <label for="price fs-14 text-gray">Giá phòng:</label>
            <h2 class="font-bold mb-4" name="price"><?php echo $row["price"]; ?><span class="fs-14 font-regular">VND</span></h2>
            <button class="col btn btn-outline-square btn-find-room " action="submit" name="btn" > ĐẶT PHÒNG</button>
        </div>
</div>