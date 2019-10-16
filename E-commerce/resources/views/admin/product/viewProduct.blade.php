@extends('admin.master')
@section('content')
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Mess Managment</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <form class="navbar-form navbar-left" action method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="btn">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
           
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                     <h3 class="text-center text-success">{{ Session::get('message')}}</h3>   
                        <div class="well">
                            <table class="table table-bordered table-hover">
                                  
                                    
                                <tr>
                                    <th>Product Id</th>
                                    <th>{{$product->id}}</th>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <th>{{$product->productName}}</th>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <th>{{$product->categoryName}}</th>
                                </tr>
                                <tr>
                                    <th>Manufacture Name</th>
                                    <th>{{$product->manufactureName}}</th>
                                </tr>
                                <tr>
                                    <th>Product price</th>
                                    <th>{{$product->productPrice}}</th>
                                </tr>
                                <tr>
                                    <th>Product Quantity</th>
                                    <th>{{$product->productQuantity}}</th>
                                </tr>
                                <tr>
                                    <th>Product Short Description</th>
                                    <th>{!! $product->productShortDescription !!}</th>
                                </tr>
                                <tr>
                                    <th>Product Long Description</th>
                                    <th>{!! $product->productLongDescription !!}</th>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <th><img src="{{asset($product->productImage)}}"alt="{{$product->productName}}"></th>
                                </tr>
                                <tr>
                                    <th>Publication Status</th>
                                    <th>{{$product->public_status}}</th>
                                </tr>
                                
                            </table>  
                        </div>
                    </div>
                </div>
            </div>

</div>
    </div>
</div>


@endsection
