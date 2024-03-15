<div>
        <ul>
            @foreach($catalogs as $item)
            @if($item->parent_id == null)
            <li>
            <a href="{{asset('catalog/'.$item->id)}}"> {{$item->name}}</a>    
                <ul>
                @foreach($catalogs as $catalog)
                    @if($catalog->parent_id == $item->id)
                    <li class='px-8'>
                        <a href="{{asset('catalog/'.$catalog->id)}}"> {{$catalog->name}}  </a>
                    </li>
                    @endif
                @endforeach
                </ul>
            </li>
            @endif
            @endforeach
        </ul>
</div>
