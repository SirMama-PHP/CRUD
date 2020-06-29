@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">
                    <h5> User list</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category name</th>
                                <th scope="col">User id</th>
                                <th scope="col">Created_At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->category_name}}</td>
                                <td>{{App\user::find($user->user_id)->name}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="btn-group text-light" role="group" aria-label="Basic example">
                                        <a href="{{url('restore/category')}}/{{$user->id}}" type="button"
                                        class="btn btn-primary ">Update</a>
                                        <a href="{{url('hard_delete/category')}}/{{$user->id}}" type="button"
                                        class="btn btn-danger  ">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h4> Add Category</h4>
                </div>
                <div class="card-body">
                <form action="{{url('add/category/post')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category">Add Category</label>
                            <input type="text" name="category_name" class="form-control" id="category"
                                 placeholder="Enter Category name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
