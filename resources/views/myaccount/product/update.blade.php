@extends('layout.app')

@section('content')
    <section class="s-space-bottom-full bg-accent-shadow-body">

        <div class="container">
            <div class="row">
                @include('partials.accountmenu')
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">

                        <div role="tabpanel" class="tab-pane fade active show" id="my-add">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="gradient-wrapper item-mb border-none">
                                        <div class="gradient-title">
                                            <div class="row no-gutters">
                                                <div class="col-4 text-center-mb">
                                                    <h2 class="mb10--mb">My Ad List</h2>
                                                </div>
                                                <div class="col-8">
                                                    <div class="layout-switcher float-none-mb text-center-mb mb10--mb">
                                                        <ul>
                                                            <li>
                                                                <div class="page-controls-sorting">
                                                                    <div class="dropdown">
                                                                        <button class="btn sorting-btn dropdown-toggle"
                                                                            type="button" data-toggle="dropdown">Sort
                                                                            By<i class="fa fa-sort"
                                                                                aria-hidden="true"></i></button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="#">Date</a></li>
                                                                            <li><a href="#">Best Sale</a></li>
                                                                            <li><a href="#">Rating</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="active"><a href="#"
                                                                    data-type="category-list-layout3"
                                                                    class="product-view-trigger"><i
                                                                        class="fa fa-th-large"></i></a></li>
                                                            <li><a href="#" data-type="category-grid-layout3"
                                                                    class="product-view-trigger"><i
                                                                        class="fa fa-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="category-view" class="category-list-layout3 gradient-padding zoom-gallery">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product1.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign active" data-tips="Featured">
                                                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="title-ctg">Clothing</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product1.png" class="elv-zoom"
                                                                            data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout1.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png" alt="symbol"
                                                                        class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product1.html">Cotton
                                                                    T-Shirt</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product1.html">Men's
                                                                    Basic Cotton T-Shirt</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$10</div>
                                                            <a href="single-product-layout1.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product2.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign active" data-tips="Featured">
                                                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="title-ctg">Electronics</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product2.png" class="elv-zoom"
                                                                            data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout2.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png"
                                                                        alt="symbol" class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Patriot
                                                                    Phone</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">HTC
                                                                    Desire Patriot Mobile Smart Phone</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$250</div>
                                                            <a href="single-product-layout2.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product15.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign" data-tips="Featured"> <i
                                                                        class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                <div class="title-ctg">Clothing</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product15.png"
                                                                            class="elv-zoom" data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout3.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png"
                                                                        alt="symbol" class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">LED-Lit
                                                                    Monitor</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Samsung
                                                                    U28E590D 28-Inch UHD LED-Lit Monitor</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$393</div>
                                                            <a href="single-product-layout3.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product18.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign" data-tips="Featured"> <i
                                                                        class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                <div class="title-ctg">Clothing</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product18.png"
                                                                            class="elv-zoom" data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout1.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png"
                                                                        alt="symbol" class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Solid
                                                                    Table Lamp</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Minimalist
                                                                    Solid Wood Table Lamp</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$79</div>
                                                            <a href="single-product-layout1.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product19.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign" data-tips="Featured"> <i
                                                                        class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                <div class="title-ctg">Clothing</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product19.png"
                                                                            class="elv-zoom" data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout2.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png"
                                                                        alt="symbol" class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product1.html">Stylish
                                                                    Bracelet</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product1.html">Bracelet
                                                                    for Outdoor Camping Survival Stylish Bracelet</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$42</div>
                                                            <a href="single-product-layout2.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="product-box item-mb zoom-gallery">
                                                        <div class="item-mask-wrapper">
                                                            <div class="item-mask secondary-bg-box"><img
                                                                    src="img/product/product20.png" alt="categories"
                                                                    class="img-fluid">
                                                                <div class="trending-sign" data-tips="Featured"> <i
                                                                        class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                <div class="title-ctg">Clothing</div>
                                                                <ul class="info-link">
                                                                    <li><a href="img/product/product20.png"
                                                                            class="elv-zoom" data-fancybox-group="gallery"
                                                                            title="Title Here"><i class="fa fa-arrows-alt"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="single-product-layout3.html"><i
                                                                                class="fa fa-link"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                                <div class="symbol-featured"><img
                                                                        src="img/banner/symbol-featured.png"
                                                                        alt="symbol" class="img-fluid"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title-ctg">Clothing</div>
                                                            <h3 class="short-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Foldable
                                                                    Bag</a></h3>
                                                            <h3 class="long-title"><a
                                                                    href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Foldable
                                                                    Waterproof Carry Storage Bag with Zipper</a></h3>
                                                            <ul class="upload-info">
                                                                <li class="date"><i class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>07 Mar, 2017</li>
                                                                <li class="place"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>Sydney, Australia</li>
                                                                <li class="tag-ctg"><i class="fa fa-tag"
                                                                        aria-hidden="true"></i>Clothing</li>
                                                            </ul>
                                                            <p>Eimply dummy text of the printing and typesetting industrym
                                                                has been the industry's standard dummy.</p>
                                                            <div class="price">$38</div>
                                                            <a href="single-product-layout3.html"
                                                                class="product-details-btn">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gradient-wrapper mb--xs mb-30 border-none">
                                        <ul class="cp-pagination">
                                            <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"
                                                        aria-hidden="true"></i>Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#">Next<i class="fa fa-angle-double-right"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
