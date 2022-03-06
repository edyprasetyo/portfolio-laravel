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
            Unicorn adalah website untuk memesan tiket bus, dan customer juga dapat memesan tiket melalui handphone baik
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
            Elite Car Rental adalah website untuk menyewa kendaraan, dan customer juga dapat memesan kendaraan melalui
            handphone baik
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
            SIP Express adalah website untuk tracking pengiriman barang berdasarkan nomor resi yang diterima customer
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable" src="{{ URL::to('/') }}/images/sipexpress/sipexpress.png">
        </div>


        <div class="divider"></div>

        <div class="h3 text-blue text-center mt-4">
            SIP Express Kurir
        </div>
        <div class="h6 text-white text-center mt-2">
            SIP Express Kurir adalah aplikasi mobile untuk kurir yang digunakan saat mengantar barang ke customer
        </div>
        <div class="text-center mt-2 mb-4">
            <img class="img-unicorn img-fluid img-zoomable"
                src="{{ URL::to('/') }}/images/sipexpresskurir/sipexpresskurir.png">
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
