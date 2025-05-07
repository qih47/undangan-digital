<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Pernikahan - Gita & Qisthi</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link href="<?= base_url(); ?>/kartu/css/app.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/kartu/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/kartu/css/slick-theme.css" />
    <link rel="icon" href="<?= base_url(); ?>/kartu/favicon.ico" />
</head>

<body>
    <div class="layout-cover">
        <div class="wrapper">
            <div class="separator">
                <div class="main-img">
                    <!-- particles.js container -->
                    <div id="particles-js"></div>
                </div>
                <style>
                    .invitation-wrapper {
                        position: relative;
                        width: 100%;
                        height: 100%;
                        background: url('your-background-image.jpg') no-repeat center center/cover;
                        display: flex;
                        align-items: center;
                        /* Vertikal Tengah */
                        justify-content: center;
                        /* Horizontal Tengah */
                        text-align: center;
                        padding: 40px;
                        box-sizing: border-box;
                        margin-top: 200px;
                    }

                    .invitation-text {
                        color: white;
                        max-width: 90%;
                    }

                    .wedding-of {
                        font-size: 16px;
                        letter-spacing: 2px;
                        text-transform: uppercase;
                        margin-bottom: 10px;
                        opacity: 0.8;
                    }

                    .couple-names {
                        font-size: 48px;
                        font-family: 'Playfair Display', serif;
                        margin: 0 0 20px 0;
                        line-height: 1.2;
                    }

                    .dear {
                        font-size: 14px;
                        margin-bottom: 5px;
                    }

                    .guest-name {
                        font-size: 22px;
                        font-weight: bold;
                        margin: 0 0 10px 0;
                    }

                    .disclaimer {
                        font-size: 12px;
                        font-style: italic;
                        opacity: 0.7;
                        margin-bottom: 20px;
                    }

                    .open-invite-btn {
                        background-color: #849db3;
                        padding: 12px 20px;
                        border-radius: 20px;
                        color: white;
                        text-decoration: none;
                        font-weight: bold;
                        display: inline-block;
                    }

                    .button-group {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 10px;
                        margin-top: 20px;
                        flex-wrap: nowrap;
                        text-wrap: nowrap;
                    }
                </style>
                <?php
                if (esc($data['partner']) == "") {
                    $undangan = esc($data['nama']);
                } else {
                    $undangan = esc($data['nama']) . ' dan ' . esc($data['partner']);
                }
                ?>
                <div class="main-title">
                    <div class="top-title">
                        <div class="invitation-wrapper">
                            <div class="invitation-text">
                                <p class="wedding-of" style="color: purple;">THE WEDDING OF</p>
                                <h1 class="couple-names" style="color: purple;">GITA &<br>QISTHI</h1>
                                <p class="dear" style="color: purple;">Dear</p>
                                <h2 class="guest-name" style="color: purple;"> <?= esc($undangan) ?></h2>
                                <p class="disclaimer" style="color: purple;">*Dengan senang hati mengundang anda ke acara pernikahan kami.</p>

                                <div class="button-group">
                                    <button class="buka-udangan aniTitle">BUKA UNDANGAN</button>
                                    <span class="buka-qrcode aniTitle" id="qrcode">LIHAT QR CODE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" target="_self" class="music-control add-shadow off">
                    <img src="<?= base_url(); ?>/kartu/img/icon-sound.svg" class="sound-on" alt="" />
                    <img src="<?= base_url(); ?>/kartu/img/icon-sound-off.svg" class="sound-off" alt="" />
                </a>
                <audio
                    id="background_music"
                    loop="loop"
                    src="<?= base_url(); ?>/kartu/music/Let_It_Be_Me.mp3"></audio>
                <div id="pay" class="float">
                    <a
                        id="pay-button"
                        href="#"
                        target="_self"
                        class="pay-btn add-shadow">
                        <img src="<?= base_url(); ?>/kartu/img/icon-uang.svg" alt="" />
                    </a>
                </div>
                <div class="desktop-bar add-shadow">
                    <div class="wrapper-bar w-100">
                        <ul class="padding-bar">
                            <li>
                                <a id="click-date" class="bar-icon icon-date">
                                    <img src="<?= base_url(); ?>/kartu/img/icon-date.svg" class="img-off" alt="" />
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/icon-date-active.svg"
                                        class="img-active"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a id="click-love" class="bar-icon icon-love">
                                    <img src="<?= base_url(); ?>/kartu/img/icon-love.svg" class="img-off" alt="" />
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/icon-love-active.svg"
                                        class="img-active"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a id="click-maps" class="bar-icon icon-location">
                                    <img src="<?= base_url(); ?>/kartu/img/icon-location.svg" class="img-off" alt="" />
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/icon-location-active.svg"
                                        class="img-active"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a id="click-instagram" class="bar-icon icon-insta">
                                    <img src="<?= base_url(); ?>/kartu/img/icon-insta.svg" class="img-off" alt="" />
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/icon-insta-active.svg"
                                        class="img-active"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a id="click-doa" href="#doa-id" class="bar-icon icon-doa">
                                    <img src="<?= base_url(); ?>/kartu/img/icon-doa.svg" class="img-off" alt="" />
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/icon-doa-active.svg"
                                        class="img-active"
                                        alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-separator" id="mobile-scroll">
                <div class="welcome">
                    <img src="<?= base_url(); ?>/kartu/img/mobile-img.jpg" style="width: 100%" />
                    <div class="content">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" class="background-top" alt="" />
                        <div class="content-data">
                            <img src="<?= base_url(); ?>/kartu/img/scrolls.svg" class="scroll-up-down" alt="" />
                            <span class="title-content gs_reveal" style="font-size: 15px">
                                OFFICIALLY MENGUNDANG
                            </span>
                            <span
                                class="title-content signature-font mobile-title gs_reveal gs_reveal_fromLeft">
                                <?= esc($undangan) ?>
                            </span>
                            <span
                                class="title-content gs_reveal"
                                style="font-weight: 700; font-size: 24px">
                                28 JUNI 2025
                                <!-- <sup class="pangkat">ND</sup> 2023 -->
                            </span>
                            <a
                                href="https://calendar.google.com/calendar/u/0/r/eventedit/MDc3amVqdnZkNTQya2RqbzNscG92NDk4MnMgYWE2ZjcxYzk4OTc1ZWU0MDYzZGY0OGVjMWJkYzdlNWUzYTYyMjVlYTYyOWIzZTM4M2VkM2IwNzBjMzMwMDJlYUBn"
                                target="_blank"
                                class="save-date gs_reveal gs_reveal_fromLeft">
                                SAVE THE DATE
                            </a>
                            <div id="countdown" class="gs_reveal">
                                <ul class="pembatas">
                                    <li>
                                        <div class="box-number"><span id="days"></span></div>
                                        <div class="mt-1 font-countdown">DAYS</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="hours"></span></div>
                                        <div class="mt-1 font-countdown">HOURS</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="minutes"></span></div>
                                        <div class="mt-1 font-countdown">MINUTES</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="seconds"></span></div>
                                        <div class="mt-1 font-countdown">SECONDS</div>
                                    </li>
                                </ul>
                            </div>
                            <div id="wedding-done" class="gs_reveal">
                                <span class="title-content signature-font mobile-title">
                                    Acara Telah Usai
                                </span>
                            </div>
                            <div id="wedding-running" class="gs_reveal">
                                <span class="title-content signature-font mobile-title">
                                    Sekarang
                                </span>
                            </div>
                            <div class="daun-melayang">
                                <img src="<?= base_url(); ?>/kartu/img/daun.svg" class="img-kanan" alt="" />
                            </div>
                            <div class="daun-melayang">
                                <img src="<?= base_url(); ?>/kartu/img/daun.svg" class="img-kiri" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="end-content">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" style="width: 100%" alt="" />
                    </div>
                    <div class="doa">
                        <img
                            src="<?= base_url(); ?>/kartu/img/pembukaan.svg"
                            class="gs_reveal gs_reveal_fromRight"
                            alt="" />
                        <div class="doa-title gs_reveal">
                            <p class="content-doa">
                                "Dan Diantara tanda-tanda kebesaran-Nya ialah diciptakan-Nya
                                untukmu pasangan hidup dari jenismu sendiri.
                            </p>
                            <p class="content-doa">
                                Supaya kamu mendapatkan ketenangan hati.
                            </p>
                            <p class="content-doa">
                                Dan dijadikan-Nya kasih sayang diantara kamu.
                            </p>
                            <p class="content-doa">
                                Sesungguhnya yang demikian itu menjadi tanda-tanda
                                kebesaran-Nya bagi orang-orang yang berfikir"
                            </p>
                            <p class="content-doa" style="margin-top: 10px">
                                (QS. Ar-Ruum: 21)
                            </p>
                        </div>
                        <img
                            src="<?= base_url(); ?>/kartu/img/pembukaan.svg"
                            class="gs_reveal gs_reveal_fromLeft"
                            style="transform: rotate(180deg)"
                            alt="" />
                    </div>
                    <div class="content" style="margin-top: -120px">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" class="background-bot" alt="" />
                        <div class="content-data">
                            <div class="block-detail" id="date-id">
                                <div class="doa-awal gs_reveal">
                                    <p>بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                                    <p>
                                        اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ
                                    </p>
                                </div>
                                <div class="doa-title gs_reveal">
                                    <p class="font-dasar">
                                        Dengan memohon rahmat dan ridho Allah SWT, serta mengucap
                                        rasa syukur atas karunia Allah SWT, Kami hendak
                                        menyampaikan kabar bahagia pernikahan Kami serta Marhabah
                                        & Aqiqah. Yang Insya Allah akan dilaksanakan :
                                    </p>
                                </div>
                                <div class="wedding-name">
                                    <span
                                        class="akad-nikah signature-font gs_reveal gs_reveal_fromRight">
                                        Akad Nikah
                                    </span>
                                </div>
                                <div class="wedding-time">
                                    <span class="time-title gs_reveal">
                                        SABTU, 28 JUNI 2025
                                    </span>
                                    <span class="time-title gs_reveal"> 08:00 - SELESAI </span>
                                </div>
                                <div class="wedding-bottom">
                                    <span class="kediaman gs_reveal"> LAZETA CAFE </span>
                                    <span class="kediaman font-dasar gs_reveal">
                                        Jl. Margacinta No.91, Cijaura, Kec. Buahbatu, Kota
                                        Bandung, Jawa Barat 40287
                                    </span>
                                    <a href="#maps-id" class="kediaman location gs_reveal">
                                        LIHAT LOKASI
                                    </a>
                                    <span class="kediaman font-dasar gs_reveal">
                                        Atas kehadiran dan do'a restunya kami mengucapkan terima
                                        kasih
                                    </span>
                                </div>
                                <div class="doa-awal gs_reveal">
                                    <p>
                                        وَالسَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ
                                    </p>
                                </div>
                            </div>
                            <div class="space-daun gs_reveal">
                                <img src="<?= base_url(); ?>/kartu/img/daun-banyak.svg" class="w-100" alt="" />
                            </div>
                            <div id="love-id" class="block-profile">
                                <div class="profile-nickname mt-3 gs_reveal">
                                    <span class="panggilan signature-font">Gita</span>
                                </div>
                                <div class="profile-picture gs_reveal gs_reveal_fromRight">
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/profile-cewe.png"
                                        class="picture-rounded"
                                        style="border: 2px solid #ffffff; border-radius: 100%"
                                        alt="" />
                                </div>
                                <div class="profile-name mt-1 gs_reveal">
                                    <span class="title-content nama-lengkap">Gita Laras Rohatina</span>
                                </div>

                                <!-- <a href="https://www.instagram.com/beyshalayla/" target="_blank" class="profile-ig mt-1 btn-ig gs_reveal">
                                    <img src="img/icon-ig.svg" alt=""> <span style="margin-left: 10px;">beyshalayla</span>
                                </a> -->
                                <div class="detail-keluarga gs_reveal">
                                    <p class="font-dasar">PUTRI KETIGA DARI</p>
                                    <p class="font-dasar">Bapak Edi Supriyadi</p>
                                    <p class="font-dasar">dan Ibu Heni (ALM)</p>
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromRight">
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/daun-profile-kanan.svg"
                                        class="img-kanan-profile"
                                        alt="" />
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromLeft">
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/daun-profile-kiri.svg"
                                        class="img-kiri-profile"
                                        alt="" />
                                </div>
                            </div>
                            <div class="block-dan mt-3">
                                <img src="<?= base_url(); ?>/kartu/img/dan.svg" alt="" />
                            </div>
                            <div class="block-profile">
                                <div class="profile-nickname mt-3 gs_reveal">
                                    <span class="panggilan signature-font">Qisthi</span>
                                </div>
                                <div class="profile-picture gs_reveal gs_reveal_fromLeft">
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/profile-cowo.png"
                                        class="picture-rounded"
                                        style="border: 2px solid #ffffff; border-radius: 100%"
                                        alt="" />
                                </div>
                                <div class="profile-name mt-1 gs_reveal">
                                    <span class="title-content nama-lengkap">Qisthi Iskandar Haqiki S.Kom</span>
                                </div>
                                <!-- <a href="https://www.instagram.com/fiqihwew/" target="_blank" class="profile-ig mt-1 btn-ig gs_reveal">
                                    <img src="img/icon-ig.svg" alt=""> <span style="margin-left: 10px;">fiqihwew</span>
                                </a> -->
                                <div class="detail-keluarga gs_reveal">
                                    <p class="font-dasar">PUTRA PERTAMA DARI</p>
                                    <p class="font-dasar">Bapak Ishak Prihatna</p>
                                    <p class="font-dasar">dan Ibu Upi Supriyati</p>
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromRight">
                                    <img
                                        src="<?= base_url(); ?>/kartu/img/daun-profile-kb.svg"
                                        class="img-kb-profile"
                                        alt="" />
                                </div>
                            </div>
                            <div class="space-daun gs_reveal">
                                <img src="<?= base_url(); ?>/kartu/img/daun-banyak.svg" class="w-100" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="end-content">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" class="top-location" alt="" />
                    </div>
                    <!-- <div class="img-bawah w-100 gs_reveal">
                        <img src="img/img-bawah.jpg" class="w-100" alt="">
                    </div> -->
                    <div class="google-maps gs_reveal gs_reveal_fromRight" id="maps-id">
                        <div class="cover-maps">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe
                                        width="376"
                                        height="400"
                                        id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=Lazeta%20Cafe%20Margacinta%20Bandung&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0"
                                        scrolling="no"
                                        marginheight="0"
                                        marginwidth="0"></iframe>
                                    <br />
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 400px;
                                            width: 376px;
                                        }
                                    </style><a href="https://www.embedgooglemap.net">google maps embed iframe generator</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 400px;
                                            width: 376px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <span
                            class="font-dasar font-black mt-2 gs_reveal"
                            style="font-weight: 600">
                            Jl. Margacinta No.91, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa
                            Barat 40287
                        </span>
                        <a
                            href="https://maps.app.goo.gl/Ud4kT41bb8M545cz7"
                            target="_blank"
                            class="btn-white gs_reveal"
                            style="text-align: center">
                            SEE LOCATION
                        </a>
                    </div>
                    <div class="content pembates-margin">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" style="width: 100%" alt="" />
                        <div class="content-data">
                            <span
                                class="akad-nikah signature-font gs_reveal gs_reveal_fromRight"
                                style="padding-top: 3rem">
                                Live Streaming
                            </span>
                            <span class="title-content find-ig gs_reveal">
                                FIND OUR WEDDING VIRTUALLY ON INSTAGRAM
                            </span>
                            <a
                                href="https://www.instagram.com/fitridjunaidizaini/"
                                target="_blank"
                                class="btn-white gs_reveal"
                                id="instagram-id"
                                style="text-align: center">
                                <img src="<?= base_url(); ?>/kartu/img/bx_video.svg" alt="" />
                                <span style="margin-left: 10px">WATCH STREAMING</span>
                            </a>
                            <div class="space-daun mt-3 gs_reveal">
                                <img src="<?= base_url(); ?>/kartu/img/daun-banyak.svg" class="w-100" alt="" />
                            </div>
                            <!-- <span class="akad-nikah signature-font gs_reveal gs_reveal_fromLeft">
                                Instagram Effect
                             </span>
                            <span class="title-content find-ig gs_reveal">
                                SHARE YOUR MOMENT WITH OUR INSTAGRAM EFFECT
                            </span>
                            <div class="instagram-effects slider gs_reveal gs_reveal_fromLeft">
                                <div class="block-image">
                                    <div class="images-place w-100">
                                        <img src="img/instagrams/slide-1.png" class="w-100" alt="">
                                    </div>
                                    <div class="btn-place w-100" style="margin-top:1rem;">
                                        <a href="https://www.instagram.com/ar/464044251841434/" target="_blank" class="btn-white" style="text-align: center;">
                                                TRY NOW
                                        </a>
                                    </div>
                                </div>
                                <div class="block-image">
                                    <div class="images-place w-100">
                                        <img src="img/instagrams/slide-2.png" class="w-100" alt="">
                                    </div>
                                    <div class="btn-place w-100" style="margin-top:1rem;">
                                        <a href="https://www.instagram.com/ar/5698919336826504/" target="_blank" class="btn-white" style="text-align: center;">
                                                TRY NOW
                                        </a>
                                    </div>
                                </div>
                                <div class="block-image">
                                    <div class="images-place w-100">
                                        <img src="img/instagrams/slide-3.png" class="w-100" alt="">
                                    </div>
                                    <div class="btn-place w-100" style="margin-top:1rem;">
                                        <a href="https://www.instagram.com/ar/1155589031839197/" target="_blank" class="btn-white" style="text-align: center;">
                                                TRY NOW
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="end-content">
                        <img src="<?= base_url(); ?>/kartu/img/content-top.svg" style="width: 100%" alt="" />
                    </div>
                    <div class="block-doa mt-2" id="doa-id">
                        <span
                            class="akad-nikah signature-font font-black gs_reveal gs_reveal_fromRight">
                            Kirim Doa
                        </span>
                        <div class="form-data font-black">
                            <div class="w-100">
                                <input type="hidden" id="csrf_token" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                <div class="form-wrap mt-2 gs_reveal">
                                    <div class="label">NAMA</div>
                                    <div class="input-form">
                                        <input type="hidden" id="id_invitation" name="id_invitation" value="<?= esc($data['id']) ?>">
                                        <input
                                            type="text"
                                            class="w-100 input-t"
                                            id="nama"
                                            name="nama"
                                            placeholder="Nama Anda"
                                            value="<?= esc($data['nama']) ?>"
                                            required />
                                    </div>
                                </div>


                                <div class="form-wrap mt-2 gs_reveal">
                                    <div class="label">LOKASI</div>
                                    <div class="input-form">
                                        <input
                                            type="text"
                                            class="w-100 input-t"
                                            id="lokasi"
                                            name="lokasi"
                                            placeholder="Asal Daerah"
                                            value="<?= esc($data['kota']) ?>"
                                            required />
                                    </div>
                                </div>

                                <div class="form-wrap mt-2 gs_reveal">
                                    <div class="label">KEHADIRAN</div>
                                    <div class="input-form">
                                        <div class="wrap-radio">
                                            <input
                                                type="radio"
                                                class="specifyColor"
                                                id="hadir"
                                                name="kehadiran"
                                                value="hadir"

                                                style="color: #575757"
                                                required />
                                            <label class="btn-click" for="hadir">Hadir</label>
                                        </div>
                                        <div class="wrap-radio">
                                            <input
                                                type="radio"
                                                class="specifyColor"
                                                id="mungkin-hadir"
                                                name="kehadiran"
                                                value="mungkin-hadir"

                                                required />
                                            <label class="btn-click" for="mungkin-hadir">Mungkin Hadir</label>
                                        </div>
                                        <div class="wrap-radio">
                                            <input
                                                type="radio"
                                                class="specifyColor"
                                                id="tidak-hadir"
                                                name="kehadiran"
                                                value="tidak-hadir"

                                                required />
                                            <label class="btn-click" for="tidak-hadir">Tidak Hadir</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-wrap mt-2 gs_reveal">
                                    <div class="label">UCAPAN & DOA</div>
                                    <div class="input-form">
                                        <textarea
                                            class="w-100 input-t"
                                            id="ucapan"
                                            name="ucapan"
                                            rows="8"
                                            placeholder="Ucapan Doa & Harapan"
                                            required></textarea>
                                    </div>
                                </div>

                                <button
                                    type="button"
                                    id="submit"
                                    name="submit"
                                    value="Submit"
                                    class="btn-send gs_reveal">
                                    <span class="button__text">SEND MESSAGE</span>
                                </button>
                            </div>

                            <div id="block-doa" class="block-data-doa gs_reveal gs_reveal_fromLeft mt-3"></div>
                        </div>

                    </div>
                    <!-- <div class="last-img w-100 gs_reveal">
                        <img src="img/img-wedding.svg" alt="">
                    </div> -->
                    <div class="last-img w-100 gs_reveal">
                        <img src="<?= base_url(); ?>/kartu/img/img-end.svg" class="w-100" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div id="ohsnap"></div>
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <header id="close-01" class="w3-container">
                <span class="w3-button w3-display-topright">&times;</span>
                <h2 class="modal-h aniModal">DIGITAL ENVELOPE</h2>
            </header>
            <div class="w3-container">
                <p class="font-digital aniModal" style="color: #000; width: 100%">
                    Sekarang amplopmu bisa tersampaikan secara digital dan dapat
                    transfer langsung ke rekening:
                </p>
                <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="<?= base_url(); ?>/kartu/img/bank/bni.png" alt="" width="95" height="30" />
                    </div>
                    <div class="bank-detail">
                        <span class="title aniModal"> BNI </span>
                        <span class="bank-title aniModal">
                            3410637811 <img src="<?= base_url(); ?>/kartu/img/copy.png" alt="" />
                        </span>
                        <span class="bank-name aniModal"> Gita Laras Rohatina </span>
                    </div>
                </div>
                <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="<?= base_url(); ?>/kartu/img/bank/mandiri.png" alt="" width="95" height="50" />
                    </div>
                    <div class="bank-detail">
                        <span class="title aniModal"> Mandiri </span>
                        <span class="bank-title aniModal">
                            1671270172 <img src="<?= base_url(); ?>/kartu/img/copy.png" alt="" />
                        </span>
                        <span class="bank-name aniModal"> Qisthi Iskandar H </span>
                    </div>
                </div>
                <!-- <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="img/bank/mandiri.png" alt="">
                    </div>
                    <div class="bank-detail aniModal">
                        <span class="title">
                    MANDIRI
                </span>
                        <span class="bank-title">
                    1170010228625 <img src="img/copy.png" alt="">
                </span>
                        <span class="bank-name">
                    a/n Ahmad Fiqih
                </span>
                    </div>
                </div>
                <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="img/bank/bsi.png" alt="">
                    </div>
                    <div class="bank-detail aniModal">
                        <span class="title">
                    BSI
                </span>
                        <span class="bank-title">
                    7982942960 <img src="img/copy.png" alt="">
                </span>

                        <span class="bank-name">
                    a/n Ahmad Fiqih
                </span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div id="id02" class="w3-modal">
        <div class="w3-modal-content text-modal-center">
            <header class="w3-container">
                <h2 class="modal-h aniModal">QR CODE INVITATION</h2>
            </header>
            <div class="w3-container">
                <p class="font-digital aniModal" style="color: #000; width: 100%">
                    Scan QR CODE ini pada saat memasuki tempat acara
                </p>
                <div class="img-save aniModal">
                    <img src="<?= base_url(); ?>qrcode/<?= esc($data['qrcode']); ?>" style="width: 80%" alt="" />
                </div>
                <button
                    id="okay"
                    class="btn-send aniModal"
                    style="margin-bottom: 1rem">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-2.2.0.min.js"
        type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url(); ?>kartu/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>kartu/js/countdown.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>kartu/js/ohsnap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>kartu/js/app.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>kartu/js/snow.js"></script>
</body>

</html>