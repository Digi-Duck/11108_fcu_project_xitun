<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西屯純愛組</title>
    <link rel="icon" type="image/x-icon" href="./img/mouse.png">
    <link rel="stylesheet" href="./css/Xitun.css">
    <link rel="stylesheet" href="./css/cd.css">
    <link rel="stylesheet" href="./css/invitation.css">
    <link rel="stylesheet" href="./css/person.css">
    <link rel="stylesheet" href="./css/about.css">

</head>

<body>
    <!-- loading畫面 -->
    <div id="loading">
        <div class="preloader">
            <div class="preloader__ring">
                <div class="preloader__sector"> </div>
                <div class="preloader__sector">H</div>
                <div class="preloader__sector">i</div>
                <div class="preloader__sector">g</div>
                <div class="preloader__sector">h</div>
                <div class="preloader__sector"> </div>
                <div class="preloader__sector">l</div>
                <div class="preloader__sector">o</div>
                <div class="preloader__sector">c</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
            </div>
            <div class="preloader__ring">
                <div class="preloader__sector">h</div>
                <div class="preloader__sector">e</div>
                <div class="preloader__sector">n</div>
                <div class="preloader__sector">r</div>
                <div class="preloader__sector">y</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector">.</div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
                <div class="preloader__sector"></div>
            </div>
        </div>
    </div>

    <!-- 置頂 -->
    <button onclick="topFunction()" id="myBtn" title="Gotop"><img src="./img/SVG_draw_gotop.svg"
            id="Gotop-photo"></button>
    <!-- 雜訊 -->
    <div class="bg-noise"></div>

    <nav>
        <div class="navall">
            <ul class="logo">
                <a href="#"><img src="./img/西屯純愛LOGO.png" alt="" id="logophoto"></a>
            </ul>
            <ul class="nav-menu">
                <li class="navli"><a href="#page-1"><img src="./img/nav/SVG_nav_music.svg" alt=""></a></li>
                <li class="navli"><a href="#page-2"><img src="./img/nav/SVG_nav_about.svg" alt=""></a></li>
                <li class="navli"><a href="#page-3"> <img src="./img/nav/SVG_nav_event.svg" alt=""> </a></li>
                <li class="navli-2"><a href="#page-4"> <img src="./img/nav/SVG_nav_invitation.svg" alt=""></a></li>
            </ul>

            <ul class="iconContent">
                <li><a href="https://facebook.com/HIGHLOCANDHENRY/" target="_blank"><img class="iconli" src="./img/icon_fb.svg" alt=""
                            id="nav-fb"></a></li>
                <li>
                    <a href="https://www.instagram.com/highlocandhenry/" target="_blank">
                        <img class="iconli" src="./img/icon_ig.svg" alt="" id="nav-ig">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w" target="_blank">
                        <img class="iconli" src="./img/icon_yt.svg" alt="" id="nav-yt">
                    </a>
                </li>
                <li>
                    <a href="https://www.fireonshop.com/products/spirit-of-buffalo" target="_blank">
                        <img class="iconli" src="./img/icon_cart.svg" alt="" id="nav-cart">
                    </a>
                </li>
            </ul>

            <!-- 漢堡條 -->
            <img class="ham-btn" src="./img/hamburger-menu-svgrepo-com.svg" alt="" onclick="clicked()">
            <div class="ham-menu">
                <div class="ham-menu-nav">
                    <a href="#"><img src="./img/西屯純愛LOGO.png" alt="" class="ham-logo"></a>
                    <img src="./img/close-svgrepo-com.svg" alt="" class="ham-btn-close" onclick="clicked()">
                </div>
                <div class="ham-menu-content">
                    <li><a href="#page-1"><img src="./img/nav/SVG_nav_music_white.svg" alt="" class="ham-content-svg"
                                onclick="hamclose()"></a></li>
                    <li><a href="#page-2"><img src="./img/nav/SVG_nav_about_white.svg" alt="" class="ham-content-svg"
                                onclick="hamclose()"></a></li>
                    <li><a href="#page-3"> <img src="./img/nav/SVG_nav_event_white.svg" alt="" class="ham-content-svg"
                                onclick="hamclose()"></a></li>
                    <li><a href="#page-4"> <img src="./img/nav/SVG_nav_invitation_white.svg" alt=""
                                class="ham-content-svg" onclick="hamclose()"></a></li>
                </div>
                <div class="ham-menu-icon">
                    <li><a href="https://m.facebook.com/HIGHLOCANDHENRY/" target="_blank"><img class="iconli" src="./img/icon_fb.svg"
                                alt="" id="nav-fb"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/highlocandhenry/" target="_blank">
                            <img class="iconli" src="./img/icon_ig.svg" alt="" id="nav-ig">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w" target="_blank">
                            <img class="iconli" src="./img/icon_yt.svg" alt="" id="nav-yt">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.fireonshop.com/products/spirit-of-buffalo" target="_blank">
                            <img class="iconli" src="./img/icon_cart.svg" alt="" id="nav-cart">
                        </a>
                    </li>
                </div>
            </div>
        </div>

    </nav>

    <main>

        <div class="rotate-scroll" style="overflow: hidden;">
            <!-- 方塊 -->
            <div class="rotate">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <!-- 跑馬燈 -->

            <div class="scroll-content">
                <div class="scroll">
                    <div class="mover-1"><img src="./img/SVG_run1.svg" id="sceoll-photo" alt=""></div>
                    <div class="mover-1"><img src="./img/SVG_run1.svg" id="sceoll-photo" alt=""></div>
                </div>
                <div class="scroll">
                    <div class="mover-2"><img src="./img/SVG_run2.svg" id="sceoll-photo" alt=""></div>
                    <div class="mover-2"><img src="./img/SVG_run2.svg" id="sceoll-photo" alt=""></div>
                </div>
                <div class="scroll">
                    <div class="mover-3"><img src="./img/SVG_run3.svg" id="sceoll-photo" alt=""></div>
                    <div class="mover-3"><img src="./img/SVG_run3.svg" id="sceoll-photo" alt=""></div>
                </div>
                <div class="scroll">
                    <div class="mover-4"><img src="./img/SVG_run4.svg" id="sceoll-photo" alt=""></div>
                    <div class="mover-4"><img src="./img/SVG_run4.svg" id="sceoll-photo" alt=""></div>
                </div>
            </div>
        </div>





        <!-- 個人介紹 -->
        <div class="person" style="overflow: hidden;">
            <div class="person-big">
                <div class="person">
                    <div class="person-images">
                        <div class="person-img-1"></div>
                        <div class="person-img-2"></div>
                    </div>
                    <div class="slider">
                        <div class="drag-line">
                            <span></span>
                        </div>
                        <input type="range" min="0" max="100" value="50" style="overflow:hidden;">
                    </div>
                </div>
            </div>
        </div>





        <!-- CD塔區塊開始 -->
        <div class="music scroll-page" id="page-1">


            <!-- <div class="red-line">
                <img src="./cd/SVG_line4.svg" alt="">
            </div>
            <div class="yellow-line">
                <img src="./cd/SVG_line2.svg" alt="">
            </div> -->
            <div class="ep">
                <img src="./img/svgside/SVG_side_ch_music.svg" alt="" class="music-side-ch">
                <img src="./img/svgside/SVG_side_music.svg" alt="" class="music-side">
                <img src="./img/SVG_draw_mic.svg" alt="" class="music-mic">

                <div class="album album1" data-title="">
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛\(2\).jpg);"></a>
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛\(2\).jpg);"></a>
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛-up.jpg);"></a>
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛-up.jpg);"></a>
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛\(2\).jpg);"></a>
                    <a href="/good-atmosphere" class="photo"
                        style=" background-image: url(./cd/cd-好氣氛\(2\).jpg);"></a>
                </div>
                <div class="album album2" data-title="">
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-side.jpg);"></a>
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-side.jpg);"></a>
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-up.jpg);"></a>
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-up.jpg);"></a>
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-side.jpg);"></a>
                    <a href="/taichll" class="photo"
                        style="background-image: url(./cd/cd-Taichill\ City\ G’z-side.jpg);"></a>
                </div>



                <div class="album album3" data-title="">
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-side.jpg);"></a>
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-side.jpg);"></a>
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-up.jpg);"></a>
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-up.jpg);"></a>
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-side.jpg);"></a>
                    <a href="/taiwan" class="photo" style="background-image: url(./cd/cd-台灣製造-side.jpg);"></a>
                </div>

                <div class="album album4" data-title="">
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-side.jpg);"></a>
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-side.jpg);"></a>
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-up.jpg);"></a>
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-up.jpg);"></a>
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-side.jpg);"></a>
                    <a href="/again" class="photo" style="background-image: url(./cd/cd-想和你再一次-side.jpg);"></a>
                </div>

                <div class="album album5" data-title="">
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-side.jpg);"></a>
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-side.jpg);"></a>
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-up.jpg);"></a>
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-up.jpg);"></a>
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-side.jpg);"></a>
                    <a href="/shame" class="photo" style="background-image: url(./cd/cd-夏夕夏景-side.jpg);"></a>
                </div>

                <div class="album album6" data-title="">
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-side.jpg);"></a>
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-side.jpg);"></a>
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-up.jpg);"></a>
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-up.jpg);"></a>
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-side.jpg);"></a>
                    <a href="/menace" class="photo"
                        style="background-image: url(./cd/cd-MENACE\ II\ SOCIETY-side.jpg);"></a>
                </div>
                <img src="./img/SVG_draw_radio.svg" alt="" class="music-radio">
                <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w"><img src="./img/SVG_more.svg" alt=""
                        class="music-side-more"></a>
            </div>
            <!-- <div class="more">
                <img src="./cd/icon、裝飾圖/SVG_more.svg" alt="">
            </div> -->

        </div>
        <!-- CD塔區塊結束 -->

        <!-- 關於區域 -->
        <div class="about scroll-page" id="page-2">
            <div class="about-container">
                <div class="about-main">
                    <!-- 關於 aboout 大標的圖片 -->
                    <div class="about-bigtitle">
                        <img src="../img/svgside/SVG_side_ch_about.svg" alt="" class="about-bigtitle-ch">
                        <img src="../img/svgside/SVG_side_about.svg" alt="" class="about-bigtitle-en">
                    </div>
                    <!-- 左右人物 -->
                    <!-- highloc ( 色塊 人 名)-->
                    <div class="about-highloc">
                        <div class="box-blue">
                            <div class="about-highlocpic"></div>
                            <div class="name-highloc"></div>
                        </div>
                    </div>
                    <!-- henry  (色塊 人 名)-->
                    <div class="about-henry">
                        <div class="box-red">
                            <div class="about-henrypic"></div>
                            <div class="name-henry"></div>
                        </div>
                    </div>
                    <!-- 點選的文字-中間字體 -->
                    <div class="about-center-content">
                        <div class="about-text">
                            <span id="btn-origin" class="about-mousehover">建團起源</span>
                            <span id="btn-experience" class="about-mousehover">演出經歷</span>
                            <span id="btn-cooperation" class="about-mousehover">音樂合作</span>
                        </div>
                        <!-- 外部連結 -->
                        <div class="about-link">
                            <a href="https://www.facebook.com/HIGHLOCANDHENRY/" target="_blank"><img src="./img/icon_fb.svg"
                                    alt="facebook" class="about-mousehover"></a>
                            <a href="https://www.instagram.com/highlocandhenry/" target="_blank"><img src="./img/icon_ig_about.svg"
                                    alt="instagram" id="about-ig" class="about-mousehover"></a>
                            <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w/featured" target="_blank"><img
                                    src="./img/icon_yt.svg" alt="youtube" class="about-mousehover"></a>
                            <a href="https://www.fireonshop.com/products/spirit-of-buffalo" target="_blank"><img src="./img/icon_cart.svg" alt="fireonshop"
                                    class="about-mousehover"></a>
                        </div>
                    </div>
                    <!-- 背景塗鴉小圖片 -->
                    <div class="about-draw">
                        <img id="content-header" src="./img/SVG_logo_new.svg" alt="logo">

                        <img id="content-ya" src="./img/SVG_draw_ya.png" alt="ya" width="321" height="294px">
                    </div>
                </div>
            </div>
            <!-- 彈跳視窗 -->
            <div id="modal-origin">
                <h2 class="modal-title">建團起源
                    <div class="modal-close-btn">
                        <img src="./img/about/icon_close_white.svg" alt="">
                    </div>
                </h2>
                <div class="modal-content">西屯純愛組是由Henry與High Loc組成的一個台灣雙人饒舌團體。從台灣西岸台中發跡，擅長西岸嘻哈風格。</div>
            </div>

            <div id="modal-experience">
                <h2 class="modal-title">演出經歷
                    <div class="modal-close-btn">
                        <img src="./img/about/icon_close_white.svg" alt="">
                    </div>
                </h2>
                <div class="modal-content">
                    <ul>
                        <li>2022 RedBull Taiwan 飛行日 選手之夜</li>
                        <li>2022 台中刺青展</li>
                        <li>2022 喔北搖音樂節</li>
                        <li>2022 台秋祭</li>
                        <li>2022 台灣祭</li>
                        <li>2022 山城生活節</li>
                        <li>2022 MTV得理不饒人演唱會</li>
                        <li>2022 Dickies 旗艦店開幕演出</li>
                        <li>2021 台秋西提 都會派對</li>
                        <li>2021 山城生活節</li>
                        <li>2021 國安好宅開工Party</li>
                        <li>2020 搖滾連續祭</li>
                        <li>2019 龍虎門返校音樂節</li>
                        <li>2019 大黑熊部落</li>
                        <li>2018 黑熊部落</li>
                        <li>2018 大放槍籃球賽 中場演出</li>
                        <li>2018 飄遊者音樂節</li>
                    </ul>
                </div>
            </div>

            <div id="modal-cooperation">
                <h2 class="modal-title">音樂合作
                    <div class="modal-close-btn">
                        <img src="./img/about/icon_close_white.svg" alt="">
                    </div>
                </h2>
                <div class="modal-content">
                    <ul>
                        <li>2022 MENACE II SOCIETY 攜手蛋頭BG8LOCC</li>
                        <li>2022 鄉下來的Remix 與玖壹壹一同參與創作</li>
                        <li>2022 Still Here Dickies 100 週年企劃單曲</li>
                        <li>2022 狼魂「閃電狼戰隊」</li>
                        <li>2022 主題曲</li>
                        <li>2021 Taichill City G'z feat. 夏沐</li>
                        <li>2021 壞南孩 Down South Boys 攜手Barry Chen 合作南岸音樂</li>
                        <li>2020 想和妳再一次 feat. Veronica Lin</li>
                        <li>2020 台灣製造 feat. L.C小光</li>
                    </ul>
                </div>
            </div>

        </div>




        <!-- 活動 -->
        <div class="event scroll-page" id="page-3">
            <div class="event-container">
                <!-- 舞台圖片在這層 -->
                <div class="event-container-content">
                    <img src="./img/svgside/SVG_side_ch_event.svg" id="event-photo-ch" alt="">
                    <img src="./img/svgside/SVG_side_event.svg" id="event-photo" alt="">
                    <div class="event-content-center">
                        <div class="state">
                            <div class="itemwrap" id="itemwrap">
                                <div class="item photo-1"></div>
                                <div class="item photo-2"></div>
                                <div class="item photo-3"></div>
                                <div class="item photo-4"></div>
                            </div>
                            <div class="iconwrap" id="iconwrap">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="schedule scroll-page" id="page-4">
            <div id="invitext">
                <img src="./invitationPHOTO/SVG_side_invitation.svg"  id="invitext-en" alt="側欄標題invitation">
            </div>

            <div id="information">
                <!-- 日歷日歷圖片 -->
                {{-- <div class="dateimg">
                    <img src="./invitationPHOTO/SVG-日曆.svg" style="width:100%;height:100%" alt="日曆圖片">
                </div> --}}
                <!-- 活動消息呈現 -->

                <div class="datetext">
                    <span id="newstext">NEWS</span> <hr>
                    {{-- <button class=" btn-top"><a href="/clientold">最舊置頂</a></button>
                    <button class=" btn-top"><a href="/clientnew">最新置頂</a></button> --}}
                    <table id="datetext_ul">
                        @foreach ($project as $index => $item)
                        <tr>
                            <th class="date">📅{{ $item->date }}</th>
                        </tr>
                        <tr>
                            <td class="title">{{ $item->title }}</td>
                            <td class="description">{!!$item->description!!}</td>

                        </tr>


                        @endforeach

                    </table>
                    {{-- <ul id="datetext_ul">
                        @foreach ($project as $index => $item)
                        <hr>
                        <li>
                            <span class="date"> 📅{{ $item->date }}</span>
                            <span class="title">{{ $item->title }}</span>
                            <br>
                                                        <span class="description">{!!$item->description!!}</span>
                        </li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>

            <!--車子與線條圖片 -->
            <div id="iconCar">
                <img src="./invitationPHOTO/SVG_draw_car.svg" style="width:100%;" alt="灰棕色敞篷跑車圖片">
            </div>
            <div id="lineimg">
                <img src="./invitationPHOTO/SVG_line8.svg" alt="背景線條" style="width:100%;">
            </div>

            <!-- 藍色信箱區塊 -->
            <div id="mailtext">
                <img src="./invitationPHOTO/活動邀約.svg" alt="圖片檔的文字是活動邀約" width="150px" class="img_active">
                <p>西屯純愛組</p>
                <a href="mailto:highlocandhenry@gmail.com" target="_blank">highlocandhenry@gmail.com</a>
                <img src="./invitationPHOTO/SVG_draw_music.svg"  alt="背景文字MUSIC" class="img_music">
            </div>

        </div>

    </main>

    <footer class="footer-box">
        <div class="logo">
            <img src="./invitationPHOTO/SVG_logo_old.svg" alt="西屯純愛組LOGO圖片">
        </div>
        <div class="link">
            <a href="https://facebook.com/HIGHLOCANDHENRY/" target="_blank">
                <img src="./invitationPHOTO/icon_fb.svg" alt="FB連結的ICON" height="38px" class="footer-hover">
            </a>
            <a href="https://www.instagram.com/highlocandhenry/" target="_blank">
                <img src="./invitationPHOTO/icon_ig (1).svg" alt="IG連結的ICON" height="29px" class="footer-hover">
            </a>
            <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w" target="_blank">
                <img src="./invitationPHOTO/icon_yt.svg" alt="YOUTUBE連結的ICON" height="38px" class="footer-hover">
            </a>
            <a href="https://www.fireonshop.com/products/spirit-of-buffalo" target="_blank">
                <img src="./invitationPHOTO/icon_cart (1).svg" alt="實體專輯的購物車連結ICON" height="31px" class="footer-hover">
            </a>
        </div>
        <div class="text">
            <div>本網站內所有資料之著作權、所有權與智慧財產權，包括文字、圖片、聲音、影像、軟體、編曲…等，均為西屯純愛組原創作品或依法向原作者或代理人機構取得合法重製授權。</div>
            <div id="foot">©西屯純愛組</div>
        </div>
    </footer>

    <script src="./about.js"></script>
    <script>
        // loading

        const load = document.getElementById('loading')

        load.addEventListener('animationend', function () {
            load.classList.add('hidden')
        })


        // 置頂
        window.onscroll = scrollFunction; //每當畫面捲動觸發一次

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }//網頁捲動超過200pixel就會跑出來 display設定成block 跑回上面就隱藏。

        // 重置scrollTop這個變數的值
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }


        // 漢堡條
        const hamMenu = document.querySelector('.ham-menu')
        function clicked() {
            hamMenu.classList.toggle('act')
        }
        function hamclose() {
            hamMenu.classList.remove('act')
        }

        // 活動方塊
        (function () {
            var itemwrap = document.getElementById("itemwrap"),
                iconwrap = document.getElementById("iconwrap"),
                items = itemwrap.getElementsByTagName("div"),
                icons = iconwrap.getElementsByTagName("span"),
                playIndex = 0;
            playIndexPre = 0;
            autoT = 0,
                gapTime = 2000;

            function init() {
                initEvent();
                play();
            }

            function initEvent() {
                iconwrap.onclick = function (event) {
                    var event = event || window.event; console.log(event.target);
                    if (event.target.tagName.toLowerCase() == "span") {
                        for (var i = 0; i < icons.length; i++) {
                            if (icons[i] == event.target) {
                                clearTimeout(autoT);
                                playIndex = i;
                                play();
                            }
                        }
                    }
                };
            }

            function changeItem(index) {
                if (items[index].className.indexOf("up") != -1) {
                    return;
                } else {
                    items[index].className = items[index].className + " up";
                    icons[index].className = icons[index].className + " active";
                    itemwrap.style.transform = "translateZ(-300px) rotateX(" + index * 90 + "deg)";
                    if (playIndexPre != index) {
                        items[playIndexPre].className = items[playIndexPre].className.replace(/\sup/, "");
                        icons[playIndexPre].className = icons[playIndexPre].className.replace(/\sactive/, "");
                    }
                }
            }

            function play() {
                changeItem(playIndex);
                playIndexPre = playIndex;
                playIndex = (playIndex + 1) % 4;
                autoT = setTimeout(arguments.callee, gapTime);
            }

            init();
        })();









        // 個人介紹
        const slider = document.querySelector(".slider input");
        const img = document.querySelector(".person-images .person-img-2");
        const dragLine = document.querySelector(".slider .drag-line");
        slider.oninput = () => {
            let sliderVal = slider.value;
            dragLine.style.left = sliderVal + "%";
            img.style.width = sliderVal + "%";
        }

    </script>


</body>

</html>
