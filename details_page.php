<div class="content-wrapper">
    <div class="inner-container container">
        <div class="row">
            <div class="blog-image col-md-6">
                    <img src="<?php echo $data['full_picture'] ?>" alt="Malayalam Trolls Collection" title="Malayalam Trolls Collection">
            </div>
            <div class="col-md-6 section-header box-content">
                <h2><?php echo $data['message'] ?></h2><br><br>
            </div> <!-- /.blog-image -->


        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="comment-heading">Comments (<?php echo count($data['comments']['data']) ?>)</h2>

                <div class="box-content">
                    <?php
                    $i = 0;
                    $comments = $data['comments']['data'];
                    foreach ($comments as $items) {
                    ?>
                        <div class="comment">
                            <div class="comment-inner">
                                <div class="author-avatar">
                                    <img src="http://graph.facebook.com/<?php echo $items['from']['id'] ?>/picture?type=large" alt="">
                                </div>
                                <div class="comment-body">
                                    <h4><?php echo $items['from']['name'] ?></h4>
                                    <span><?php echo date("d M y, h:i a", strtotime($items['created_time'])) ?></span>
                                    <p> <?php if (isset($items['attachment'])) { ?>
                                            <a class="fancybox" href="<?php echo $items['attachment']['media']['image']['src'] ?>"><img height="200px;" src = "<?php echo $items['attachment']['media']['image']['src'] ?>"></a>
                                            <?php } ?>
                                            <?php echo $items['message'] ?>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.comment -->
                        <?php
                    }
                    ?>
                </div> <!-- /.box-content -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->



