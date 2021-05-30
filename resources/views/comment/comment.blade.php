@extends('admin.headerFooter')
@section('body')

    <link href="{{url('public/css/manage.css')}}" rel="stylesheet" type="text/css">
    <h3 class="text-success">{{Session::get('message')}}</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3 class="m">Manage Comments Info</h3>
                    <table class="table table-bordered text-center table-hover" style="width: 90%">
                        <tr class="t1">
                            <th>Sl No</th>
                            <th>blog_name</th>
                            <th>user_name</th>
                            <th>comments</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1);
                        @foreach($home_all as $home_pro)
                            <tr class="t2">
                                <td>{{$i++}}</td>
                                <td>{{$home_pro->page_id}}</td>
                                <td>{{$home_pro->name}}</td>
                                <td>{{$home_pro->comment}}</td>
                                <td>
                                    <span><a href="{{route('delete_comment',['id'=>$home_pro->id])}}">DELETE</a></span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection()

