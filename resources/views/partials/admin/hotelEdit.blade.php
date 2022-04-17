<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tbody><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number of Free Rooms</th>
            <th>Wireless</th>
            <th>Smoking</th>
            <th>Wheelchair</th>
            <th>Pool</th>
        </tr>
        <form action="{{route('updateHotel')}}" method="post">
        @foreach($hotels as $hotel)
            <tr>
                <td>{{$hotel->ahid}}</td>
                <input type="hidden" name="id" value="{{$hotel->ahid}}">
                <td><input type="text" name="name" value="{{$hotel->ahname}}"></td>
                <td><input type="text" name="free" value="{{$hotel->num_free_rooms}}">
                @if($hotel->wireless)
                    <td><select class="label label-success" name="wireless" >
                            <option value="1"> Yes</option>
                            <option value="0">No</option>
                        </select>
                    </td>
                @else
                    <td><select class="label label-danger" name="wireless" >
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </td>
                @endif
                @if($hotel->smoking_area)
                    <td><select class="label label-success" name="smoking">
                            <option value="1"> Yes</option>
                            <option value="0">No</option>
                        </select></td>
                @else
                    <td><select class="label label-danger" name="smoking">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </td>
                @endif
                @if($hotel->wheelchair)
                    <td><select class="label label-success" name="wheel">
                            <option value="1"> Yes</option>
                            <option value="0">No</option>
                        </select>
                    </td>
                @else
                    <td><select class="label label-danger" name="wheel">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </td>
                @endif
                @if($hotel->pool)
                    <td><select class="label label-success" name="pool">
                            <option value="1"> Yes</option>
                            <option value="0">No</option>
                        </select>
                    </td>
                @else
                    <td><select class="label label-danger" name="pool">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </td>
                @endif
                <td><input type="submit" class="btn-danger btn" value="Submit"></td>
            </tr>
        @endforeach
            @csrf
        </form>
        @if(session('message'))
            <ul>
            <li style="color:red;">{{session('message')}}</li>
            </ul>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li style="color:red;">{{$error}}</li>
            @endforeach
        @endif
        </tbody></table>
</div>
