@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">List Of Abouts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">List Of Abouts</li>
        </ol>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Profile</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Skill 1</th>
                <th scope="col">Skill 2</th>
                <th scope="col">Skill 3</th>
                <th scope="col">Skill 4</th>
                <th scope="col">Skill 5</th>
                <th scope="col">Skill 6</th>
                <th scope="col">Skill 7</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(count($abouts) > 0)
                    @foreach($abouts as $about)
                    <tr>
                        <th scope="row">{{ $about->id }}</th>
                        <td>{{ $about->title }}</td>
                        <td>{{ Str::limit(strip_tags($about->description),40) }}</td>
                        <td>
                            <img style="height:10vh" src="{{ url($about->image) }}" alt="Image">
                        </td>
                        <td>{{ $about->name }}</td>
                        <td>{{ $about->profile }}</td>
                        <td>{{ $about->email }}</td>
                        <td>{{ $about->phone }}</td>
                        <td>{{ $about->skill1 }}</td>
                        <td>{{ $about->skill2 }}</td>
                        <td>{{ $about->skill3 }}</td>
                        <td>{{ $about->skill4 }}</td>
                        <td>{{ $about->skill5 }}</td>
                        <td>{{ $about->skill6 }}</td>
                        <td>{{ $about->skill7 }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="{{ route('admin.abouts.edit', $about->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <form action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
          </table>
    </div>
</main>
@endsection

