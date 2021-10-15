<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- Owl-Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom CSS file -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>


    <!-- Start Header -->

    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50">Jordan Calderon 430-985 Eleifend St. Duluth Washington 92611(427) 930-5255</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-start border-end text-dark" style="text-decoration: none;">Login</a>
                <a href="#" class="px-3 border-end text-dark" style="text-decoration: none;">Wishlist (0)</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mobile Shopee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-rale">
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="fon-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Primary Navigation -->
    </header>

    <!-- Start Header -->

    <!-- Start Main Site -->
    <main id="main-site">
        <!-- carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/assets/Banner1.png" alt="Banner1">
                </div>
                <div class="item">
                    <img src="/assets/Banner2.png" alt="Banner2">
                </div>
                <div class="item">
                    <img src="/assets/Banner1.png" alt="Banner1">
                </div>
            </div>
        </section>
        <!-- carousel -->

        <!-- top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Top Sale</h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/1.png" alt="Product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/2.png" alt="Product2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/3.png" alt="Product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/4.png" alt="Product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/5.png" alt="Product5" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/3.png" alt="Product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/4.png" alt="Product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- owl carousel -->
            </div>
        </section>
        <!-- top sale -->

        <!-- special price -->
        <section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-end font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
                    <button class="btn" data-filter=".Apple">Apple</button>
                    <button class="btn" data-filter=".Samsung">Samsung</button>
                    <button class="btn" data-filter=".Redmi">Redmi</button>
                </div>
                <div class="grid">
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/13.png" alt="Product13" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple Iphone 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/11.png" alt="Product13" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Galaxy 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Redmi border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/3.png" alt="Product3" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 7 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/14.png" alt="Product14" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple Iphone 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/12.png" alt="Product12" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Galaxy 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/1.png" alt="Product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Galaxy 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Redmi border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/2.png" alt="Product2" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 7 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Redmi border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/8.png" alt="Product8" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 7 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/15.png" alt="Product15" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple Iphone 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Redmi border">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="/assets/products/10.png" alt="Product10" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 7 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- special price -->

        <!-- banner ads -->
        <section id="banner_adds">
            <div class="container py-5">
                <img src="/assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
                <img src="/assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
            </div>
        </section>
        <!-- banner ads -->

        <!-- new phones -->
        <section id="new-phones">
            <div class="container">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/1.png" alt="Product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/2.png" alt="Product2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/3.png" alt="Product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/4.png" alt="Product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/5.png" alt="Product5" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/3.png" alt="Product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/4.png" alt="Product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Redmi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- owl carousel -->
            </div>
        </section>
        <!-- new phones -->

        <!-- Latest Blog -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-font-size-16">Upcoming Mobiles</h5>
                            <img src="/assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quod vero nostrum quasi sequi minima veniam iusto itaque aliquid laudantium?</p>
                            <a href="#" class="color-second text-left">Go Somewhere</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-font-size-16">Upcoming Mobiles</h5>
                            <img src="/assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quod vero nostrum quasi sequi minima veniam iusto itaque aliquid laudantium?</p>
                            <a href="#" class="color-second text-left">Go Somewhere</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-font-size-16">Upcoming Mobiles</h5>
                            <img src="/assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quod vero nostrum quasi sequi minima veniam iusto itaque aliquid laudantium?</p>
                            <a href="#" class="color-second text-left">Go Somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Blog -->



    </main>
    <!-- Start Main Site -->

    <!-- start footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus dignissimos aliquam totam assumenda, velit maxime quisquam sunt vitae! Quibusdam doloremque animi est at nesciunt molestias impedit tempore fugiat esse velit?</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newslatter</h4>
                    <form action="#" class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" name="" id="">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Term & Condition</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Older History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslater</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rubik font-size-14">&copy; Copyright 2021. Design By <a href="#" class="color-second">Lalu Jaya Satria Permana</a></p>
    </div>
    <!-- start footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- owl carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- isotop jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom javascript -->
    <script src="./index.js"></script>
</body>

</html>