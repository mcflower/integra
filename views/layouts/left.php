<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'], 'visible' => (Yii::$app->user->identity->username == 'greenfild@gmail.com')],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'], 'visible' => (Yii::$app->user->identity->username == 'greenfild@gmail.com')],
                    ['label' => 'Инфо', 'icon' => 'info', 'url' => ['/admin092/info']],
                    ['label' => 'Видео', 'icon' => 'youtube', 'url' => ['/admin092/webinar']],
                    ['label' => 'Сертификаты', 'icon' => 'certificate', 'url' => ['/admin092/certificate']],
                    ['label' => 'ЧаВо', 'icon' => 'question-circle-o', 'url' => ['/admin092/question']],
                    ['label' => 'Публикации', 'icon' => 'file-pdf-o', 'url' => ['/admin092/article']],
                    ['label' => 'Контент', 'icon' => 'gamepad', 'url' => ['/admin092/xcontent']],
                    ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/admin092/xuser']],
                    ['label' => 'Галерея', 'icon' => 'picture-o', 'url' => ['/admin092/gallery']],
                    [
                        'label' => 'Анкеты',
                        'icon' => 'folder',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Гипоксия', 'icon' => 'dot-circle-o', 'url' => ['/admin092/hypoxia'],],
                        ],
                    ],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
