<script src="https://cdnjs.cloudflare.com/ajax/libs/zooming/2.1.1/zooming.min.js"
integrity="sha512-fAw3hLoeRiu86io4KGdDLz/Ed3OiNUMBXamPPmpqswqqJaU2YzbEBbvvr3/OyGPyMl1ZyijMuUI2dSwiDM5RiQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    #latest-projects {
        width: 100%;
        height: auto;
    }

    .img-unicorn {}

    #carousel-unicorn {
        width: 100%;
    }

</style>


<div id="latest-projects">
    <div class="container">
        <div class="h1 text-green mt-5">
            <strong id="worksSince">#Latest Projects</strong>
        </div>
        <div class="h3 text-blue text-center mt-4">
            Unicorn
        </div>
        <div class="h6 text-white text-center mt-2">
            Unicorn adalah website untuk memesan tiket bus, dan customer juga dapat memesan tiket melalui handphone baik
            Android / IOS
        </div>
        <div class="text-center mt-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/unicorn/unicorn.png">
        </div>

    </div>

    <div style="height: 100px;">

    </div>
</div>

<script>
    // Listen to images after DOM content is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        new Zooming({
            // options...
        }).listen('.img-zoomable')
    })
</script>
