@extends("layouts.layout")

@section("products")
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <div class="container">
                <a class="navbar-brand" href="#">Product List</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Add</a>
                    </li>
                    <li class="nav-item">
                        <form action="/delete-prods" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"class="nav-link button bg-dark">Mass Delete</button>
                    </li>
                </ul>
        </div>
    </nav>
</header>
<main>
    <div class="wrapper">
        <form action="/delete-prods" method="POST">
            <div class="container-fluid">
                @csrf
                @foreach($products as $product)
                    <label class="option_item">
                        <input type="checkbox" name="delete_id[{{$product['id']}}]" class="checkbox" value="{{$product['id']}}">
                        <div class="option_inner">
                            <div class="tickmark"></div>
                            <div class="card-info">
                                <h3>SKU: {{$product['id']}}</h3>
                                <h5 class="card-title">Name: {{Str::ucfirst($product['name'])}}</h5>
                                <h5 class="card-title">Price: {{$product['price']}}$</h5>
                                <h5 class="card-title">Type: {{Str::ucfirst($product['type'])}}</h5>
                                
                                <h5 class="card-title">Value: {{$product['value']}}
                                    @if($product['type']=="size")
                                        Mb
                                    @elseif($product['type']=="weight")
                                        Kq
                                    @endif
                                </h5>
                            </div>
                        </div>  
                    </label>
                @endforeach
            </div>
        </form>
    </div>
</main>
@endsection
