<x-app-layout>
    <div>
        <div class='text-center text-3xl p-3'>Каталог</div>
        <ul>
            @foreach($catalogs as $item)
            @if($item->parent_id == null)
            <li>
                {{$item->name}} 
                <ul>
                @foreach($catalogs as $catalog)
                    @if($catalog->parent_id == $item->id)
                    <li class='px-8'>
                        {{$catalog->name}}  
                    </li>
                    @endif
                @endforeach
                </ul>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</x-app-layout>