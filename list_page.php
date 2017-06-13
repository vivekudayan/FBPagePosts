<div class="content-wrapper">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-6">
                <h2>Page Title</h2>
                <span>Recent <?= $limit ?> Posts</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="blog-masonry masonry-true">
                <?php
                $i = 0;
                $data = json_decode($data, true);
                foreach ($data['data'] as $items) {
                    $i++;
                    if ($i % 5 == 0) {
                        ?>
                        <div class="post-masonry col-md-4 col-sm-6">

                        </div>
                        <?php
                    }
                    ?>
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-body">
                            <div class="box-content">
                                <h3 class="post-title"><a href="post/<?= $items['id'] ?>" title="Troll Malayalam,ICU Trolls | <?= $items['message'] ?>"><?= $items['message'] ?> </a></h3>
                                <span class="blog-meta"><i class="fa fa-thumbs-up"></i> <?= $items['likes']['summary']['total_count'] ?></span>
                            </div>
                        </div>
                        <div class="blog-thumb">
                            <img src="<?= $items['full_picture'] ?>" alt="<?= $items['message'] ?>" title="<?= $items['message'] ?>">
                            <?php if ($items['attachments']['data'][0]['type'] == 'photo') {
                                ?>
                                <div class="overlay-b">
                                    <div class="overlay-inner">
                                        <a href="<?= $items['full_picture'] ?>" title="<?= $items['message'] ?>" class="fancybox fa fa-expand"></a>
                                    </div>
                                </div>

                                <?php
                            } else {
                                $video = file_get_contents('https://graph.facebook.com/v2.6/' . $items['id'] . '/?fields=source&access_token=' . file_get_contents("http://zeekoi.com/accessTokens/soniaIndigo.fbToken"));
                                $video = json_decode($video, true);
                                ?>
                                <div class="overlay-b">
                                    <div class="overlay-inner">
                                        <a href="<?= $video['source'] ?>" class="fancyboxv fa fa-play-circle-o"></a>
                                    </div>
                                </div>
                            <?php }
                        ?>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <a class="vv_btn" href="post/<?= $items['id'] ?>" title="Troll Malayalam Trolls | ICU Trolls | <?= $items['message'] ?>"> Read Comments ></a>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                        <?php }
                    ?>
            </div> <!-- /.blog-masonry -->
        </div> <!-- /.row -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->