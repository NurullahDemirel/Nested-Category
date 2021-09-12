<li>
    {{$node->name}}
</li>
<ul>
    @if(count($node->children))
        @foreach($node->children as $item)
            @include('category',['node'=>$item])
        @endforeach
    @endif
</ul>
