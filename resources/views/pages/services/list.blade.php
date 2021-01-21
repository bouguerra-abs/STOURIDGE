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
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(count($services) > 0)
                    @foreach($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td>{{ $service->icon }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
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

