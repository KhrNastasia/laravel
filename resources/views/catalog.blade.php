<x-app-layout>
    <div>
        <div class='text-center text-3xl p-3'>Каталог</div>
        <ul>
            @foreach($catalogs as $catalog)
            <li>
                {{$catalog->name}} 
                @if($catalog->childs() != null)
                @if(count($catalog->childs())>0)
                    <ul>
                    @foreach($catalog->childs() as $child)
                        <li>
                            {{$child->name}}
                        </li>
                    @endforeach
                    </ul>
                @endif
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>