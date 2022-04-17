
<form role="form">
    <div class="box-body">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hotels Edit</h3>
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

                </div>
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tbody><tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
        </tr>
        <form action="{{route('updateNews')}}" method="post">
            @foreach($news as $n)
                <tr>
                    <td>{{$n->id}}</td>
                    <input type="hidden" name="id" value="{{$n->id}}">
                    <td><input type="text" name="title" value="{{$n->title}}"></td>
                    <td><input type="text" name="text" value="{{$n->text}}">
                    <td><input type="submit" class="btn-danger btn" value="Submit"></td>
                </tr>
            @endforeach
            @csrf
        </form>

        </tbody></table>
</div>
            </div>
        </div>
        <!-- /.box -->
    </div>

    <!-- /.box-body -->
    </div>
</form>
