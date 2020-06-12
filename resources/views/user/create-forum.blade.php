@extends('layouts.app')

@section('content')

    <div class="create-forum" id="create-forum">
        <div class="container">

            {{--<div class="row">--}}
                <div class="col-sm-6 col-md-11">
                    <div class="create-forum-box">
                        <div class="create-forum-title">
                            <h2>Tanya Psikolog</h2>
                        </div>
                        {{--<div class="col-sm-2 col-md-2">--}}
                            <form action="{{route('tanya-jawab.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <select class="form-control form-control-sm col-sm-2 col-md-2" id="category_id" {{--name="category_id"--}}>
                                        @foreach($category as $row)
                                            <option  value="{{$row -> id}}" {{ old('category_id') == $row->id ? 'selected':'' }}>{{ $row->name }}</option>
                                            {{--<input type="hidden" name="{{$row -> id}}" value="{{$row -> id}}">--}}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <textarea class="form-control " name="description" id="description"> {{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        {{--</div>--}}


                    </div>

                </div>

            {{--</div>--}}


        </div>
    </div>
@endsection
@section('js')
    <!-- LOAD CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        //TERAPKAN CKEDITOR PADA TEXTAREA DENGAN ID DESCRIPTION
        CKEDITOR.replace('description');
    </script>
@endsection
