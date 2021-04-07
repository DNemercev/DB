<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddingDataToTable;

class TestController extends Controller
{
    private $model;

    public function index()
    {
        return view('testForm');
    }

    public function __construct(AddingDataToTable $model)
    {
        $this->model = $model;
    }



    public function addTestInfoToPost()
    {
        $this->model
            ->addDataToPosts('test title',
                'test Description',
                'test slug',
                'test context',
                'test image',
                'test website');
        echo 'test1' . "<br/>";
    }

    public function addTestInfoToSlots()
    {
        $this->model
            ->addDataToSlots(
                'test title',
                'test slug',
                10,
                1,
                'test image',
                20
            );
        echo 'test2' . "<br />";
    }

    public function addTestInfoToPostSoftWares(Request $request)
    {
        $post_id = $request->post_id;
        $software_id = $request->software_id;

        $this->model->addDataToPostSoftWares($post_id, $software_id);

        return redirect('post-softwares');
//            ->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function addTestInfoToSoftwares()
    {
        $this->model
            ->addDataToSoftWares(
                'title test',
                'test description',
                'test slug'
            );
    }
}
