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
    <h1>create product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">name</label>
             <input type="text" name="name" placeholder="name">
        </div>

        <div>
            <label for="">qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>

        <div>
            <label for="">price</label>
            <input type="number" name="price" placeholder="price">
        </div>

        <div>
            <label for="">description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
