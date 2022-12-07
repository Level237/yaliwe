@extends('layouts.backend.main')

@section('title', "Product Category list")


@section('content')

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Categories</h2>
            <p>Add, edit or delete a category</p>
        </div>
        <div>
            <input type="text" placeholder="Search Categories" class="form-control bg-white" />
            <br>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm rounded">Create new</a>
        </div>
        
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
              
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" />
                                        </div>
                                    </th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>State</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                        </td>
                                        <td><img src="{{ asset('admin/imgs/items/1.jpg') }}" class="img-sm img-thumbnail" alt="Item" /></td>
                                        <td><b>{{ $category->name}}</b></td>
                                        <td>{{ $category->description}}</td>
                                        <td>/{{ $category->slug}}</td>
                                        <td>
                                            <span class="badge rounded-pill alert-success">Active</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">View detail</a>
                                                    <a class="dropdown-item" href="#">Edit info</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!-- dropdown //end -->
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- .col// -->
            </div>
            <!-- .row // -->
        </div>
        <!-- card body .// -->
    </div>
    <!-- card .// -->
</section>


@endsection



