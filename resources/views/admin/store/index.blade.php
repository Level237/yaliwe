@extends('layouts.backend.main')

@section('title',"Listes des Boutiques")

@section('content')

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Boutiques</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <input type="text" placeholder="Search order ID" class="form-control bg-white" />
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control" />
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($stores as $store)
                        <tr>
                            <td> <img src="{{ Storage::url($store->image->path) }}" alt="" style="width:45px"></td>
                            <td><b>{{ $store->name }}</b></td>

                            <td><span class="badge rounded-pill alert-warning">{{ $store->status }}</span></td>

                            <td class="text-end">
                                <a href="{{ route('admin.profile.store',[$store->name,$store->id]) }}" class="btn btn-md rounded font-sm">Detail</a>
                                <a href="{{ route('admin.stores.edit',$store->id) }}" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit"></i> Edit </a>
                                    <a href="#" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                <!-- dropdown //end -->
                            </td>
                        </tr>

                        @empty

                        @endforelse


                    </tbody>
                </table>
            </div>
            <!-- table-responsive //end -->
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>

@endsection
