@extends('admin.master')
@section('title','Create')
@section('content')

	<div class="main-footer">

        <h3>Create New Category</h3>
        <form role="form" method="post" action="{{ url('/admin/category/store') }}" enctype="multipart/form-data" data-parsley-validate="">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Category Name:</label>
                <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}" required data-parsley-length="[5,100]">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Status:</label>
                    <select name="status" class="form-control" required aria-required="true">

                    <option value="1"selected='selected'>Published</option>
                    <option value="0">Un Published</option>
                 </select>
             </div>
            </div>
            <div class="card-body">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

	</div>

@endsection
