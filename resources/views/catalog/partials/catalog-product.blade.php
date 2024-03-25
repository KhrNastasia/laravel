{{--<div class='flex flex-col'>--}}
<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class='text-xl bold p-2 w-full'>
        {{$catalog->name}}
    </div>
</div>


<div class="py-4">
    <div class="max-w-7xl mx-auto flex flex-row">
        <div class="w-1/4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            @if($category != null)
                <ul>
                    @foreach($category as $item)
                        <li class='p-2'>
                            <a href="{{asset('catalog/'.$item->id)}}"> {{$item->name}}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="w-3/4 ml-4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="margin-top: 0px;">
            <div>
                <section class="grid grid-cols-2 gap-2 text-gray-600 border-solid body-font border-inherit rounded">
                    @foreach($prod as $product)
                        <div class="container px-5 py-5 mx-auto">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="p-6 lg:h-72 h-full w-full object-cover object-center"
                                     src="{{asset('storage/picture/'.$product->picture)}}" alt="picture">
                                <div class="p-6">
                                    <p>{{$product->picture}}</p>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$product->name}}</h1>
                                    <p>Стоимость: {{$product->price}}$</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
            {{--                <div class="px-9">--}}
            {{--                    {!!$prod->links()!!}--}}
            {{--                </div>--}}
        </div>
    </div>
</div>

{{--    <section class="text-gray-600 border-solid body-font border-inherit rounded">--}}
{{--        @foreach($catalog->products as $product)--}}
{{--            <div class="container px-5 py-5 mx-auto">--}}

{{--                <div class="flex flex-wrap m-1">--}}

{{--                    <div class="w-1/2">--}}
{{--                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">--}}
{{--                            <img class="p-6 lg:h-48 md:h-full w-full object-cover object-center"--}}
{{--                                 src="{{asset('storage/'.$product->picture)}}" alt="picture">--}}
{{--                            <div class="p-6">--}}
{{--                                <p>{{$product->picture}}</p>--}}
{{--                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{$product->mark}}</h2>--}}
{{--                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$product->name}}</h1>--}}
{{--                                <p class="leading-relaxed mb-3">{{$product->user_id}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        @endforeach--}}
{{--    </section>--}}

{{--</div>--}}
