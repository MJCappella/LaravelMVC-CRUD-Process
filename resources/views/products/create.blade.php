<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://unpkg.com/nice-forms.css/nice-forms.css">
    <link rel="stylesheet" href="https://unpkg.com/nice-forms.css@0.1.7/dist/nice-forms-reset.css"> --}}
</head>

<body>
    <h1>Create Products</h1>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')

        <div>
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" name="name" placeholder="product name">
        </div><br>
        <div>
            <label for="name">Product Quantity:</label>
            <input type="number" name="quantity" placeholder="product quantity">
        </div><br>
        <div>
            <label for="name">Product Price:</label>
            <input type="number" name="price" placeholder="product price">
        </div><br>
        <div>
            <label for="name">Product Description:</label>
            <input type="text" name="description" placeholder="product description">
        </div><br>
        <div>
        <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
