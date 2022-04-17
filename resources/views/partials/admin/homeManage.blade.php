<form role="form">
    <div class="box-body">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hotels Edit</h3>

                </div>
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tbody><tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
        </tr>
        @foreach($news as $n)
            <tr>
                <td>{{$n->id}}</td>
                <td>{{$n->title}}</td>
                <td>{{$n->text}}</td>
                <td><a href="{{route('editNews',$n->id)}}" >Edit</a></td>
                <td><button class="btn-danger delete-news" name="btnDel" id="btnDel" data-id="{{$n->id}}">X</button></td>
                <td></td>
            </tr>
        @endforeach

        </tbody></table>
</div>
            </div>
            <!-- /.box -->
        </div>

        <!-- /.box-body -->
    </div>
</form>

<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border insert">
                <h3 class="box-title">Insert New News</h3>
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
            <form role="form" action="{{route('insertNews')}}" method="post" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="hotName">Title header</label>
                        <input type="text" name="title" class="form-control" id="hotName" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="desc">Text</label>
                        <input type="text" name="text" class="form-control" id="desc" placeholder="Text...">
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
    </div>
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete-news').click(function () {

                event.preventDefault();
                var id = $(this).data('id');
                alert(id);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'delete',
                    url: "/deleteNews/"+id,
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
