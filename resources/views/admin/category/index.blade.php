@extends('layouts.backend.main')

@section('title', "Edition Boutique")


@section('content')


<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Categories</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Nouvelle Categorie</a>
        </div>
    </div>
    <div class="card mb-4">
                <header class="card-header">
            <h4 class="card-title">Toutes les categories</h4>
            <div class="row align-items-center">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>All Categories</option>

                            @forelse ($categories as $category)
                            <option>
                                    <img src="{{ Storage::url($category->image->path) }}" alt="" style="width:25px">
                                    <b>{{ $category->name }}
                            </option>

                                @empty

                                @endforelse

                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2021" class="form-control" />
                </div>
                {{--  <div class="col-md-2 col-6">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>Status</option>
                            <option>All</option>
                            <option>Paid</option>
                            <option>Chargeback</option>
                            <option>Refund</option>
                        </select>
                    </div>
                </div>  --}}
            </div>
        </header>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <form action="admin.category.store" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Nom</label>
                                        <input placeholder="Nom de la categorie" name="name" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_slug" class="form-label">Slug</label>
                                        <input placeholder="Slug de la categorie" name="slug" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-4">
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
                                    <div class="mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea placeholder="votre description ici " name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Create category</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>

                                                <th scope="col">Image</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Description</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @forelse ($categories as $category)
                                            <tr>
                                                <td> <img src="{{ Storage::url($category->image->path) }}" alt="" style="width:45px"></td>
                                                <td><b>{{ $category->name }}</b></td>

                                                <td><span class="badge rounded-pill alert-warning">{{ $category->description }}</span></td>

                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <div class="p-2"> <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit"></i> Edit </a></div>
                                                        <div class="p-2"><form method="POST" action="{{ route('admin.category.destroy', $category->id) }}" onsubmit="return confirm('Are you sure?')">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-sm rounded font-sm"  ><i class="material-icons md-delete_forever" aria-hidden="true" title="Suprimer">Suprimer</i></button>

                                                        </form></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            @empty

                                            @endforelse

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



