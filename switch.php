<?php
    $menu ='event';

    switch($menu){
        case 'home':
            echo 'Selamat Datang di Halaman Utama!';
            break;
        case 'about':
            echo 'Tentang Kami';
            break;
        case 'event':
            echo 'Kegiatan kami selama satu kepengurusan';
            break;
        default:
            echo 'Halaman tidak ditemukan';
            break;
    }
?>