@extends('layouts.backend.main')

@section('title', "Edition Boutique")


@section('content')

<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Ajouter une Categorie</h2>
        <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                        @csrf
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
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label class="form-label">Nom</label>
                                                <div class="row gx-2">
                                                    <input placeholder="Nom de la categorie" name="name" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label class="form-label">Slug</label>
                                                <input placeholder="Slug de la categorie" name="slug" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="category_name" class="form-label">Description</label>
                                        <input type="text" name="description" height="30p" placeholder="Votre descriptionn ici" class="form-control" id="category_name" />
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
        </form>
            </div>

        </div>
    </div>
</section>

@endsection
