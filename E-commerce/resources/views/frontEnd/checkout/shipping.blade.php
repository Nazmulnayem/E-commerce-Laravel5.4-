@extends('frontEnd.master')

@section('title')
    SmartShop
@endsection

@section('mainContent')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th> <h3 class="text-center text-success"> <span> Dear {{Session::get('name')}} You have to give us a product shipping info to complete you order</span> <br>if your bill info and shipping info save then Click Send order here</h3></th>

            </tr>
            </thead>
        </table>


        <div class="alert alert-warning hidden">
            <span>shipping info goes here....</span>
            <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><h4 class="text-center">shipping info goes here....</h4></th>

            </tr>
            </thead>
            <tbody>
            <tr>

                <td>
                    {{Form::open(['route'=>'new-shipping','method'=>'post'])}}
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" value="{{ $customer->name }}" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" value="{{$customer->phoneNumber}}" type="text" name="phoneNumber">
                    </div>
                    <div class="form-group">
                        <label>Email ID</label>
                        <input class="form-control" value="{{$customer->email}}" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" placeholder="address">
                                 {{$customer->address}}"
                            </textarea>
                    </div>
                    <button class="btn btn-primary btn-block pull-right">Send order here</button>
                    {{Form::close()}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection