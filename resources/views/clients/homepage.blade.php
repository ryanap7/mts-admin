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
    <link rel="icon" href="{{ asset('/') }}assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/navbar.css'])
    @vite(['resources/css/homepage.css'])
    @vite(['resources/css/footer.css'])
    <script src="{{ asset('/') }}assets/js/counts.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZD0FFFK8J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9ZD0FFFK8J');
    </script>

</head>

<body>
    <div class="template">

        <div class="sidebare">
            <div class="btn-close">
                <img src="{{ asset('/') }}assets/icons/close.svg" alt="icon" id="btn-close">
            </div>
            <ul>
                <li>
                    <a href="#HOME">HOME</a>
                </li>
                <li id="about2">
                    <a href="#ABOUT">ABOUTs US</a>
                </li>
                <li><a href="#PORTFOLIO">PORTFOLIOS</a></li>
                <li>
                    <a href="#PRODUCTS">PRODUCTS</a>
                </li>
            </ul>
        </div>

        <div class="container-navbar5-mz5">
            <div class="logo-navbar5-mz5">
                <img loading="lazy" src="{{ asset('/') }}assets/images/logoMTS.png" alt="logo" id="logo" />
            </div>
            <div class="btn-toggle" id="btn-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="content-navbar5-mz5">
                <ul class="content1-navbar5-mz5">
                    <li>
                        <a href="#HOME">| HOME |</a>
                    </li>
                    <li>
                        <a href="#ABOUT">| ABOUT US |</a>
                    </li>
                    <li><a href="#PORTFOLIO">| PORTFOLIOS |</a></li>
                    <li>
                        <a href="#PRODUCTS">| PRODUCTS |</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="parallax-container" id="HOME">
            <div class="container-hero-bmw">
                <a href="https://unsplash.com/@alejandroescamilla?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">
                    <img loading="lazy" src="{{ asset('/') }}assets/images/Banner.webp" class="bgnewhero" alt="https://unsplash.com/s/photos/meet?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" />
                </a>
                <div class="overlay-bmw"></div>
                <div class="content-hero-bmw">
                    <h1 class="title-hero-bmw">
                        CV. Mandiri Technology Sejahtera | <span id="text-animation"></span>
                    </h1>
                    <p class="text-hero-bmw">
                        We Delivering the Best Solution for Our Customer
                    </p>
                    <a href="{{ $catalog != null ? route('download.catalog', $catalog) : '#' }}" style="text-decoration: none">
                        <div class="btn-hero-bmw">DOWNLOAD CATALOG</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-testimoni-mz1" id="ABOUT">
            <p class="parag-testi-mz1">What our customer say</p>
            <h1 class="title-testi-mz1">ABOUT US</h1>
            <p class="body-testti-mz1">
                A System Integrator company established in April 2020
                specializes in the development of IT network infrastructure
                and security systems. We have a certified team to provide
                post-sales services, including implementation, on-site
                support, remote assistance, and phone support. The company
                combines technical expertise with strong customer service.
            </p>
            <div class="legend">
                <div></div>
                <p>MTS</p>
                <div></div>
            </div>
        </div>

        <div class="section5-mz1" id="PORTFOLIO">
            <h1 class="title-section5-mz1">OUR PORTFOLIO</h1>
            <p class="p-section5-body-mz1">
                Some of the best portfolios of our companies available today
            </p>
            <div class="container-card-mz1">
                <div class="card-section5-left-mz1">
                    <img loading="lazy" src="{{ asset('/') }}assets/images/mockup1.jpg" alt="portfolio">
                    <div class="skeleton-image">Loading...</div>
                    <div class="card-body-mz1">
                        <div>
                            <h1>Title Porto</h1>
                        </div>
                    </div>
                </div>
                <div class="card-section-right-mz1">
                    <div class="card-sections2-mz1">
                        <div class="card-body2-mz1">
                            <div>
                                <h1>Title Porto</h1>
                            </div>
                        </div>
                        <img loading="lazy" src="{{ asset('/') }}assets/images/mockup2.jpg" alt="portfolio">
                        <div class="skeleton-image">Loading...</div>
                    </div>
                    <div class="card-sections3-mz1">
                        <div class="card-body3-mz1">
                            <div>
                                <h1>Title Porto</h1>
                            </div>
                        </div>
                        <img loading="lazy" src="{{ asset('/') }}assets/images/mockup3.jpg" alt="portfolio">
                        <div class="skeleton-image">Loading...</div>
                    </div>
                </div>
            </div>
            <div class="wrapper-percentation">
                <div>
                    <img loading="lazy" src="{{ asset('/') }}assets/icons/projects.svg" alt="" />
                    <h3 id="completed-projects">{{ $statistics[0]->value ?? '0' }}</h3>
                    <p>PROJECTS COMPLETED</p>
                </div>
                <div>
                    <img loading="lazy" src="{{ asset('/') }}assets/icons/customers.svg" alt="" />
                    <h3 id="total-customers">{{ $statistics[1]->value ?? '0' }}</h3>
                    <p>CUSTOMERS</p>
                </div>
                <div>
                    <img loading="lazy" src="{{ asset('/') }}assets/icons/products.svg" alt="" />
                    <h3 id="total-products">{{ $statistics[2]->value ?? '0' }}</h3>
                    <p>PRODUCTS ME</p>
                </div>
                <div>
                    <img loading="lazy" src="{{ asset('/') }}assets/icons/portofolio.svg" alt="" />
                    <h3 id="portfolio-count">{{ $statistics[3]->value ?? '0' }}</h3>
                    <p>PORTFOLIO</p>
                </div>
            </div>

        </div>

        <div class="container-mou" id="PRODUCTS">
            <h1 class="title-mou">OUR PRODUCTS</h1>
            <p class="teks-mou">
                We have built and developed many products professionally
            </p>
            <div class="wrap-foto-mou">

                {{-- Products --}}
                @foreach ($products as $product)
                <div class="foto-mou">
                    <a href="{{ route('products.show', $product) }}">
                        <div class="skeleton-card">
                            <div class="skeleton-image">Loading...</div>
                        </div>
                        <img loading="lazy" src="{{ asset('/storage/' . $product->image) }}" alt="image" />
                    </a>
                </div>
                @endforeach
                
            </div>
            <a href="{{ route('brands') }}">
                <button class="btn-form">Show More</button>
            </a>
        </div>

        <div class="container-exp">
            <div class="top-exp">
                <div class="top-left-exp">
                    <h3 class="subtitle-exp">PRODUCTS</h3>
                    <h2 class="title-exp">BEST SELLERS</h2>
                </div>
                <div class="top-right-exp">
                    <div class="arrow-exp left-exp">
                        <img loading="lazy" src="https://images-builder.vercel.app/img/leftexplore.svg" alt="icon-arrow">
                    </div>
                    <div class="arrow-exp right-exp">
                        <img loading="lazy" src="https://images-builder.vercel.app/img/rightexplore.svg" alt="icon-arrow">
                    </div>
                </div>
            </div>
            <div class="bottom-exp">
                <div class="wrap-bottom-exp">

                    {{-- Best Seller --}}
                    @foreach ($bestSeller as $product)
                    <div class="card-exp">
                        <div class="card-top-exp">
                            <img loading="lazy" src="{{ asset('/storage/' . $product->image ) }}" alt="card-image">
                        </div>
                        <div class="card-bottom-exp">
                            <div class="title-bottom-exp">
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->price }}</p>
                            </div>
                            <small>{{ $product->brand->name ?? '' }}</small>
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <section class="section7-mz2">
            <h1>OUR CUSTOMERS</h1>
            <div class="slider-container">
                <div class="slider">
                    <img class="unOurCus" id="diskominfo" src="{{ asset('/') }}assets/images/diskominfo.webp" alt="sponsor" />
                    <img class="unOurCus" id="trisakti" src="{{ asset('/') }}assets/images/trisakti.webp" alt="sponsor" />
                    <img class="ourCus" id="mensa" src="{{ asset('/') }}assets/images/Our Cus Mensa.png" alt="sponsor" />
                    <img class="ourCus" id="landison" src="{{ asset('/') }}assets/images/Our Cus Landson.png" alt="sponsor" />
                    <img class="unOurCus" id="otto" src="{{ asset('/') }}assets/images/otto.webp" alt="sponsor" />
                    <img class="unOurCus" id="andini" src="{{ asset('/') }}assets/images/andini.webp" alt="sponsor" />
                    <img class="unOurCus" id="akr" src="{{ asset('/') }}assets/images/akr.webp" alt="sponsor" />
                    <img class="unOurCus" id="indocapital" src="{{ asset('/') }}assets/images/indocapital.webp" alt="sponsor" />
                    <img id="succor" src="{{ asset('/') }}assets/images/succor.webp" alt="sponsor" />
                    <img class="ourCus" id="planetBan" src="{{ asset('/') }}assets/images/Our Cus Planetban.png" alt="sponsor" />
                    <img class="ourCus" id="smr" src="{{ asset('/') }}assets/images/Our Cus SMR.png" alt="sponsor" />
                    <img class="unOurCus" id="rukun" src="{{ asset('/') }}assets/images/rukun.webp" alt="sponsor" />
                    <img class="unOurCus" id="gmf" src="{{ asset('/') }}assets/images/gmf.webp" alt="sponsor" />
                    <img class="unOurCus" id="diskominfo" src="{{ asset('/') }}assets/images/diskominfo.webp" alt="sponsor" />
                    <img class="unOurCus" id="trisakti" src="{{ asset('/') }}assets/images/trisakti.webp" alt="sponsor" />
                    <img class="ourCus" id="mensa" src="{{ asset('/') }}assets/images/Our Cus Mensa.png" alt="sponsor" />
                    <img class="ourCus" id="landison" src="{{ asset('/') }}assets/images/Our Cus Landson.png" alt="sponsor" />
                    <img class="unOurCus" id="otto" src="{{ asset('/') }}assets/images/otto.webp" alt="sponsor" />
                    <img class="unOurCus" id="andini" src="{{ asset('/') }}assets/images/andini.webp" alt="sponsor" />
                    <img class="unOurCus" id="akr" src="{{ asset('/') }}assets/images/akr.webp" alt="sponsor" />
                    <img class="unOurCus" id="indocapital" src="{{ asset('/') }}assets/images/indocapital.webp" alt="sponsor" />
                    <img class="unOurCus" id="ubm" src="{{ asset('/') }}assets/images/ubm.webp" alt="sponsor" />
                    <img class="ourCus" id="cas" src="{{ asset('/') }}assets/images/Our Cus CAS.png" alt="sponsor" />
                    <img class="unOurCus" id="succor" src="{{ asset('/') }}assets/images/succor.webp" alt="sponsor" />
                    <img class="ourCus" id="planetBan" src="{{ asset('/') }}assets/images/Our Cus Planetban.png" alt="sponsor" />
                    <img class="ourCus" id="smr" src="{{ asset('/') }}assets/images/Our Cus SMR.png" alt="sponsor" />
                    <img class="unOurCus" id="jhl" src="{{ asset('/') }}assets/images/jhl.webp" alt="sponsor" />
                    <img class="unOurCus" id="ubm" src="{{ asset('/') }}assets/images/ubm.webp" alt="sponsor" />
                    <img class="unOurCus" id="rukun" src="{{ asset('/') }}assets/images/rukun.webp" alt="sponsor" />
                    <img class="unOurCus" id="gmf" src="{{ asset('/') }}assets/images/gmf.webp" alt="sponsor" />
                    <img class="unOurCus" id="tcl" src="{{ asset('/') }}assets/images/tcl.webp" alt="sponsor" />
                </div>
            </div>
        </section>

        <section class="section4-mz2">
            <h1 class="section4-mz2-title">Frequently Asked Questions</h1>
            <p class="section4-mz2-paragh">We tried to answer most common questions, if you have any additional, please get in touch with our friendly team</p>
            <div>
                <button class="accordion-mz2">
                    <span>01. What are properties in Figma?</span>
                    <img src="https://images-builder.vercel.app/img/add_section4mz2.svg" alt="icon">
                </button>
                <div class="panel-mz2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <button class="accordion-mz2">
                    <span>02. How Whitespace UI&nbsp;kit and Design&nbsp;System can help me?</span>
                    <img src="https://images-builder.vercel.app/img/add_section4mz2.svg" alt="icon">
                </button>
                <div class="panel-mz2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <button class="accordion-mz2">
                    <span>03. What is your return policy?</span>
                    <img src="https://images-builder.vercel.app/img/add_section4mz2.svg" alt="icon">
                </button>
                <div class="panel-mz2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <button class="accordion-mz2">
                    <span>04. How can I contact customer support?</span>
                    <img src="https://images-builder.vercel.app/img/add_section4mz2.svg" alt="icon">
                </button>
                <div class="panel-mz2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            
        </section>

        <div class="legend">
            <div></div>
            <p>Form</p>
            <div></div>
        </div>

        <div class="wrapper-form">
            <h2>Contact Us</h2>
            <form method="post" action="">
                <div class="child-form">
                    <input type="text" name="email" placeholder="Your email...">
                </div>
                <div class="child-form">
                    <input type="text" name="username" placeholder="Username...">
                </div>
                <div class="child-form">
                    <textarea type="text" name="message" placeholder="Enter your message"></textarea>
                </div>
                <button class="btn-form">Send now</button>
            </form>
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


        <script>
            gapi.load('client:auth2', function() {
                gapi.client.init({
                    apiKey: 'YOUR_API_KEY', // Ganti dengan API Key Anda
                    clientId: 'YOUR_CLIENT_ID', // Ganti dengan ID Klien OAuth 2.0 Anda
                    discoveryDocs: ['https://analyticsreporting.googleapis.com/$discovery/rest?version=v4'],
                    scope: 'https://www.googleapis.com/auth/analytics.readonly'
                });

                gapi.client.load('analyticsreporting', 'v4').then(function() {
                    var request = {
                        reportRequests: [{
                            viewId: 'YOUR_VIEW_ID', // Ganti dengan ID Tampilan Google Analytics Anda
                            dateRanges: [{
                                startDate: '7daysAgo',
                                endDate: 'today'
                            }],
                            metrics: [{
                                expression: 'ga:pageviews'
                            }]
                        }]
                    };

                    gapi.client.analyticsreporting.reports.batchGet(request).then(function(response) {
                        var pageviews = response.result.reports[0].data.totals[0].values[0];
                        document.getElementById('pageviewsCount').textContent = pageviews;
                    });
                });
            });
        </script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>

        <script src="{{ asset('/') }}assets/js/slider.js"></script>
        <script>
            var i, acc = document.querySelectorAll("accordion-mz2");
            for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var e = this.nextElementSibling;
                "block" === e.style.display ? e.style.display = "none" : e.style.display = "block";
            })
        </script>
        <script src="{{ asset('/') }}assets/js/navbar.js"></script>

        <script>
            // Temukan elemen gambar dengan ID "logo"
            const logoImage = document.getElementById('logo');

            // Tambahkan event listener untuk mengarahkan ke halaman lain saat gambar diklik
            logoImage.addEventListener('click', function() {
                // Mengarahkan ke halaman homepage
                window.location.href = './homepage';
            });

            const titleElement = document.querySelector(".title-hero-bmw");
            const textElement = document.getElementById("text-animation");
            const textArray = [
                "Support",
                "Security",
                "Solution",
            ];
            let textIndex = 0;

            function animateText() {
                textElement.textContent = "";
                let text = textArray[textIndex];
                let charIndex = 0;

                function typeChar() {
                    if (charIndex < text.length) {
                        textElement.textContent += text.charAt(charIndex);
                        charIndex++;
                        setTimeout(typeChar, 100); // Waktu penundaan antara setiap karakter (ms)
                    } else {
                        setTimeout(eraseText, 2000); // Tahan teks selama 2 detik sebelum menghapusnya
                    }
                }

                function eraseText() {
                    if (textElement.textContent.length > 0) {
                        textElement.textContent = textElement.textContent.slice(
                            0,
                            -1
                        );
                        setTimeout(eraseText, 50); // Waktu penundaan antara penghapusan karakter (ms)
                    } else {
                        // Ganti indeks teks ke teks berikutnya dalam array
                        textIndex = (textIndex + 1) % textArray.length;
                        setTimeout(animateText, 1000); // Tahan selama 1 detik sebelum animasi berikutnya
                    }
                }

                typeChar();
            }

            window.addEventListener("DOMContentLoaded", () => {
                // Mulai animasi pergantian teks ketika DOM telah dimuat
                animateText();
            });
        </script>

        <script>
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

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const bgImage = document.querySelector(".bgnewhero");
                const containerHero = document.querySelector(
                    ".container-hero-bmw"
                );
                const contentHero = document.querySelector(".content-hero-bmw");

                window.addEventListener("scroll", function() {
                    const scrollTop = window.pageYOffset;
                    const containerOffsetTop = containerHero.offsetTop;
                    const parallaxOffset =
                        (scrollTop - containerOffsetTop) * 0.03;
                    const parallaxOffset2 =
                        (scrollTop - containerOffsetTop) * 0.4;

                    if (parallaxOffset && parallaxOffset2 >= 550) {
                        bgImage.style.filter = "blur(0)";
                        contentHero.style.transform = "translateY(0px)"; // Tidak ada efek parallax
                    } else {
                        bgImage.style.filter = `blur(${parallaxOffset}px)`;
                        contentHero.style.transform = `translateY(-${parallaxOffset2}px)`;
                    }
                });
            });
        </script>

        <script>
            var i,
                acc = document.getElementsByClassName("accordion-mz2");
            for (i = 0; i < acc.length; i++)
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var e = this.nextElementSibling;
                    "block" === e.style.display ?
                        (e.style.display = "none") :
                        (e.style.display = "block");
                });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>