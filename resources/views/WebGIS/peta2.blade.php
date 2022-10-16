@extends('WebGIS.Layouts.AppPeta')

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo/logo-lima-jari.png" alt="">
            <!-- <span>WebGIS PS Ketapang</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('index') }}">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{ route('tentang') }}">Tentang PS Ketapang</a></li>
                <li><a class="nav-link scrollto" href="{{ route('galery') }}">Galery</a></li>
                <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                <!-- <li><a class="getstarted scrollto" href="{{ route('peta') }}">Peta</a></li> -->
                <li><a class="getstarted scrollto" href="{{ route('peta2') }}">Peta</a></li>
                <!-- <li><a class="getstarted scrollto" href="{{ route('petaJs') }}">PetaJs</a></li> -->
                <!-- <li><a class="getstarted scrollto" href="{{ route('peta3') }}">Peta 3</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Headers -->
@endsection

@section('content')
<br><br><br>

<main id="main">

    <!--service akun benii-->
    <!--<style>-->
    <!--    .embed-container {-->
    <!--        position: relative;-->
    <!--        padding-bottom: 50%;-->
    <!--        height: 0;-->
    <!--        max-width: 100%;-->
    <!--    }-->

    <!--    .embed-container iframe,-->
    <!--    .embed-container object,-->
    <!--    .embed-container iframe {-->
    <!--        position: absolute;-->
    <!--        top: 0;-->
    <!--        left: 0;-->
    <!--        width: 100%;-->
    <!--        height: 100%;-->
    <!--    }-->

    <!--    small {-->
    <!--        position: absolute;-->
    <!--        z-index: 40;-->
    <!--        bottom: 0;-->
    <!--        margin-bottom: -15px;-->
    <!--    }-->
    <!--</style>-->
    <!--<div class="embed-container"><small><a href="//beni07if.maps.arcgis.com/apps/Embed/index.html?webmap=46dc18914d91487eaad1b1134bd7c3de&extent=106.6646,-3.8056,114.778,0.4214&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light" style="color:#0000FF;text-align:left" target="_blank"></a></small><br><iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WebGIS PS Ketapang" src="//beni07if.maps.arcgis.com/apps/Embed/index.html?webmap=46dc18914d91487eaad1b1134bd7c3de&extent=106.6646,-3.8056,114.778,0.4214&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light"></iframe></div>-->
    <!--end service akun beni-->

    <!--service akun psketapang-->
    <style>
        .embed-container {
            position: relative;
            padding-bottom: 50%;
            height: 0;
            max-width: 100%;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        small {
            position: absolute;
            z-index: 40;
            bottom: 0;
            margin-bottom: -15px;
        }
    </style>
    <div class="embed-container"><small><a href="//aid.maps.arcgis.com/apps/Embed/index.html?webmap=25990a0737674357a99037c69a1a073f&extent=107.5854,-3.7197,115.5779,-0.1297&home=true&zoom=true&scale=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br><iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WebGIS PS Ketapang" src="//aid.maps.arcgis.com/apps/Embed/index.html?webmap=25990a0737674357a99037c69a1a073f&extent=107.5854,-3.7197,115.5779,-0.1297&home=true&zoom=true&previewImage=false&scale=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light"></iframe></div>
    <!--end service akun psketapang-->

    <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aIemFq2ONA3cUjGuypuXHQABdTWMIxE&usp=sharing" width="100%" height="880"></iframe> -->
    <!-- <iframe src="https://maps.arcgis.com/apps/mapviewer/index.html?webmap=de97d7b8e92b4cb489cf530554ce03a8" width="100%" height="880"></iframe> -->

</main><!-- End #mains -->
@endsection