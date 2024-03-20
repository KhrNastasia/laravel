<div class='flex flex-col'>

    <div class='p-2 bg-slate-200 w-full border-solid border-inherit rounded'>
        {{$catalog->name}}
    </div>

    @if($category != null)
        <ul>
            @foreach($category as $item)
                <li class='px-8 py-5'>
                    <a href="{{asset('catalog/'.$item->id)}}"> {{$item->name}}</a>
                </li>
            @endforeach
        </ul>
    @endif

    <section class="text-gray-600 border-solid body-font border-inherit rounded">
        @foreach($catalog->products as $product)
            <div class="container px-5 py-5 mx-auto">

                <div class="flex flex-wrap m-1">

                    <div class="w-1/2">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="p-6 lg:h-48 md:h-full w-full object-cover object-center"
                                 src="{{asset('storage/'.$product->picture)}}" alt="picture">
                            <div class="p-6">
                                <p>{{$product->picture}}</p>
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{$product->mark}}</h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$product->name}}</h1>
                                <p class="leading-relaxed mb-3">{{$product->user_id}}</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        @endforeach
    </section>

</div>