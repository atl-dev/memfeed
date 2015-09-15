<!-- @TODO Set some styles on it and set active to var active = "{{$mems->currentPage()}}" in js  -->
<!--  not sure either it returns link or page number -->

<div class='row'>
@if(isset($mems))
        <div style="max-width: 750px;margin: 40px auto;">
            <div class="btn btn-primary nextPageBtn">
                <b>Next page <i class="fa fa-arrow-circle-right fa-fw fa-lg"></i></b>
            </div>
            <div id="scrollBar">
             @for($i=0;$i<$mems->count();$i++)
                     <a id="linkBtn{{$i}}" href="{{$mems->url($i)}}"  style="margin-right:5px;width:54px;text-align: center;" class="btn btn-default">{{$i}}</a>
             @endfor
            </div>
        </div>
    </div>
@endif


