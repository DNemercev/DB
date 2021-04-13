<?php

namespace App\Http\Controllers;

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

    public function addToSlots()
    {
        $slots = new SlotsForm;

        $title = $this->request->slots_title;
        $slug = $this->request->slots_slug;
        $categoryId = $this->request->slots_category_id;
        $image = $this->request->slots_image;
        $software_id = $this->request->slots_software_id;

        $slots->addSlot($title, $slug, $categoryId, $image, $software_id);
        return redirect('/');
    }

    public function addRelation()
    {
        $this->slots->addSoftwareId($this->request->software_title, $this->request->slot_title);
        return redirect('/');
    }
}
