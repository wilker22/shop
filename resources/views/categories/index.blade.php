@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Categories</h1>
        <hr>
            <a href="{{ route('categories.create') }}" class="btn btn-info">New Category</a>

        <br><br>
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>Name</th>
                  <th></th>

              </tr>

          </thead>
          <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id )}}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem Certeza?')">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach

          </tbody>
      </table>

      </div>
      <!-- /.col-lg-12 -->
@endsection
