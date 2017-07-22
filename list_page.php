<div class="content-wrapper">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header">
                <h2>Page Contents</h2>
                <span>Recent <?= $limit ?> Posts</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="blog-masonry masonry-true">
                <?php
                    $i = 0;
                    $data = json_decode($data, true);
                    foreach ($data['data'] as $items) {
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
                                <div class="overlay-b">
                                    <div class="overlay-inner">
                                        <a href="<?= $items['full_picture'] ?>" class="fancybox fa fa-expand"></a>
                                    </div>
                                </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <a class="vv_btn" href="post/<?= $items['id'] ?>" > Read Comments ></a>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                <?php } ?>
            </div> <!-- /.blog-masonry -->
        </div> <!-- /.row -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->