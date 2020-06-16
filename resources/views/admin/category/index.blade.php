@extends('admin.master')
@section('title','Create')
@section('content')

	<div class="main-footer">
        <div class="col-md-2 offset-md-10 pb-2">
            <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Category</a>
          </div>
          @if($categories->count() == 0 )
        <div class="alert alert-warning">
          <strong>Hey!!!</strong> No Category Found.
      </div>
     @elseif($categories)

        <h3>All categories:</h3>

        <section class="content">
            <div class="col-xs-12">
               <table class="table table-hover">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th style="width: 20px;">Actions</th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($categories as $category)

                        <tr>
                            <td>{{ $category->id }}.</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == 1 ? "Published" : "Unpublished" }}</div></td>
                            <td >
                                <a href="" class="btn btn-primary btn-md"><span class="fas fa-pencil-alt"></span></a>
                            </td>
                            <td >
                                <a href="" class="btn btn-danger btn-md" onclick="return confirm('Are you sure you want to delete ');"><span class="fas fa-trash"></span></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif

            </div>
            </div>


        </section>

@endsection
