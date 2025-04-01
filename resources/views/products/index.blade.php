{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div style="margin-left: 80px; font-size: 30px;">
        <a href="{{route('product.create')}}">Create Product</a>
    </div>
    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                         <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy', ['product' => $product])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>


                   </td>

                </tr>
            @endforeach


        </table>

    </div>




</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f5f7fa, #c3cfe2); /* Prechod zo svetlej (#f5f7fa) do tmavšej (#c3cfe2) */
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Polopriehľadné biele pozadie tabuľky */
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Products</h1>
    <div style="margin-left: 80px; font-size: 30px;">
        <a href="{{route('product.create')}}">Create Product</a>
    </div>
    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                         <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy', ['product' => $product])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
