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


        $softwares = $this->model->selectSoftwaresSlotsSubquery();

        dd($softwares);
//        var_dump($softwares);
        echo "test" . "<br />";
//      return view('softwares', [
//      'softwares' => $softwares
//          ]);
    }
    //(подзапрос) SELECT * FROM slots WHERE software_id IN(SELECT id FROM softwares WHERE title = 'NetEnt')

    public function test()
    {
        dd(Software::all());
    }
}
