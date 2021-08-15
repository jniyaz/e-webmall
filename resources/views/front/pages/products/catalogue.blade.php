@extends('layouts.front')

@section('content')
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar mr-50">
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Search Products</h3>
                            <div class="sidebar-search">
                                <form action="#">
                                    <input placeholder="Search Products..." type="text">
                                    <button><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">Filter by Price</h3>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-45">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-categories">
                                <ul>
                                    <li><a href="#">Accessories <span>4</span></a></li>
                                    <li><a href="#">Book <span>9</span></a></li>
                                    <li><a href="#">Clothing <span>5</span> </a></li>
                                    <li><a href="#">Homelife <span>3</span></a></li>
                                    <li><a href="#">Kids & Baby <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-overflow mb-45">
                            <h3 class="sidebar-title">color</h3>
                            <div class="product-color">
                                <ul>
                                    <li class="red">b</li>
                                    <li class="pink">p</li>
                                    <li class="blue">b</li>
                                    <li class="sky">b</li>
                                    <li class="green">y</li>
                                    <li class="purple">g</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">size</h3>
                            <div class="product-size">
                                <ul>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">ml</a></li>
                                    <li><a href="#">lm</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Top rated products</h3>
                            <div class="sidebar-top-rated-all">
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Flying Drone</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Flying Drone</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Flying Drone</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Flying Drone</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-product-wrapper res-xl">
                        <div class="shop-bar-area">
                            <div class="shop-bar pb-60">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>{{ count($products) }}</span> Products found</p>
                                    </div>
                                    <div class="shop-selector">
                                        <label>Sort By : </label>
                                        <select name="select">
                                            <option value="">Default</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop-filter-tab">
                                    <div class="shop-tab nav" role=tablist>
                                        <a class="active" href="#grid-sidebar3" data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="ti-layout-grid4-alt"></i>
                                        </a>
                                        <a href="#grid-sidebar4" data-toggle="tab" role="tab" aria-selected="true">
                                            <i class="ti-menu"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-product-content tab-content">
                                <div id="grid-sidebar3" class="tab-pane fade active show">
                                    <div class="row">
                                        @foreach($products as $product)
                                            <div class="col-md-6 col-xl-4">
                                                    <div class="product-wrapper mb-30">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                                            </a>
                                                            <span>hot</span>
                                                            <div class="product-action">
                                                                <a class="animate-left" title="Wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                                <a class="animate-top" title="Add To Cart" href="#">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                    <i class="pe-7s-look"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h4><a href="#">{{ $product->name }}</a></h4>
                                                            <span>${{ $product->price }}</span>
                                                        </div>
                                                    </div>
                                            </div>
                                       @endforeach
                                    </div>
                                </div>
                                <div id="grid-sidebar4" class="tab-pane fade">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                <div class="product-img list-img-width">
                                                    <a href="#">
                                                        <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                                    </a>
                                                    <span>hot</span>
                                                    <div class="product-action-list-style">
                                                        <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-list">
                                                    <div class="product-list-info">
                                                        <h4><a href="#">{{ $product->name }}</a></h4>
                                                        <span>${{ $product->price }}</span>
                                                        {!! $product->description !!}
                                                    </div>
                                                    <div class="product-list-cart-wishlist">
                                                        <div class="product-list-cart">
                                                            <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                        </div>
                                                        <div class="product-list-wishlist">
                                                            <a class="btn-hover list-btn-wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-style mt-50 text-center">
                        <ul>
                            <li><a href="#"><i class="ti-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">19</a></li>
                            <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
