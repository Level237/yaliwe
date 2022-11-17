@extends('layouts.backend.main')
@section('title',"Marques")

@section('content')

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Marques</h2>
            <p>Ajout d'une marque</p>
        </div>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset("admin/imgs/brands/pngegg.png") }}" class="img-fluid" alt="...">
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('admin.brands.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom de votre marque</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrez une marque">
                          </div>
                          <button type="submit" class="btn btn-success" style="color: white">Enregistrer</button>
                    </form>
                </div>
            </div>
            <!-- .row // -->
        </div>
        <!-- card body .// -->
    </div>
    <!-- card .// -->
</section>
@endsection
