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
                    <?php var_dump($data); ?>
                    <!--用户头像-->
                    <section class="user-head">
                        <div class="user-img float-box-left">
                            <a href="http://www.meilapp.com/user/8f113693/">
                                <img alt="avatar" class="img-circle"
                                     src="http://meilapp.qiniucdn.com/FqqGxbkIRVPBuS5QLBPr75Apa-Ek?imageMogr2/thumbnail/80x/format/webp">
                            </a>
                        </div>
                        <div class="user-name float-box-left">
                            <a href="http://www.meilapp.com/user/8f113693/">
                                <span>wumahoo</span>
                            </a>
                        </div>
                    </section>

                    <section class="art-image">
                        <div class="banner">
                            <a href="http://www.meilapp.com/topic/63aad78e/">
                                <img alt="" src="http://meilapp.qiniucdn.com/FtKM2yrtG4rVG2LTJtSyqlE8BuLD?imageMogr2/thumbnail/!750x600r/gravity/Center/crop/750x600/format/webp">
                            </a>
                        </div>
                        <p class="art-text">【最心水】两款便宜好用化妆水
                            + 掐的出水的好皮肤💆~
                            美啦最近活动好多 积极参加~ 么么哒[e]1f338[/e]
                            说到水 护肤水 我就强力推荐下面这两款咯！
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
