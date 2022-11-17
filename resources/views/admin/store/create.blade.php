@extends('layouts.backend.main')

@section('title',"Ajout d'une boutique")

@section('content')

<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Ajouter une Boutique</h2>
        <form method="POST" action="{{ route('admin.stores.store') }}" enctype="multipart/form-data">
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
                    <h4>Basic</h4>
                </div>
                <div class="card-body">

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Nom</label>
                            <input type="text" name="name" placeholder="Type here" class="form-control" id="product_name" />
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Pays</label>
                                    <div class="row gx-2">
                                        <input placeholder="" name="country" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">ville</label>
                                    <input placeholder="" name="city" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Rue</label>
                                <input placeholder="" name="street" type="text" class="form-control" />
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <select class="form-select"  id="" name="country_code">
                                        <option value="+237">+237</option>
                                    </select>
                                </div>
                                <div class="col-lg-8">

                                <input type="text" name="number" placeholder="Numero de Telephone" class="form-control" id="product_name" />
                                </div>
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
            </form>
            </div>

        </div>
    </div>
</section>

@endsection
