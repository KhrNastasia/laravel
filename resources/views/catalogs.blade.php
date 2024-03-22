<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex flex-row justify-between">
            <div class="w-1/4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('catalog.partials.catalog-info')
                </div>
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
                <div class="px-9">
                    {!!$prod->links()!!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
