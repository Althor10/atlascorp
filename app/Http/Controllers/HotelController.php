<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequests;
use App\Models\Hotel;
use App\Models\FrontendModel;

class HotelController extends Controller
{
    private $model;


    function __construct()
    {
        $this->model = new Hotel();
    }

    public function create(Request $request)
    {

    }

    public function getSingle($id){
        $front = new FrontendModel();
        $nav = $front->getNav();
        $hotelObj = new Hotel();
        $hotelOne = $hotelObj->getHotel($id);
        $rooms = $hotelObj->getStayRooms($id);
        $reviews = $hotelObj->getReviews($id);
        return view('pages.single_listing',['hotel'=>$hotelOne,'rooms'=>$rooms,'reviews'=>$reviews,'nav'=>$nav]);
    }


    public function updateHotel(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'free' => 'required|integer'
        ]);
        $name = $request->input('name');
        $num = $request->input('free');
        $wire = $request->input('wireless');
        $smoke = $request->input('smoking');
        $wheel = $request->input('wheel');
        $pool = $request->input('pool');
        $id = $request->input('id');
        $obj = new Hotel();
        $update = $obj->updateHotel($id,$name,$num,$wire,$smoke,$wheel,$pool);

        if(empty($update)){
            return redirect()->route('editHotel',['id'=>$id])->with('message','Cannot do the change!');
        }else{
            return redirect()->route('admin');
        }
    }

    public function insertHotel(Request $request){

            $name= $request->input('hotName');
            $desc = $request->input('desc');
            $shortDesc = $request->input('short_desc');
            $planet = $request->input('planets');
            $stars = $request->input('stars');
            $pic = $request->file('pic');
            $fileName = time() . $pic->getClientOriginalName();
            $price = $request->input('price');
            $wire = $request->input('wireless');
            $smoke = $request->input('smoking');
            $wheel = $request->input('wheel');
            $pool = $request->input('pool');
            if($wire == null){
                $wire = 0;
            }else{$wire = 1;}
        if($wire == null){
            $wire = 0;
        }else{$wire = 1;}
        if($smoke == null){
            $smoke = 0;
        }else{$smoke = 1;}
        if($pool == null){
            $pool = 0;
        }else{$pool = 1;}
        if($wheel == null){
            $wheel = 0;
        }else{$wheel = 1;}

            if($pic->isValid()){
                $pic->move(public_path()."/images/hotels/",$fileName);
                $newPath = "images/hotels/$fileName";
                try{

                    $rez = $this->model->insertHotel($name,$stars,$planet,$desc,$shortDesc,$price,$wire,$smoke,$wheel,$pool,$newPath);

                    if($rez){
                        return redirect()->route('admin')->with('message','New hotel has been created successfully!');}
                    else{
                        return redirect()->route('admin')->with('message','Problem while inserting into database!');
                    }
                } catch(\Exception $ex){

                    return redirect()->route('admin')->with('message',$ex->getMessage());

                }
            }else {
                return redirect()->route('admin')->with('message','Problem with the picture!');
            }

    }

    public function deleteHotel($id){
        $hotelObj = new Hotel();
        $delete = $hotelObj->delete($id);
        return redirect()->route('admin')->with('message','Item was deleted!');
    }

    public function newRoom(Request $request){
        $validatedData = $request->validate([
            'price' => 'required|integer',
            'roomCount' => 'required|integer'
        ]);
        $hotel = $request->input('hotel');
        $room = $request->input('roomCount');
        $type = $request->input('type');
        $price = $request->input('price');

            try {
                $rez = $this->model->insertRooms($hotel, $room, $type, $price);
                if($rez){
                    return redirect()->route('admin')->with('message', 'New room has been added!');
                }else {
                    return redirect()->route('admin')->with('message', 'Cant add a new room!');
                }
            } catch (\Exception $ex) {
                return redirect()->route('admin')->with('message', $ex->getMessage());
            }


    }
}
