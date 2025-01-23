<!-- MAIN WRAPPER END -->
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }

        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    })();
</script>
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
<script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/waypoint.min.js?ver=1.0.0" id="waypointjs-js"></script>
<script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/themex-ppro-elementor/assets/js/jquery.counterup.js?ver=1.0.0" id="counterupjs-js"></script>
<script type="text/javascript" defer src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.17" id="mc4wp-forms-api-js"></script>
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
            "id": 17066,
            "title": "Tramo%20%E2%80%93%20Travel%20Agency%20WordPress%20Theme",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://demo.themexbd.com/sk/tramo/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.3" id="elementor-frontend-js"></script>













<script>
// Check if the "success" parameter exists in the URL
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success')) {
    const successMessage = document.getElementById('successMessage');
    successMessage.style.display = 'block'; // Show the success message

    // Hide the message after 5 seconds
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 5000);

    // Optional: Remove "success" from the URL without reloading
    const newUrl = window.location.origin + window.location.pathname;
    window.history.replaceState({}, document.title, newUrl);
}
</script>