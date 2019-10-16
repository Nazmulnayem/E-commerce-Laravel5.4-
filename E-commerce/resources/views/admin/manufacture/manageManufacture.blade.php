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
                                <th>ID</th>
                                <th>category Name</th>
                                <th>category Description</th>
                                <th>publication status</th>
                                <th>action</th>
                                
                                
                            </tr>
                                @foreach($manufactures as $manufacture)
                                    <tr>
                                    <td>{{$manufacture->id}}</td>
                                    <td>{{$manufacture->manufactureName}}</td>
                                    <td>{{$manufacture->manufactureDescription}}</td>
                                    <td>{{$manufacture->publicationStatus == 1? 'published':'unpublished'}}</td>
                                    <td>
                                        <a href="{{url('/manufacture/edit/'.$manufacture->id)}}" class="btn btn-success">
                                            <span class="glyphocon glyphicon-edit"></span>
                                            
                                        </a>
                                        <a href="{{url('/manufacture/delete/'.$manufacture->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                                            <span class="glyphocon glyphicon-trash"></span>
                                            
                                        </a>
                                    </td>
                                    
                                </tr>    
                                    
                                @endforeach
                                 
                            </table>  
                        </div>
                    </div>
                </div>
            </div>

</div>
    </div>
</div>


@endsection
