<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                   @include('functions')
                    <div style="max-width: 750px;margin: 40px auto;">
                        <div class="btn btn-primary nextPageBtn">
                            <b>Next page <i class="fa fa-arrow-circle-right fa-fw fa-lg"></i></b>
                        </div>
                        <div id="scrollBar">
                            
                    a id="linkBtn<?php echo $i?>" href="linkdobuttona" style="margin-right:5px;width:54px;text-align: center;" class="btn btn-default"><?php echo $i; ?></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
</div>