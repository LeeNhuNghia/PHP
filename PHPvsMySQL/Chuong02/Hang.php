<?php 
    //có 2 cách tạo 1 hằng:
    //trong các phiên bản cũ: dùng define
    define("HANG_SO_1", 5);
    echo HANG_SO_1;
    echo gettype(HANG_SO_1);

    //trong các phiển bản mới từ 5. trở lên
    const HANG_SO_2 = 'HELLO';
    echo HANG_SO_2;
    echo gettype(HANG_SO_2);
?>