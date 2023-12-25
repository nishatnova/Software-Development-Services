<?php


namespace App\classes;


class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id'=> 1,
                'name'=> "App Development",
                "image"=> "assets/img/c1.png"
            ],
            1 => [
                'id'=> 2,
                'name'=> "Web Development",
                "image"=> "assets/img/c2.png"
            ],
            2 => [
                'id'=> 3,
                'name'=> "AI & ML",
                "image"=> "assets/img/c3.jpg"
            ],
            3 => [
                'id'=> 4,
                'name'=> "AR VR Solution",
                "image"=> "assets/img/c4.png"
            ]
        ];
    }

    public function getAllCategory()
    {
        return $this->categories;
    }

}