<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <form method="post" action="{{route('clothing.store')}}">
        @csrf
        <div class="label-input">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="label-input">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div class="label-input">
            <label>Material</label>
            <input type="text" name="material" placeholder="Material">
        </div>
        <div class="label-input">
            <label>Brand</label>
            <input type="text" name="brand" placeholder="Brand">
        </div>
        <div class="label-input">
            <label>Size</label>
            <input type="text" name="size" placeholder="Size">
        </div>
        <div >
            <input type="submit" value="Save" class="button">
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
