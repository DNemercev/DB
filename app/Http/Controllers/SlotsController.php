<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlotsAddRelarionRequest;
use App\Http\Requests\SlotsAddRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SlotsForm;


class SlotsController extends Controller
{
    private $request;

    public function __construct(Request $request, SlotsForm $slotsForm)
    {
        $this->request = $request;
        $this->slots = $slotsForm;
    }

    public function index()
    {
        return view('formSlots');
    }

    public function addToSlots(SlotsAddRequest $request)
    {
//        $validate = $request->validate([
//            'title' => 'required|max:191',
//            'slug' => 'required|max:191',
//            'categoryId' => 'required|integer',
//            'status' => 'required',
//            'image' => 'required',
//            'softwareId' => 'required|integer'
//        ]);

        $title = $request->title;
        $slug = $request->slug;
        $categoryId = $request->categoryId;
        $image = $request->image;
        $software_id = $request->softwareId;

        $this->slots->addSlot($title, $slug, $categoryId, $image, $software_id);
        return redirect('/');
    }

    public function addRelation(SlotsAddRelarionRequest $request)
    {
//        $validate = $this->request->validate([
//           'software_title' => 'required|max:191',
//            'slot_title'    => 'required|max:191'
//        ]);

        $this->slots->addSoftwareId($request->softwareTitle, $request->slotTitle);
        return redirect('/');
    }
}
