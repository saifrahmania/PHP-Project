<?php

namespace App\classes;


class HelloWorld {
    public $data = [];
    public function __construct(){
//        echo "Hello I am on";
    }
    public function index(){
        header('Location: action.php?page=home');
    }
    public function totalStudents(){
        $this->data = [
            0 => [
                'id' => 1,
                "name" => 'Shuvo',
                'email' => 'shuvo@gmail.com',
                'mobile'=> '000000000'
            ],
            1 => [
                'id' => 2,
                "name" => 'Rahim',
                'email' => 'rahim@gmail.com',
                'mobile'=> '11111111'
            ],
            2 => [
                'id' => 3,
                "name" => 'Karim',
                'email' => 'karim@gmail.com',
                'mobile'=> '2222222222'
            ],
            3 => [
                'id' => 4,
                "name" => 'Karim2',
                'email' => 'karim2@gmail.com',
                'mobile'=> '33333333333'
            ]
        ];

        return $this->data;

    }
}