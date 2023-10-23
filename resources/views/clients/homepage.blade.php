<!DOCTYPE html>
<html lang="en">

<head>

    <!-- HTML Meta Tags -->
    <title>Mandiri Technology Sejahtera</title>
    <meta name="description" content="A System Integrator company established in September 2007 specializes in the development of IT network infrastructure and security systems.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <style>
        .is-invalid {
            color: tomato;
            display: block;
            margin-top: 7px;
        }

        .d-none {
            display: none;
        }

        .d-block {
            display: block;
        }   

        .btn-close-message {
            position: relative;
            background-color: white;
            margin-left: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            overflow: hidden;
            border-radius: 9999px;
            padding: 2px;
            cursor: pointer;
        }

        .btn-close-message img {
            width: 80%;
        }

        .btn-close-message:hover {
            transition: 0.2s;
            filter: brightness(90%);
        }

        .btn-close-message:active {
            transition: 0.2s;
            transform: scale(0.98);
        }

        #message-success {
            width: max-content;
            background-color: #0069B3;
            color: white;
            height: 50px;
            padding: 0 20px;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 15px;
        }

        #circularG{
            position:relative;
            width:25px;
            height:25px;
            margin: auto;
            display: inline-block;
            margin: -9px 5px -9px -6px;
        }

        .circularG{
            position:absolute;
            background-color:rgb(255,255,255);
            width:6px;
            height:6px;
            border-radius:4px;
                -o-border-radius:4px;
                -ms-border-radius:4px;
                -webkit-border-radius:4px;
                -moz-border-radius:4px;
            animation-name:bounce_circularG;
                -o-animation-name:bounce_circularG;
                -ms-animation-name:bounce_circularG;
                -webkit-animation-name:bounce_circularG;
                -moz-animation-name:bounce_circularG;
            animation-duration:1.1s;
                -o-animation-duration:1.1s;
                -ms-animation-duration:1.1s;
                -webkit-animation-duration:1.1s;
                -moz-animation-duration:1.1s;
            animation-iteration-count:infinite;
                -o-animation-iteration-count:infinite;
                -ms-animation-iteration-count:infinite;
                -webkit-animation-iteration-count:infinite;
                -moz-animation-iteration-count:infinite;
            animation-direction:normal;
                -o-animation-direction:normal;
                -ms-animation-direction:normal;
                -webkit-animation-direction:normal;
                -moz-animation-direction:normal;
        }

        #circularG_1{
            left:0;
            top:10px;
            animation-delay:0.41s;
                -o-animation-delay:0.41s;
                -ms-animation-delay:0.41s;
                -webkit-animation-delay:0.41s;
                -moz-animation-delay:0.41s;
        }

        #circularG_2{
            left:3px;
            top:3px;
            animation-delay:0.55s;
                -o-animation-delay:0.55s;
                -ms-animation-delay:0.55s;
                -webkit-animation-delay:0.55s;
                -moz-animation-delay:0.55s;
        }

        #circularG_3{
            top:0;
            left:10px;
            animation-delay:0.69s;
                -o-animation-delay:0.69s;
                -ms-animation-delay:0.69s;
                -webkit-animation-delay:0.69s;
                -moz-animation-delay:0.69s;
        }

        #circularG_4{
            right:3px;
            top:3px;
            animation-delay:0.83s;
                -o-animation-delay:0.83s;
                -ms-animation-delay:0.83s;
                -webkit-animation-delay:0.83s;
                -moz-animation-delay:0.83s;
        }

        #circularG_5{
            right:0;
            top:10px;
            animation-delay:0.97s;
                -o-animation-delay:0.97s;
                -ms-animation-delay:0.97s;
                -webkit-animation-delay:0.97s;
                -moz-animation-delay:0.97s;
        }

        #circularG_6{
            right:3px;
            bottom:3px;
            animation-delay:1.1s;
                -o-animation-delay:1.1s;
                -ms-animation-delay:1.1s;
                -webkit-animation-delay:1.1s;
                -moz-animation-delay:1.1s;
        }

        #circularG_7{
            left:10px;
            bottom:0;
            animation-delay:1.24s;
                -o-animation-delay:1.24s;
                -ms-animation-delay:1.24s;
                -webkit-animation-delay:1.24s;
                -moz-animation-delay:1.24s;
        }

        #circularG_8{
            left:3px;
            bottom:3px;
            animation-delay:1.38s;
                -o-animation-delay:1.38s;
                -ms-animation-delay:1.38s;
                -webkit-animation-delay:1.38s;
                -moz-animation-delay:1.38s;
        }



        @keyframes bounce_circularG{
            0%{
                transform:scale(1);
            }

            100%{
                transform:scale(.3);
            }
        }

        @-o-keyframes bounce_circularG{
            0%{
                -o-transform:scale(1);
            }

            100%{
                -o-transform:scale(.3);
            }
        }

        @-ms-keyframes bounce_circularG{
            0%{
                -ms-transform:scale(1);
            }

            100%{
                -ms-transform:scale(.3);
            }
        }

        @-webkit-keyframes bounce_circularG{
            0%{
                -webkit-transform:scale(1);
            }

            100%{
                -webkit-transform:scale(.3);
            }
        }

        @-moz-keyframes bounce_circularG{
            0%{
                -moz-transform:scale(1);
            }

            100%{
                -moz-transform:scale(.3);
            }
        }
    </style>

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
                @if ($products->count() != 0)
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
                @else
                <div class="wrapper-not-product">
                    <p style="margin: auto;display: flex;align-items: center;justify-content: center;">
                        <img src="{{ asset('/') }}assets/icons/prod.png" style="margin-right: 20px;width: 60px;height: 60px;" alt="icon product">
                        product is not available...
                    </p>
                </div>
                @endif
                
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
                    @if ($bestSeller->count() != 0)
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
                    @else
                    <div class="wrapper-not-product">
                        <p style="margin: auto;display: flex;align-items: center;justify-content: center;">
                            <img src="{{ asset('/') }}assets/icons/prod.png" style="margin-right: 20px;width: 60px;height: 60px;" alt="icon product">
                            product is not available...
                        </p>
                    </div>
                    @endif
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
            <div id="message-success" class="d-block">
                Sukses mengirim pesan anda, terima kasih!
                <div class="btn-close-message" id="btn-close-message">
                    <img src="{{ asset('/') }}assets/icons/close.svg" alt="icon" id="btn-close2">
                </div>
            </div>
            <form method="post" action="{{ route('messages') }}" id="form-message">
                @csrf
                <div class="child-form">
                    <input type="text" name="name" id="name" placeholder="Your name..." required><br>
                    <small class="name"></small>
                </div>
                <div class="child-form">
                    <input type="email" name="email" id="email" placeholder="Your email..." required><br>
                    <small class="email"></small>
                </div>
                <div class="child-form">
                    <input type="text" name="company" id="company" placeholder="Company..." required><br>
                    <small class="company"></small>
                </div>
                <div class="child-form">
                    <textarea type="text" name="message" id="message" placeholder="Enter your message" required></textarea><br>
                    <small class="message"></small>
                </div>
                <button type="submit" class="btn-form">Send now</button>
                {{-- <button type="submit" class="btn-form"><img src="{{ asset('/assets/spin/spin.gif') }}" alt="spin" class="spin"> Send now</button> --}}
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
            const btnMessage = document.getElementById('btn-close2');
            const messageSuccess = document.getElementById('message-success');
            btnMessage.addEventListener('click', () => {
                window.alert('ok')
                messageSuccess.style.display = 'none'
            });
        </script>


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
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $('#form-message').on('submit', function(e) {
                e.preventDefault(e)
                const spin = `<div id="circularG">
                                <div id="circularG_1" class="circularG"></div>
                                <div id="circularG_2" class="circularG"></div>
                                <div id="circularG_3" class="circularG"></div>
                                <div id="circularG_4" class="circularG"></div>
                                <div id="circularG_5" class="circularG"></div>
                                <div id="circularG_6" class="circularG"></div>
                                <div id="circularG_7" class="circularG"></div>
                                <div id="circularG_8" class="circularG"></div>
                            </div> Send now`;
                $('.btn-form').html(spin)

                const url = this.getAttribute('action')
                $.ajax({
                    method: 'POST',
                    url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(res){
                        if(res.success){
                            $('.btn-form').html('Send now')
                            $('#message-success').addClass('d-block').text(res.message)
                            $('#name').val('')
                            $('#email').val('')
                            $('#company').val('')
                            $('#message').val('')
                        }else{
                            let errors = res.errors;
                                $.each(errors, function(prefix, val){
                                    $('.' + prefix).addClass('is-invalid').text(val[0]);
                                })
                        }
                    },
                    error:function(er){
                        console.log('tidak ok bgt');
                    }
                })
            })
        </script>
</body>

</html>