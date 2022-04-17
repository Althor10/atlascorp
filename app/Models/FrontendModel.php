<?php
/**
 * Created by PhpStorm.
 * User: MonkeyKing
 * Date: 15-Mar-19
 * Time: 12:47 PM
 */

namespace App\Models;


class FrontendModel
{
    public function getSlider(){
        $rezultat = \DB::table('home_slider as hs')->join('img_home_slider as ihs','hs.img_id','=','ihs.id')->select('title1','title2','img_path')->get();
        return $rezultat;
    }
    public function getOffers(){
        $rez = \DB::table('atlashotel as ah')
            ->leftJoin('rating as r','ah.id','=','r.hotel_id')
            ->leftJoin('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->leftJoin('num_stars as ns','ah.num_stars_id','ns.id')
            ->select(\DB::raw('avg(r.rating) as prosekOcena,count(r.id) as brojOcena'),'ah.id as ahid','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','description',
                'short_desc','stars')
            ->groupBy('ah.id','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','description',
                'short_desc','stars')
            ->orderBy('name')
            ->get();
        return $rez;
    }
    public function getPlanetPromo(){
        $rez = \DB::table('atlashotel as ah')
            ->leftJoin('rating as r','ah.id','=','r.hotel_id')
            ->leftJoin('num_stars as ns','ah.num_stars_id','ns.id')
            ->leftJoin('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->leftJoin('home_hotel_path as hhp','ah.id_home_hotel_path','=','hhp.id')
            ->leftJoin('planet as p','hhp.id_planet','=','p.id')
            ->select(\DB::raw('avg(r.rating) as prosekOcena,count(r.id) as brojOcena'),'p.id as pid','ah.id as ahid','ah.description as pdesc','img_hotel_path','name',
                'avg_hotel_price as price','wireless','smoking_area',
                'wheelchair','pool',
                'short_desc','stars','planet_name')
            ->groupBy('ah.id','p.id','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','ah.description',
                'short_desc','stars','planet_name')
            ->orderBy('p.id')
            ->limit(3)
            ->get();
        return $rez;
    }

    public function getOffersFiltered($id){
        $rez = \DB::table('atlashotel as ah')
            ->leftJoin('rating as r','ah.id','=','r.hotel_id')
            ->leftJoin('num_stars as ns','ah.num_stars_id','ns.id')
            ->leftJoin('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->leftJoin('home_hotel_path as hhp','ah.id_home_hotel_path','=','hhp.id')
            ->leftJoin('planet as p','hhp.id_planet','=','p.id')
            ->select(\DB::raw('avg(r.rating) as prosekOcena,count(r.id) as brojOcena'),'p.id as pid','ah.id as ahid','ah.description as pdesc','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool',
                'short_desc','stars','planet_name')
            ->groupBy('ah.id','p.id','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','ah.description',
                'short_desc','stars','planet_name')
            ->where('p.id',$id)
            ->orderBy('p.id')
            ->get();
        return $rez;

    }

    public function getHotels(){
        $rez = \DB::table('atlashotel as ah')
            ->join('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->join('home_hotel_path as hhp','ah.id_home_hotel_path','=','hhp.id')
            ->join('planet as p','hhp.id_planet','=','p.id')
            ->limit(8)
            ->select('ah.id as ahid','img_hotel_path','name','planet_name','avg_hotel_price')
            ->get();
        return $rez;
    }


    public function getNews(){
        $rez = \DB::table('news')->get();
        return $rez;
    }

    public function getNav(){
        $rez = \DB::table('nav')->get();
        return $rez;
    }

    public function sendMessage($name,$email,$subject,$message){
        $rez = \DB::table('contact')->insertGetId(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message]);
        return $rez;
    }
}
