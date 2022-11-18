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
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
        </div>
    </div>
    <div class="card mb-4">
                <header class="card-header">
            <h4 class="card-title">Latest orders</h4>
            <div class="row align-items-center">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>All Categories</option>
                            <option>Women's Clothing</option>
                            <option>Men's Clothing</option>
                            <option>Cellphones</option>
                            <option>Computer & Office</option>
                            <option>Consumer Electronics</option>
                            <option>Jewelry & Accessories</option>
                            <option>Home & Garden</option>
                            <option>Luggage & Bags</option>
                            <option>Shoes</option>
                            <option>Mother & Kids</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2021" class="form-control" />
                </div>
                <div class="col-md-2 col-6">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>Status</option>
                            <option>All</option>
                            <option>Paid</option>
                            <option>Chargeback</option>
                            <option>Refund</option>
                        </select>
                    </div>
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

                        @forelse ($categories as $category)
                        <tr>
                            <td> <img src="{{ Storage::url($category->image->path) }}" alt="" style="width:45px"></td>
                            <td><b>{{ $category->name }}</b></td>

                            <td><span class="badge rounded-pill alert-warning">{{ $category->status }}</span></td>

                            <td class="text-end">
                                <div class="d-flex justify-content-end align-items-center">
                                    {{--  <div class="p-2"> <a href="{{ route('admin.profile.store',[$store->name,$store->id]) }}" class="btn btn-md rounded font-sm">Detail</a></div>  --}}
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

