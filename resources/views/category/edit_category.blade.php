@extends('admin.headerFooter')
@section('body')
    <div class="row">
        <div  class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>

                <form method="POST" action="{{route('update_category_add',['id'=>$category->id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" name="Category_name" class="form-control" value="{{$category->Category_name}}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Category Description</label>
                        <div class="col-md-9">
                            <input type="text" name="Category_description" class="form-control" value="{{$category->Category_description}}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Category image</label>
                        <div class="col-md-9">
                            <input type="file" name="Category_image" accept="image/*" value="{{$category->Category_image}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input class="btn-success" type="submit" name="btn" value="Update Category Info">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

