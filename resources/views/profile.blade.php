@extends('layouts.app')

@section('content')
    <div class="profile" id="profile">
        <div class="container">
            <div class="row" >
                {{--<div class="title-section">
                    <h3>Test</h3>
                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="profile-box" >
                        <div class="profile-heading">
                            <img src="{{ asset('assets/images/user (2).png')}}">
                            <h4>{{ Auth::user()->fullname }}</h4>
                            <button type="button" class="btn btn-profile" data-toggle="modal" data-target="#exampleModal">
                                Edit
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="image-avatar">Ubah Foto</label>
                                                    <input type="file" name="image-avatar" class="form-control" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" id="username" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                                                           value="{{Session::get('user_email')}}" readonly>
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="password">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-body">
                            <div class="row">

                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="fullName" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="fullName" value="{{ Auth::user()->fullname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->gender}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Session::get('user_dob')}}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
