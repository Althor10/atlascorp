<?php
/**
 * Created by PhpStorm.
 * User: MonkeyKing
 * Date: 15-Mar-19
 * Time: 8:29 PM
 */

namespace App\Models;


class Admin
{
    public function getOneHotel($id){
        $rez = \DB::table('atlashotel as ah')->join('num_stars as ns','ah.num_stars_id','=','ns.id')->join('stay_room as sr','ah.id','=','sr.hotel_id')->join('home_hotel_path as hhp','ah.id_home_hotel_path','=','hhp.id')->join('rating as r','ah.id','=','r.hotel_id')->where('ah.id',$id)->select('ah.name as ahname','wireless','smoking_area','wheelchair','pool','ah.id as ahid','description as desc','stars','rating','num_free_rooms')->get();
        return $rez;
    }
    public function getPlanets(){
        $rez = \DB::table('planet')->select('planet_name','id')->get();
        return $rez;
    }
    public function getHotels(){
        $rez = \DB::table('atlashotel as ah')
            ->leftJoin('rating as r','ah.id','=','r.hotel_id')
            ->leftJoin('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->leftJoin('num_stars as ns','ah.num_stars_id','ns.id')
            ->leftJoin('stay_room as sr','ah.id','=','sr.hotel_id')
            ->select(\DB::raw('avg(r.rating) as prosekOcena,count(r.id) as brojOcena'),'ah.id as ahid','img_hotel_path','name as ahname',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','description',
                'short_desc','stars','num_free_rooms')
            ->groupBy('ah.id','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','description',
                'short_desc','stars','num_free_rooms')
            ->orderBy('name')
            ->get();
        return $rez;
    }

    public function getNews(){
        $rez = \DB::table('news')->get();
        return $rez;
    }

    public function editNews($id){
        $rez = \DB::table('news')->where('id',$id)->get();
        return $rez;
    }
    public function updateNews($title,$text,$id)
    {
        $rez = \DB::table('news')->where('id',$id)->update(['title'=>$title,'text'=>$text]);
        if($rez){
            return $rez;
        } else return 'error';


    }

    public function insertNews($title,$text)
    {
        $id = \DB::table('news')->insertGetId(['title'=>$title,'text'=>$text]);
        return $id;
    }

    public function deleteNews($id){
        $rez = \DB::table('news')->where('id',$id)->delete();
        return 'done';
    }

    public function getMessages(){
        $rez = \DB::table('contact')->get();
        return $rez;
    }


}
