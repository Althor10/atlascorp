<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FrontendModel;

class FrontendController extends Controller
{
    public function index(){
        $front = new FrontendModel();
        $homeSlider = $front->getSlider();
        $offers = $front->getPlanetPromo();
        $trending = $front->getHotels();
        $news = $front->getNews();
        $nav = $front->getNav();
        return view('pages.home',['slider'=>$homeSlider,'promo'=>$offers,'hotels'=>$trending,'news'=>$news,'nav'=>$nav]);
    }
    public function getAbout(){

        $front = new FrontendModel();
        $nav = $front->getNav();
        return view('pages.aboutpage',['nav'=>$nav]);
    }
    public function getOffers(){

        $front = new FrontendModel();
        $nav = $front->getNav();
        $offersObj = new FrontendModel();
        $offers = $offersObj->getOffers();

        return view('pages.offers',['offers'=>$offers,'nav'=>$nav]);
    }

    public function getOffersFilter($id){
        $front = new FrontendModel();
        $nav = $front->getNav();
        $off = new FrontendModel();
        $offers = $off->getOffersFiltered($id);
        return view('pages.filteredOffers',['offers'=>$offers,'nav'=>$nav]);
    }

    public function getContactPage(){

        $front = new FrontendModel();
        $nav = $front->getNav();
        return view('pages.contact',['nav'=>$nav]);
    }

    public function getLoginPage(){

        $front = new FrontendModel();
        $nav = $front->getNav();
        return view('pages.login',['nav'=>$nav]);
    }

    public function getRegisterPage(){

        $front = new FrontendModel();
        $nav = $front->getNav();
        return view('pages.register',['nav'=>$nav]);
    }

    public function sendMessage(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject'=>'required|min:5',
            'message'=>'reqired|min:5'
        ]);
        $name = $request->input('Name');
        $email = $request->input('E-mail');
        $subject = $request->input('Subject');
        $message = $request->input('message');

        $obj = new FrontendModel();
        $sendMes = $obj->sendMessage($name,$email,$subject,$message);
        return redirect()->route('contact')->with('message',"Message Sent!");
    }


}
