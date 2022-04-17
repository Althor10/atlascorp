<?php
/**
 * Created by PhpStorm.
 * User: MonkeyKing
 * Date: 16-Mar-19
 * Time: 9:49 AM
 */

namespace App\Models;


class Hotel
{
    private $table = 'atlashotel';
    public $name;

    public function getStars(){
        $rez = \DB::table('num_stars')->get();
        return $rez;
    }

    public function getHotel($id){
        $rez = \DB::table('atlashotel as ah')
            ->leftJoin('rating as r','ah.id','=','r.hotel_id')
            ->leftJoin('img_hotel as ih','ah.id','=','ih.id_hotel')
            ->leftJoin('num_stars as ns','ah.num_stars_id','ns.id')
            ->leftJoin('home_hotel_path as hhp','ah.id_home_hotel_path','=','hhp.id')
            ->leftJoin('planet as p','hhp.id_planet','=','p.id')
            ->select(\DB::raw('avg(r.rating) as prosekOcena,count(r.id) as brojOcena'),'ah.id as ahid','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','ah.description as ahdesc',
                'short_desc','stars','planet_name')
            ->groupBy('ah.id','img_hotel_path','name',
                'avg_hotel_price','wireless','smoking_area',
                'wheelchair','pool','ah.description',
                'short_desc','stars','planet_name')
            ->where('ah.id',$id)
            ->orderBy('name')
            ->get();
        return $rez;
    }

    public function getReviews($id){
        $rez = \DB::table('atlashotel as ah')
            ->join('rating as r','ah.id','=','r.hotel_id')
            ->join('atlasuser as au','r.user_id','=','au.id')
            ->where('ah.id',$id)
            ->get();
        return $rez;
    }

    public function getStayRooms($id){
        $rez = \DB::table('atlashotel as ah')
            ->join('stay_room as sr','ah.id','=','sr.hotel_id')
            ->join('room_type as rt','sr.room_type_id','=','rt.id')
            ->where('ah.id',$id)
            ->select('name','ah.id as aid','price_per_night','num_free_rooms','room_type')
            ->get();
        return $rez;
    }


    public function updateHotel($id,$name,$num,$wire,$smoke,$wheel,$pool){
        $rez1 = \DB::table($this->table)->where('id','=',$id)
            ->update(['name'=>$name,
                'wireless'=>$wire,'smoking_area'=>$smoke,
                'wheelchair'=>$wheel,'pool'=>$pool]);
        $rez = \DB::table('stay_room')->where('hotel_id',$id)
            ->update(['num_free_rooms'=>$num]);

        if($rez1 && $rez){

            return $rez;

        }else return 'error';
    }

    public function insertHotel($name,$stars,$planet,$desc,$shortDesc,$price,$wire,$smoke,$wheel,$pool,$newPath){
           $idHomeHotelPath= \DB::table('home_hotel_path')->where('id_planet',$planet)->select('id')->first();
           $idStars= \DB::table('num_stars')->where('id',$stars)->select('id')->first();
            $rez =\DB::table($this->table)->insertGetId([
                'name' => $name,
                'num_stars_id'=>$idStars->id,
                'id_home_hotel_path'=>$idHomeHotelPath->id,
                'description'=>$desc,
                'short_desc'=>$shortDesc,
                'avg_hotel_price'=>$price,
                'wireless'=>$wire,
                'smoking_area'=>$smoke,
                'wheelchair'=>$wheel,
                'pool'=>$pool
            ]);
            $rez2 =\DB::table('img_hotel')->insertGetId([
                'img_hotel_path'=>$newPath,
                'id_hotel'=>$rez
            ]);
            if($rez && $rez2){
                return true;
            }else{
                return false;

            }
        }
    public function delete($id)
    {
        // T- True-ima podataka N - NotTrue - nema podataka, null
        $stayExists = \DB::table('stay_room')->where('hotel_id',$id)->select('id')->first();
        $reservationExists = \DB::table('reservation_hotel')->where('stay_id',$stayExists->id)->select('id')->first();

       if($reservationExists != null){
           //_T
           \DB::table('reservation_hotel')->where('stay_id',$stayExists->id)->delete();
           if($stayExists !=null){
               //TT
               \DB::table('stay_room')->where('hotel_id',$id)->delete();
               \DB::table('img_hotel')->where('id_hotel',$id)->delete();
               \DB::table('atlashotel')->where('id',$id)->delete();
               return 'Uspeh!';
           }else{
               return 'Errorcina';
           }
        }else{
           //N_
           if($stayExists !=null){
               //NT
               \DB::table('stay_room')->where('hotel_id',$id)->delete();
               \DB::table('img_hotel')->where('id_hotel',$id)->delete();
               \DB::table('atlashotel')->where('id',$id)->delete();
               return 'Uspeh!';
           }else{
               //NN
               \DB::table('img_hotel')->where('id_hotel',$id)->delete();
               \DB::table('atlashotel')->where('id',$id)->delete();
               return 'Uspeh!';
           }
       }
    }

    public function getRoomType(){
        $rez = \DB::table('room_type')->get();
        return $rez;
    }
    public function getRoomTypes($idH){
        $rez = \DB::table('room_type as rt')
            ->join('stay_room as sr','rt.id','=','sr.room_type_id')
            ->join('atlashotel as ah','sr.hotel_id','=','ah.id')
            ->where('sr.hotel_id',$idH)
            ->get();
        return $rez;
    }

    public function insertRooms($hotel,$room,$type,$price){
        $numRoom = \DB::table('stay_room')->where('hotel_id',$hotel)->where('room_type_id',$room)->select('num_free_rooms')->first();
        if($numRoom != null){
            $newRoom = $numRoom->num_free_rooms + $room;
            $rez = \DB::table('stay_room')->update([
                'num_free_rooms'=>$newRoom
            ]);
        }else{
            $rez = \DB::table('stay_room')->insertGetId([
                'hotel_id'=>$hotel,
                'room_type_id'=>$type,
                'price_per_night'=>$price,
                'num_free_rooms'=>$room
            ]);
        }

        return $rez;
    }

    public function getService(){
        $rez = \DB::table('service')->get();
        return $rez;
    }
    public function getPayments(){
        $rez = \DB::table('payment')->get();
        return $rez;
    }
}
