@extends('layout.app')

@section('content')

<header id="banner">
    {{-- Banner Header Item --}}
    <div class="banner-items">
        <div class="banner-slider">
            <a href="#">
                <img class="d-block w-100" src="{{ asset('/image/slide1.jpg') }}" alt="First slide"  height="800">
                <div class="banner-info">
                    <h1 class="banner-header">New Plants</h1>
                    <p class="banner-desc">Lorem Ipsum Dolor Si Amet</p>
                    <button class="btn btn-outline-success btn-banner">See Product</button>
                </div>
            </a>
           
        </div>
        <div class="banner-slider">
            <a href="#">
                <img class="d-block w-100" src="{{ asset('/image/slide2.jpg') }}" alt="Second slide" height="800">
                <div class="banner-info">
                    <h1 class="banner-header">Best Plants</h1>
                    <p class="banner-desc">Lorem Ipsum Dolor Si Amet</p>
                    <button class="btn btn-outline-success btn-banner">See Product</button>
                </div>
            </a>
           
        </div>
        <div class="banner-slider">
            <a href="#">
                <img class="d-block w-100" src="{{ asset('/image/slide3.jpg') }}" alt="Third slide" height="800">
            </a>
            <div class="banner-info">
                <h1 class="banner-header">Discover More</h1>
                <p class="banner-desc">Lorem Ipsum Dolor Si Amet</p>
                <button class="btn btn-outline-success btn-banner">See Product</button>
            </div>
        </div>
        
    </div>
    
</header>

<main class="main-section">
    {{-- Collection --}}
    <section class="product-container">
        <div class="row box-collection">
            <div class="col-md-6 col-sm-12 mb-sm-4">
                <a href="#">
                    <img src="{{ asset('/image/banner1.jpg') }}" alt="" class="img-fluid">
                </a>
                <div class="box-collect-info">
                    <p class="box-desc">Lorem Ipsum</p>
                    <h2 class="box-header">New Collection</h2>
                    <button class="btn btn-outline-success btn-block btn-collect">See Product</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="#">
                    <img src="{{ asset('/image/banner2.jpg') }}" alt="" class="img-fluid">
                </a>
                <div class="box-collect-info">
                    <p class="box-desc">Lorem Ipsum</p>
                    <h2 class="box-header">Popular Collection</h2>
                    <button class="btn btn-outline-success btn-block btn-collect">See Product</button>
                </div>
            </div>
        </div>
    </section>
    {{-- List Product --}}
    <section class="product-container">
        <div class="product-header">
            <div class="row">
                <div class="col-md-6">
                    <h2>Product List</h2>
                </div>
                <div class="col-md-6">
                    <form action="{{route('search')}}" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control mr-2" name="search_product" placeholder="Search Product...">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit" title="Search Product">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-lg-12">
            <form  action="{{route('sort')}}" method="GET">
                <div class="form-group row">
                    <label class="col-md-1 py-2">Sort By: </label>
                    <div class="col-md-4">
                        <select class="form-control" name="sort_price" onchange="this.form.submit()">
                            <option>
                                Select Price
                            </option>
                            <option value="low">
                                Low to High
                            </option>
                            <option value="high">
                                High to Low
                            </option>
                        </select>
                    </div>
                   
                </div>
            </form>
        </div>
        <div class="row product-section">
            
            @for($i=0; $i<$product_length;$i++)
                @if (!empty($product[$i]))
                  
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset('/image/product-image.jpg') }}" alt="">
                                <div class="product-info">
                                    <button class="btn btn-success rounded-circle"><i class="fas fa-heart"></i></button>
                                    <button class="btn btn-success rounded-circle"><i class="fas fa-shopping-cart"></i></button>
                                    <button id="detail-product" class="btn btn-success rounded-circle" data-toggle="modal" data-target="#detailModal"
                                    data-name="{{$product[$i]['name']}}"
                                    data-detail="{{$product[$i]['detail']}}"
                                    data-price=" Rp. {{number_format($product[$i]['price'],2)}}"><i class="fas fa-info-circle"></i></button>
                                </div>
                            </div>
                            <div class="product-details  text-center">
                                <div class="product-name">
                                    {{$product[$i]['name']}}
                                </div>
                                <div class="product-price">
                                    Rp. {{number_format($product[$i]['price'],2)}}
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    
                @endif
            @endfor
        </div>

        {{-- Modal Detail --}}
        <div id="detailModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6"> <img class="img-fluid w-100" src="{{ asset('/image/product-image.jpg') }}" alt=""></div>
                        <div class="col-md-6">  
                            <div id="name" class="py-1"></div>
                            <div id="detail" class="py-1"></div>
                            <div id="price" class="py-1"></div>
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
          
            </div>
        </div>
    </section>
   
</main>

@endsection