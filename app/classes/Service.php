<?php


namespace App\classes;


class Service
{
    public $services = [], $result = [];

    public function __construct()
    {
        $this->services = [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => "E-Commerce Applications",
                'price' => "Basic: Tk. 35,000 | Standard: 45,000 | Premium: 70,000",
                'description' => "An ecommerce app with an intuitive and highly functional build can help online stores boost their sales",
                "image" => "assets/img/c5.png"

            ],

            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => "Health Sector Applications",
                'price' => "Basic: Tk. 40,000 | Standard: 55,000 | Premium: 80,000",
                'description' => "mobile technology applications for healthcare is a young and dynamic field that could improve the well-being of people around the world.",
                "image" => "assets/img/c7.jpg"

            ],

            2 => [
                'id' => 3,
                'category_id' => 2,
                'name' => " Web Banking Solution",
                'price' => "Basic: Tk. 70,000 | Standard: 85,000 | Premium: 1,40,000",
                'description' => " Develop robust online applications to suit your business needs and cater to your clients faithfully.",
                "image" => "assets/img/c6.png"

            ],

            3 => [
                'id' => 4,
                'category_id' => 2,
                'name' => "Cyber Security and Audit",
                'price' => "Basic: Tk. 80,000  | Standard: 95,000 | Premium: 1,60,000",
                'description' => " Develop robust online applications to suit your business needs and cater to your clients faithfully.",
                "image" => "assets/img/c8.jpg"

            ],

            4 => [
                'id' => 5,
                'category_id' => 3,
                'name' => "Face Identification",
                'price' => "Basic: Tk. 35,000 | Standard: 45,000 | Premium: 70,000",
                'description' => " Machine Learning and Artificial Intelligence solution for your organization by experts hand",
                "image" => "assets/img/c9.png"

            ],

            5 => [
                'id' => 6,
                'category_id' => 4,
                'name' => "Virtual Reality Solution",
                'price' => "Basic: Tk. 50,000 | Standard: 65,000 | Premium: 1,00,000",
                'description' => " Complete Augmented and Virtual Reality Solutions-customized to give life to your visual commerce",
                "image" => "assets/img/c10.png"

            ],



        ];
    }

    public function getAllServices()
    {
        return $this->services;
    }

    public function getServiceByCategoryId($id)
    {
        foreach ($this->services as $service) {
            if ($service['category_id'] == $id) {
                array_push($this->result, $service);
            }
        }
        return $this->result;
    }

    public function getServiceById($id)
    {
        foreach ($this->services as $service) {
            if ($service['id'] == $id) {
                return $service;
            }
        }
    }

}