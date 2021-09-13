<li>
    {{$node->name}}
</li>
<ul>

    @each('category',$node->children,'node','no-category')
</ul>
