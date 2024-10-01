@extends("layouts.user")
@section("deal")
<div class="container">
    <!-- title  -->
    <div class="row g-0 gx-5 align-items-end">
        <!-- big ttitle  -->
        <div class="col-lg-6">
            <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Products</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
        </div>
        <!-- the boxes  -->
        <div class="col-lg-6 text-start text-lg-end wow slideInLeft" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                <li class="nav-item me-2">
                    <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Best Seller</a>
                </li>
                <li class="nav-item me-2">
                    <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Hot Deals</a>
                </li>
                <li class="nav-item me-0">
                    <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">New Arrivals</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- content  -->
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-1.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-2.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-3.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-4.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-5.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-6.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-7.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-8.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                </div>
            </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-1.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-2.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-3.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-4.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-5.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-6.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-7.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-8.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                </div>
            </div>
        </div>
        <div id="tab-3" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-1.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-2.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-3.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-4.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-5.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-6.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-7.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="position-relative bg-light overflow-hidden">
                            <img class="{{asset('user')}}/img-fluid w-100" src="{{asset('user')}}/img/product-8.jpg" alt="">
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-body text-decoration-line-through">$29.00</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2">
                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection