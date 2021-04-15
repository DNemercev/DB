<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareForm;
use App\Http\Requests\SoftwareAddRequest;
use App\Http\Requests\SoftwareAddRelarionRequest;

class SoftwareController extends Controller
{

    private $model;
    private $request;

    public function __construct(SoftwareForm $model) {
        $this->model = $model;
    }

    public function index()
    {
        return view('formSoftware');
    }

    public function addToSoftware(SoftwareAddRequest $request)
    {

        $title = $request->title;
        $description = $request->description;
        $slug = $request->slug;

        $this->model->addSoftware($title, $description, $slug);
        return redirect('/');
    }

    public function addRelation(SoftwareAddRelarionRequest $request)
    {
        $this->model->addPostId($request->postTitle, $request->softwareTitle);
        return redirect('/');
    }

}
