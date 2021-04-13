<?php

namespace App\Models;

use App\Models\SoftwareForm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SlotsForm extends Model
{
    use HasFactory;

    protected $table = 'slots';
    protected $guarded = [];
    public $timestamps = false;

    public function softwares()
    {
        return $this->belongsTo(SoftwareForm::class, 'software_id');
    }

    public function addSlot(string $title, string $slug, int $category_id, string $image, int $software_id) // создает запись в таблице slots со связью с softwares
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->category_id = $category_id;
        $this->image = $image;

        $software = SoftwareForm::find($software_id)->firstOr(function () {
            return false;
        });
        if ($software === false)
            $software_id = 0;
        else
            $this->software_id = $software_id;
        $this->save();
    }

    public function addSoftwareId(string $software_title, string $slots_title) // добавить software_id
    {
        $software = SoftwareForm::where('title', $software_title)->firstOr(function () {
            echo "Error software";
            return false;
        });

        $slot = $this->where('title', $slots_title)->firstOr(function () {
            echo "test ERROR slot";
            return false;
        });

        if ($software === false || $slot === false)
            return false;
        else {
            $slot->softwares()->associate($software->id);
            $slot->save();
        }
    }
}
