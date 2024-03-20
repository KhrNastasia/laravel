<section class="w-full">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between">
            @foreach($reviews as $item)
                <div class="w-full px-5 py-5 mx-auto">
                    <div class="m-4">
                        <div class="">
                            <div
                                class="h-full min-w-52 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="px-5 py-5 lg:h-48 md:h-36 object-cover object-center"
                                     src="{{asset('storage/pictures/'.$item->picture)}}" alt="review">
                                <div class="p-6">
                                    <!-- <p>{{$item->picture}}</p> -->
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{$item->mark}}</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$item->comment}}</h1>
                                    <p class="leading-relaxed mb-3">{{$item->user_id}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="px-9">
            {!!$reviews->links()!!}
        </div>
    </div>
</section>
