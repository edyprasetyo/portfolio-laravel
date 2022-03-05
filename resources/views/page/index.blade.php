@extends('layout.layout')

@section('content')

    <style>
        #index {
            padding-top: 80px;
            position: relative;
            width: 100%;
            min-height: 100%;
            height: auto;
        }

        .index-clip {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #0ee7b7;
            background: linear-gradient(90deg, #2b72b4 0%, #2b72b4 100%);
            clip-path: polygon(0 50%, 0% 100%, 100% 100%);
        }

        .index-container {
            position: relative;
        }

        .text-green {
            color: #0ee7b7;
        }

        .text-blue {
            color: #2897ff;
        }

        @@media (max-width: 575.98px) {
            #index {
                padding-top: 70px;
            }

            .index-clip {
                display: none;
            }

        }

    </style>

    <div id="index">
        <div class="index-clip">
        </div>
        <div class="container index-container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid img-profile" src="{{ URL::to('/') }}/images/profile_1.png" />
                </div>
                <div class="col-lg-6">
                    <div class="h1 text-green mb-2">
                        <strong>Hello</strong>
                    </div>
                    <div class="h5 text-green mb-3">
                        I'm Edy Prasetyo - <strong class="text-blue">Full Stack Developer</strong>
                    </div>

                    @include('page.index_code')
                </div>

            </div>
        </div>
    </div>

    <script>
        var ageDifMs = Date.now() - new Date(2016, 1, 11, 0, 0, 0, 0);;
        var ageDate = new Date(ageDifMs);
        $('#worksSince').html('#' + Math.abs(ageDate.getUTCFullYear() - 1970));
    </script>

    @include('page.skills')

@stop
