@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Category Edit</h1>

            <form action=" {{  route('categories.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')

                Name:
                <br>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                <br><br>
            </form>

        </div>
        <!-- /.col-lg-12 -->
  @endsection
