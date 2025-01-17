@extends('asm.layout')
@section('title', 'Home')
@section('content')
    <!-- slider  -->
    <div class="row pt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/2/4/240531_-_dc27_-_main_poster_1_.jpg"
                        class="d-block w-100 rounded-3" alt="..."
                        style="height: 300px ;object-fit: cover; object-position: center;">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2023/4/17/conanmovie-1681736137190248042145.jpg"
                        class="d-block w-100 rounded-3" alt="..."
                        style="height: 300px ;object-fit: cover; object-position: center;">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.tgdd.vn/Files/2021/06/02/1356902/danh-sach-nhung-vu-an-hay-nhat-cua-phim-tham-tu-lung-danh-conan-202301181124070670.jpg"
                        class="d-block w-100 rounded-3" alt="..."
                        style="height: 300px ;object-fit: cover; object-position: center;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!-- danh muc  -->
    <!-- <div class="">danh mục</div> -->
    <!-- san pham moi  -->
    <div class="row">
        <h2 class="form-control-plaintext">Sản phẩm mới nhất</h2>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiIkQGmny4eVXFF_Nms1zvJYRr2CVx9s7C5zliQEICSXVMYl7g7xJlgxIQHRM5CzpE9_bv1_bBi6zCJlG-dBeOV0WmmjnOKEn17GeBZ_BheYJtdd2ifX6lv5hvFwTCdsLZ7hpZ7t7RPOVE/s1600/1+%25281%2529.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://product.hstatic.net/200000343865/product/102_359d8e4410484914b3ccee5831926b14_master.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">105.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://cf.shopee.vn/file/cf00486dac7282a142832bf7da29ac1d"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">109.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://www.ozsach.com/600-large_default/conan-tuyen-tap-dac-biet-amuro-toru-selection.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://down-vn.img.susercontent.com/file/d6385b78192a6e5bd80fe0eb30fa1e83"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://image.voh.com.vn/voh/image/2024/07/08/conan-rewrite-1-172115.jpg?t=o"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://image.voh.com.vn/voh/image/2024/07/08/conan-rewrite-2-172059.jpg?t=o"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://product.hstatic.net/200000343865/product/102_359d8e4410484914b3ccee5831926b14_master.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <h2 class="form-control-plaintext" class="center">Sản phẩm bán chạy</h2>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://product.hstatic.net/200000343865/product/102_359d8e4410484914b3ccee5831926b14_master.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEio63wixRHqoc22v1_gEAw8RmwhalOUBO1N7efneNb5Zrii8weuF3y_dqJe_o3U1I3_G7DCBb97x1GI-ByhKbIEMQ7L1nons4Lrn4kwpDIpbLC5sYCx2uS7dPqdqreLfYjlTg0hSXJd79E/s1600/3+%25281%2529.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://upload.wikimedia.org/wikipedia/vi/0/09/Case_Closed_DVD_01.jpg"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-3">
            <div class="box bg-light rounded-4 border" style="height: 400px;">
                <a href="#" class="link-underline-light text-black">
                    <div class="img d-flex justify-content-center align-items-center" style="height: 270px;">
                        <img src="https://down-vn.img.susercontent.com/file/d32420d0d67eaafc19b5267719d6c555"
                            class="d-block rounded-3" alt="..."
                            style="width: 90%; height: 90% ;object-fit: cover; object-position: center;">
                    </div>
                    <div class="px-2 py-2" style="height: 70px;">
                        <p class="">Thám tử lừng danh conan</p>
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <span class="text-black">199.000 d</span>
                    </div>
                </a>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn bg-info-subtle rounded-bottom-4 w-100 btn-sm mt-1"
                        id="addTocart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg> Thêm vào giỏ hàng
                        hàng</button>
                </div>
            </div>
        </div>
    </div>
@endsection
