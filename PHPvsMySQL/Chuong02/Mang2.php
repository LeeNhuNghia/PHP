<?php
    //có 2 cách tạo 1 mảng
    //cách 1
    $arr1 = array();    //khởi tạo một mảng rỗng
    $arr1["S1"] = 5;       //gán gtri cho phần tử thứ 0
    $arr1["C1"] = 'Hello'; //gán gtri cho phần tử thứ 1
    $arr1["S2"] = 15;      //gán gtri cho phần tử thứ 2
    $arr1["S3"] = 12.5;    //gán gtri cho phần tử thứ 3
    var_dump($arr1);
    echo "<br>";
    print_r($arr1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    $arr2 = array("C1" => "CSS","C2" => "HTML","C3" => "PHP");
    var_dump($arr2);
    echo "<br>";
    print_r($arr2);
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    echo "<hr>";

    //cách 2:
    $arr3 = [];    //khởi tạo một mảng rỗng
    $arr3["S1"] = 5;       //gán gtri cho phần tử thứ 0
    $arr3["C1"] = 'Hello'; //gán gtri cho phần tử thứ 1
    $arr3["S2"] = 15;      //gán gtri cho phần tử thứ 2
    $arr3["S3"] = 12.5;    //gán gtri cho phần tử thứ 3
    var_dump($arr3);
    echo "<br>";
    print_r($arr3);
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
    
    $arr4 = array("C1" => "CSS","C2" => "HTML","C3" => "PHP");
    var_dump($arr4);
    echo "<br>";
    print_r($arr4);
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";
    echo "<hr>";

?>