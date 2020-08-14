@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Create New Category</h1>

            <form action=" {{  route('categories.store') }}" method="post">
                @csrf

                Name:
                <br>
                <input type="text" name="name" placeholder="Name..." class="form-control">
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
                <br><br>
            </form>

        </div>
        <!-- /.col-lg-12 -->
  @endsection
