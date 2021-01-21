@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h5>Image</h5>
                    <img style="height:30vh;" src="{{ url($about->image) }}" alt="About_Image" class="img-thumbnail">
                    <input type="file" name="image" class="mt-3">
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="title"><h5>Title</h5></label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $about->title }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="description"><h5>Description</h5></label>
                            <textarea type="text" name="description" id="description" class="form-control">{{ $about->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="name"><h5>Name</h5></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $about->name }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="profile"><h5>Profile</h5></label>
                            <input type="text" name="profile" id="profile" class="form-control" value="{{ $about->profile }}">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="email"><h5>Email</h5></label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $about->email }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="phone"><h5>Phone</h5></label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ $about->phone }}">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill1"><h5>Skill 1</h5></label>
                            <input type="text" name="skill1" id="skill1" class="form-control" value="{{ $about->skill1 }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill2"><h5>Skill 2</h5></label>
                            <input type="text" name="skill2" id="skill2" class="form-control" value="{{ $about->skill2 }}">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill3"><h5>Skill 3</h5></label>
                            <input type="text" name="skill3" id="skill3" class="form-control" value="{{ $about->skill3 }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill4"><h5>Skill 4</h5></label>
                            <input type="text" name="skill4" id="skill4" class="form-control" value="{{ $about->skill4 }}">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill5"><h5>Skill 5</h5></label>
                            <input type="text" name="skill5" id="skill5" class="form-control" value="{{ $about->skill5 }}">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="skill6"><h5>Skill 6</h5></label>
                            <input type="text" name="skill6" id="skill6" class="form-control" value="{{ $about->skill6 }}">
                        </div>
                    </div>
                </div>


                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="skill7"><h5>Skill 7</h5></label>
                        <input type="text" name="skill7" id="skill7" class="form-control" value="{{ $about->skill7 }}">
                    </div>
                </div>

            </div>
            <input type="submit" name="submit" value="Edit" class="btn btn-info mb-3">
        </form>
        {{--  <div style="height: 100vh"></div>  --}}
    </div>
</main>
@endsection

