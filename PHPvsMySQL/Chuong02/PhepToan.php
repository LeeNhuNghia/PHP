<?php 
    $n = 10;
    $m = 5;

    //các phép toán
    echo "Tổng $n + $m = ".$n+$m;
    echo "Hiệu $n - $m = ".$n-$m;
    echo "Tích $n * $m = ".$n*$m;
    echo "Thương $n / $m = ".$n/$m;
    echo "Lấy dư $n % $m = ".$n%$m;

    //So sánh
    $s = "10";
    $ss = $n == $s; //chỉ ssanh giá trị
    $ss = $n === $s;    //vừa ssanh gtri và ssanh kiểu dữ liệu
    echo $ss;

    //phép toán ++, --
    $n++;   //làm công việc gì đó sau đó mới tăng gtri của $n;
    ++$n;   //ăng $n lên thêm 1 sau đó làm công việc gì đó;

    //3 ngôi
    $kq = $n > $m ? "$n > $m" : ($n == $m ? "$n = $m" : "$n < $m");
    echo $kq;

    
?>