jQuery(document).ready(function ($) {
    $.fn.isInViewport = function () {
        const $this = $(this)
        if ($this.length) {
            const elementTop = $this.offset().top;
            const elementBottom = elementTop + $this.outerHeight();

            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            const offset = $this.outerHeight();
            return elementBottom - offset > viewportTop && elementTop + offset < viewportBottom;
        }
    };

    (function ($) {

        /* Nav */
        
        $(document).on('click.diana', function (e) { 
            $('#main-bar .menu-show').removeClass('menu-show');

        }).on('click.diana', '#main-bar', function (e) { /* Do not close subnavs if nav was clicked */
            e.stopPropagation();

        }).on('click.diana', '#main-bar .menu-expander', function (e) {
            const $parent = $(this).parent();

            $parent.siblings().removeClass('menu-show').find('.menu-show').removeClass('menu-show');
            $parent.toggleClass('menu-show');
        });

        $('#mobile-menu').on('click.diana', '.menu-expander', function (e) {
                let $parent = $(this).parent();
                let $subMenu = $parent.find('.sub-menu')
                if($parent.hasClass('menu-show')){
                    $subMenu.height(0)
                    $parent.removeClass('menu-show');
                } else {
                    let height = $subMenu.find('> li').height() * $subMenu.find('> li').length
                    $subMenu.height(height)
                    $parent.addClass('menu-show');
                }
        })
        $('#college-menu').on('click.diana', 'a', function (e) {
            const menu = $('#college-menu');
            const programs = $('#data-programs');
            const anchor = $(this)
            anchor.toggleClass('checked')

            menu.find('a').each(function () {
                const $a = $(this),
                    href = $a.attr('href');

                if ($a.hasClass('checked')) {
                    programs.find(href).show('slow')
                } else {
                    programs.find(href).hide('slow')
                }
            })
            if (menu.find('a.checked').length <= 0) {
                programs.children().each(function () {
                    $(this).stop().show('fast')
                })
            }

            e.preventDefault();
        });
        $('.scrolling-nav').on('click.diana', 'a', function (e) {
            const $a = $(this),
                href = $a.attr('href');

            if (href.includes('#')) {

                $('html,body').animate({
                    scrollTop: $(href).offset().top - 40
                }, 400, 'swing', function () {
                    window.location.hash = href;
                });
            }

        });
        const audioBackToTop = new Audio(window.mediaDirUrl + '/media/back-to-top.mp3');
        $('#back-to-top').on('click.diana', function (e) { /* Toggle main nav class */
            $('#back-to-top').addClass('play') ;
            audioBackToTop.play();
            $('html,body').animate({
                scrollTop: 0
            }, 1000, null, function(){
                $('#back-to-top').removeClass('play') ;
            });
        });
        $('.btn-videos').on('click.diana', function (e) { /* Toggle main nav class */
            $('.video-roll').toggleClass('roll')
            let hv = document.getElementById("homeVideo")
            if(hv.paused){
                if(hv.readyState === 4) hv.play()
            } else {
                hv.pause()
            }
        });

        function windowOnScroll(scroll, dir) {
            // console.log(scroll, dir)
            if (scroll < 50) {
                $('body').removeClass('scrolled')
            } else {
                $('body').addClass('scrolled')
            }
            if (scroll < 200) {
                $('body').removeClass('scrolled200')
            } else {
                $('body').addClass('scrolled200')
            }
            if (dir == 'up') {
                $('body').addClass('scrollingUp')
            } else if (dir == 'down') {
                $('body').removeClass('scrollingUp')
            }

            if ($('#section-journals').isInViewport()) {
                $('#section-journals').addClass('anim8')
            }
            if ($('#section-counters').isInViewport()) {
                $('.counters').each(function (index) {
                    const $counter = $(this)
                    const done = $counter.data('done')
                    if (done !== true) {
                        $counter.stop().delay(index * 300).animate({ fontSize: "2.8rem" }, 400, 'swing', function () {
                            $counter.data('done', true)
                        })
                    }
                })
            }
            
        }

        let lastScroll = window.scrollY;
        let ticking = false;
        document.addEventListener("scroll", (event) => {

            if (!ticking) {
                window.requestAnimationFrame(() => {
                    let dir = ''
                    if (lastScroll > window.scrollY) { // true if upwards
                        dir = 'up'
                    } else if (lastScroll < window.scrollY) {
                        dir = 'down'
                    }
                    windowOnScroll(lastScroll, dir);
                    ticking = false;
                    lastScroll = window.scrollY;
                });

                ticking = true;
            }
        });
        document.dispatchEvent(new Event("scroll")); // Manual


        

        const tick = function () {
            const now = new Date();

            try {
                const date = now.toLocaleDateString('en-PH', {
                    timeZone: 'Asia/Manila',
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                })
                const time = now.toLocaleTimeString('fil-PH', {
                    timeZone: 'Asia/Manila',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                })
                
                $('.date-ticker').html(date)
                $('.clock-ticker').html(time)

                const clockTime = now.toLocaleTimeString('fil-PH', {
                    timeZone: 'Asia/Manila',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hourCycle: 'h23',
                })

                let timeParts = clockTime.split(':')
                let seconds = parseInt(timeParts.at(-1));
                let minutes = parseInt(timeParts.at(1));
                let hours = parseInt(timeParts.at(0));

                let rotate = seconds * 6 - 90
                if(rotate < 0) {
                    rotate = 360 + rotate
                }
                $('.arm-second').attr(`style`, `rotate: ${rotate}deg`)

                let rotateM = minutes * 6 - 90
                if(rotateM < 0) {
                    rotateM = 360 + rotateM
                }
                $('.arm-minute').attr(`style`, `rotate: ${rotateM}deg`)

                let rotateH = hours * 30 - 90
                if(rotateH < 0) {
                    rotateH = 360 + rotateH
                }
                $('.arm-hour').attr(`style`, `rotate: ${rotateH}deg`)

            } catch (err) {
                console.error(err)
                $('.date-ticker').html(now.toDateString())
                $('.clock-ticker').html(now.toTimeString().split(' ')[0])
            }


        }
        tick();
        createAnimationFrameRunner(tick, 900);

        // Video gallery
        document.querySelectorAll('.change-video').forEach(element => {
            element.addEventListener('click', (e) => {
                // console.log(element)
                const player = videojs('my-video')
                player.src({
                    src: element.dataset?.src,
                    type: element.dataset?.type
                });
                player.play();
            });
        });

        // Maps
        if (document.getElementById('map')) {
            let map = L.map('map');
            map.setView([10.650, 122.65067], 12);
            map.scrollWheelZoom.disable();

            let tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia29zaW5peCIsImEiOiJjamFsd2t3Y3QydW05MzNxdXUyeWV6azhoIn0.aqHKe7JGKQrNMD5-WP8xDQ', {
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

            let polygon = L.polygon([
                [10.6990108, 122.6498571],
                [10.6980449, 122.6508093],
                [10.6984059, 122.6512063],
                [10.6984389, 122.6511741],
                [10.6984883, 122.6512230],
                [10.6984369, 122.6512827],
                [10.6991795, 122.6520860],
                [10.7000703, 122.6511459],
                [10.7003233, 122.6508602],
                [10.7007516, 122.6503050],
                [10.6998568, 122.6493314],
                [10.6991544, 122.6500060],
                [10.6990108, 122.6498571],
            ], { color: 'orange' }).bindPopup("5 hectares");
            polygon.addTo(map);

            L.marker([10.7003233, 122.6508602])
                .addTo(map)
                .bindPopup("<a href='" + window.homeUrl + "/salvador'>Salvador Campus</a>");


            polygon = L.polygon([
                [10.6194448, 122.5937879],
                [10.6188743, 122.5976385],
                [10.6177542, 122.5970157],
                [10.6181925, 122.5933632],
                [10.6194448, 122.5937879],
            ], { color: 'orange' }).bindPopup("5 hectares");
            polygon.addTo(map);

            L.marker([10.6187542, 122.5953632])
                .addTo(map)
                .bindPopup("<a href='" + window.homeUrl + "/mosqueda'>Mosqueda Campus</a>");

            polygon = L.polygon([
                [10.5838882, 122.6716331],
                [10.5839687, 122.6713986],
                [10.5842046, 122.6711531],
                [10.5843011, 122.6711203],
                [10.5837542, 122.6705312],
                [10.5830785, 122.6699584],
                [10.5828909, 122.6699966],
                [10.5824511, 122.6706458],
                [10.5824029, 122.6707549],
                [10.5838882, 122.6716331],
            ], { color: 'orange' }).bindPopup("2 hectares");
            polygon.addTo(map);

            L.marker([10.5839687, 122.6713986])
                .addTo(map)
                .bindPopup("<a href='" + window.homeUrl + "/baterna'>Baterna Campus</a>");

        }

        // asasa
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            // initialSlide: 2,//0 based
            autoplay: {
                delay: 3000, // Time in milliseconds between auto-swipes
                disableOnInteraction: true, // Disable autoplay  after manual swiping
            },
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: true,
            },
            pagination: {
              el: ".swiper-pagination",
            },
        });
        // swiper.slidePrev()
        // swiper.autoplay.start()
        // 
    })($);

    try {
        $('[data-toggle="tooltip"]').tooltip()
    } catch (_) { }


    const getRandomInt = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // Faculty Roster
    function facultyFlipper(index) {
        $('#faculty-roster').find('.coin-' + index).toggleClass('flipped');
    }
    (function loop() {
        const timeOut = getRandomInt(1000, 3000);
        setTimeout(function () {
            facultyFlipper(getRandomInt(1, 15));
            loop();
        }, timeOut);
    }());

    const toggleSound = new Audio(window.mediaDirUrl + '/media/toggle.mp3');
   
    jQuery('#toggler').on('click', function(e){
        jQuery('#toggler').toggleClass('open')
        jQuery('body').toggleClass('menu-open')
        toggleSound.play()
    })//.trigger('click')

    // SDG
    const isTouchDevice = 'ontouchstart' in document.documentElement;

    if (isTouchDevice) {
        // Touch devices: use touchstart
        jQuery('.sdg .scene').on('touchstart', function (event) {
            // Your code for touchstart event
            jQuery(this).find('.coin').toggleClass('flipped')
        });
        
    } else {
        // Non-touch devices: use mouseenter
        jQuery('.sdg .scene').on('mouseenter', function (event) {
            // Your code for mouseenter event
            jQuery(this).find('.coin').addClass('flipped')
        });
        jQuery('.sdg .scene').on('mouseleave', function (event) {
            // Your code for mouseenter event
            jQuery(this).find('.coin').removeClass('flipped')
        });
    }

    document.getElementById('track')?.addEventListener('timeupdate', function (e) {
        let currentTimeSec = Math.floor(e.target.currentTime);

        $('#lyrics-area span').css({
            color: '',
        })
        let selectors = Array.from(Array(currentTimeSec).keys()).map(i => '.' + (i + 1))
        $('#lyrics-area').find(selectors.join(', ')).css({
            color: '#0062cc',
        })
    }, false);

});

/**
 * A generic requestAnimationFrame wrapper function
 * 
 * Usage:
 * let stopThis = createAnimationFrameRunner(tick, 900);
 * setTimeout(stopThis, 5000);
 * @param {*} callback 
 * @param {*} debounceTime 
 * @returns 
 */
function createAnimationFrameRunner(callback, debounceTime = 0) {
    let animationFrameId = null; // Store the requestAnimationFrame ID
    let lastTimestamp = 0; // Track the last executed timestamp

    function frame(timestamp) {
        // Check if the debounce threshold is met
        if (timestamp - lastTimestamp >= debounceTime) {
            lastTimestamp = timestamp; // Update the last executed timestamp
            if (callback) callback(timestamp);
        }

        // Continue the animation loop
        animationFrameId = requestAnimationFrame(frame);
    }

    // Start the animation immediately
    animationFrameId = requestAnimationFrame(frame);

    // Return a function to stop the animation
    return () => {
        if (animationFrameId) {
            cancelAnimationFrame(animationFrameId);
            animationFrameId = null;
        }
    };
}
