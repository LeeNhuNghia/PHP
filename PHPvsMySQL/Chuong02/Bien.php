<?php 
    //BIẾN trong PHP
    //biến lưu giá trị số nguyên
    $a = 10;
    echo $a;
    echo gettype($a);

    //biến lưu giá trị số THỰC
    $b = 20.5;
    echo $b;
    echo gettype($b);

    //biến lưu giá trị CHUỖI
    $c = 'HELLO';
    echo $c;
    echo gettype($c);

    //biến lưu giá trị LOGIC
    $d = true;
    echo $d;
    echo gettype($d);

    //Nối chuỗi trong PHP có 2 cách:
    $ho = 'Lê Như';
    $ten = 'Nghĩa';
    //Cách 1: dùng dấu NHÁY KÉP
    echo "Chào bạn $ho $ten";
    //Cách 2: Dùng dấu nháy đơn
    echo 'Chào bạn ' . $ho . ' ' . $ten;
?>