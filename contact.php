<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="tramo is one of the best WP theme, There have many feature avaiable.">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://demo.themexbd.com/sk/tramo/xmlrpc.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>AIHUT</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Tramo &raquo; Feed" href="https://demo.themexbd.com/sk/tramo/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Tramo &raquo; Comments Feed" href="https://demo.themexbd.com/sk/tramo/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.themexbd.com\/sk\/tramo\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='flaticon-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/flaticon.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='icofont-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/icofont.min.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='aprova-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/aprova-icon.css?ver=6.7.1' type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='animatecss-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/jqueryplugincss/animate.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='tramo-fonts-css' href='https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&#038;display=swap&#038;ver=1737542292' type='text/css' media='all' />
    <link rel='stylesheet' id='all_plugin-css' href='https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/css/all_plugin.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/css/bootstrap.min.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='venobox-css' href='https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/venobox/venobox.min.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='tramo_style-css' href='https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/style.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='main-stylesheet -css' href='https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/css/style.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.31.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='https://demo.themexbd.com/sk/tramo/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1732256278' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.24.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css' href='https://demo.themexbd.com/sk/tramo/wp-content/uploads/elementor/css/post-7.css?ver=1732256278' type='text/css' media='all' />
    <link rel='stylesheet' id='swipermin-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/jqueryplugincss/txbd-swiper-bundle.min.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style_plugin-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/css/maincss/style.plugin.css?ver=6.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.24.3' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.24.3' type='text/css' media='all' />
    <link rel='stylesheet' id='widget-google_maps-css' href='https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/css/widget-google_maps.min.css?ver=3.24.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-11552-css' href='https://demo.themexbd.com/sk/tramo/wp-content/uploads/elementor/css/post-11552.css?ver=1732295991' type='text/css' media='all' />
    <style id='tramo-breadcrumb-inline-css' type='text/css'>
        .tramo-header-top {}

        .logo a {}

        .breadcumb-area::before,
        .breadcumb-blog-area::before {}

        a.dtbtn,
        .creative_header_button .dtbtn,
        .em-quearys-menu i,
        .mini_shop_content a span.count {}

        a.dtbtn:hover,
        .creative_header_button .dtbtn:hover,
        .em-quearys-menu i:hover,
        .mini_shop_content a span.count:hover {}

        .witrfm_area.witrfm_area {}
    </style>
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.7.1'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.24.3" id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="https://demo.themexbd.com/sk/tramo/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://demo.themexbd.com/sk/tramo/wp-json/wp/v2/pages/11552" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.themexbd.com/sk/tramo/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.1" />
    <link rel="canonical" href="https://demo.themexbd.com/sk/tramo/contact/" />
    <link rel='shortlink' href='https://demo.themexbd.com/sk/tramo/?p=11552' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://demo.themexbd.com/sk/tramo/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themexbd.com%2Fsk%2Ftramo%2Fcontact%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://demo.themexbd.com/sk/tramo/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themexbd.com%2Fsk%2Ftramo%2Fcontact%2F&#038;format=xml" />
    <meta name="generator" content="Redux 4.4.18" />
    <meta name="generator" content="Elementor 3.24.3; features: additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <link rel="icon" href="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/favicon_1.png" sizes="32x32" />
    <link rel="icon" href="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/favicon_1.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/favicon_1.png" />
    <meta name="msapplication-TileImage" content="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/favicon_1.png" />
    <style id="tramo_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .tramo_menu>ul>li>a,
        .heading_style_4 .tramo_menu>ul>li>a,
        .main_menu_header_address_text h3,
        .main_menu_header_address_text h4 a {
            color: #002b4b;
        }

        .tramo_nav_area.prefix,
        .hbg2 {
            background-color: rgba(213, 227, 236, 0.9);
        }

        .tramo_nav_area,
        .trp_nav_area,
        .transprent-menu .tramo_nav_area {
            padding-right: 80px;
            padding-left: 80px;
        }

        .breadcumb-area,
        .breadcumb-blog-area {
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url('https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/breadkum.jpg');
            background-size: cover;
        }

        .breadcumb-area,
        .breadcumb-area.breadcumb_st2,
        .breadcumb-blog-area {
            padding-top: 180px;
            padding-bottom: 140px;
        }

        .witrfm_area:before {
            background-color: rgba(0, 80, 159, 0);
        }

        .footer-middle {
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url('https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/footer_bg.jpg');
            background-size: cover;
        }

        .copy-right-text a,
        .footer-menu ul li a:hover {
            color: #1b2d46;
        }
    </style>
</head>

<body class="page-template page-template-template-home page-template-template-home-php page page-id-11552 wp-embed-responsive elementor-default elementor-kit-7 elementor-page elementor-page-11552">

    <!-- MAIN WRAPPER START -->
    <div class="wrapper">

        <!-- MAIN HEADER START -->
        <?php include_once('includes/navbar.php') ?>
        <!-- END MAIN HEADER -->




     
        <div class="template-home-wrapper">
            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="11552" class="elementor elementor-11552">
                    <div class="elementor-element elementor-element-d8ec2e5 e-flex e-con-boxed e-con e-parent" data-id="d8ec2e5" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-0dff1ab elementor-widget elementor-widget-tts" data-id="0dff1ab" data-element_type="widget" data-widget_type="tts.default">
                                <div class="elementor-widget-container">
                                    <!-- title center -->
                                    <div class="tts text-center">
                                        <div class="ttin">

                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title top -->


                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title middle -->
                                            <h2 class="txbdstitle sttwo hlight">you can <span>contact </span>us from here</h2>
                                            <!-- title bottom -->


                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->



                                            <!-- content -->
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available. There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available.
                                                </p>

                                        </div>
                                        <!-- inner title -->

                                    </div>

                                </div>
                            </div>
                            <div class="elementor-element elementor-element-de38647 tramo-star-rating--align-center tramo-star-rating--align-center elementor-widget elementor-widget-witr_section_apartment" data-id="de38647" data-element_type="widget" data-widget_type="witr_section_apartment.default">
                                <div class="elementor-widget-container">

                                    <div class="apartment_area">
                                        <div class="apartment_text">
                                            <!-- title -->

                                            <!-- content -->

                                        </div>
                                        <div class="witr_apartment_form">

                                            <div class="wpcf7 no-js" id="wpcf7-f22637-p11552-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="/sk/tramo/contact/#wpcf7-f22637-p11552-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="22637" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.9.8" />
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f22637-p11552-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post" value="11552" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="twr_form_box">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="text-30"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="text-30" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="twr_form_box">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="email-380"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="email-380" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="twr_form_box">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="number-19"><input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="number" name="number-19" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="twr_form_box">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="text-31"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Subject" value="" type="text" name="text-31" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="twr_form_box ">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="textarea"><textarea cols="40" rows="6" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message" name="textarea"></textarea></span>
                                                                </p>
                                                            </div>
                                                            <div class=" text-center">
                                                                <p><button type="submit" class="btn btn-primary">SEND NOW</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7b13e97 e-flex e-con-boxed e-con e-parent" data-id="7b13e97" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-20efe06 e-con-full e-flex e-con e-child" data-id="20efe06" data-element_type="container">
                                <div class="elementor-element elementor-element-a5f9aff elementor-widget elementor-widget-tts" data-id="a5f9aff" data-element_type="widget" data-widget_type="tts.default">
                                    <div class="elementor-widget-container">
                                        <!-- title center -->
                                        <div class="tts text-center">
                                            <div class="ttin">

                                                <!-- icon position -->

                                                <!-- image -->
                                                <div class="ttit">
                                                    <img decoding="async" width="139" height="150" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_3.png" class="attachment-large size-large wp-image-27854" alt="" />
                                                </div>
                                                <!-- icon -->

                                                <!-- bar -->
                                                <!-- circle bar -->


                                                <!-- end icon position -->

                                                <!-- title top -->
                                                <h4 class="txbdstitle tsmall stone hlight txbdbcolor">ADDRESS </h4>


                                                <!-- icon position -->

                                                <!-- end icon position -->

                                                <!-- title middle -->
                                                <!-- title bottom -->



                                                <!-- content -->
                                                <p>Anchorage Street, Alaska 99508, United States America. </p>

                                            </div>
                                            <!-- inner title -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-63b65bc e-con-full e-flex e-con e-child" data-id="63b65bc" data-element_type="container">
                                <div class="elementor-element elementor-element-c452c20 elementor-widget elementor-widget-tts" data-id="c452c20" data-element_type="widget" data-widget_type="tts.default">
                                    <div class="elementor-widget-container">
                                        <!-- title center -->
                                        <div class="tts text-center">
                                            <div class="ttin">

                                                <!-- icon position -->

                                                <!-- image -->
                                                <div class="ttit">
                                                    <img decoding="async" width="162" height="145" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_2.png" class="attachment-large size-large wp-image-27853" alt="" />
                                                </div>
                                                <!-- icon -->

                                                <!-- bar -->
                                                <!-- circle bar -->


                                                <!-- end icon position -->

                                                <!-- title top -->
                                                <h4 class="txbdstitle tsmall stone hlight txbdbcolor">EMAIL </h4>


                                                <!-- icon position -->

                                                <!-- end icon position -->

                                                <!-- title middle -->
                                                <!-- title bottom -->



                                                <!-- content -->
                                                <p>demo@example.com <br> info@example.com </p>

                                            </div>
                                            <!-- inner title -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3d37133 e-con-full e-flex e-con e-child" data-id="3d37133" data-element_type="container">
                                <div class="elementor-element elementor-element-960220d elementor-widget elementor-widget-tts" data-id="960220d" data-element_type="widget" data-widget_type="tts.default">
                                    <div class="elementor-widget-container">
                                        <!-- title center -->
                                        <div class="tts text-center">
                                            <div class="ttin">

                                                <!-- icon position -->

                                                <!-- image -->
                                                <div class="ttit">
                                                    <img decoding="async" width="152" height="146" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_1.png" class="attachment-large size-large wp-image-27852" alt="" />
                                                </div>
                                                <!-- icon -->

                                                <!-- bar -->
                                                <!-- circle bar -->


                                                <!-- end icon position -->

                                                <!-- title top -->
                                                <h4 class="txbdstitle tsmall stone hlight txbdbcolor">PHONE </h4>


                                                <!-- icon position -->

                                                <!-- end icon position -->

                                                <!-- title middle -->
                                                <!-- title bottom -->



                                                <!-- content -->
                                                <p>+880 65843 749385 <br> +880 5748 758395 </p>

                                            </div>
                                            <!-- inner title -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3b83cf8 e-flex e-con-boxed e-con e-parent" data-id="3b83cf8" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-8a0f17a elementor-widget elementor-widget-tts" data-id="8a0f17a" data-element_type="widget" data-widget_type="tts.default">
                                <div class="elementor-widget-container">

                                    <!-- title right -->
                                    <div class="tts ttssb">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <div class="ttin text-left">
                                                    <!-- title top -->

                                                    <!-- title middle -->
                                                    <h2 class="txbdstitle sttwo hlight">Together, let's make great things happen!
Explore open positions. 

 <span>Work with Rahat Group.</span> please fill the form</h2>
                                                    <!-- title bottom -->
                                                    <!-- image -->
                                                    <!-- icon -->

                                                    <!-- bar -->
                                                    <!-- circle bar -->


                                                    <!-- content -->
                                                </div>
                                                <!-- inner title -->

                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <!-- button -->
                                                <div class="text-right ttitlebtn">
                                                    <a class="btnallt btnall btnallactive" href="#">JOIN OUR TEAM </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>

            </div>

        </div>


        <div class="all_footer_bg">
            <!-- middle and bottom AREA -->
            <div class="witrfm_area">


                <!-- FOOTER MIDDLE AREA -->
             
                <!-- END FOOTER MIDDLE AREA -->

                <!-- FOOTER BOTTOM AREA -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <!-- FOOTER COPYRIGHT STYLE 1 -->

                            <div class="col-lg-6 col-md-6  col-sm-12">
                                <div class="copy-right-text">
                                    <!-- FOOTER COPYRIGHT TEXT -->
                                    <p>
                                        Copyright © <a href="https://rahatitsolutions.com/">RahatIT Solutions</a> all rights reserved. </p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-12">
                                <div class="footer-menu">
                                    <!-- FOOTER COPYRIGHT MENU -->
                                    <ul id="menu-footer-menu" class="text-right">
                                        <li id="menu-item-19298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19298"><a href="#">Get Started</a></li>
                                        <li id="menu-item-14450" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14450"><a href="#">Agents</a></li>
                                        <li id="menu-item-14449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14449"><a href="#">Distributors</a></li>
                                        <li id="menu-item-14449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14449"><a href="#">Suppliers</a></li>
                                        <li id="menu-item-14448" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11552 current_page_item menu-item-14448"><a href="#" aria-current="page">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- FOOTER COPYRIGHT STYLE 3 -->

                        </div>
                    </div>
                </div>
                <!-- END FOOTER BOTTOM AREA -->

            </div>
            <!-- middle and bottom END -->

        </div>
    </div>

    <!-- MAIN WRAPPER END -->
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/wow.js?ver=1.0.0" id="wowjs-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/direction.js?ver=1.0.0" id="direction-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/txbd-swiper-bundle.min.js?ver=1.0.0" id="swiperjs-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/atheme.js?ver=1.0.0" id="txh-themejs-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.8" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.themexbd.com\/sk\/tramo\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.8" id="contact-form-7-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/js/bootstrap.min.js?ver=1" id="bootstrap-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/venobox/venobox.min.js?ver=1" id="venobox-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/js/theme-pluginjs.js?ver=1" id="theme-plugin-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/themes/tramo/assets/js/theme.js?ver=1" id="tramo-themes-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.24.3" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.24.3" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.24.3",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "home_screen": true,
                "ai-layout": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/demo.themexbd.com\/sk\/tramo\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/demo.themexbd.com\/sk\/tramo\/wp-admin\/admin-ajax.php"
            },
            "nonces": {
                "floatingButtonsClickTracking": "f2734332d0"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet", "viewport_tablet_extra", "viewport_laptop"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 11552,
                "title": "Contact%20%E2%80%93%20Tramo",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.3" id="elementor-frontend-js"></script>
</body>

</html>