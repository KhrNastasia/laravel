<section class="text-gray-600 body-font">
@foreach($reviews as $item)
  <div class="container px-5 py-5 mx-auto">
     
    <div class="m-4">
        
      <div class="">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="px-5 py-5 w-full lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('storage/pictures/'.$item->picture)}}" alt="review">
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

  <div>
    {!!$reviews->links()!!}
  </div>

</section>