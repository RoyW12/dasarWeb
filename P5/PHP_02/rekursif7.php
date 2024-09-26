<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function displayMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item['nama'];
        if (isset($item['subMenu'])) {
            displayMenu($item['subMenu']); 
        }
        echo "</li>";
    }
    echo "</ul>";
}

displayMenu($menu);
