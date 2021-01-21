@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Big Image</h3>
                    <img style="height:30vh;" src="{{ url($portfolio->big_image) }}" alt="Portfolio_Image" class="img-thumbnail">
                    <input type="file" name="big_image" class="mt-3">
                </div>

                <div class="form-group col-md-3 mt-3">
                    <h3>Small Image</h3>
                    <img style="height:20vh;" src="{{ url($portfolio->small_image) }}" alt="Portfolio_Image" class="img-thumbnail">
                    <input type="file" name="small_image" class="mt-3">
                </div>

                <div class="form-group col-md-4 mt-3 ml-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $portfolio->title }}">
                    </div>

                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ $portfolio->sub_title }}">
                    </div>
                </div>

                <div class="form-group col-md-6 mt-3">
                    <label for="sub_title"><h4>Description</h4></label>
                    <textarea type="text" name="description" id="description" class="form-control">{{ $portfolio->description }}</textarea>
                </div>

                <div class="form-group col-md-4 mt-3 ml-3">
                    <div class="mb-3">
                        <label for="client"><h4>Client</h4></label>
                        <input type="text" name="client" id="client" class="form-control" value="{{ $portfolio->client }}">
                    </div>

                    <div class="mb-5">
                        <label for="category"><h4>Category</h4></label>
                        <input type="text" name="category" id="category" class="form-control" value="{{ $portfolio->category }}">
                    </div>
                </div>

            </div>
            <input type="submit" name="submit" value="Edit" class="btn btn-info mb-5 ml-3">
        </form>
        {{--  <div style="height: 100vh"></div>  --}}
    </div>
</main>
@endsection

