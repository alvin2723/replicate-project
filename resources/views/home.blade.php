@extends('layout.app')

@section('content')

<header id="banner">
    {{-- Banner Header Item --}}
    <div class="banner-items">
        <div class="banner-slider">
            <a href="https://www.latihid.com/courses/category/LatihIDModul?_ga=2.89604959.574234990.1596349825-860036232.1593510817">
                <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5e7b5d2f46049ebbc421c67a/5f265df315da6c63b7b28769_web%20banner%20pc.png" alt="First slide">
            </a>
        </div>
        <div class="banner-slider">
            <a href="https://www.latihid.com/p/lit-17">
                <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5ffc6646e6ae96a859472787_Copy%20of%20Banner%20LIT%2017.png" alt="Second slide">
            </a>
        </div>
        <div class="banner-slider">
            <a href="https://www.latihid.com/p/peta">
                <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f60287bb9d5a99ae8ab3867_Banner%20web%20PETA%20Desktop-p-2600.png" alt="Third slide">
            </a>
        </div>
        <div class="banner-slider">
            <a href="https://www.latihid.com/courses/category/LatihIDModul">
                <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f5f3a90e55ab0fd5d9ce4c7_Banner%20Modul%20Desktop-p-2600.png" alt="Fourth slide">
            </a>
        </div>
    </div>
    
</header>

<main class="main-section">
    {{-- Benefit Section --}}
    <section id="benefit" class="course-container">
        <div class="white-section benefit-section">
            <h1 class="benefit-top-header">Kenapa memilih LatihID?</h1>
            <div class="row mt-5">  
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_1.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Fokus pada UMKM</h3>
                    <p class="benefit-desc">Kontent Berfokus untuk Pengembangan Bisnis UMKM Indonesia</p>
                </div>
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_2.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Bebas Akses Dimana Saja</h3>
                    <p class="benefit-desc">Modul Pelatihan Dapat Diakses dari Perangkat Apa Saja Melihat Website</p>
                </div>
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Akses Seumur Hidup</h3>
                    <p class="benefit-desc">Akses Seumur Hidup dan Satu Login untuk Semua Kursus Pelatihan yang Ada</p>
                </div>
            </div>
            <div class="row mt-5">  
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_4.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Akses Kapan Saja</h3>
                    <p class="benefit-desc">Akses 24/7 untuk Semua Modul Pelatihan</p>
                </div>
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_5.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Akses Gratis</h3>
                    <p class="benefit-desc">Akses Gratis untuk Semua Modul Pelatihan</p>
                </div>
                <div class="col-md-4">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_6.svg" alt="" class="benefit-image">
                    <h3 class="benefit-header">Konten yang Praktis</h3>
                    <p class="benefit-desc">Pelatihan Praktis yang Dapat Langsung Diterapkan</p>
                </div>
            </div>
        </div>
    </section>

    @for ($i=0; $i < $course_length; $i++)
        
        @switch($course_data[$i]['category-course'])

            {{-- Popular Course --}}
            @case('Kelas Gratis Populer')
                
                <section id="popular-course" class="course-container">
                    <div class="blue-section course-section">
                        <div class="course-block">
                            <div class="course-category">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-Modul.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                </div>
                            </div>
                            <div class="popular-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                
                            </div>
                        </div>
                    </div>
                </section>
            @break

            {{-- New Course --}}
            @case('Kelas LatihID Terbaru')
                
                <section id="new-course" class="course-container">
                    <div class="grey-section course-section">
                        <div class="course-block row">
                            <div class="col-lg-4 col-md-3 course-category1">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <p class="category-content">{{$course_data[$i]['short-desc']}}</p>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-9 mutiple-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                
                            </div>
                        </div>
                    
                    </div>
                </section>
            @break
            
            {{-- Expert Course --}}
            @case('Expert Class')
                
                <section id="expert-course" class="course-container">
                    <div class="red-section course-section">
                        <div class="course-block">
                            <div class="course-category">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-Modul.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Kelas Lainnya</a>
                                </div>
                            </div>
                            <div class="expert-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            
                            </div>
                        </div>
                    </div>
                </section>
            @break

            {{-- Latih Course --}}
            @case('LatihID')
                
                <section id="latih-course" class="course-container" style="padding-left:12.3%; padding-right:12.3%">
                    <div class="row">
                        {{-- List LatihID --}}
                        @for ($j=0; $j< count($course_data[$i]['list-latihid']); $j++)
                            
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blue-section course-section">
                                    <div class="course-block">
                                        <div class="latih-course-desc">
                                            <h1 class="latih-course-header">{{$course_data[$i]['list-latihid'][$j]['latihid-title']}}</h1>
                                            <a href="{{$course_data[$i]['list-latihid'][$j]['latihid-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                        </div>
                                        <div class="latih-class-items mt-3">
                                            {{-- Course Card Item --}}
                                            @for($x=0; $x< count($course_data[$i]['list-latihid'][$j]['list-course']); $x++)
                                                <div class="col-lg-12">
                                                    <div class="course-card">
                                                        <div class="course-card-image">
                                                            <a href="{{$course_data[$i]['list-latihid'][$j]['list-course'][$x]['url']}}">
                                                                <img src="{{$course_data[$i]['list-latihid'][$j]['list-course'][$x]['img-url']}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="course-card-desc">
                                                            <a href="{{$course_data[$i]['list-latihid'][$j]['list-course'][$x]['url']}}">
                                                                {{$course_data[$i]['list-latihid'][$j]['list-course'][$x]['title']}}
                                                            </a>
                                                            <p class="course-price">{{$course_data[$i]['list-latihid'][$j]['list-course'][$x]['price']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endfor

                    </div>
                
                </section>

            @break

            {{-- Mulai Bisnis Course --}}
            @case('Kelas Memulai Bisnis')
                
                <section id="bisnis-course" class="course-container">
                    <div class="grey-section course-section">
                        <div class="course-block row">
                            <div class="col-lg-4 col-md-3 course-category1">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <p class="category-content">{{$course_data[$i]['short-desc']}}</p>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-9 mutiple-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                
                            </div>
                        </div>
                    
                    </div>
                </section>

            @break

            {{-- Pemasaran Course --}}
            @case('Kelas Pemasaran')
                
                <section id="pemasaran-course" class="course-container">
                    <div class="grey-section course-section">
                        <div class="course-block row">
                            <div class="col-lg-4 col-md-3 course-category1">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <p class="category-content">{{$course_data[$i]['short-desc']}}</p>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-9 mutiple-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                
                            </div>
                        </div>
                    
                    </div>
                </section>
            @break

            {{-- Manajemen Course --}}
            @case('Kelas Manajemen Operasional')
                 
                <section id="manajemen-course" class="course-container">
                    <div class="grey-section course-section">
                        <div class="course-block row">
                            <div class="col-lg-4 col-md-3 course-category1">
                                <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" alt="">
                                <div class="category-desc">
                                    <h2 class="category-header">
                                        {{$course_data[$i]['category-course']}}
                                    </h2>
                                    <p class="category-content">{{$course_data[$i]['short-desc']}}</p>
                                    <a href="{{$course_data[$i]['category-url']}}" type="button" class="btn btn-primary btn-lg">Lihat Modul Lainnya</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-9 mutiple-class-items">
                                {{-- Course Item Card --}}
                                @for ($j=0; $j< count($course_data[$i]['list-course']); $j++)
                                    <div class="col-lg-12">
                                        <div class="course-card">
                                            <div class="course-card-image">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    <img src="{{$course_data[$i]['list-course'][$j]['img-url']}}" alt="">
                                                </a>
                                            </div>
                                            <div class="course-card-desc">
                                                <a href="{{$course_data[$i]['list-course'][$j]['url']}}">
                                                    {{$course_data[$i]['list-course'][$j]['title']}}
                                                </a>
                                                <p class="course-price">{{$course_data[$i]['list-course'][$j]['price']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                
                            </div>
                        </div>
                    
                    </div>
                </section>
            @break

        @endswitch

    @endfor
       
</main>

@endsection