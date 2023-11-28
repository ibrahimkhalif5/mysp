<!DOCTYPE html>
<html lang="en">

<head>
    <title>mandera youth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.flaticon.com/your-cdn-identifier/css/flaticon.css">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <script nonce="5390ec77-842f-4c25-b137-54babe5f4b35">
    (function(w, d) {
        ! function(a, b, c, d) {
            a[c] = a[c] || {};
            a[c].executed = [];
            a.zaraz = {
                deferred: [],
                listeners: []
            };
            a.zaraz.q = [];
            a.zaraz._f = function(e) {
                return async function() {
                    var f = Array.prototype.slice.call(arguments);
                    a.zaraz.q.push({
                        m: e,
                        a: f
                    })
                }
            };
            for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
            a.zaraz.init = () => {
                var h = b.getElementsByTagName(d)[0],
                    i = b.createElement(d),
                    j = b.getElementsByTagName("title")[0];
                j && (a[c].t = b.getElementsByTagName("title")[0].text);
                a[c].x = Math.random();
                a[c].w = a.screen.width;
                a[c].h = a.screen.height;
                a[c].j = a.innerHeight;
                a[c].e = a.innerWidth;
                a[c].l = a.location.href;
                a[c].r = b.referrer;
                a[c].k = a.screen.colorDepth;
                a[c].n = b.characterSet;
                a[c].o = (new Date).getTimezoneOffset();
                if (a.dataLayer)
                    for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                            ...o[1],
                            ...p[1]
                        })), {}))) zaraz.set(n[0], n[1], {
                        scope: "page"
                    });
                a[c].q = [];
                for (; a.zaraz.q.length;) {
                    const q = a.zaraz.q.shift();
                    a[c].q.push(q)
                }
                i.defer = !0;
                for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith(
                    "_zaraz_"))).forEach((s => {
                    try {
                        a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                    } catch {
                        a[c]["z_" + s.slice(7)] = r.getItem(s)
                    }
                }));
                i.referrerPolicy = "origin";
                i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                h.parentNode.insertBefore(i, h)
            };
            ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body>
    <!-- <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-map"></span></div>
                            <span class="text">Office of the Governor</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="ccb5a3b9bea9a1ada5a08ca9a1ada5a0e2afa3a1">Mandera county</a></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+254 721 2355 98</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <!-- <img src="{{asset('front/images/lo.png')}}" alt="" width="100" height="100"> -->

            <div class="col-md-8  heading-section heading-section-black ftco-animate">
                <h2 class="mb-4"><span>Inua </span><span>Youth</span>Mandera</h2>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="/about-us" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/gallery/view" class="nav-link">Gallery</a></li>

                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item">
                    <a href="/login" class="nav-link" id="loginLink">Login</a>
                   </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | Powered <i class="icon-heart" aria-hidden="true"></i> by <a
                            href="" target="_blank">Abdotech Solution</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/aos.js')}}"></script>
    <script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('front/js/scrollax.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!-- Your existing JavaScript code -->
<script>
    $(document).ready(function() {
        $('#youth').modal('show');
        $('#termsModal').modal('hide');
        $('#proceedButton').hide();
        $('#acceptCheckbox').change(function() {
            if ($(this).prop('checked')) {
                $('#proceedButton').show();
            } else {
                $('#proceedButton').hide();
            }
        });
    });

    function proceedToLogin() {
        // Your proceed to login function
    }
</script>

<script>
    $(document).ready(function() {
        
        $('#proceedB').hide();
        $('#acceptterm').change(function() {
            if ($(this).prop('checked')) {
                $('#proceedB').show();
            } else {
                $('#proceedB').hide();
            }
        });
    });

    function proceedToLogin() {
        // Your proceed to login function
    }
</script>

<script>
    $(document).ready(function () {
        $('#loginLink').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior
            // Trigger the modal with ID 'termsModal'
            $('#termsModal').modal('show');
        });
    });
</script>