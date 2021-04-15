<?php

namespace App\Http\Controllers;

use App\Models\PostsForm;
use Illuminate\Http\Request;
use App\Http\Requests\PostAddRequest;
use App\Http\Requests\PostAddRelationRequest;


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

    public function addToPost(PostAddRequest $request)
    {
        $title = $request->title;
        $description = $request->description;
        $slug = $request->slug;
        $content = $request->post_content;
        $image = $request->image;
        $website = $request->website;

        $this->model->addPost($title, $description, $slug, $content, $image, $website);
        return redirect('/');
    }

    public function addRelation(PostAddRelationRequest $request)
    {

        $this->model->addSoftwareId($request->postTitle, $request->software_title);
        return redirect('/');
    }

}
