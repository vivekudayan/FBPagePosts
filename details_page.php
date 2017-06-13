<div class="content-wrapper">
    <div class="inner-container container">
        <div class="row">
            <div class="blog-image col-md-6">
                <?php
                $video = file_get_contents('https://graph.facebook.com/v2.6/' . $params[2] . '/?fields=source,type&access_token=' . file_get_contents("http://zeekoi.com/accessTokens/soniaIndigo.fbToken"));
                $video = json_decode($video, true);
                if ($video['type'] != 'photo') {
                    ?>
                    <video width="100%" controls style="    margin-top: 60px;">
                        <source src="<?= $video['source'] ?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                    <?php
                } else {
                    ?>
                    <img src="<?php echo $data['full_picture'] ?>" alt="Malayalam Trolls Collection" title="Malayalam Trolls Collection">
                    <?php
                }
                ?>
            </div>
            <div class="col-md-6 section-header box-content">
                <h2><?php echo $data['message'] ?></h2><br><br>
                <script data-cfasync="false" type="text/javascript" src="http://www.adnetworkperformance.com/a/display.php?r=1474769"></script>



                <!-- Load Facebook SDK for JavaScript -->

                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1492059611044870";
                        fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                <!-- Your share button code -->

                <div class="fb-like" data-href="http://trollmalayalam.in<?php echo $request ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Troll -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6200819756503693"
                     data-ad-slot="1118866561"
                     data-ad-format="auto"></ins>
                <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>


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
                        $i++;

                        if ($i % 5 == 0) {
                            ?>
                            <script data-cfasync="false" type="text/javascript" src="http://www.adnetworkperformance.com/a/display.php?r=1474769"></script>
                            <?php
                        }
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



