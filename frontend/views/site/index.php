<?php

/* @var $this yii\web\View */

//setting title
$this->title = 'Ying 小区电商';
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
    <!--  图片轮播  -->

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

            <!--水平滚动-->

            <!-- 左导航内容 -->
            <div class="col-lg-2">
                <h2>右侧栏的导航</h2>

                <p>这个左边导航的内容</p>
            </div>

            <!--正文内容-->
            <div class="col-lg-8">
                <article class="art">

                    <section class="sec sec-1 flexbox align-center">
                        <div class="d d-1">
                            <a href="http://www.meilapp.com/user/8f113693/">
                                <img alt="avatar" class="profile"
                                     src="http://meilapp.qiniucdn.com/FqqGxbkIRVPBuS5QLBPr75Apa-Ek?imageMogr2/thumbnail/80x/format/webp">
                            </a>
                        </div>
                        <div class="d d-2">
                            <a href="http://www.meilapp.com/user/8f113693/">
                                <span>悠悠香</span>
                                <i class="icon-l">8</i>
                            </a>
                        </div>
                    </section>


                    <section class="sec sec-2">
                        <div class="banner">
                            <a href="http://www.meilapp.com/topic/63aad78e/">
                                <img alt="" src="http://meilapp.qiniucdn.com/FtKM2yrtG4rVG2LTJtSyqlE8BuLD?imageMogr2/thumbnail/!750x600r/gravity/Center/crop/750x600/format/webp">
                            </a>
                        </div>
                        <p class="text">【最心水】两款便宜好用化妆水
                            + 掐的出水的好皮肤💆~
                            美啦最近活动好多 积极参加~ 么么哒[e]1f338[/e]
                            说到水 护肤水 我就强力推荐下面这两款咯！
                        </p>

                        <div class="keyword">
                            <i class="icon"></i>
                            <a href="http://www.meilapp.com/tagfilter/3439/">
                                <span>化妆水</span>
                            </a>
                            <a
                                href="http://www.meilapp.com/tagfilter/10024/">
                                <span>海淘</span>
                            </a>
                        </div>

                    </section>
                    <section class="sec sec-3 ware">
                        <div class="ware-hd flexbox align-center pack-justify">
                            <div class="d d-1"></div>
                            <div class="d d-2">
                                <a href="http://www.meilapp.com/topic/63aad78e/" style="color:inherit;">
                                    <div class="comment"><i class="icon icon-comment"></i><span>34</span></div>
                                </a>
                                <div class="likes"><i class="icon icon-likes"></i><span>75</span></div>
                            </div>
                        </div>
                    </section>

                </article>
            </div>

            <!--右导航内容-->
            <div class="col-lg-2">
                <h2>右侧栏内容</h2>

                <p>右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容右侧栏的内容</p>

            </div>
        </div>

    </div>
</div>
