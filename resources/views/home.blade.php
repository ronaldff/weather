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
   
    <div class="container-fluid main-header">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
                <div class="main-content">
                    <div class="message"></div>
                    <form class="temp-form">
                        <input type="text" id="cityName" placeholder="Enter your city name" autocomplete="off" />
                        <input type="submit" value="search" id="submitBtn">
                    </form>
                </div>

                <div class="information">
                    <div class="top-layer">
                        <p id="day"><?php echo date('l') ?></p>
                        <p id="today-date"><?php echo date('d M Y') ?></p>
                    </div>
                    <div class="main-layer">
                        <p id="city-name">Get Output Here</p>
                        <div class="middle-layer data-hide">
                            <p id="temp"><span>0</span> <sup>o</sup>C</p>
                            <p id="temp-status"><i class="fa fa-cloud" aria-hidden="true"></i></p>
                        </div>
                        <div id="output"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer include --}}
    @include('layouts.footer')
    
</body>
</html>