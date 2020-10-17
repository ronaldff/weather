<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $module_title }}</title>
    @include('layouts.headerlinks')

</head>
<body>
    <div class="container-fluid main-menu">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
               {{-- navbar include --}}
               @include('layouts.header')
            </div>
        </div>
    </div>

    {{-- Main Content --}}
   
    <div class="container-fluid main-header-about">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="information-about">
                    <div class="top-layer-about">
                        <p id="day">
                            My name is <span class="author-name">PIYUSH SHYAM</span> and I am a <span class="author-name">Full Stack Developer</span> worked on both client and server software. In addition to mastering HTML and CSS, I also knows how to: Program a browser (like using JavaScript, jQuery) Program a server (like using PHP, Laravel, Wordpress). I also tackle projects that involve databases, building user-facing websites, or even work with clients during the planning phase of projects and passionate to learn new things because my thinking is to learn new things every day in my life.Putting things into perspective in this way can immediately shift your thinking towards more hopeful
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="{{ asset('images/2.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/3.jpg') }}" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </div>

    {{-- footer include --}}
    @include('layouts.footer')
    
</body>
</html>