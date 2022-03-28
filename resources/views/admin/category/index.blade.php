@extends('layouts.master')


@section('content')
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Category List</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="dashboard"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Category</li>
                            </ol>
                        </nav>
                        
                    </div>
                    
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="ml-auto d-flex justify-content-between align-items-center secondary-menu text-center">
                            <h4 class="card-title">Category List</h4>
                            <a class="btn btn-primary" href="category/create">
                                Add Category
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Post Count</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @if($categories->count())
                                    @foreach ($categories as $category)
                                    <tr class="align-items-center">
                                        <th scope="row align-items-center">{{$category->id}}</th>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>{{$category->id}}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                            <form action="{{ route('category.destroy', [$category->id])}}" class="ml-2" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="summit" class="btn btn-icon btn-outline-danger btn-round "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                            {{-- <a href="" class="btn btn-icon btn-outline-success btn-round ml-2"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                 @else
                                     <tr>
                                         <td colspan="5">
                                            <h5 class="text-center">No category found.</h5>
                                         </td>
                                     </tr>
                                 @endif
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>

<style>
    .btn-icon{
        width: 30px !important;
        height: 30px !important;
        padding: 0 !important;
        line-height: 30px !important;
    }
</style>
@endsection