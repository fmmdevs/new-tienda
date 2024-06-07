@extends('layouts.admin')
@section('title', 'Admin Categories')
@section('content')
    <div class="card mb-4">
        <div class="card-header"> Create Products </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header"> Manage Categories </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.category.edit', $category->id) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
