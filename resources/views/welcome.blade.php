
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="header">
        <h1>Welcome to Our Store</h1>
        <p>Explore our products below.</p>
    </div>

    <div class="product">
        <img src="{{ asset('valhalla.png') }}" alt="Product Image">
        <h2>Valhalla Product</h2>
        <p>Price: $50</p>
    </div>

    <div class="product">
        <img src="{{ asset('Valkyrie.png') }}" alt="Product Image">
        <h2>Valkyrie Product</h2>
        <p>Price: $75</p>
    </div>
</body>
</html>
