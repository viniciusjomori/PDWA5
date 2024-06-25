<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>

    <div class="message">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <form method="post" action="{{route('clothing.update', ['clothing' => $clothing])}}">
        @csrf
        @method('put')
        <div class="label-input">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$clothing->name}}">
        </div>
        <div class="label-input">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$clothing->price}}">
        </div>
        <div class="label-input">
            <label>Material</label>
            <input type="text" name="material" placeholder="Material" value="{{$clothing->material}}">
        </div>
        <div class="label-input">
            <label>Brand</label>
            <input type="text" name="brand" placeholder="Brand" value="{{$clothing->brand}}">
        </div>
        <div class="label-input">
            <label>Size</label>
            <input type="text" name="size" placeholder="Size" value="{{$clothing->size}}">
        </div>
        <div class="label-input">
            <input type="submit" value="Update" class="button">
        </div>
    </form>
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

    h1 {
        margin: 10px 0
    }

    body {
        width: 100%
    }

    .message {
        font-style: italic
    }
    
    form {
        width: 30%;
        margin: 0 auto
    }

    input {
        background: #D3D3D3
    }

    .label-input {
        margin: 10px 0;
        width: 100%
    }

    .label-input > * {
        display: block;
        width: 100%
    }

    .button {
        padding: 5px;
        width: 50px;
        background: #00FFFF;
        margin: 5px auto;
        border-radius: 10%;
        cursor: pointer;
    }

</style>
</html>
