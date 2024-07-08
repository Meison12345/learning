<?php
$enteredData = "brid@rssv.ru";


//1ый вариант 2ого задания
    $regExp = "/^[a-z0-9_-]+@[a-z_-]+\.[a-z]+$/mi";
    $data = preg_replace(
        $regExp,
        "<a href='mailto:$0'>$0</a>",
        $enteredData
    );
    
    echo $data;

// $keywords = preg_split("/[\s,]+/mi", "hypertext language, programming");
// var_dump($keywords);


//2ой вариант 2ого задания
// function checkEmail($email){
//     $regExp = "/^[a-z0-9_-]+\@[a-z_]+\.[a-z_]+$/mi";
//     return preg_match($regExp, $email)?$email:"false";
// }

// echo '<a href="mailto:' . checkEmail($enteredData) . '">$enteredData</a>';


//3 задание по всей земле
// $regExp = "/[0-9]{10}/mi";
// $data = preg_replace(
//     $regExp,
//     "<a href='tel:$0'>$0</a>",
//     $enteredData
// );

// echo $data;