<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex flex-row justify-between">
            <div class="w-1/4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('catalog.partials.catalog-info')
                </div>
            </div>
            <div class="w-3/4 ml-4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div>
                    <section class="flex flex-row  text-gray-600 border-solid body-font border-inherit rounded">
                        @foreach($prod as $product)
                            <div class="container px-5 py-5 mx-auto">
                                    {{--<div class="w-1/2">--}}
                                        <div class="h-full min-w-52 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <img class="p-6 lg:h-48 md:h-full w-full object-cover object-center"
                                                 src="{{asset('storage/'.$product->picture)}}" alt="picture">
                                            <div class="p-6">
                                                <p>{{$product->picture}}</p>
                                                {{--<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{$product->mark}}</h2>--}}
                                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$product->name}}</h1>
                                                {{--<p class="leading-relaxed mb-3">{{$product->user_id}}</p>--}}
                                            </div>
                                        {{--</div>--}}
                                    </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
