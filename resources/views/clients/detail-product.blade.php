<!DOCTYPE html>
<html lang="en">
    <head>
                
        <!-- HTML Meta Tags -->
        <title>Mandiri Technology Sejahtera</title>
        <meta name="description" content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems.">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://mandiri-technology-sejahtera.vercel.app/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Mandiri Technology Sejahtera">
        <meta property="og:description" content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems.">
        <meta property="og:image" content="https://raw.githubusercontent.com/khoirulhudaa/MTS/main/assets/images/logoIcon.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="mandiri-technology-sejahtera.vercel.app">
        <meta property="twitter:url" content="https://mandiri-technology-sejahtera.vercel.app/">
        <meta name="twitter:title" content="Mandiri Technology Sejahtera">
        <meta name="twitter:description" content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems.">
        <meta name="twitter:image" content="https://raw.githubusercontent.com/khoirulhudaa/MTS/main/assets/images/logoIcon.png">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        <link rel="icon" href="{{ asset('/assets/favicon/favicon.ico') }}" type="image/x-icon"> 
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        @vite(['resources/css/navbar.css'])
        @vite(['resources/css/homepage.css'])
        @vite(['resources/css/product.css'])
        @vite(['resources/css/footer.css'])
    </head>
    <body>
        <div class="template">
            <div class="sidebare">
                <div class="btn-close">
                    <img src="{{ asset('assets/icons/close.svg') }}" alt="icon" id="btn-close">
                </div>
                <ul>
                    <li>
                        <a href="{{ route('homepage') }}">HOMEPAGE</a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}">PRODUCTS</a>
                    </li>
                    <li>
                        <a href="#detail">LIST DETAIL</a>
                    </li>
                    <li><a href="#footer">CONTACT</a></li>
                </ul>
                </ul>
            </div>
            <div class="container-navbar5-mz5">
                <div class="logo-navbar5-mz5">
                    <img
                        loading="lazy"
                        src="{{ asset('/assets/images/logoMTS.png') }}"
                        alt="logo"
                        id="logo"
                    />
                </div>
                <div class="btn-toggle" id="btn-toggle">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="content-navbar5-mz5">
                    <ul class="content1-navbar5-mz5">
                        <li>
                            <a href="{{ route('homepage') }}">| HOMEPAGE |</a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}">| PRODUCTS |</a>
                        </li>
                        <li>
                            <a href="#detail">| LIST DETAIL |</a>
                        </li>
                        <li><a href="#footer">| CONTACT |</a></li>
                    </ul>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('/assets/images/square.svg') }}" alt="square" class="square">

            <div class="info-detail">
                <a href="{{ route('homepage') }}">
                    <p>HOMEPAGE</p>
                </a>
                /
                <a href="{{ route('brands') }}">
                    <p>BRANDS</p>
                </a>
                /
                <a href="{{ route('categories') }}">
                    <p>CATEGORIES</p>
                </a>
                /
                <a href="{{ route('products.index') }}">
                    <p>PRODUCTS</p>
                </a>
                /
                <p>DETAIL-PRODUCT</p>
            </div>
            <div class="wrapper-detail-product">
                <div class="child-detail-product">
                    <div class="child-detail-product-left">
                        <img loading="lazy" src="{{ asset('/storage/' . $product->image) }}" alt="image-product">
                    </div>
                    <div class="child-detail-product-right">
                        <h4>Detail Product</h3>
                        <h1>{{ $product->name }}</h1>
                        <small>{{ $product->brand->name ?? '' }}</small>
                        <p>
                            {{ $product->explanation }}
                        </p>
                        {{-- <div class="prize">
                            {{ $product->price }}
                        </div>
                        <ul>
                            <li>Size Products: {{ $product->size }}</li>
                            <li>Total stock: {{ $product->stock }}</li>
                            <li>Condition product: {{ $product->condition }}</li>
                        </ul> --}}
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('/assets/images/square.svg') }}" alt="square" class="square">

            <div class="section-tabs" id="detail">
                <div class="tabs">
                    <div class="tab-button active" onclick="changeTab(0)">
                        DESCRIPTION
                    </div>
                    <div class="tab-button" onclick="changeTab(1)">SPESIFICATION</div>
                    <div class="tab-button" onclick="changeTab(2)">BRAND</div>
                </div>
                <div class="tab-content">
                    <div class="tab-item active">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                    <div class="tab-item">
                        <p>
                            {!! $product->spesification !!}
                        </p>
                    </div>
                    <div class="tab-item">
                        {!! $product->brand->description ?? '' !!}
                    </div>
                </div>
            </div>

            <div class="footer-hdm">
                <div class="footer-right-hdm">
                    <div class="group-list-hdm">
                        <ul>
                            <h3>PHONE</h3>
                            <a href="https://wa.me/{{ $contact->phone }}" target="_blank">
                                <li><img loading="lazy" src="{{ asset('/') }}assets/icons/phone.svg" alt="icon" /> {{ $contact->phone }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="group-list-hdm">
                        <ul>
                            <h3>EMAIL</h3>
                            <a href="mailto:{{ $contact->email }}" target="__blank">
                                <li><img loading="lazy" src="{{ asset('/') }}assets/icons/email.svg" alt="icon" /> {{ $contact->email }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="group-list-hdm">
                        <ul>
                            <h3>ADDRESS</h3>
                            <a href="{{ $contact->google_map_link }}" target="__blank">
                                <li>
                                    <img loading="lazy" src="{{ asset('/') }}assets/icons/location.svg" alt="icon" />
                                    {{ $contact->address }}
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <small>© 2020 Mandiri Technology Sejahtera, All Right Reserved</small>
                </div>
            </div>

            <a href="https://wa.me/6285881308687" target="_blank">
                <div class="wa-feature">
                    <img src="{{ asset('/') }}assets/images/wa.png" alt="wa">
                </div>
            </a>

        </div>

        <script src="{{ asset('/') }}assets/js/rotate.js"></script>
        <script src="{{ asset('/') }}assets/js/tab.js"></script>
        <script src="{{ asset('/') }}assets/js/navbar.js"></script>
        <script>
            // Temukan elemen gambar dengan ID "logo"
            const logoImage = document.getElementById('logo');

            // Tambahkan event listener untuk mengarahkan ke halaman lain saat gambar diklik
            logoImage.addEventListener('click', function() {
                // Mengarahkan ke halaman index
                window.location.href = '/homepage';
            });

            const menuContainer = document.querySelector(".bottom-exp");
            const leftButton = document.querySelector(".arrow-exp.left-exp");
            const rightButton = document.querySelector(".arrow-exp.right-exp");
            rightButton.addEventListener("click", () => {
                menuContainer.scrollLeft += 200;
            });
            leftButton.addEventListener("click", () => {
                menuContainer.scrollLeft -= 200;
            });
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
