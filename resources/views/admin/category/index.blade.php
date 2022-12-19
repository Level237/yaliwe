@extends('layouts.backend.main')

@section('title', "category Category list")


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
                                                    <a class="dropdown-item" href="{{ route('admin.category.edit', ['category'=> $category->id]) }}">View detail</a>
                                                    <a class="dropdown-item" href="{{ route('admin.category.edit', ['category'=> $category->id]) }}">Edit info</a>
                                                    <a class="dropdown-item text-danger" href="{{ route('admin.category.destroy', ['category'=> $category->id]) }}"
                                                        data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$category->id}}">
                                                        Delete</a>
                                                </div>
                                            </div>
                                            
                                            <!-- dropdown //end -->
                                            <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('admin.category.destroy',['category' => $category->id]) }}" id="delete-form{{$category->id}}">
                                                            @csrf
                                                            <p>{{ __('Voulez vous supprimer cet élément?') }}</p>
                                                            @method('DELETE')
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Oui</button>
                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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



