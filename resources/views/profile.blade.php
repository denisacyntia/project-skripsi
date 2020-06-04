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
                            <img src="{{Auth::user()->image}}">
                            <h4>{{ Auth::user()->name }}</h4>
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
                                            <form action="{{route('customer.update', Auth::user()->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="image">Ubah Foto</label>
                                                    <input type="file" name="image" class="form-control" value="image" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fullname" class="col-md-4 control-label">Nama Lengkap</label>
                                                    <div class="col-md-12">
                                                        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                               placeholder="Masukkan nama lengkap" value="{{Auth::user()->fullname}}" required autocomplete="fullname" autofocus>
                                                        @error('fullname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-md-4 control-label">Username</label>
                                                    <div class="col-md-12">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                                               placeholder="Co: brucewayne" value="{{ Auth::user()->name}}" required autocomplete="name" autofocus>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                               placeholder="Co: brucewayne@email.com" value="{{ Auth::user()->email}}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                               placeholder="Masukkan password" value="{{old('password')}}" required autocomplete="password" autofocus>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="col-md-4 control-label">Nomor Telepon</label>
                                                    <div class="col-md-12">
                                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                               placeholder="Masukkan nomor telepon" value="{{Auth::user()->phone }}" required autocomplete="phone" autofocus>
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
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
                                    <label for="fullName" class="col-sm-4 col-form-label">Nama Lengkap</label>
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
                                        <input type="text" readonly class="form-control-plaintext" id="gender" value="{{Auth::user()->gender}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-4 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="phone" value="{{Auth::user()->phone}}">
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
