<?php 
$userName = "<h1>Zabir Rihan</h1>";
echo htmlentities($userName);
echo "<br></br>";
echo html_entity_decode($userName);
$userName3 = "Rakib ";
echo str_repeat($userName3, 10);
echo "<br></br>";
if(!(empty($userName))){
    echo "Welcome";
}else{
    echo "Please enter your name";
}
echo "<br></br>";
if(!(isset($userName))){
    echo "Welcome";
}else{
    echo "Please enter your name";
}
echo "<br></br>";
$userData = ["zabir","rakib","raihan","shourob","shawkat"];
$userData1 = ["zabir","rakib","rahan","shourob","shakat"];
echo count($userData);
echo "<br></br>";
print_r(array_diff($userData,$userData1));
echo "<br></br>";
print_r(array_pop($userData));
echo "<br></br>";
$push  = array_push($userData1,"daniel");
print_r($userData1);
echo "<br></br>";
$shift = array_shift($userData);
print_r($userData);
echo "<br></br>";
$push  = array_unshift($userData1,"kaniel");
print_r($userData1);
echo "<br></br>";
print_r(array_reverse($userData));
echo "<br></br>";
print_r(in_array("raihan",$userData));  
echo "<br></br>";
$array = array("zabir","Rakib","etu");
var_dump($array);
echo "<br></br>";
$questions = [
    "what is your name?",
    "where are you live in?",
    "what is your professional?",
    "what is your mother's name?"
];
print_r(array_rand($questions,3));
echo "<br></br>";
$userInfo = [
    "rakib" => [
        "email" => "zabirraihan570@gmail.com",
        "phone" => "0183333333",
    ],
    "zabir" => [
        "email" => "rakibraihan570@gmail.com",
        "phone" => "0183333333",
    ],
    "etu" => [
        "email" => "raihan570@gmail.com",
        "phone" => "0183333333",
    ]
];

var_dump(array_column($userInfo,"email"));
echo "<br></br>";
$ab = [10,4,5];
$array1 = array_filter($ab,function($ac){  
       if($ac%2 == 0){
        echo "even number ";
    }else{
        echo "odd number ";
    }
});
var_dump($array1);
echo "<br></br>";
$userInfo = [
    "rakib" => [
        "email" => 80,
        "phone" => "0183333333",
    ],
    "zabir" => [
        "email" => 40,
        "phone" => "0183333333",
    ],
    "etu" => [
        "email" => 30,
        "phone" => "0183333333",
    ]
]; 

echo array_sum(array_column($userInfo,"email"));