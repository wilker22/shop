@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Products</h1>
        <hr>
            <a href="{{ route('products.create') }}" class="btn btn-info">New Product</a>

        <br><br>
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th></th>

              </tr>

          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>R$ {{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('products.destroy', $product->id )}}" method="post" style="display: inline">
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
