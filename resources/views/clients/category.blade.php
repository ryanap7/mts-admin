<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- HTML Meta Tags -->
        <title>Mandiri Technology Sejahtera</title>
        <meta
            name="description"
            content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems."
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />

        <!-- Facebook Meta Tags -->
        <meta
            property="og:url"
            content="https://mandiri-technology-sejahtera.vercel.app/"
        />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Mandiri Technology Sejahtera" />
        <meta
            property="og:description"
            content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems."
        />
        <meta
            property="og:image"
            content="https://raw.githubusercontent.com/khoirulhudaa/MTS/main/assets/images/logoIcon.png"
        />

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta
            property="twitter:domain"
            content="mandiri-technology-sejahtera.vercel.app"
        />
        <meta
            property="twitter:url"
            content="https://mandiri-technology-sejahtera.vercel.app/homepage"
        />
        <meta name="twitter:title" content="Mandiri Technology Sejahtera" />
        <meta
            name="twitter:description"
            content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems."
        />
        <meta
            name="twitter:image"
            content="https://raw.githubusercontent.com/khoirulhudaa/MTS/main/assets/images/logoIcon.png"
        />

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        <link
            rel="icon"
            href="{{ asset('/') }}assets/favicon/favicon.ico"
            type="image/x-icon"
        />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        @vite(['resources/css/navbar.css'])
        @vite(['resources/css/homepage.css'])
        @vite(['resources/css/brandCategory.css'])
        @vite(['resources/css/footer.css'])
    </head>
    <body>
        <div class="template">
            <div class="sidebare">
                <div class="btn-close">
                    <img
                        src="{{ asset('/') }}assets/icons/close.svg"
                        alt="icon"
                        id="btn-close"
                    />
                </div>
                <ul>
                    <li>
                        <a href="{{ route('homepage') }}">HOMEPAGE</a>
                    </li>
                    <li>
                        <a href="{{ route('brands') }}">BRANDS</a>
                    </li>
                    <li>
                        <a href="#categories">LIST CATEGORIES</a>
                    </li>
                    <li><a href="#footer">CONTACT</a></li>
                </ul>
            </div>

            <div class="container-navbar5-mz5">
                <div class="logo-navbar5-mz5">
                    <img
                        loading="lazy"
                        src="{{ asset('/') }}assets/images/logoMTS.png"
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
                            <a href="{{ route('brands') }}">| BRANDS |</a>
                        </li>
                        <li>
                            <a href="#categories">| LIST CATEGORIES |</a>
                        </li>
                        <li><a href="#footer">| CONTACT |</a></li>
                    </ul>
                </div>
            </div>

            <div class="conatiner-section3-section3mz4">
                <img class="bannerrr" src="{{ asset('/') }}assets/images/allBrand.png" alt="bannerBrand">
                <a href="#categories">
                    <button class="btn-hiring-section3mz4">
                        <span>CHECK</span>
                        All Category
                        <img
                            class="img2"
                            src="https://images-builder.vercel.app/img/arrow-left_section3mz4.svg"
                            alt="arrow-left"
                        />
                    </button>
                </a>
                <!-- <div class="section3-left-section3mz4">
                    <h1 class="section3-title-section3mz4">
                        Creator of today's great and
                        <span id="text-animation"></span> products
                    </h1>
                    <p class="section3-body-section3mz4">
                        Herox helps businesses in Africa get paid by anyone,
                        anywhere in the world securedly.
                    </p>
                </div> -->
                <!-- <div class="section3-right-section3mz4">
                    <div class="image-section3-section3mz4">
                        <img src="{{ asset('/') }}assets/images/kamera.jpeg" alt="image" />
                    </div>
                </div> -->
            </div>

            <!-- <div class="container-section4-section4mz4">
                <h1 class="section4-title-section4mz4">
                    All the best from {{ $brand->name ?? 'Categories' }}
                </h1>
                <p class="section4-body-section4mz4">
                    Herox helps businesses in Africa get paid by anyone,
                    anywhere in the world securedly.
                </p>
                <a href="#categories">
                    <button class="section4-btn-section4mz4">
                        Exploration
                    </button>
                </a>
            </div> -->

            <div class="container-exp" id="categories">
                <div class="top-exp">
                    <div class="top-left-exp">
                        <h3 class="subtitle-exp">TOP BRANDS</h3>
                        <h2 class="title-exp">EXPLORE VARIOUS CATEGORIES</h2>
                    </div>
                </div>
                <div class="bottom-exp">
                    <div class="wrap-bottom-exp">
                        
                        {{-- Categories --}}
                        @if ($categories->count() != 0)
                        @foreach ($categories as $category)
                        <div class="card-exp">
                            <a href="{{ route('products.category', $category) }}">
                                <div class="card-top-exp">
                                    @if ($category->image != null) 
                                        <img src="{{ asset('/storage/' . $category->image) }}"
                                        alt="card-image"/>
                                    @else
                                    <img
                                        src="{{ asset('/') }}assets/images/kategory.jpg"
                                        alt="card-image"
                                    />  
                                    @endif
                                </div>
                                <div class="card-bottom-exp">
                                    <div class="title-bottom-exp">
                                        <h4>{{ $category->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @else
                        <div class="child-product" style="padding: 150px;">
                            <p style="margin: auto">categories is not available...</p>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-hdm" id="footer">
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
                <img src="{{ asset('/') }}assets/images/wa.png" alt="wa" />
            </div>
        </a>

        <script src="{{ asset('/') }}assets/js/navbar.js"></script>
        <script>
            // Temukan elemen gambar dengan ID "logo"
            const logoImage = document.getElementById("logo");

            // Tambahkan event listener untuk mengarahkan ke halaman lain saat gambar diklik
            logoImage.addEventListener("click", function () {
                // Mengarahkan ke halaman index
                window.location.href = "/homepage";
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
