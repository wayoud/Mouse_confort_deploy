<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <!-- Start Hero Section -->
            <div class="hero">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>Création et vente <span clsas="d-block"> des découpes de mousse, de couture et des
                                        matlas.</span></h1>
                                <!-- <p class="mb-4">Création et vente des découpes de mousse et de couture, des matlas.</p> -->
                                <!-- <p><a href="" class="btn btn-secondary me-2">Achetez maintenant</a><a href="#" class="btn btn-white-outline">Explorer</a></p> -->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="hero-img-wrap">
                                <img src="images/DJ03.png" class="img-fluid image-covert">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->



            <!-- Start Why Choose Us Section -->
            <div class="why-choose-section" id="P2">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h2 class="section-title">Pourquoi Choisir MOUSSE CONFORT EXPERTS?</h2>
                            <p>Découvrez l’alliance parfaite entre qualité, technologie et confort pour des nuits inégalées.</p>

                            <div class="row my-5">
                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                        </div>
                                        <h3>Qualité Supérieure</h3>
                                        <p>Nos mousses sont fabriquées avec des matériaux de première qualité, garantissant
                                            durabilité, confort et performance
                                            exceptionnelle pour tous vos besoins.</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                        </div>
                                        <h3>Personnalisation sur Mesure</h3>
                                        <p>Chez MOUSSE CONFORT Experts, nous créons des produits sur mesure, adaptés à vos
                                            spécifications exactes, que ce soit pour des
                                            sièges, matelas ou projets industriels.</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/support.svg" alt="Image" class="imf-fluid">
                                        </div>
                                        <h3>Expertise et Expérience</h3>
                                        <p>Forts de notre longue expérience dans le domaine, nous maîtrisons chaque étape de la
                                            fabrication pour vous offrir des
                                            produits qui répondent parfaitement à vos attentes.</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/return.svg" alt="Image" class="imf-fluid">
                                        </div>
                                        <h3>Engagement Environnemental</h3>
                                        <p>Nous nous engageons à utiliser des procédés respectueux de l'environnement et à réduire
                                            notre empreinte carbone en
                                            choisissant des matériaux écologiques et durables.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="img-wrap">
                                <img src="images/DJ10.jpg" alt="Image" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Section -->

            <!-- Start We Help Section -->
            <div class="we-help-section" id="P3">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="imgs-grid">
                                <div class="grid grid-1"><img src="images/DJ09.jpg" alt="Untree.co"></div>
                                <div class="grid grid-2"><img src="images/DJ08.jpg" alt="Untree.co"></div>
                                <div class="grid grid-3"><img src="images/DJ02.jpg" alt="Untree.co"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h2 class="section-title mb-4">Nous vous aidons à créer un design d'intérieur moderne</h2>
                            <p>Chez MOUSSE CONFORT EXPERTS, nous allions les dernières tendances en matière de design avec des
                                éléments classiques et
                                intemporels. Nos créations sont pensées pour rester élégantes et pertinentes, assurant que votre
                                intérieur conserve son
                                charme et sa modernité au fil des années.</p>

                            <ul class="list-unstyled custom-list my-4">
                                <li>Conception Personnalisée</li>
                                <li>Matériaux Innovants</li>
                                <li>Solutions Flexibles</li>
                                <li>Tendance et Intemporel</li>
                            </ul>
                            <p><a herf="#" class="btn">Explore</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End We Help Section -->

            <!-- Start Popular Product -->
            <div class="popular-product" id="P4">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail">
                                    <img src="images/mousse-acoustique.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="pt-3">
                                    <h3>Mousses acoustiques</h3>
                                    <p>Utilisés pour améliorer le confort et le soutien du sommeil, ces produits sont souvent faits
                                        de mousse à mémoire de
                                        forme ou de mousse de polyuréthane. </p>
                                    <p><a href="#">Lire plus</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail">
                                    <img src="images/Mousses-protection.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="pt-3">
                                    <h3>Mousses de protection</h3>
                                    <p>Employées pour l'emballage de produits fragiles, les protections sportives, ou même les
                                        dispositifs médicaux.</p>
                                    <p><a href="#">Lire plus</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail">
                                    <img src="images/mousse-issolation.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="pt-3">
                                    <h3>Mousses isolantes</h3>
                                    <p>Utilisées dans la construction pour l'isolation thermique et phonique des bâtiments. </p>
                                    <p><a href="#">Lire plus</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Start Blog Section -->
            <div class="blog-section" id="P5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <h2 class="section-title">Vos produits</h2>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <a href="#" class="more">Voir tous les articles</a>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                            <div class="post-entry">
                                <a href="#" class="post-thumbnail"><img src="images/DJ06.jpg" alt="Image" class="img-fluid"
                                        style="width: 400px; height: 400px;"></a>
                                <!-- <div class="post-content-entry">
            								<h3><a href="#">First Time Home Owner Ideas</a></h3>
            								<div class="meta">
            									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
            								</div>
            							</div> -->
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                            <div class="post-entry">
                                <a href="#" class="post-thumbnail"><img src="images/DJ11 (1).jpg" alt="Image" class="img-fluid"
                                        style="width: 400px; ;height: 400px;"></a>
                                <!-- <div class="post-content-entry">
            								<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
            								<div class="meta">
            									<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
            								</div>
            							</div> -->
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                            <div class="post-entry">
                                <a href="#" class="post-thumbnail"><img src="images/DJ01.jpg" alt="Image" class="img-fluid"
                                        style="width: 400px; height: 400px;"></a>
                                <!-- <div class="post-content-entry">
            								<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
            								<div class="meta">
            									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
            								</div>
            							</div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Blog Section -->

            <!-- Start Footer Section -->
            <footer class="footer-section" id="P6">
                <div class="container relative">

                    <div class="sofa-img">
                        <img src="images/sofa.png" alt="Image" class="img-fluid">
                    </div>

                    <!-- <div class="row">
            					<div class="col-lg-8">
            						<div class="subscription-form">
            							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

            							<form action="#" class="row g-3">
            								<div class="col-auto">
            									<input type="text" class="form-control" placeholder="Enter your name">
            								</div>
            								<div class="col-auto">
            									<input type="email" class="form-control" placeholder="Enter your email">
            								</div>
            								<div class="col-auto">
            									<button class="btn btn-primary">
            										<span class="fa fa-paper-plane"></span>
            									</button>
            								</div>
            							</form>

            						</div>
            					</div>
            				</div> -->

                    <div class="row g-5 mb-5">
                        <div class="col-lg-4">
                            <br />
                            <br />
                            <br />
                            <br />
                            <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Mousse Confort
                                    Experts<span>.</span></a></div>
                            <p class="mb-4">Création et vente des découpes de mousse, de couture et des matlas.</p>

                            <ul class="list-unstyled custom-social">
                                <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                            </ul>
                        </div>

                        <!-- <div class="col-lg-8">
            						<div class="row links-wrap">
            							<div class="col-6 col-sm-6 col-md-3">
            								<ul class="list-unstyled">
            									<li><a href="#">About us</a></li>
            									<li><a href="#">Services</a></li>
            									<li><a href="#">Blog</a></li>
            									<li><a href="#">Contact us</a></li>
            								</ul>
            							</div>

            							<div class="col-6 col-sm-6 col-md-3">
            								<ul class="list-unstyled">
            									<li><a href="#">Support</a></li>
            									<li><a href="#">Knowledge base</a></li>
            									<li><a href="#">Live chat</a></li>
            								</ul>
            							</div>

            							<div class="col-6 col-sm-6 col-md-3">
            								<ul class="list-unstyled">
            									<li><a href="#">Jobs</a></li>
            									<li><a href="#">Our team</a></li>
            									<li><a href="#">Leadership</a></li>
            									<li><a href="#">Privacy Policy</a></li>
            								</ul>
            							</div>

            							<div class="col-6 col-sm-6 col-md-3">
            								<ul class="list-unstyled">
            									<li><a href="#">Nordic Chair</a></li>
            									<li><a href="#">Kruzo Aero</a></li>
            									<li><a href="#">Ergonomic Chair</a></li>
            								</ul>
            							</div>
            						</div>
            					</div> -->


                    </div>
                    <div class="responsive-iframe-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8362100574673!2d144.95855131566618!3d-37.81733457975139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577c59e7e12d64!2sMelbourne%20CBD%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1605129293773!5m2!1sen!2sus"
                            frameborder="0" style="border:0; width: 100%; height: 60%;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>

                    <style>
                        .responsive-iframe-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            /* 16:9 aspect ratio */
                            height: 0;
                            overflow: hidden;
                            max-width: 100%;
                            margin-left: 35%;
                            margin-top: -20%;
                        }

                        .responsive-iframe-container iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 50%;
                        }

                        /* Mobile styles */
                        @media only screen and (max-width: 768px) {
                            .responsive-iframe-container {
                                margin-left: 0;
                                margin-top: 0;
                                padding-bottom: 75%;
                                /* adjust aspect ratio for mobile */
                            }
                        }

                        /* Large screen styles */
                        @media only screen and (min-width: 1200px) {
                            .responsive-iframe-container iframe {
                                height: 100px;
                                /* Change this to 50% for half height */
                            }
                        }
                    </style>

                    <div class="border-top copyright">
                        <div class="row pt-4">
                            <div class="col-lg-6">
                                <p class="mb-2 text-center text-lg-start">
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script>. All Rights Reserved.
                                </p>
                            </div>
                            <!--
            						<div class="col-lg-6 text-center text-lg-end">
            							<ul class="list-unstyled d-inline-flex ms-auto">
            								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
            								<li><a href="#">Privacy Policy</a></li>
            							</ul>
            						</div> -->

                        </div>
                    </div>

                </div>
            </footer>
            <!-- End Footer Section -->


            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/tiny-slider.js"></script>
            <script src="js/custom.js"></script>

        </div>
    </body>
</html>
