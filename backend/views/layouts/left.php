<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'glyphicon glyphicon-home', 'url' => ['/site']],
                    [
                        'label' => 'User','icon' => 'glyphicon glyphicon-user', 'url' =>['/user'], 'items'=>[
                            ['label' => 'New Users','url'=>['/user']],
                            ['label' => 'two1','url'=>'#'],
                            ['label' => 'two2','url'=>'#'],
                            ['label' => 'two3','url'=>'#']
                        ]
                    ],
                    [
                        'label' => 'Maker','icon' => 'glyphicon glyphicon-bishop', 'url'=>'#','items'=>[
                            ['label' => 'two','url'=>'#'],
                            ['label' => 'two1','url'=>'#'],
                            ['label' => 'two2','url'=>'#'],
                            ['label' => 'two3','url'=>'#']
                        ]
                    ],
                    ['label' => 'Topic', 'icon'=>'glyphicon glyphicon-tasks', 'url' => ['/topic']],
                    ['label' => 'Article', 'icon' => 'glyphicon glyphicon-font', 'url' => ['/article']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Settings',
                        'icon' => 'glyphicon glyphicon-cog',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
