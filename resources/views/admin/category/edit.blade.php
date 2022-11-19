@extends('layouts.backend.main')

@section('title', "Edition Categorie")


@section('content')

<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">{{ $category->name }}</h2>
        <form method="POST" action="{{ route('admin.category.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div>
                    <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                    <button  type="submit" class="btn btn-md rounded font-sm hover-up">Publich</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Details</h4>
                </div>
                <div class="card-body">

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Nom</label>
                            <input type="text" name="name" value="{{ $category->name }}" placeholder="Type here" class="form-control" id="product_name" />
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">slug</label>
                                <input type="text" name="slug" value="{{ $category->slug }}" placeholder="Type here" class="form-control" id="product_name" />
                            </div>

                            <div class="mb-4">
                                <label for="product_name" class="form-label">Description</label>
                              <input type="text" name="description" value="{{ $category->description }}" placeholder="Type here" class="form-control" id="product_name" />
                            </div>
                        </div>
                </div>
            </div>



        </div>

        <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-upload">
                                    <img src="{{ asset('admin/imgs/theme/upload.svg') }}" alt="" />
                                    <input name="path" class="form-control" type="file" />
                                </div>
                            </div>
                        </div>
                </div>

    </div>
</section>
@endsection
