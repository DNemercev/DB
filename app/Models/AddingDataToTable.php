<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Software;
use App\Models\Post_softwares;
use App\Models\Posts;
use App\Models\Slots;

class AddingDataToTable extends Model
{
    use HasFactory;
    public function addDataToPosts($title, $description, $slug, $content, $image, $website)
    {
        $post = new Posts;

        $post->title = $title;
        $post->description = $description;
        $post->slug = $slug;
        $post->content = $content;
        $post->image = $image;
        $post->website = $website;
        $post->save();

//        Posts::insert(array(
//            'title'         => $title,
//            'description'   => $description,
//            'slug'          => $slug,
//            'content'       => $content,
//            'image'         => $image,
//            'website'       => $website
//        ));
    }

    public function addDataToSlots($title, $slug, $categoty_id, $status, $image, $software_id)
    {
        $slots = new Slots;

        $slots->title = $title;
        $slots->slug = $slug;
        $slots->category_id = $categoty_id;
        $slots->status = $status;
        $slots->image = $image;
        $slots->software_id = $software_id;

        $slots->save();
    }

    public function addDataToPostSoftWares($post_id, $software_id)
    {
        $postSoftwares = new Post_softwares;

        $postSoftwares->post_id = $post_id;
        $postSoftwares->software_id = $software_id;

        $postSoftwares->save();
    }

    public function addDataToSoftWares($title, $description, $slug)
    {
        $softwares = new Software;

        $softwares->title = $title;
        $softwares->description = $description;
        $softwares->slug = $slug;

        $softwares->save();
    }
}
