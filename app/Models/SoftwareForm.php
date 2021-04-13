<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostsForm;
use App\Models\SlotsForm;

class SoftwareForm extends Model
{
    use HasFactory;

    protected $table = 'softwares';
    protected $guarded = [];

    public function slots()
    {
        return $this->hasMany(SlotsForm::class);
    }

    public function posts()
    {
        return $this->belongsToMany(PostsForm::class, 'posts_softwares', 'software_id', 'post_id');
    }

    public function addSoftware(string $title, string $description, string $slug)
    {
        $this->title = $title;
        $this->description = $description;
        $this->slug = $slug;
        $this->save();
    }


    public function addPostId(string $postTitle, string $softwareTitle) //добавить новую связь с software
    {
        $post = PostsForm::where('title', $postTitle)->firstOr(function () {
            return false;
        });

        $software = $this->where('title', $softwareTitle)->firstOr(function () {
            return false;
        });

        if ($software === false || $post === false)
            return false;
        else {
            $software->posts()->syncWithoutDetaching($post->id);
        }
    }
}
