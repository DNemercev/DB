<?php

namespace App\Http\Controllers;

use App\Models\PostsForm;
use Illuminate\Http\Request;


class PostController extends Controller
{
    private $model;
    private $request;

    public function __construct(Request $request, PostsForm $model)
    {
        $this->request = $request;
        $this->model = $model;
    }

    public function index()
    {
        return view('formPosts');
    }

    public function addToPost()
    {
        $title = $this->request->title;
        $description = $this->request->description;
        $slug = $this->request->slug;
        $content = $this->request->post_content;
        $image = $this->request->image;
        $website = $this->request->website;

        $this->model->addPost($title, $description, $slug, $content, $image, $website);
        return redirect('/');
    }

    public function addRelation()
    {
        $this->model->addSoftwareId($this->request->post_title, $this->request->software_title);
        return redirect('/');
    }
}
