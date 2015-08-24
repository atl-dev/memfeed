<?php
/**
 * Created by PhpStorm.
 * User: puman_000
 * Date: 2015-08-04
 * Time: 12:03
 */

 //Information about mem :
 $countOfLikes = 50;
 $countOfDislikes = 40;
 $addedBy = "Microsoft";
 $linkToCreator = "Adress url do konta gościa, który wrzucił mema";
 $linkToComment = "Adres ulr do miejsca mema, gdzie można komentować";

 $countOfPages = 500;
 ?>
<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php
                     for($i=0;$i<5;$i++){
                        addMem($i,$countOfLikes,$countOfDislikes,$linkToCreator,$addedBy,$linkToComment);
                     }
                     ?>
                    <div style="max-width: 750px;margin: 40px auto;">
                        <div class="btn btn-primary nextPageBtn">
                            <b>Next page <i class="fa fa-arrow-circle-right fa-fw fa-lg"></i></b>
                        </div>
                        <div id="scrollBar">
                            <?php
                            for($i=1;$i<$countOfPages;$i++){
                                ?>
                                <a id="linkBtn<?php echo $i?>" href="linkdobuttona" style="margin-right:5px;width:54px;text-align: center;" class="btn btn-default"><?php echo $i; ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
</div>