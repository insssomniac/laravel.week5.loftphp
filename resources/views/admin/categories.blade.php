@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm">
                                Categories
                            </div>
                            <div class="col-sm-2">
                                <a href="{{route('admin.categories.create')}}">Create new</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', ['id' => $category->id])}}">Edit</a>
                                        <a href="{{route('admin.categories.delete', ['id' => $category->id])}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
