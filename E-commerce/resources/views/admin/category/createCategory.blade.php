@extends('admin.master')
@section('content')

<hr/>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->

            <div class="row">

                <div class="col-lg-12">
                    <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                    </hr>
                    <div class="well">
                        <!--   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->
                        {!!Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Category name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="categoryName">
                                <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName'):''}}</span>

                            </div>


                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="categoryDescription" rows="8"></textarea>
                                <span class="text-danger">{{$errors->has('categoryDescription')? $errors->first('categoryDescription'):''}}</span>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Public Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="public_status">
                                    <option>Select Publication Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">unpublished</option>

                                </select>

                            </div>


                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save Category</button>

                            </div>

                        </div>
                        {!!Form::close()!!}
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
