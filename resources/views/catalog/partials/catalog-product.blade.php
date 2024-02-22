<div class='flex flex-row'>
    <div class='basic-1/4 bg-slate-200'>
            {{$catalog->name}}
    </div>
    @foreach($catalog->products as $product)
    <div>
        {{$product->name}}
    </div>
    @endforeach
</div>