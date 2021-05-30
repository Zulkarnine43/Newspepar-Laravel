@extends('admin.headerFooter')
@section('body')
    <div class="row">
        <div  class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>
                <h3>{{Session::get('message')}}</h3>

                <form method="POST" action="{{route('gallary_save')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Name</label>
                        <div class="col-md-9">
                            <input type="text" name="product_name" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="crop_type">
                                <option>---Select a Blog Name</option>
                                <option value="Education">Education</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Sports">Sports</option>
                                <option value="Newspaper">Newspaper</option>
                                <option value="Job">Job</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Description</label>
                        <div class="col-md-9">
                            <input type="text" name="product_description" class="form-control"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog image</label>
                        <div class="col-md-9">
                            <input type="file" name="product_image" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="submit" name="btn" value="Save Gallary Info">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
