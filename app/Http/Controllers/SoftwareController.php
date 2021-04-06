<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;

class SoftwareController extends Controller
{

    private $model;

    public function __construct(Software $model) {
        $this->model = $model;
    }

//    public function showSoftware()
//    {
//        var_dump($this->model->countSoftvareIdFromSlotsJoin());
//
//    }

    public function showSoftware()
    {
        $softwares = $this->model->countSoftvareIdFromSlotsJoin();
       dd($softwares);
//        return view('softwares', [
//            'softwares' => $softwares
//        ]);
    }
}
