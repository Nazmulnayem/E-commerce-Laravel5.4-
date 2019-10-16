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
                    
                    </hr>
                    <div class="well">
                        <!--   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->
                        {!!Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryform'])!!}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Category name</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{$categoryByid->categoryName}}" class="form-control" name="categoryName">
                                <input type="hidden" value="{{$categoryByid->id}}" class="form-control" name="categoryId">

                            </div>


                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="categoryDescription" rows="8">{{$categoryByid->categoryDescription}}</textarea>

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
<script>
    document.forms['editCategoryform'].elements['public_status'].value={{$categoryByid->public_status}};
    </script>

@endsection
