@extends('frontEnd.master')

@section('title')
    SmartShop
@endsection

@section('mainContent')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th> <h3 class="text-center text-success"> <span>You have to log in for order .please sign in first</span></h3></th>

            </tr>
            </thead>
        </table>


        <div class="alert alert-warning hidden">
            <span>You have to sign in first for order .please sign in first.</span>
            <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Login</th>
                <th>Sign Up</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    {{Form::open()}}
                        <div class="form-group">
                            <label>Email ID</label>
                            <input class="form-control" placeholder="Email" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Password" type="password" name="password">
                        </div>
                        <button class="btn btn-primary pull-right">Login</button>
                    {{Form::close()}}
                </td>
                <td>
                    {{Form::open(['route'=>'customer-sign-up','method'=>'post'])}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" placeholder="Name" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" placeholder="Phone" type="text" name="phoneNumber">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input class="form-control" placeholder="Email" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Password" type="password" name="password">
                            <span class="help-block">Password should be 6 characters long.</span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" placeholder="address">

                            </textarea>
                        </div>
                        <button class="btn btn-primary pull-right">Sign Up</button>
                    {{Form::close()}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    @endsection