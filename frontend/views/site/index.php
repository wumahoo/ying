<?php

/* @var $this yii\web\View */

//setting title
$this->title = '厨娘社区';
//load css,js
$this->registerCssFile('@web/css/shopindex.css', ['depends' => ['backend\assets\AppAsset']]);
$this->registerJsFile('@web/js/site.js', ['depends' => ['backend\assets\AppAsset']]);

?>
<div class="site-index">

    <!--  图片轮播  -->
    <div class="jumbotron">
        <div class="showbox">
            <div class="imagebox">
                <a href="#">
                    <img
                        src="http://meilapp.qiniucdn.com/FhglyGoBlcHgNERyOWd_L7H7hmbJ?imageMogr2/thumbnail/!750x380r/gravity/Center/crop/750x380/format/webp"
                        alt="">
                </a>
                <a href="#">
                    <img
                        src="http://meilapp.qiniucdn.com/FuYRuLc7nHXEn-IaPshWn1f6N86X?imageMogr2/thumbnail/!750x380r/gravity/Center/crop/750x380/format/webp"
                        alt="">
                </a>
                <a href="#">
                    <img
                        src="http://meilapp.qiniucdn.com/Fmood5_G8TMRqmlcBTEkJOwmwm_t?imageMogr2/thumbnail/!750x380r/gravity/Center/crop/750x380/format/webp"
                        alt="">
                </a>
                <a href="#">
                    <img
                        src="http://meilapp.qiniucdn.com/FpOEhnFBASX5Cng0l54_yPCzk7Qt?imageMogr2/thumbnail/!750x380r/gravity/Center/crop/750x380/format/webp"
                        alt="">
                </a>
                <a href="#">
                    <img
                        src="http://meilapp.qiniucdn.com/FhkrVxrnUEU5_zLKVXoGEwD9V1iv?imageMogr2/thumbnail/!750x380r/gravity/Center/crop/750x380/format/webp"
                        alt="">
                </a>
            </div>
            <div class="icobox">
                <span rel="0" class="active"></span>
                <span rel="1"></span>
                <span rel="2"></span>
                <span rel="3"></span>
            </div>
        </div>
    </div>
    <!--  end图片轮播  -->

    <div class="body-content">

        <div class="row">

            <!--免费试用-->
            <div class="hidden-lg">
                <div class="index-entry flexbox pack-justify">
                    <a class="col-xs-6" href="#">
                        <img
                            src="http://meilapp.qiniucdn.com/ltUqO36HRTSLMeipQTVKINDARFBe?imageMogr2/thumbnail/!346x168r/gravity/Center/crop/346x168/format/webp">
                    </a>
                    <a class="col-xs-6" href="#">
                        <img
                            src="http://meilapp.qiniucdn.com/Fh7j9xdnfah1-oxNsOgQEBXDuKec?imageMogr2/thumbnail/!346x168r/gravity/Center/crop/346x168/format/webp">
                    </a>
                </div>
            </div>


            <!-- 左导航内容 -->
            <div class="col-lg-2 col-md-3">
                <h2>右侧栏的导航</h2>

                <p>这个左边导航的内容</p>
            </div>

            <!--正文内容-->
            <div class="col-md-6 col-lg-8">
                <article class="art">
                    <!--用户头像-->
                    <?php foreach ($articleData as $key => $articleContent): ?>
                        <section class="user-head">
                            <div class="user-img float-box-left">
                                <a href="<?= $articleContent['url'] ?>">
                                    <img src="#"/>
                                </a>
                            </div>
                            <div class="user-name float-box-left">
                                <a href="#">
                                    <span><?= $articleContent['username'] ?></span>
                                </a>
                            </div>
                        </section>

                        <section class="art-image">
                            <div class="banner">
                                <a href="http://www.meilapp.com/topic/63aad78e/">
                                    <?php if ($articleContent['multimedia_type'] == 1): ?>
                                        <img alt="" src="<?= $articleContent['multimedia_url'] ?>">
                                    <?php endif; ?>

                                    <?php if ($articleContent['multimedia_type'] == 2): ?>
                                        <video alt="" src="<?= $articleContent['multimedia_url'] ?>"> 你的浏览器不支持视频播放</video>
                                    <?php endif; ?>

                                </a>
                            </div>
                            <p class="art-text">
                                <?= $articleContent['description'] ?>
                            </p>
                        </section>

                        <section class="art-footer">
                            <div class="keyword art-footer-left-bar">
                                <span class="glyphicon glyphicon-tag"></span>
                                <span class="labels">标签1</span>
                                <span class="labels">标签2</span>
                                <span class="labels">标签3</span>
                            </div>

                            <div class="art-footer-right-bar">
                                <span>热度</span>
                                <span>评论</span>
                                <span class="glyphicon glyphicon-heart like"></span>
                            </div>
                        </section>
                    <?php endforeach; ?>

                </article>
            </div>

            <!--右导航内容-->
            <div class="col-md-3 col-lg-2">
                <h2>右侧栏内容</h2>

                <p>右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容</p>


            </div>
        </div>

    </div>
</div>
