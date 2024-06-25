<data>
@foreach($clothings as $clothing)
    <clothing>
        <id>{{ $clothing->id }}</id>
        <name>{{ $clothing->name }}</name>
        <price>{{ $clothing->price }}</price>
        <material>{{ $clothing->material }}</material>
        <brand>{{ $clothing->brand }}</brand>
        <size>{{ $clothing->size }}</size>
    </clothing>
@endforeach
</data>