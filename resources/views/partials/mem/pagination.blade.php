<div class='row'>
<!-- @TODO Set some styles on it and set active to var active = "{{$mems->currentPage()}}" in js  -->
<!--  not sure either it returns link or page number -->
@if(isset($mems))
    <ul class='pagination'>
        @for($i=0;$i<$mems->count();$i++)
        <li><a href="{{$mems->url($i)}}">{{$i}}</a></li>
        @endfor
    </ul>
@endif
</div>
