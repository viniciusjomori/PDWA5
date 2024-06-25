<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing</title>
</head>
<body>
<h1>Clothing</h1>
    <div>
        @if(session()->has('success'))
            <div class="message">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div class="link button">
            <a href="{{route('clothing.create')}}">Create</a>
        </div>
        <div class="link button">
            <a href="{{route('clothing.xml')}}">XML</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Material</th>
                <th>Brand</th>
                <th>Size</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($clothings as $clothing)
                <tr>
                    <td>{{$clothing->id}}</td>
                    <td>{{$clothing->name}}</td>
                    <td>{{$clothing->price}}</td>
                    <td>{{$clothing->material}}</td>
                    <td>{{$clothing->brand}}</td>
                    <td>{{$clothing->size}}</td>
                    <td>
                        <a href="{{route('clothing.edit', ['clothing' => $clothing])}}" class="button">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('clothing.delete', ['clothing' => $clothing])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" class="button"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

<style>
    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        border: none;
        text-align: center;
        color: black;
        font-family: Arial, sans-serif;
    }

    h1, .link {
        margin: 10px 0
    }

    .message {
        font-style: italic
    }

    .button {
        padding: 5px;
        width: 50px;
        background: #00FFFF;
        margin: 5px auto;
        border-radius: 10%;
        cursor: pointer;
    }

    .button:hover {
        background: #66FFFF
    }


    .button:active {
        background: #00CCCC
    }

    table {
        margin: 0 auto
    }

    th, td {
        padding: 10px;
        border: 2px black solid
    }
</style>

</html>
