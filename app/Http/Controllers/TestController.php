<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddingDataToTable;

class TestController extends Controller
{
    private $model;
    private $request;


    public function __construct(AddingDataToTable $model, Request $request)
    {
        $this->request = $request;
        $this->model = $model;
    }

    public function index()
    {
        return view('testForm');
    }

    public function addDataToPost()
    {

        $title = $this->request->post_title;
        $description = $this->request->post_description;
        $slug = $this->request->post_slug;
        $content = $this->request->post_content;
        $image = $this->request->post_image;
        $website = $this->request->post_website;

        $this->model->addDataToPosts($title, $description, $slug, $content, $image, $website);

        return redirect('/');
    }

    public function addDataToSlots()
    {
        $title = $this->request->slots_title;
        $slug = $this->request->slots_slug;
        $categoryId = $this->request->slots_category_id;
        $status = $this->request->slots_status;
        $image = $this->request->slots_image;
        $software_id = $this->request->slots_software_id;

        $this->model->addDataToSlots($title, $slug, $categoryId, $status, $image, $software_id);

        return redirect('/');
    }

    public function addDataToPostSoftWares(Request $request)
    {
        $post_id = $request->post_id;
        $software_id = $request->software_id;

        $this->model->addDataToPostSoftWares($post_id, $software_id);

        return redirect('/');
    }

    public function addDataToSoftwares()
    {
        $title = $this->request->software_title;
        $decsription = $this->request->software_description;
        $slug = $this->request->software_slug;

        $this->model->addDataToSoftWares($title, $decsription, $slug);

        return redirect('/');
    }

    public function testAddToSlots()
    {
        $this->model->testAddToSlots();
        echo 'sucses';
    }
}
