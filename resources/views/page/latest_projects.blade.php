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

    .divider {
        height: 2px;
        border-radius: 20px;
        background: #8d8d8d;
        width: 100%;
    }

</style>


<div id="latest-projects">
    <div style="height: 60px;"></div>
    <div class="container">
        <div class="h1 text-green">
            <strong id="worksSince">#Latest Projects</strong>
        </div>
        <div class="h3 text-blue text-center mt-4">
            Unicorn
        </div>
        <div class="h6 text-white text-center mt-2">
            Unicorn is a website for ordering bus tickets, and customers can also order tickets via smartphone either
            Android / IOS
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/unicorn/unicorn.png">
        </div>

        <div class="divider"></div>

        <div class="h3 text-blue text-center mt-4">
            Elite Car Rental
        </div>
        <div class="h6 text-white text-center mt-2">
            Elite Car Rental is a website for renting vehicles, and customers can also order vehicles through
            smartphone either
            Android / IOS
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/elite/elite.png">
        </div>

        <div class="divider"></div>

        <div class="h3 text-blue text-center mt-4">
            SIP Express
        </div>
        <div class="h6 text-white text-center mt-2">
            SIP Express is a website for tracking delivery of goods based on the receipt number received by the customer
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/sipexpress/sipexpress.png">
        </div>


        <div class="divider"></div>

        <div class="h3 text-blue text-center mt-4">
            SIP Express Kurir
        </div>
        <div class="h6 text-white text-center mt-2">
            SIP Express Kurir is a mobile application for couriers that is used when delivering goods to customers
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable"
                src="{{ URL::to('/') }}/images/sipexpresskurir/sipexpresskurir.png">
        </div>

        <div class="divider"></div>

        <div class="h3 text-blue text-center mt-4">
            Inline
        </div>
        <div class="h6 text-white text-center mt-2">
            Inline is a mobile application for customers B2b Indorent to get driver like gojek app
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/inline/inline.png">
        </div>

        <div class="divider"></div>

        <div class="h6 text-white text-center mt-4">
            There are more projects that i've created, to see others please email me
            <a href="edyprasetyo151093@gmail.com">edyprasetyo151093@gmail.com</a>
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
