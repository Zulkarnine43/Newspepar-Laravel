@extends('admin.headerFooter')
@section('body')
    <div class="row">
        <div  class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>
                <h3>{{Session::get('message')}}</h3>

                <form method="POST" action="{{route('save_blog_add')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Name</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_name" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="blog_type">
                                <option>---Select a Category Name</option>
                                @foreach($catagories as $catagorie)
                                <option value="{{$catagorie->Category_name}}">{{$catagorie->Category_name}}</option>
                                    @endforeach
                            </select>

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Description</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_description" class="form-control"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">long Description</label>
                        <div class="col-md-9">
                            <textarea cols="40" rows="15" id="editor" class="form-control" name="long_description"></textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Blog image</label>
                        <div class="col-md-9">
                            <input type="file" name="blog_image" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="submit" class="btn-success" name="btn" value="Post Blog Info">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
