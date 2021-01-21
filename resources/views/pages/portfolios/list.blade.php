@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">List Of Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">List Of Services</li>
        </ol>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Sub Title</th>
                <th scope="col">Big Image</th>
                <th scope="col">Small Image</th>
                <th scope="col">Description</th>
                <th scope="col">Client</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(count($portfolios) > 0)
                    @foreach($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td>{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->sub_title }}</td>
                        <td>
                            <img style="height:10vh" src="{{ url($portfolio->big_image) }}" alt="Big_Image">
                        </td>
                        <td>
                            <img style="height:10vh" src="{{ url($portfolio->small_image) }}" alt="Small_Image">
                        </td>
                        <td>{{ $portfolio->description }}</td>
                        <td>{{ $portfolio->client }}</td>
                        <td>{{ $portfolio->category }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
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

