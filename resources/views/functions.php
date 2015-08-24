<?php
/**
 * Created by PhpStorm.
 * User: puman_000
 * Date: 2015-08-10
 * Time: 09:53
 */

// nr_1 jeśli nr oddziela zmienną to po "_"

function addMem($nr,$countOfLikes,$countOfDislikes,$linkToCreator,$addedBy,$linkToComment){
    ?>
    <article  class="mem">
        <a href="#">
            <img class="img-responsive mem-img" src="pies.jpg" alt="TEXT"/>
        </a>
        <div class="row mem-content">
            <div class="col-md-6 vCenter" style="margin-bottom: 15px;">
                <div class="row">
                        <div class="vCenter" style="margin-right:25px;">
                            <button class="btn btn-primary" style="margin-right: 1px;"><span class="fa fa-thumbs-o-up"></span> <?php echo $countOfLikes; ?> </button>
                            <button class="btn btn-primary"><span class="fa fa-thumbs-o-down"></span> <?php echo $countOfDislikes ;?> </button>
                        </div>
                        <div class="vCenter" style="margin-right: 0px;">
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 mem-addedBy vCenter" style="margin-bottom: 15px;">
                Added by: <b><a href="<?php echo $linkToCreator;?>" style="margin-right: 10px;"><?php echo $addedBy; ?></a></b>
                <i class="fa fa-commenting fa-1x"> <a href="<?php echo $linkToComment; ?>" alt="Link to comment site"><b>Comment</b></a></i>
            </div>
    </article>
<?php
}

?>