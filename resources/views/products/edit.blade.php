@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control"  value="{{ $product->name }}" name="name" placeholder="Name...">
              <small id="nameHelp" class="form-text text-muted">exemplo de ajuda para o campo</small>
            </div>

            <div class="form-group">
              <label>Price (R$)</label=>
              <input type="text" value="{{ $product->price }}" class="form-control" name="price" placeholder="R$...">
            </div>

            <div class="form-group">
                <label>Description</label=>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="category" class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category->id) selected @endif>{{ $category->name }}</option>
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
