<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FrontendModel;

class UserController extends Controller
{
    public function login(Request $req){

            $validatedData = $req->validate([
                'usr' => 'required|min:3',
                'pass' => 'required|min:5'
            ]);

        $usr = $req->input('usr');
        $pass = $req->input('pass');
        $user = new User();
        $login = $user->login($usr,$pass);

        if(empty($login)){

            return redirect()->route('login')->with('message','No user found with that username and password!');
        }else{
            $req->session()->push('user',$login);
            return redirect('/');
        }

    }

    public function logout(Request $req){
        $req->session()->forget('user');
        $req->session()->flush();
        return redirect('/');
    }

    public function registration(Request $req){
        $user = $req->input('username');
        $email = $req->input('email-address');
        $password = $req->input('password');
        $first = $req->input('first-name');
        $last = $req->input('last-name');
        $pass2 = $req->input('confirm_password');

        if($password != $pass2 ){
            return redirect()->route('register')->with('message','Passwords dont match!');
        }

        $u = new User();
        $register = $u->registration($user,$email,$password,$first,$last);

        if($register){
            return redirect()->route('login');
        }else {
            return redirect()->route('register');
        }

    }

    public function index($id){

        $front = new FrontendModel();
        $nav = $front->getNav();
        $uO = new User();
        $userData = $uO->getUser($id);
        $userReservations = $uO->getReserv($id);
        if(empty($userReservations)){
            return view('pages.userPage',['userData'=>$userData,'nav'=>$nav]);
        }
        else{
            return view('pages.userPage',['userData'=>$userData,'nav'=>$nav,'reservations'=>$userReservations]);
        }

    }

    public function addComment(Request $request,$id){


        $hId = $request->input('hid');
        $uId = $id;
        $text = $request->input('text');
        $rating = $request->input('rating');
        $subject= $request->input('subject');
        $o = new User();
        $comment = $o->addComment($hId,$uId,$text,$rating,$subject);
        if($comment){
            return redirect("/single/$hId")->with('message','Done!');
        }else{
            return redirect("/single/$hId")->with('message','Problem with adding a comment');
        }

    }

    public function showBookPage($idU,$idH){
        $front = new FrontendModel();
            $nav = $front->getNav();
            $hotels = new Hotel();
            $hotel = $hotels->getStayRooms($idH);
            $roomType = $hotels->getRoomTypes($idH);
            $service = $hotels->getService();
            $payment = $hotels->getPayments();
            return view('pages.book',['nav'=>$nav,'hotel'=>$hotel,'room'=>$roomType,'service'=>$service,'pay'=>$payment]);
    }

    public function reservation(Request $request){
        $uId = $request->input('userId');
        $hId = $request->input('hotelId');
        $ppl = $request->input('people');
        $room = $request->input('roomType');
        $start = $request->input('bookDate');
        $end = $request->input('bookDate2');
        $price = $request->input('fullprice');
        $service = $request->input('service');
        $payment = $request->input('payment');

        $new = new User();
        $reserve = $new->reservation($uId,$hId,$ppl,$room,$start,$end,$price,$service,$payment);
        if($reserve){
            return redirect()->route('userPage',$uId)->with('message',"Reserved!");
        }else {
            return redirect()->back()->with('message','Failed to reserve!');
        }
    }


}
