<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <?=
        \yiister\gentelella\widgets\Menu::widget(
            [
                "items" => [
                    ["label" => "Home", "url" => "/", "icon" => "home"],
                    ["label" => "Cek Kacamata", "url" => "/kacamata", "icon" => "files-o"],
                    ["label" => "Cek Peserta", "url" => "/peserta", "icon" => "user-circle"],
                    ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"],
                    [
                        "label" => "Widgets",
                        "icon" => "th",
                        "url" => "#",
                        "items" => [
                            ["label" => "Menu", "url" => ["site/menu"]],
                            ["label" => "Panel", "url" => ["site/panel"]],
                        ],
                    ],
                    [
                        "label" => "Badges",
                        "url" => "#",
                        "icon" => "table",
                        "items" => [
                            [
                                "label" => "Default",
                                "url" => "#",
                                "badge" => "123",
                            ],
                            [
                                "label" => "Success",
                                "url" => "#",
                                "badge" => "new",
                                "badgeOptions" => ["class" => "label-success"],
                            ],
                            [
                                "label" => "Danger",
                                "url" => "#",
                                "badge" => "!",
                                "badgeOptions" => ["class" => "label-danger"],
                            ],
                        ],
                    ],
                    [
                        "label" => "Multilevel",
                        "url" => "#",
                        "icon" => "table",
                        "items" => [
                            [
                                "label" => "Second level 1",
                                "url" => "#",
                            ],
                            [
                                "label" => "Second level 2",
                                "url" => "#",
                                "items" => [
                                    [
                                        "label" => "Third level 1",
                                        "url" => "#",
                                    ],
                                    [
                                        "label" => "Third level 2",
                                        "url" => "#",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ])?>
    </div>

</div>
<!-- /sidebar menu -->