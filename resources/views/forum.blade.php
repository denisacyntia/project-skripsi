@extends('layouts.app')

@section('content')
    <div class="forum" id="forum">
        <div class="container">
            <div class="forum-title">
                <h2>Forum</h2>
            </div>
            <div class="row justify-content-sm-center">
                <div class="col-sm-2 col-md-2">
                    <div class="form-group forum-select">
                        {{--<label for="exampleFormControlSelect1">Example select</label>--}}
                        <select class="form-control form-control-sm" id="category_id">
                            <option >All</option>
                            @foreach($category as $row)
                                <option value="{{$row -> id}}" {{ old('category_id') == $row->id ? 'selected':'' }}>{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>{{--End Row--}}
            <div class="row">
                @forelse($forum as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="forum-box">
                            <div class="forum-heading">
                                <img  src="assets/images/user (2).png">
                                <h4>Anonymous</h4>

                                    <p>{{$row->category->name}}</p>

                            </div>
                            <div class="forum-body">
                                <p><a href="/forum-single">{!!substr($row->description,0,100)!!}</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


                {{--<div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li class="disabled"><i class="icofont-rounded-left"></i></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                    </ul>
                </div>--}}
            </div>{{--End Row--}}
        </div>
    </div>

@endsection
