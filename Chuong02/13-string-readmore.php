<?php
    $str = "Để kiểm tra các thông tin cấu hình đã cài đặt, sử dụng lệnh git config --list. Có thể có từ khóa xuất hiện nhiều hơn một lần là do Git đã đọc từ nhiều tập tin cấu hình khác nhau (của mức system, global và local), trong trường hợp này Git sẽ lấy giá trị xuất hiện sau cùng để sử dụng (xem lại về thứ tự ưu tiên).";
    
    //hàm read more
    function truncateString($str, $maxChars = 50, $holder = "..."){
       $result = $str;
        if(strlen($str) > $maxChars){
            $result = substr($str, 0, $maxChars) . $holder;
        }
            return $result;
    }
    
    $str = truncateString($str, 100, "...");
    echo $str;
    
    //
    $str1 = "name=KhanhVan&age=21";
    parse_str($str1);
    echo "<br/>". $name;
    echo "<br/>". $age;
    
    //
    parse_str($str1, $arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
    $url = "http://localhost/TrainningPHP/Chuong02/13-string-readmore.php?id=79&page=2";
    $data = parse_url($url);
    echo "<pre>";
    print_r($data);
    echo "</pre>";