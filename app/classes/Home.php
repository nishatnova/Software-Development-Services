<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Service;


class Home
{
    public $msg, $category, $categories, $service, $services, $singleService, $categoryServices;

    public function __construct()
    {
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
    }

    public function index()
    {
        $this->service = new Service();
        $this->services = $this->service->getAllServices();

        return view('home',
            [
                'title' => 'Baytech Software',
                'categories' => $this->categories,
                'services' => $this->services
            ]);
    }

    public function category($id)
    {
        $this->service = new Service();
        $this->services = $this->service->getServiceByCategoryId($id);
        return view('category', ['title' => 'Category', 'categories' => $this->categories, 'services' => $this->services]);

    }

    public function service($id)
    {
        $this->service = new Service();
        $this->singleService = $this->service->getServiceById($id);
        return view('service',['title' => 'Service Detail', 'categories' => $this->categories, 'service' => $this->singleService]);
    }

    public function primary()
    {
        return view('primary',[
            'title' => 'primary'
        ]);
    }

}