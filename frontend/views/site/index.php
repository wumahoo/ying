<?php

/* @var $this yii\web\View */

$this->title = 'Ying shop';

$this->registerCssFile('@web/css/shopindex.css',['depends'=>['backend\assets\AppAsset']]);

?>
<div class="site-index">

    <!--  图片轮播  -->
    <div class="jumbotron">
        <h1>图片轮播图片</h1>
        <p>
            这里是图片轮播内容
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <div class="index-entry flexbox pack-justify">
                    <a class="col-xs-6" href="#">
                        <img src="http://meilapp.qiniucdn.com/ltUqO36HRTSLMeipQTVKINDARFBe?imageMogr2/thumbnail/!346x168r/gravity/Center/crop/346x168/format/webp">
                    </a>
                    <a class="col-xs-6" href="#">
                        <img src="http://meilapp.qiniucdn.com/Fh7j9xdnfah1-oxNsOgQEBXDuKec?imageMogr2/thumbnail/!346x168r/gravity/Center/crop/346x168/format/webp">
                    </a>
                </div>
            </div>

            <div class="hd"><h2 class="top-title">Ying专题</h2></div>

            <div class="bd swiper-container swiper-container-horizontal swiper-container-android" id="nav-swiper-container">
                <ul class="swiper-wrapper list-subject" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                    <li class="swiper-slide swiper-slide-active"><a href="http://www.meilapp.com/topic/03ffb4fb/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FoVtwMgkeuBDTEhjDpXSRgQ8DswG?imageMogr2/thumbnail/288x/format/webp"><i class="icon">NEW</i></a></li>

                    <li class="swiper-slide swiper-slide-next"><a href="http://www.meilapp.com/topic/f33f28e2/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FjqEbXpE9FhLfTyeiajj5aVQIWQ3?imageMogr2/thumbnail/288x/format/webp"></a></li>

                    <li class="swiper-slide"><a href="http://www.meilapp.com/topic/b1ae8936/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FjM6pazXEg1GDKOBYhUngOD0Zt8h?imageMogr2/thumbnail/288x/format/webp"></a></li>

                    <li class="swiper-slide"><a href="http://www.meilapp.com/topic/eebe38f1/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FowtZPKF4nf8_jBP52SBU1aQyxnT?imageMogr2/thumbnail/288x/format/webp"></a></li>

                    <li class="swiper-slide"><a href="http://www.meilapp.com/topic/30ace766/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FnRUQNqwbksEh0uC9c5Vb3q-U3eu?imageMogr2/thumbnail/288x/format/webp"></a></li>

                    <li class="swiper-slide"><a href="http://www.meilapp.com/topic/7f4a10c1/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/FvzUAhxV8AyXD4E38DiWf8F1Uhbz?imageMogr2/thumbnail/288x/format/webp"></a></li>

                    <li class="swiper-slide"><a href="http://www.meilapp.com/topic/9b9e9ca9/"><img class="ware-img" alt="" src="http://meilapp.qiniucdn.com/Ftp1vQWtWbpFuOxRUOym0WQqlcfq?imageMogr2/thumbnail/288x/format/webp"></a></li>

                </ul>
            </div>

            <div class="col-lg-4">
                <article class="art">

                <section class="sec sec-1 flexbox align-center">
                    <div class="d d-1"><a href="http://www.meilapp.com/user/8f113693/"><img alt="avatar" class="profile" src="http://meilapp.qiniucdn.com/FqqGxbkIRVPBuS5QLBPr75Apa-Ek?imageMogr2/thumbnail/80x/format/webp"></a></div>
                    <div class="d d-2"><a href="http://www.meilapp.com/user/8f113693/"><span>悠悠香</span><i class="icon-l">8</i></a></div>
                </section>


                <section class="sec sec-2">
                    <div class="banner"><a href="http://www.meilapp.com/topic/63aad78e/"><img alt="" src="http://meilapp.qiniucdn.com/FtKM2yrtG4rVG2LTJtSyqlE8BuLD?imageMogr2/thumbnail/!750x600r/gravity/Center/crop/750x600/format/webp"></a></div>
                    <p class="text">【最心水】两款便宜好用化妆水
                        +  掐的出水的好皮肤💆~
                        美啦最近活动好多    积极参加~   么么哒[e]1f338[/e]
                        说到水  护肤水   我就强力推荐下面这两款咯！</p>

                    <div class="keyword"><i class="icon"></i><a href="http://www.meilapp.com/tagfilter/3439/"><span>化妆水</span></a><a href="http://www.meilapp.com/tagfilter/10024/"><span>海淘</span></a></div>

                </section>
                <section class="sec sec-3 ware">
                    <div class="ware-hd flexbox align-center pack-justify">
                        <div class="d d-1"></div>
                        <div class="d d-2">
                            <a href="http://www.meilapp.com/topic/63aad78e/" style="color:inherit;"><div class="comment"><i class="icon icon-comment"></i><span>34</span></div></a>
                            <div class="likes"><i class="icon icon-likes"></i><span>75</span></div>
                        </div>
                    </div>
                </section>

            </article>
            </div>

            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
