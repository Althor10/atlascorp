<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/about_background.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">Reservation </div>
    </div>
</div>
</br></br></br></br>
@foreach($hotel as $h)
<div class="container">
    <div class="container">
<form action="/book">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">User</label>
            <input type="hidden" name="userId" value="{{session()->get('user')[0]->aid}}">
            <input type="text" class="form-control" name="name" id="name" disabled value="{{session()->get('user')[0]->first_name.' '.session()->get('user')[0]->last_name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Hotel</label>
            <input type="hidden" name="hotelId" value="{{$h->aid}}">
            <input type="text" class="form-control" name="hotel" disabled id="hotel" value="{{$h->name}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputCity">Number of People</label>
            <input type="text" name="people" class="form-control" id="people">
        </div>
        <div class="form-group col-md-4">
            <label for="roomType">Room Type</label>
            <select id="roomType" name="roomType" class="form-control">

                <option selected value="-1">Choose...</option>
                @foreach($room as $rh)
                <option value="{{$rh->price_per_night}}">{{$rh->room_type}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="payment">Payment Method</label>
            <select id="payment" name="payment" class="form-control">

                <option selected value="-1">Choose...</option>
                @foreach($pay as $p)
                    <option value="{{$p->id}}">{{$p->payment}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="service">Service </label>
            <select id="service" name="service" class="form-control">

                <option selected value="-1">Choose...</option>
                @foreach($service as $s)
                    <option value="{{$s->id}}">{{$s->service}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3" id="pricePer">
            <label for="inputCity">Price Per Day</label>
            <input type="text" disabled name="pricePerDay" class="form-control" id="pricePerDay">
        </div>

        <div class="form-group col-md-2">
            <label for="bookDate">Date Start</label>
            <input type="date" name="bookDate" class="form-control" id="bookDate">
        </div>
        <div class="form-group col-md-2">
            <label for="bookDate2">Date End</label>
            <input type="date" name="bookDate2" class="form-control"  id="bookDate2">
@csrf
        </div>
        <div class="form-group col-md-3">
            <label for="inputCity">FullPrice</label>
            <input type="text" disabled name="fullpriceFake" class="form-control" id="fullPriceFake">
            <input type="hidden" name="fullprice" id="fullPrice">
        </div>


    </div>

    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Book">
</form>
        @endforeach
        </div>
        </div>
</br></br></br></br></br></br>
