<?php
    // Mảng ngày trong tuần và tháng bằng tiếng Việt
    function convert($timestamp){
        // Mảng ngày trong tuần và tháng bằng tiếng Việt
        $daysOfWeek = array(
            'Sunday' => 'Chủ Nhật',
            'Monday' => 'Thứ Hai',
            'Tuesday' => 'Thứ Ba',
            'Wednesday' => 'Thứ Tư',
            'Thursday' => 'Thứ Năm',
            'Friday' => 'Thứ Sáu',
            'Saturday' => 'Thứ Bảy'
        );
    
        $months = array(
            1 => 'tháng 1',
            2 => 'tháng 2',
            3 => 'tháng 3',
            4 => 'tháng 4',
            5 => 'tháng 5',
            6 => 'tháng 6',
            7 => 'tháng 7',
            8 => 'tháng 8',
            9 => 'tháng 9',
            10 => 'tháng 10',
            11 => 'tháng 11',
            12 => 'tháng 12'
        );
    
        // Lấy các giá trị ngày, tháng, năm và ngày trong tuần
        $dayOfWeek = date('l', $timestamp);
        $day = date('d', $timestamp);
        $month = date('n', $timestamp);
        $year = date('Y', $timestamp);
    
        // Hiển thị ngày theo định dạng yêu cầu
        return $daysOfWeek[$dayOfWeek] . ', ' . $day . ' ' . $months[$month] . ', ' . $year;
    }
    
    
?>