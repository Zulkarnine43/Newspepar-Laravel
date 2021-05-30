@extends('admin.headerFooter')
@section('body')
    <div class="row">
        <div  class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>

                <form method="POST" action="{{route('update_blog_add',['id'=>$blog->id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Name</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_name" class="form-control" value="{{$blog->blog_name}}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="blog_type">
                                <option value="{{$blog->blog_type}}">{{$blog->blog_type}}</option>
                                @foreach($catagories as $catagorie)
                                    <option value="{{$catagorie->Category_name}}">{{$catagorie->Category_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Description</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_description" class="form-control" value="{{$blog->blog_description}}" required/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">long Description</label>
                        <div class="col-md-9">
                            <textarea cols="40" rows="15" id="editor" class="form-control" name="long_description" required>{{$blog->long_description}}</textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Blog image</label>
                        <div class="col-md-9">
                            <input type="file" name="blog_image" accept="image/*" value="{{$blog->blog_image}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="submit" class="btn-success" name="btn" value="Update Blog Info">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

