<ul>
    @foreach($reviews as $item)
    <li>
        <p>
            {{$item->comment}}
        </p>    
    </li>
    @endforeach
</ul>