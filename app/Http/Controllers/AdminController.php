<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Hotel;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class AdminController extends Controller
{
    public function index(){
        $planetsObj = new Admin();
        $planets = $planetsObj->getPlanets();
        $hotelObj = new Admin();
        $hotels = $hotelObj->getHotels();
        $starsObj = new Hotel();
        $stars = $starsObj->getStars();
        $roomType = $starsObj->getRoomType();
        return view('admin.adminHotels',['planets'=>$planets,'hotels'=>$hotels,'stars'=>$stars,'type'=>$roomType]);
    }
    public function editHotel($id){
        $hotelObj = new Admin();
        $hotels = $hotelObj->getOneHotel($id);
        return view('admin.adminEditHotel',['hotels'=>$hotels]);
    }

    public function getUsers(){
        $userObj = new User();
        $user = $userObj->getUsers();
        return view('admin.usersManage',['users'=>$user]);
    }

    public function getNews(){
        $newsO = new Admin();
        $news = $newsO->getNews();
        return view('admin.adminHomeEdit',['news'=>$news]);
    }

    public function editNews($id)
    {
       $newsO = new Admin();
       $news = $newsO->editNews($id);
       return view('admin.adminEditNews',['news'=>$news]);
    }

    public function updateNews(Request $req)
    {
        $validatedData = $req->validate([
        'title' => 'required|min:4',
        'text' => 'required|min:3'
    ]);

        $id = $req->input('id');
        $title = $req->input('title');
        $text = $req->input('text');
        $obj = new Admin();
        $update = $obj->updateNews($title,$text,$id);
        if(empty($update)){
            return redirect()->route('editNews',['id'=>$id,'update'=>$update])->with('message','Cannot do the change!');
        }else{
            return redirect()->route('admin');
        }


    }
    public function insertNews(Request $req){
        $id = $req->input('id');
        $title = $req->input('title');
        $text = $req->input('text');
        $obj = new Admin();
        $insert = $obj->insertNews($title,$text);
        if($insert){
            return redirect()->route('admin')->with('message','New News has been created successfully!');
        }
        else{
            return redirect()->route('admin')->with('message','Problem while inserting into database!');
        }
    }
    public function deleteNews($id){
        $obj = new Admin();
        $delete = $obj->deleteNews($id);
        return redirect()->route('admin')->with('message','Item deleted successfully!');
    }
}
