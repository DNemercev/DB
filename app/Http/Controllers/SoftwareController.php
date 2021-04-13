<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareForm;

class SoftwareController extends Controller
{

    private $model;
    private $request;

    public function __construct(Request $request, SoftwareForm $model) {
        $this->request = $request;
        $this->model = $model;
    }

    public function index()
    {
        return view('formSoftware');
    }

    public function addToSoftware()
    {
        $title = $this->request->title;
        $description = $this->request->description;
        $slug = $this->request->slug;

        $this->model->addSoftware($title, $description, $slug);
        return redirect('/');
    }

    public function addRelation()
    {
        $this->model->addPostId($this->request->post_title, $this->request->software_title);
        return redirect('/');
    }

}
