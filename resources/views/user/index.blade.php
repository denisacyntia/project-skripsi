@extends('layouts.app')

@section('content')
    <div class="customer-dashboard" id="profile">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4">
                    <div class="customer-box">
                        <div class="customer-heading" {{--style="background-image: url('{{asset('assets/images/home-820389_1920.jpg')}}');"--}}>
                            <img src="{{ asset('assets/images/user (2).png')}}">
                            <h4>{{ Auth::user()->fullname }}</h4>
                        </div>
                        <div class="customer-body">
                            <ul class="customer-menu">
                                <li class="customer_menu-list">
                                    <a class="customer__menu-list" href="{{route('customer.dashboard')}}">Dashboard</a>
                                </li>
                                <li class="customer_menu-list">
                                    <a class="customer__menu-list" href="{{url('/customer/profil')}}">Profile</a>
                                </li>
                                <li class="customer_menu-list">
                                    <a class="customer__menu-list" href="#">Jadwal Konseling</a>
                                </li>
                                <li class="customer_menu-list">
                                    <a class="customer__menu-list" href="#">Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="box" style="background-image: url('{{asset('assets/images/')}}')">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
