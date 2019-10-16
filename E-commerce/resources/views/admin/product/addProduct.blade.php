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
                        {!!Form::open(['url'=>'product/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="productName">
                                <span class="text-danger">{{$errors->has('productName')? $errors->first('productName'):''}}</span>

                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="categoryId">
                                    <option>Select Category Name</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                    @endforeach

                                </select>

                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Manufactuer Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="manufactureId">
                                    <option>Select Manufacture Name</option>
                                    @foreach($manufactures as $manufacture)
                                    <option value="{{$manufacture->id}}">{{$manufacture->manufactureName}}</option>
                                    @endforeach

                                </select>

                            </div>


                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="productPrice">
                                <span class="text-danger">{{$errors->has('productPrice')? $errors->first('productPrice'):''}}</span>

                            </div>


                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="productQuantity">
                                <span class="text-danger">{{$errors->has('productQuantity')? $errors->first('productQuantity'):''}}</span>

                            </div>


                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">productShortDescription</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="productShortDescription" rows="5"></textarea>
                                <span class="text-danger">{{$errors->has('productShortDescription')? $errors->first('productShortDescription'):''}}</span>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">productLongDescription</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="productLongDescription" rows="12"></textarea>
                                <span class="text-danger">{{$errors->has('productLongDescription')? $errors->first('productLongDescription'):''}}</span>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product image</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/" name="productImage">
                              <span class="text-danger">{{$errors->has('productImage')? $errors->first('productImage'):''}}</span>

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
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save product</button>

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
