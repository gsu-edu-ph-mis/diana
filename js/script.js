jQuery(document).ready(function ($) {
    $.fn.isInViewport = function () {
        var $this = $(this)
        if ($this.length) {
            var elementTop = $this.offset().top;
            var elementBottom = elementTop + $this.outerHeight();

            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            var offset = $this.outerHeight();
            return elementBottom - offset > viewportTop && elementTop + offset < viewportBottom;
        }
    };

    (function ($) {

        /* Nav */
        if ($('#nav-toggle').is(':visible') === true) { /* Do this on mobile only */
            $('.nav-expandables').find('.current-menu-ancestor').toggleClass('menu-show'); /* Expand menus up to current item */
        }
        $(document).on('click.diana', function (e) { /* Hide subnavs when click is not on nav */
            if ($('#nav-toggle').is(':visible') === false) { /* Do this only in desktop, where nav-toggle is hidden */
                $('.nav .menu-show').removeClass('menu-show');
            }

        }).on('click.diana', '.nav-expandables', function (e) { /* Do not close subnavs if nav was clicked */
            e.stopPropagation();

        }).on('click.diana', '.menu-expander', function (e) {
            var parent = $(this).parent();

            if ($('#nav-toggle').is(':visible') === false) { /* Do this only in desktop, where nav-toggle is hidden */
                parent.siblings().removeClass('menu-show').find('.menu-show').removeClass('menu-show');
            }
            parent.toggleClass('menu-show');
        }).on('click.diana', '#nav-toggle', function (e) { /* Toggle main nav class */
            // var navMain = $('#nav-main');

            // $(this).toggleClass('toggle-active');

            // navMain.toggleClass('menu-show');

        });
        
        $('#college-menu').on('click.diana', 'a', function (e) {
            var menu = $('#college-menu');
            var programs = $('#data-programs');
            var anchor = $(this)
            anchor.toggleClass('checked')

            menu.find('a').each(function () {
                var $a = $(this),
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
            var $a = $(this),
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
            $('.vid-gallery').toggleClass('roll')
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

            if ($('#section-counters').isInViewport()) {
                $('.counters').each(function (index) {
                    var $counter = $(this)
                    var done = $counter.data('done')
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


        var tick = function () {
            var now = new Date();

            try {
                var date = now.toLocaleDateString('en-PH', {
                    timeZone: 'Asia/Manila',
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                })
                var time = now.toLocaleTimeString('fil-PH', {
                    timeZone: 'Asia/Manila',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                })

                $('#date').html(date)
                $('#date2').html(date)
                $('#clock').html(time)
                $('#clock2').html(time)
            } catch (err) {
                $('#date').html(now.toDateString())
                $('#date2').html(now.toDateString())
                $('#clock').html(now.toTimeString().split(' ')[0])
                $('#clock2').html(now.toTimeString().split(' ')[0])
            }


        }
        tick();
        setInterval(tick, 250);

        // 
        if (document.getElementById('map')) {
            var map = L.map('map');
            map.setView([10.650, 122.65067], 12);
            map.scrollWheelZoom.disable();

            var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia29zaW5peCIsImEiOiJjamFsd2t3Y3QydW05MzNxdXUyeWV6azhoIn0.aqHKe7JGKQrNMD5-WP8xDQ', {
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

            var polygon = L.polygon([
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


        // 
    })($);

    try {
        $('[data-toggle="tooltip"]').tooltip()
    } catch (_) { }


    var getRandomInt = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // Faculty Roster
    function toggler(index) {
        $('#faculty-roster').find('.coin-' + index).toggleClass('flipped');
    }
    (function loop() {
        var timeOut = getRandomInt(1000, 3000);
        setTimeout(function () {
            toggler(getRandomInt(1, 15));
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