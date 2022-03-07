<script src="https://cdnjs.cloudflare.com/ajax/libs/zooming/2.1.1/zooming.min.js"
integrity="sha512-fAw3hLoeRiu86io4KGdDLz/Ed3OiNUMBXamPPmpqswqqJaU2YzbEBbvvr3/OyGPyMl1ZyijMuUI2dSwiDM5RiQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    #latest-projects {
        width: 100%;
        height: auto;
    }

    .img-unicorn {
        width: 75%;
    }

    #carousel-unicorn {
        width: 100%;
    }

    .divider {
        height: 2px;
        border-radius: 20px;
        background: #8d8d8d;
        width: 100%;
    }

    @@media (max-width: 575.98px) {
        .img-unicorn {
            width: 100%;
        }
    }

</style>


<div id="latest-projects">
    <div style="height: 60px;"></div>
    <div class="container">
        <div class="h1 text-green">
            <strong id="worksSince">#Latest Projects</strong>
        </div>
        <div data-aos="fade-left" class="h3 text-blue text-center mt-4">
            Unicorn
        </div>
        <div data-aos="fade-left" class="h6 text-white text-center mt-3">
            Unicorn is an application to booking bus ticket, customers also can access this application by these three
            platform web,ios, android.

            For the admin, they have their own panel on a website, so they can control also can see the percentage of
            available ticket, fleet, and every branch.
        </div>
        <div data-aos="fade-left" class="text-center mt-3 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/unicorn/unicorn.png">
        </div>

        <div class="divider"></div>

        <div data-aos="fade-right" class="h3 text-blue text-center mt-4">
            Elite Car Rental
        </div>
        <div data-aos="fade-right" class="h6 text-white text-center mt-3">
            Elite car rental is a website to rent several kind of vehicle, customers could access this apps wheter using
            android or ios devices
        </div>
        <div data-aos="fade-right" class="text-center mt-3 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/elite/elite.png">
        </div>

        <div class="divider"></div>

        <div data-aos="fade-left" class="h3 text-blue text-center mt-4">
            SIP Express
        </div>
        <div data-aos="fade-left" class="h6 text-white text-center mt-3">
            Sip express is a website to tracking delivery goods like document or etc based on shipped number which
            received by customers
        </div>
        <div data-aos="fade-left" class="text-center mt-3 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/sipexpress/sipexpress.png">
        </div>


        <div class="divider"></div>

        <div data-aos="fade-right" class="h3 text-blue text-center mt-4">
            SIP Express Kurir
        </div>
        <div data-aos="fade-right" class="h6 text-white text-center mt-3">
            Sip express courier is a mobile apps for courrier when they send the goods to the customers
        </div>
        <div data-aos="fade-right" class="text-center mt-3 mb-4">
            <img class="img-unicorn img-fluid img-zoomable"
                src="{{ URL::to('/') }}/images/sipexpresskurir/sipexpresskurir.png">
        </div>

        <div class="divider"></div>

        <div data-aos="fade-left" class="h3 text-blue text-center mt-4">
            Inline
        </div>
        <div data-aos="fade-left" class="h6 text-white text-center mt-3">
            Inline is a mobile application platform to booking a vehicle, this application could be use for partnership
            company with indorent
        </div>
        <div data-aos="fade-left" class="text-center mt-3 mb-4">
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
