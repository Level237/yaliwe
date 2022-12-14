@extends('layouts.backend.main')

@section('title', "Edit category")


@section('content')


<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Edit Product Category</h2>
                <form action="{{ route('admin.category.update', ['category'=> $category->id] ) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                <div>
                    <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                    <button class="btn btn-md rounded font-sm hover-up">Publish</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Basic</h4>
                </div>
                <div class="card-body">
                    
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Category title</label>
                            <input type="text" placeholder="Type here" class="form-control" 
                            name="name"  value="{{ $category->name }}" required/>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Full description</label>
                            <textarea placeholder="Type here" name="description" 
                            class="form-control" rows="4" required>{{  $category->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">State</label>
                            <select name="state" class="form-control"required>
                                <option value="1" @if ($category->state == 1) selected @endif>Published</option>
                                <option value="0" @if ($category->state == 0) selected @endif>Unpublished</option>
                            </select>
                        </div>

                </div>
            </div>
            <!-- card end// -->
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Media</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="{{ asset('assets/imgs/theme/upload.svg') }}" alt="" />
                        <input class="form-control" type="file" name="image" required/>
                    </div>
                </div>
            </div>

            <!-- card end// -->
        </div>
    </form>
    </div>
</section>

@endsection



