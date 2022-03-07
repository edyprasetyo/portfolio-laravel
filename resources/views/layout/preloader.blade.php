<div class="pre-loader">
    <div class="sk-fading-circle">
        <img id="imgPreloader" class="rotate" src="{{ URL::to('/') }}/images/logo.png" />
    </div>
</div>

<style>
    #imgPreloader {
        width: 45px;
    }

    @@media only screen and (max-width: 600px) {
        #imgPreloader {
            width: 45px;
        }
    }

    .pre-loader {
        background: rgba(17, 67, 88, 0.95);
        position: fixed;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 9999999;
    }

    .sk-fading-circle {
        margin: 100px auto;
        width: 150px;
        height: 150px;
        position: relative;
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
        top: 25%;
    }

    .sk-fading-circle .sk-circle {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
    }

    .sk-fading-circle .sk-circle:before {
        content: '';
        display: block;
        margin: 0 auto;
        width: 10%;
        height: 10%;
        background-color: #fff;
        border-radius: 100%;
        -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
        animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
    }

    .sk-fading-circle .sk-circle2 {
        -webkit-transform: rotate(30deg);
        -ms-transform: rotate(30deg);
        transform: rotate(30deg);
    }

    .sk-fading-circle .sk-circle3 {
        -webkit-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
        transform: rotate(60deg);
    }

    .sk-fading-circle .sk-circle4 {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .sk-fading-circle .sk-circle5 {
        -webkit-transform: rotate(120deg);
        -ms-transform: rotate(120deg);
        transform: rotate(120deg);
    }

    .sk-fading-circle .sk-circle6 {
        -webkit-transform: rotate(150deg);
        -ms-transform: rotate(150deg);
        transform: rotate(150deg);
    }

    .sk-fading-circle .sk-circle7 {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .sk-fading-circle .sk-circle8 {
        -webkit-transform: rotate(210deg);
        -ms-transform: rotate(210deg);
        transform: rotate(210deg);
    }

    .sk-fading-circle .sk-circle9 {
        -webkit-transform: rotate(240deg);
        -ms-transform: rotate(240deg);
        transform: rotate(240deg);
    }

    .sk-fading-circle .sk-circle10 {
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .sk-fading-circle .sk-circle11 {
        -webkit-transform: rotate(300deg);
        -ms-transform: rotate(300deg);
        transform: rotate(300deg);
    }

    .sk-fading-circle .sk-circle12 {
        -webkit-transform: rotate(330deg);
        -ms-transform: rotate(330deg);
        transform: rotate(330deg);
    }

    .sk-fading-circle .sk-circle2:before {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
    }

    .sk-fading-circle .sk-circle3:before {
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }

    .sk-fading-circle .sk-circle4:before {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }

    .sk-fading-circle .sk-circle5:before {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
    }

    .sk-fading-circle .sk-circle6:before {
        -webkit-animation-delay: -0.7s;
        animation-delay: -0.7s;
    }

    .sk-fading-circle .sk-circle7:before {
        -webkit-animation-delay: -0.6s;
        animation-delay: -0.6s;
    }

    .sk-fading-circle .sk-circle8:before {
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }

    .sk-fading-circle .sk-circle9:before {
        -webkit-animation-delay: -0.4s;
        animation-delay: -0.4s;
    }

    .sk-fading-circle .sk-circle10:before {
        -webkit-animation-delay: -0.3s;
        animation-delay: -0.3s;
    }

    .sk-fading-circle .sk-circle11:before {
        -webkit-animation-delay: -0.2s;
        animation-delay: -0.2s;
    }

    .sk-fading-circle .sk-circle12:before {
        -webkit-animation-delay: -0.1s;
        animation-delay: -0.1s;
    }

    .rotate {
        animation: rotation 1s infinite linear;
    }

    @@keyframes rotation {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(359deg);
        }
    }

    @@-webkit-keyframes sk-circleFadeDelay {

        0%,
        39%,
        100% {
            opacity: 0;
        }

        40% {
            opacity: 1;
        }
    }

    @@keyframes sk-circleFadeDelay {

        0%,
        39%,
        100% {
            opacity: 0;
        }

        40% {
            opacity: 1;
        }
    }

</style>
<script>
    (function($) {
        'use strict';
        $(window).on('load', function() {
            if ($(".pre-loader").length > 0) {
                setTimeout(() => {
                    $(".pre-loader").hide();
                }, 1500);

            }
        });
    })(jQuery)
</script>