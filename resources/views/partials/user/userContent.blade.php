
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/places/10431.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">User Page</div>
    </div>
</div>

@if($reservations == [])
<div class="container">
<h2>My reservations</h2>
<p>List of all my resrvations</p>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Hotel</th>
        <th>Room Type</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>People Number</th>
        <th>Full Price</th>
        <th>Reservation Date</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Johnaaa</td>
        <td>Doe</td>
        <td>john@example.com</td>
    </tr>

    </tbody>
</table>
</div>
    @else
    <div class="container">
        <h2>My reservations</h2>
        <p>List of all my resrvations</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Hotel</th>
                <th>Room Type</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>People Number</th>
                <th>Full Price</th>
                <th>Reservation Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservations as $r)
            <tr>

                <td>{{$r->name}}</td>
                <td>{{$r->room_type}}</td>
                <td>{{$r->date_start}}</td>
                <td>{{$r->date_end}}</td>
                <td>{{$r->num_people}}</td>
                <td>{{$r->full_price}}</td>
                <td>{{$r->date_reserved}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endif
