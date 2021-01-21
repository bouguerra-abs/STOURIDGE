@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{--  {{ method_field('PUT') }}  --}}
            <div class="row">

                <div class="form-group col-md-4 mt-3 ml-3">
                    <div class="mb-3">
                        <label for="icon"><h4>Font Awesome Icon</h4></label>
                        <input type="text" name="icon" id="icon" class="form-control">
                    </div>

                    <div class="mb-5">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-5">
                        <label for="description"><h4>Description</h4></label>
                        <textarea type="text" name="description" id="description" class="form-control"></textarea>
                    </div>

                </div>

            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-success mb-5 ml-3">
        </form>
        {{--  <div style="height: 100vh"></div>  --}}
    </div>
</main>
@endsection

