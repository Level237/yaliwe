@extends('layouts.backend.main')

@section('title',"Listes des Boutiques")

@section('content')

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Marques</h2>
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

                            <th scope="col">Nom</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($brands as $brand)
                        <tr>

                            <td><b>{{ $brand->name }}</b></td>

                            @if($brand->state==1)
                                <td><span class="badge rounded-pill alert-warning">publié</span></td>
                            @else
                                <td><span class="badge rounded-pill alert-warning">non publié</span></td>
                            @endif


                            <td class="text-end">
                                <div class="d-flex justify-content-end align-items-center">

                                    <div class="p-2"> <a href="{{ route('admin.brands.edit',$brand->id) }}" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit"></i> Edit </a></div>
                                    <div class="p-2"><form method="POST" action="{{ route('admin.brands.destroy', $brand->id) }}" onsubmit="return confirm('Are you sure?')">
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
