<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ number_format($product['cost'], 0, ',', ' ') }}₽</td>
                    <td>{{ $product['amount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>