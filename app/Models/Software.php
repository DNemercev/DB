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
        $res =  DB::table('softwares')
            ->join('slots', 'softwares.id', '=', 'slots.software_id')
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




    public function selectSoftwaresJoinSlots() // 1) join SELECT * FROM softwares JOIN slotsON softwares.id = slots.software_id WHERE softwares.title = 'NetEnt'
    {
        $res = DB::table('softwares')
            ->join('slots', 'softwares.id', '=', 'slots.software_id')
            ->where('softwares.title', '=', 'NetEnt')
            ->get();

        return $res;
    }

    public function selectSoftwaresSlotsSubquery() //1) (подзапрос) SELECT * FROM slots WHERE software_id IN(SELECT id FROM softwares WHERE title = 'NetEnt')
    {
        $subquery = DB::table('softwares')
        ->select('id')
        ->where('title', '=', 'NetEnt')
        ->get();

        $array = [];
//
        foreach ($subquery as $value){
            $array[] = $value->id;
        }

        $res = DB::table('slots')
        ->select('*')
        ->whereIn('software_id', $array)
        ->get();

        return $res;
    }

    public function selectAllFromSlotsWhereIdBetween20And100() // 2) SELECT * FROM `slots` WHERE id BETWEEN 20 AND 100
    {
        $res = DB::table('slots')->whereBetween('id', [20, 100])->select('*')->get();
        return $res;
    }

//SELECT COUNT(*) AS res FROM slots WHERE software_id IN (SELECT id FROM softwares WHERE title = 'microgaming') GROUP BY software_id
    public function countSlotsWhereSoftwareTitleMicrogaming() // 3) SELECT COUNT(*) AS res FROM slots WHERE software_id IN (SELECT id FROM softwares WHERE title = 'microgaming') GROUP BY software_id
    {
        $subquery = DB::table('softwares')
            ->select('id')
            ->where('title', '=', 'microgaming')
            ->get();
        $array = [];

        foreach($subquery as $value){
            $array[] = $value->id;
        }

        //SELECT id FROM softwares WHERE title = 'microgaming'
//        $subquery = DB::table('softwares')
//            ->select('id')
//            ->where('title', '=', 'microgaming');

//        $res = DB::table(DB::raw("$subquery->tostr()"))

        $res = DB::table('slots')
            ->select(DB::raw('count(*) as res'))
            ->whereIn('software_id', $array)
            ->groupBy('software_id')
            ->get();

        return $res;
    }

    public function selectCountSoftwaresTableSlots() // 3.1)SELECT COUNT(*) AS softwares, software_id FROM slots GROUP BY software_id
    {
        $res = DB::table('slots')
            ->select(DB::raw('COUNT(*) as softwares'), 'software_id')
            ->groupBy('software_id')
            ->get();
        return $res;
    }

    /*
     * SELECT COUNT(*) AS res, softwares.title
     * FROM slots
     * JOIN softwares
     * ON softwares.id = slots.software_id
     * GROUP BY software_id HAVING res > 100
    */
    public function AllSoftwaresWhereslotsMore100() // 3.2)
    {
        $res = DB::table('slots')
            ->select(DB::raw('COUNT(*) as res'), 'softwares.title')
            ->join('softwares', 'softwares.id', '=', 'slots.software_id')
            ->groupBy('software_id')
            ->having('res', '>', 100)
            ->get();

        return $res;

    }

    public function AllpostsWhereWebsiteNull() //4) SELECT * FROM posts WHERE website IS NULL OR website = ''
    {
        $res = DB::table('posts')
            ->select('*')
            ->whereNull('website')
            ->orWhere('website', '=', '')
            ->get();
        return $res;
    }

    /*
     * SELECT *
     * FROM slots
     *
     * LEFT JOIN posts_softwares ON (slots.software_id = posts_softwares.software_id)
     * LEFT JOIN posts ON (posts_softwares.post_id = posts.id)
     *
     * WHERE slots.id = 7195
     */

    public function AllPostsWhereslotid7195() //5)
    {
       $res = DB::table('slots')
       ->leftJoin('posts_softwares', 'slots.software_id', '=', 'posts_softwares.software_id')
       ->leftJoin('posts', 'posts_softwares.post_id', '=', 'posts.id')
       ->where('slots.id', '=', 7195)
       ->get();
       return $res;
    }

}
