<div class="row">
<div class="col-md-6">
<div class="box box-primary">
    <div class="box-header with-border insert">
        <h3 class="box-title">Insert New Hotel</h3>
       @if(session('message'))
           <h4>
                <li style="color:red;">{{session('message')}}</li>
           </h4>
        @endif
        @foreach( $errors->all() as $e)
            <h4>
                <li style="color:red;">{{$e}}</li>
            </h4>
            @endforeach
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('insertHotel')}}" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label for="hotName">Hotel Name</label>
                <input type="text" name="hotName" class="form-control" id="hotName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control" id="desc" placeholder="Description...">
            </div>
            <div class="form-group">
                <label for="desc">Short Description</label>
                <input type="text" name="short_desc" class="form-control" id="short_desc" placeholder="Description...">
            </div>
            <div class="form-group">
                <label for="desc">Hotel AvG Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Price...">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="pic" id="picture">

                <p class="help-block">Set the picture of the Hotel.</p>
            </div>
            <div class="form-group">
                <label for="planet">Planet</label>
                <p class="help-block">On which planet is it?</p>
                <select name="planets" class="form-control">
                    <option value="-1">Choose a planet..</option>
                    @foreach($planets as $planet)
                        <option value="{{$planet->id}}">{{$planet->planet_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="planet">Stars</label>
                <p class="help-block">How good is it?</p>
                <select name="stars" class="form-control">
                    <option value="-1">Choose a star..</option>
                    @foreach($stars as $star)
                        <option value="{{$star->id}}">{{$star->stars}}</option>
                    @endforeach
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="wireless"> Wireless
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="smoking"> Smoking Area
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="wheelchair"> Invalid people support
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="pool"> Pool
                </label>
            </div>
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value='Submit'>
            </div>
        </div>

        <!-- /.box-body -->

    @csrf
    </form>
</div>
</div>


    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Delete Hotels</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th style="width: 40px">Stars</th>
                            <th></th>
                        </tr>
                        @foreach($hotels as $h)

                        <tr>
                            <td>{{$h->ahid}}</td>
                            <td>{{$h->ahname}}</td>
                            <td>
                                <div class="progress progress-xs">
                                    @if($h->prosekOcena<5)
                                    <div class="progress-bar progress-bar-danger" style="width: {{$h->prosekOcena*10}}%"></div>
                                    @else
                                        <div class="progress-bar progress-bar-success" style="width: {{$h->prosekOcena*10}}%"></div>
                                        @endif
                                </div>
                            </td>
                            <td><span class="badge bg-red">{{$h->stars}}</span></td>
                            @csrf
                            <td><button class="btn-danger delete-hotel" name="btnDel" id="btnDel" data-id="{{$h->ahid}}">X</button></td>
                        </tr>
                        @endforeach
                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border insert">
                <h3 class="box-title">Insert New Room</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('newRoom')}}" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="hotel">Hotel</label>
                        <p class="help-block">Choose a hotel to add a room?</p>
                        <select name="hotel" class="form-control">
                            <option value="-1">Choose a hotel to add..</option>
                            @foreach($hotels as $h)
                                <option value="{{$h->ahid}}">{{$h->ahname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room">Room</label>
                        <p class="help-block">Choose a room type?</p>
                        <select name="type" class="form-control">
                            <option value="-1">Choose a room type..</option>
                            @foreach($type as $t)
                                <option value="{{$t->id}}">{{$t->room_type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="roomCount">Room Count</label>
                        <input type="text" name="roomCount" class="form-control" id="roomCount" placeholder="Enter value">
                    </div>
                    <div class="form-group">
                        <label for="price">Price Per Night</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter value">
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value='Submit'>
                </div>
                @csrf
            </form>
        </div>
    </div>

            <!-- form start -->
            <form role="form">
                <div class="box-body">

                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Hotels Edit</h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Num Free Rooms</th>
                                            <th>Wireless</th>
                                            <th>Smoking</th>
                                            <th>Wheelchair</th>
                                            <th>Pool</th>
                                        </tr>
                                        @foreach($hotels as $hotel)
                                        <tr>
                                            <td>{{$hotel->ahid}}</td>
                                            <td>{{$hotel->ahname}}</td>
                                            <td>{{$hotel->num_free_rooms}}</td>
                                            @if($hotel->wireless)
                                            <td><span class="label label-success">Yes</span></td>
                                            @else
                                            <td><span class="label label-danger">No</span></td>
                                                @endif
                                            @if($hotel->smoking_area)
                                                <td><span class="label label-success">Yes</span></td>
                                            @else
                                                <td><span class="label label-danger">No</span></td>
                                            @endif
                                            @if($hotel->wheelchair)
                                                <td><span class="label label-success">Yes</span></td>
                                            @else
                                                <td><span class="label label-danger">No</span></td>
                                            @endif
                                            @if($hotel->pool)
                                                <td><span class="label label-success">Yes</span></td>
                                            @else
                                                <td><span class="label label-danger">No</span></td>
                                            @endif
                                            <td><a href="{{route('editHotel',$hotel->ahid)}}" >Edit</a></td>
                                        </tr>
                                            @endforeach

                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                <!-- /.box-body -->
                </div>
            </form>
        </div>
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.delete-hotel').click(function () {

            event.preventDefault();
            var id = $(this).data('id');
             alert(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'delete',
                url: "/deleteHotel/"+id,
                data: {},
                success: function (data) {
                    alert("The item has been deleted!");
                    location.reload();
                },
                error: function (xhr,msg) {
                        alert(msg+xhr.status);
                }
            });
        });
    });
</script>
