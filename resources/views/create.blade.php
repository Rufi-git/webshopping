@extends("layouts.layout")
@section("create")
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <div class="container">
            <a class="navbar-brand" href="#">Product Add</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Save</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Cancel</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <form action="/" method="POST">
            @csrf
            <div class="wrapper">
                <div class="box">
                    <input type="text" name="sku" id="sku" disabled>
                    <label for="sku">SKU (Auto increment)</label>
                </div>
                <div class="box">
                    <input type="text" name="name" id="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="box">
                    <input type="number" name="price" id="price" required>
                    <label for="price">Price ($)</label>
                </div>
                <div class="box">
                    <select name="type" id="type">
                        <option value="weight" name="weight">Weight (Kq)</option>
                        <option value="dimension" name="dimension">Dimension</option>
                        <option value="size" name="size">Size (Mb)</option>
                    </select>
                </div>
                <div class="box">
                    <input type="text" name="typevalue" id="typevalue" required>
                </div>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
</main>
@endsection