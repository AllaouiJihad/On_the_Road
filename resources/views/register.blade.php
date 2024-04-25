<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2024 10:43:53 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{asset('assets/js/validation.js')}}"></script>
    <meta name="robots" content="noindex, follow">
    <script nonce="9689140a-b022-4b3f-b57e-29e29385c581">
        try {
            (function(w, d) {
                ! function(k, l, m, n) {
                    k[m] = k[m] || {};
                    k[m].executed = [];
                    k.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    k.zaraz.q = [];
                    k.zaraz._f = function(o) {
                        return async function() {
                            var p = Array.prototype.slice.call(arguments);
                            k.zaraz.q.push({
                                m: o,
                                a: p
                            })
                        }
                    };
                    for (const q of ["track", "set", "debug"]) k.zaraz[q] = k.zaraz._f(q);
                    k.zaraz.init = () => {
                        var r = l.getElementsByTagName(n)[0],
                            s = l.createElement(n),
                            t = l.getElementsByTagName("title")[0];
                        t && (k[m].t = l.getElementsByTagName("title")[0].text);
                        k[m].x = Math.random();
                        k[m].w = k.screen.width;
                        k[m].h = k.screen.height;
                        k[m].j = k.innerHeight;
                        k[m].e = k.innerWidth;
                        k[m].l = k.location.href;
                        k[m].r = l.referrer;
                        k[m].k = k.screen.colorDepth;
                        k[m].n = l.characterSet;
                        k[m].o = (new Date).getTimezoneOffset();
                        if (k.dataLayer)
                            for (const x of Object.entries(Object.entries(dataLayer).reduce(((y, z) => ({
                                    ...y[1],
                                    ...z[1]
                                })), {}))) zaraz.set(x[0], x[1], {
                                scope: "page"
                            });
                        k[m].q = [];
                        for (; k.zaraz.q.length;) {
                            const A = k.zaraz.q.shift();
                            k[m].q.push(A)
                        }
                        s.defer = !0;
                        for (const B of [localStorage, sessionStorage]) Object.keys(B || {}).filter((D => D
                            .startsWith("_zaraz_"))).forEach((C => {
                            try {
                                k[m]["z_" + C.slice(7)] = JSON.parse(B.getItem(C))
                            } catch {
                                k[m]["z_" + C.slice(7)] = B.getItem(C)
                            }
                        }));
                        s.referrerPolicy = "origin";
                        s.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(k[
                            m])));
                        r.parentNode.insertBefore(s, r)
                    };
                    ["complete", "interactive"].includes(l.readyState) ? zaraz.init() : k.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" />
                                <small></small>
                            </div>
                            @error('name')
                                <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email"><i class="fa-solid fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"  />
                                <small></small>
                            </div>
                            @error('email')
                                <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="re-pass"><i class="fa-solid fa-phone"></i></label>
                                <input type="text" name="tel" id="re_pass" placeholder="Your phone" value="{{ old('tel') }}"  />
                                <small></small>
                            </div>
                            @error('tel')
                                <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" value="{{ old('password') }}" />
                                <small></small>
                            </div>
                            @error('password')
                                <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('assets/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="/signin" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"86d7fb13adb00f7c","b":1,"version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2024 10:43:55 GMT -->

</html>
