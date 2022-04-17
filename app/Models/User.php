<?php
/**
 * Created by PhpStorm.
 * User: MonkeyKing
 * Date: 13-Mar-19
 * Time: 1:38 AM
 */

namespace App\Models;


class User
{
    public function login($usr,$pass){
        $rez = \DB::table('atlasuser as a')->join('role as r','a.role_id','=','r.id')->where([['username','=',$usr],['password','=',md5($pass)]])->select('a.id as aid','username','password','name','first_name','last_name','dateMade','pic')->first();
        return $rez;
    }
    public function getUsers(){
        $rez = \DB::table('atlasuser as au')->join('role as r','au.role_id','=','r.id')->where('name','<>','admin')->select('au.id as uid','username','email','first_name','last_name','dateMade')->get();
        return $rez;
    }
    public function registration($user,$email,$password,$first,$last){
        $dateStamp = time();
        $dateStr = date('d-m-Y H:m:s');
        \DB::table('atlasuser')->insertGetId(['first_name'=>$first,'last_name'=>$last,'email'=>$email,'password'=>md5($password),'username'=>$user,'role_id'=>2]);
        return true;
    }

    public function getUser($id){
        $rez = \DB::table('atlasuser as au')
            ->join('reservation_hotel as rh','au.id','=','rh.user_id')
            ->join('stay_room as sr','rh.stay_id','=','sr.id')
            ->join('atlashotel as ah','sr.hotel_id','=','ah.id')
            ->where('au.id',$id)
            ->select('username','dateMade','name','date_start','date_end','num_people','date_reserved','full_price')
            ->get();
        return $rez;
    }

    public function addComment($hId,$uId,$text,$rating,$subject)
    {
        $rez = \DB::table('rating')->insertGetId(['user_id'=>$uId,'hotel_id'=>$hId,'rating'=>$rating,'subject'=>$subject,'comment'=>$text]);
        return $rez;
    }

    public function getReserv($id){
        $rez = \DB::table('reservation_hotel as rh')
            ->join('stay_room as sr','rh.stay_id','=','sr.id')
            ->join('atlashotel as ah','sr.hotel_id','ah.id')
            ->join('room_type as rt','sr.room_type_id','rt.id')
            ->where('rh.user_id',$id)
            ->get();
        return $rez;
    }

    public function reservation($uId,$hId,$ppl,$room,$start,$end,$price,$service,$payment){
        $sId = \DB::table('stay_room')->where('hotel_id',$hId)->where('room_type_id',$room)->select('id')->first();
        $rez = \DB::table('reservation_hotel')
            ->insertGetId(['user_id'=>$uId,'stay_id'=>$sId->id,'date_start'=>$start,'date_end'=>$end,'num_people'=>$ppl,'service_id'=>$service,'payment_id'=>$payment,'full_price'=>$price]);
        return $rez;
    }
}
