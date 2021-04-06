<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Software extends Model
{
    use HasFactory;

    public function countSoftvareIdFromSlotsJoin()
    {
        $res =  DB::table('softwares')->join('slots', 'softwares.id', '=', 'slots.software_id')
            ->where('softwares.title','=','NetEnt')->select('*')->get();
        return $res;
    }

    public function selectAllpostsWhereSlotsid7195()
    {
        $res = DB::table('slots')->leftjoin('softwares', 'slots.software_id', '=', 'softwares.id')
                ->leftjoin('posts_softwares', 'softwares.id', '=', 'posts_softwares.software_id')
                ->leftjoin('posts', 'posts_softwares.post_id', '=', 'posts.id')
                ->where('slots.id', '=', 7195)->select('*');
        return $res;
    }


//    SELECT *
//FROM slots
//
//LEFT JOIN softwares ON (slots.software_id = softwares.id)
//LEFT JOIN posts_softwares ON (softwares.id = posts_softwares.software_id)
//LEFT JOIN posts ON (posts_softwares.post_id = posts.id)
//
//WHERE slots.id = 7195
//    $users = DB::table('users')
//            ->join('contacts', 'users.id', '=', 'contacts.user_id')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->select('users.*', 'contacts.phone', 'orders.price')
//            ->get();
}
