@extends('main')
@section('content')

    <section class="PageScreen animating">
        <div class="PageScreenContVideo">
            <video
                class="video_player"
                preload="metadata"
                autoplay=""
                playsinline="true"
                loop=""
                muted=""
                data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
                src={{asset('assets/video/shot_160-1.mp4')}}
                style=""
            >
                <p>Your browser does not support the video tag.</p>
            </video>
        </div>
    </section>

    <section class="PageScreenInfo">
        <div class="container">
            <div class="PageScreenTitle">ABOUT</div>
            <div class="PageScreenTitleWrite">
                LightSaber Animation Studio is looking to bring high end quality
                animation to all viewers with their animated TV shows.
            </div>
            <div class="animating_text">
                We also want to provide educational content and fun. We work across
                many animated genres including Kid shows, Anime, Superheroes and
                Adult swim. We offer something for everyone.
            </div>
        </div>
    </section>

    <section class="aboutUser">
        <div class="container">
            <div class="aboutUserDopTitle">創設者</div>
            <div class="aboutUserTitle">the founders</div>
            <div class="foundersBlock">
                <div class="foundersItem">
                    <div class="foundersImg">
                        <img
                            src={{asset('assets/img/photo_2025-02-05_17-26-18.jpg')}}
                            alt=""
                        />
                    </div>
                    <div class="foundersT">Eran Elhanani</div>
                    <div class="foundersP">Founder of BullPerks and GamesPad.</div>
                </div>
                <div class="foundersItem">
                    <div class="foundersImg">
                        <img src={{asset('assets/img/img.png')}} alt="" />
                    </div>
                    <div class="foundersT">Gal Yosef</div>
                    <div class="foundersP">Co-founder and Art Director.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="animating animatingFooter main samurai">
        <video
            class="video_player"
            preload="metadata"
            autoplay=""
            playsinline="true"
            loop=""
            muted=""
            data-plyr-config="{controls:[play,play-large,current-time,duration,progress,mute,volume,fullscreen],muted:true,storage:false}"
            src={{asset('assets/video/shot_230-1.mp4')}}
            style=""
        >
            <p>Your browser does not support the video tag.</p>
        </video>
    </section>

@endsection


