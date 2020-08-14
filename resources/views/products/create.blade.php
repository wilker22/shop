@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Create New Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Name...">
              <small id="nameHelp" class="form-text text-muted">exemplo de ajuda para o campo</small>
            </div>

            <div class="form-group">
              <label>Price (R$)</label=>
              <input type="text" class="form-control" value="{{ old('price') }}" name="price" placeholder="R$...">
            </div>

            <div class="form-group">
                <label>Description</label=>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="category" class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == old('category->id')) selected @endif>{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <label>Photo:</label>
                <input type="file" name="photo" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <br><br>
          </form>

        </div>
        <!-- /.col-lg-12 -->
  @endsection
