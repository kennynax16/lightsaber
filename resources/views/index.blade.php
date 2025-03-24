@extends('main')
@section('content')

    <section class="main main-video">
        <video
            class="video_player"
            preload="metadata"
            autoplay=""
            playsinline="true"
            loop=""
            muted=""
            data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
            src="{{ asset('assets/video/shot_290_signature-1.mp4') }}"
            style=""
        >
            <p>Your browser does not support the video tag.</p>
        </video>
    </section>

    <section class="animating">
        <div class="container">
            <div class="animating_subtitle">ライトセーバー</div>
            <div class="animating_title">
                animating culture<br />
                for the modern audience
            </div>
            <div class="animating_text">
                We blend our creativity in every frame.
            </div>
        </div>
    </section>

    <section class="ancient_world main">
        <video
            class="video_player"
            preload="metadata"
            autoplay=""
            playsinline="true"
            loop=""
            muted=""
            data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
            src="{{ asset('assets/video/video-jun-05-2024-5-41-31-pm.mp4') }}"
            style=""
        >
            <p>Your browser does not support the video tag.</p>
        </video>
    </section>

    <section class="ancient_world_content">
        <div class="container">
            <div class="ancient_world_title">the ancient world</div>
            <div class="ancient_world_text">
                Haruto Nakamora is searching for his family and an ancient world and
                secret. Along the way he will encounter allies and foes and share
                amazing adventures.
            </div>
            <div class="ancient_world_a">
                <a href="#">Watch Episode</a>
            </div>
        </div>
    </section>

    <section class="white_princess main">
        <video
            class="video_player"
            preload="metadata"
            autoplay=""
            playsinline="true"
            loop=""
            muted=""
            data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
            src={{asset('assets/video/IMG_4220.mov')}}
            style=""
        >
            <p>Your browser does not support the video tag.</p>
        </video>
    </section>

    <section class="white_princess_content">
        <div class="container">
            <div class="ancient_world_title">
                The legend of the white princess
            </div>
            <div class="ancient_world_text">
                Keiko Matsamura tries to follow in the footsteps of her family and
                the white magical circle and together with her friends fight the
                evil forces of the dark magical chamber.
            </div>
            <div class="ancient_world_a">
                <a href="#">Watch Episode</a>
            </div>
        </div>
    </section>

    <section class="samurai main">
        <video
            class="video_player"
            preload="metadata"
            autoplay=""
            playsinline="true"
            loop=""
            muted=""
            data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
            src={{asset('assets/video/Loop4.mp4')}}
            style=""
        >
            <p>Your browser does not support the video tag.</p>
        </video>
    </section>

    <section class="samurai_content">
        <div class="container">
            <div class="ancient_world_title">The Samurai legacy</div>
            <div class="ancient_world_text">
                Ichiro Chikara believes he is the last samurai and will do whatever
                it takes to fulfill his destiny.
            </div>
            <div class="ancient_world_a">
                <a href="#">Watch Episode</a>
            </div>
        </div>
    </section>

    <section class="Slider_game">
        <div class="SliderGame">
            <div class="SliderGameContainer SliderGameContainer1">
                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/858a5377-0ce3-4b59-8021-b1b9586496f6-copy.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">Text</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/b659dcf7-7a4b-4a3c-bdc0-ef6b7a7cd366-copy-2.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">Haruto</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/ca5056ff-b1cd-42b7-9e9d-6eabfbe49b67-copy.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">Text</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/854066ac-3375-4719-8dd9-a57e8d84be30-copy.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">Text</div>
                </div>
            </div>

            <div class="SliderGameItemBtn">
                <div class="SliderGameItemBtnPrev SliderGameItemBtnPrev1">
                    <img
                        src={{asset('assets/img/group-19.png')}}
                        alt=""
                    />
                </div>
                <div class="SliderGameItemBtnNext SliderGameItemBtnNext1">
                    <img
                        src={{asset('assets/img/group-19.png')}}
                        alt=""
                    />
                </div>
            </div>

            <div class="SliderGameContainerTextBefore marquee">
                古代世界 — 古代世界 — 古代世界 — 古代世界 — 古代世界 — 古代世界 —
                古代世界
            </div>

            <div class="SliderGameContainerBgLeft"></div>
            <div class="SliderGameContainerBgRight"></div>

            <div class="elipseSlider"></div>
        </div>
    </section>

    <section class="guardianBG main">
        <img
            src={{asset('assets/img/03-2-2.png')}}
            alt=""
        />
    </section>

    <section class="guardian_content">
        <div class="container">
            <div class="ancient_world_title">The Samurai legacy</div>
            <div class="ancient_world_text">
                Ichiro Chikara believes he is the last samurai and will do whatever
                it takes to fulfill his destiny.
            </div>
            <div class="ancient_world_a">
                <a href="#">Watch Episode</a>
            </div>
        </div>
    </section>

    <section class="Slider_game Slider_game2">
        <div class="SliderGame">
            <div class="SliderGameContainer SliderGameContainer2">
                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/character-04-1.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">CHARACTER</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/character-03-1.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">CHARACTER</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/character-01-1.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">CHARACTER</div>
                </div>

                <div class="SliderGameItem">
                    <img
                        src={{asset('assets/img/character-03-1.png')}}
                        alt=""
                    />
                    <div class="SliderGameItemText">CHARACTER</div>
                </div>
            </div>

            <div class="SliderGameItemBtn">
                <div class="SliderGameItemBtnPrev SliderGameItemBtnPrev2">
                    <img
                        src={{asset('assets/img/group-19.png')}}
                        alt=""
                    />
                </div>
                <div class="SliderGameItemBtnNext SliderGameItemBtnNext2">
                    <img
                        src={{asset('assets/img/group-19.png')}}
                        alt=""
                    />
                </div>
            </div>

            <div class="SliderGameContainerTextBefore marquee">
                古代世界 — 古代世界 — 古代世界 — 古代世界 — 古代世界 — 古代世界 —
                古代世界
            </div>

            <div class="SliderGameContainerBgLeft"></div>
            <div class="SliderGameContainerBgRight"></div>

            <div class="elipseSlider"></div>
        </div>

        <div class="more_show_block">
            <a class="more_shows" href="https://lightsaber.studio/shows/"
            >explore more shows</a
            >
        </div>
    </section>

@endsection
