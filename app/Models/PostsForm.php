<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftwareForm;

class PostsForm extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];

    public function software()
    {
        return $this->belongsToMany(SoftwareForm::class, 'posts_softwares', 'post_id', 'software_id');
    }

    public function addPost(string $title, string $description, string $slug, string $content, string $image, string $website)
    {
        $this->title = $title;
        $this->description = $description;
        $this->slug = $slug;
        $this->content = $content;
        $this->image = $image;
        $this->website = $website;

        $this->save();
    }

    public function addSoftwareId(string $postTitle, string $softwareTitle)
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
