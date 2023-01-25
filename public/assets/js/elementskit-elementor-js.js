! function (e, t) {
    "use strict";
    window.ElementsKit_Helper = {}, ElementsKit_Helper.setURLHash = function (t, n, i) {
        if (void 0 === t || !("ekit_hash_change" in t)) return;
        void 0 === i && (i = "ekit-handler-id");
        let s = "#" + e(n).data(i);
        window.location.hash = s
    }, ElementsKit_Helper.ajaxLoading = function (n, i) {
        if (n.hasClass("ekit-template-ajax--yes")) {
            var s = i.find("[data-ajax-post-id]");
            s.hasClass("is--loaded") || e.ajax({
                type: "POST",
                url: ekit_config.ajaxurl,
                data: {
                    action: "ekit_widgetarea_content",
                    nonce: ekit_config.nonce,
                    post_id: s.data("ajax-post-id")
                },
                success: function (n) {
                    s.addClass("is--loaded").html(n), s.find("[data-widget_type]").each((function () {
                        var n = e(this);
                        t.hooks.doAction("frontend/element_ready/" + n.data("widget_type"), n)
                    }))
                }
            })
        }
    }, ElementsKit_Helper.triggerClickOnEvent = function (t, n) {
        "click" !== t && n.on(t, (function () {
            e(this).trigger("click")
        }))
    };
    let n = {
        init: function () {
            var i = {
                "elementskit-blog-posts.default": n.BlogPosts,
                "elementskit-countdown-timer.default": n.Countdown_Timer,
                "elementskit-client-logo.default": n.Client_Logo,
                "elementskit-testimonial.default": n.Testimonial_Slider,
                "elementskit-image-comparison.default": n.Image_Comparison,
                "elementskit-progressbar.default": n.Progressbar,
                "elementskit-piechart.default": n.Piechart,
                "elementskit-funfact.default": n.Funfact,
                "elementskit-post-tab.default": n.PostTab,
                "elementskit-header-search.default": n.Header_Search,
                "elementskit-header-offcanvas.default": n.Header_Off_Canvas,
                "ekit-nav-menu.default": n.Nav_Menu,
                "elementskit-team.default": n.Team,
                "elementskit-simple-tab.default": n.Tab,
                "elementskit-back-to-top.default": n.Back_To_Top,
                "elementskit-image-accordion.default": n.Image_Accordion,
                "elementskit-whatsapp.default": n.Whatsapp
            };
            e.each(i, (function (e, n) {
                t.hooks.addAction("frontend/element_ready/" + e, n)
            }))
        },
        Image_Accordion: function (t) {
            const n = t.find(".elementskit-single-image-accordion");
            let i;
            for (let t = 0; t < n.length; t++) {
                let s = n[t];
                "yes" === e(s).data("active") && (i = n[t])
            }
            t.on("click", ".ekit-image-accordion-item", (function (t) {
                let n = e(this),
                    s = n.data("link"),
                    a = n.data("behavior"),
                    o = n.find("a, a *"),
                    l = e(t.target).is(o),
                    r = s.is_external ? s.is_external : "_self";
                if ("hover" === a || i === this) !l && s.url && window.open(s.url, r);
                else {
                    if (!n.hasClass("item-opened")) return i = "", e(this).closest(".elementskit-image-accordion-wraper").find(".ekit-image-accordion-item").removeClass("item-opened"), void n.addClass("item-opened");
                    if (n.hasClass("item-opened")) return void(!l && s.url && window.open(s.url, r))
                }
            }))
        },
        Nav_Menu: function (t) {
            if (t.find(".elementskit-megamenu-has").length > 0) {
                let n = t.find(".ekit-wid-con").data("responsive-breakpoint"),
                    i = t.find(".elementskit-megamenu-has"),
                    s = t.find(".elementskit-menu-container").outerHeight();
                e(window).on("resize", (function () {
                    t.find(".elementskit-megamenu-panel").css({
                        top: s
                    })
                })).trigger("resize"), i.on("mouseenter", (function () {
                    let t = e(this).data("vertical-menu"),
                        i = e(this).children(".elementskit-megamenu-panel");
                    if (e(this).hasClass("elementskit-dropdown-menu-full_width") && e(this).hasClass("top_position")) {
                        let t = Math.floor(e(this).position().left - e(this).offset().left),
                            n = e(this);
                        n.find(".elementskit-megamenu-panel").css("max-width", e(window).width()), e(window).on("resize", (function () {
                            n.find(".elementskit-megamenu-panel").css({
                                left: t + "px"
                            })
                        })).trigger("resize")
                    }!e(this).hasClass("elementskit-dropdown-menu-full_width") && e(this).hasClass("top_position") && e(this).on({
                        mouseenter: function () {
                            0 === e(".default_menu_position").length && e(this).parents(".elementor-section-wrap").addClass("default_menu_position")
                        },
                        mouseleave: function () {
                            0 !== e(".default_menu_position").length && e(this).parents(".elementor-section-wrap").removeClass("default_menu_position")
                        }
                    }), t && t !== undefined ? "string" == typeof t ? /^[0-9]/.test(t) ? e(window).on("resize", (function () {
                        i.css({
                            width: t
                        }), e(document).width() > Number(n) || i.removeAttr("style")
                    })).trigger("resize") : e(window).on("resize", (function () {
                        i.css({
                            width: t + "px"
                        }), e(document).width() > Number(n) || i.removeAttr("style")
                    })).trigger("resize") : i.css({
                        width: t + "px"
                    }) : e(window).on("resize", (function () {
                        i.css({
                            width: t + "px"
                        }), e(document).width() > Number(n) || i.removeAttr("style")
                    })).trigger("resize")
                })), i.trigger("mouseenter")
            }
            if (t.find(".ekit-nav-dropdown-click").length > 0) {
                let n = t.find(".ekit-wid-con").data("responsive-breakpoint");
                t.on("click", ".elementskit-dropdown-has > a", (function (i) {
                    if (i.preventDefault(), e(document).width() < Number(n)) return;
                    let s = e(this).parent(),
                        a = e(this).parents(".elementskit-dropdown-has"),
                        o = s.find(">.elementskit-dropdown, >.elementskit-megamenu-panel");
                    t.find(".elementskit-dropdown-has").not(a).find(">.elementskit-dropdown, >.elementskit-megamenu-panel").removeClass("ekit-dropdown-open-onclick"), o.toggleClass("ekit-dropdown-open-onclick")
                })), e(window).on("resize", (function () {
                    e(document).width() < Number(n) && t.find(".ekit-dropdown-open-onclick").removeClass("ekit-dropdown-open-onclick")
                })), e(document).on("click", (function (n) {
                    e(n.target).closest(".elementskit-dropdown-has").length || t.find(".ekit-dropdown-open-onclick").removeClass("ekit-dropdown-open-onclick")
                })), e(window).on("sticky:stick sticky:unstick", (t => {
                    e(t.target).find(".ekit-dropdown-open-onclick").removeClass("ekit-dropdown-open-onclick"), e(t.target).next().find(".ekit-dropdown-open-onclick").removeClass("ekit-dropdown-open-onclick")
                }))
            }
        },
        Progressbar: function (e) {
            var t = e.find(".single-skill-bar"),
                n = t.find(".skill-track"),
                i = t.find(".number-percentage"),
                s = i.data("value"),
                a = i.data("animation-duration") || 300;
            t.elementorWaypoint((function () {
                i.animateNumbers(s, !0, a), n.animate({
                    width: s + "%"
                }, a)
            }), {
                offset: "100%"
            })
        },
        Funfact: function (e) {
            var t = e.find(".elementskit-funfact"),
                n = t.find(".number-percentage"),
                i = n.data("value"),
                s = n.data("animation-duration") || 300;
            t.elementorWaypoint((function () {
                n.animateNumbers(i, !0, s)
            }), {
                offset: "100%"
            })
        },
        BlogPosts: function (e) {
            var t = e.find(".post-items");
            t.data("masonry-config") && t.imagesLoaded((function () {
                t.masonry()
            }))
        },
        Countdown_Timer: function (t) {
            var n = t.find(".ekit-countdown"),
                i = n.data(),
                s = "elementskit-inner-container ekit-countdown-inner",
                a = "elementskit-inner-container",
                o = "elementskit-timer-content ekit-countdown-inner";
            if (n.length) {
                switch (n[0].classList[0]) {
                    case "elementskit-countdown-timer":
                    default:
                        i.markup = '<div class="elementskit-timer-container elementskit-days"><div class="' + s + '"><div class="elementskit-timer-content"><span class="elementskit-timer-count">%-D </span><span class="elementskit-timer-title">' + i.dateEkitDay + '</span></div></div></div><div class="elementskit-timer-container elementskit-hours"><div class="' + s + '"><div class="elementskit-timer-content"><span class="elementskit-timer-count">%H </span><span class="elementskit-timer-title">' + i.dateEkitHour + '</span></div></div></div><div class="elementskit-timer-container elementskit-minutes"><div class="' + s + '"><div class="elementskit-timer-content"><span class="elementskit-timer-count">%M </span><span class="elementskit-timer-title">' + i.dateEkitMinute + '</span></div></div></div><div class="elementskit-timer-container elementskit-seconds"><div class="' + s + '"><div class="elementskit-timer-content"><span class="elementskit-timer-count">%S </span><span class="elementskit-timer-title">' + i.dateEkitSecond + "</span></div></div></div>";
                        break;
                    case "elementskit-countdown-timer-3":
                        i.markup = '<div class="elementskit-timer-container elementskit-days"><div class="' + o + '"><div class="' + a + '"><span class="elementskit-timer-count">%-D </span><span class="elementskit-timer-title">' + i.dateEkitDay + '</span></div></div></div><div class="elementskit-timer-container elementskit-hours"><div class="' + o + '"><div class="' + a + '"><span class="elementskit-timer-count">%H </span><span class="elementskit-timer-title">' + i.dateEkitHour + '</span></div></div></div><div class="elementskit-timer-container elementskit-minutes"><div class="' + o + '"><div class="' + a + '"><span class="elementskit-timer-count">%M </span><span class="elementskit-timer-title">' + i.dateEkitMinute + '</span></div></div></div><div class="elementskit-timer-container elementskit-seconds"><div class="' + o + '"><div class="' + a + '"><span class="elementskit-timer-count">%S </span><span class="elementskit-timer-title">' + i.dateEkitSecond + "</span></div></div></div>"
                }
                n.theFinalCountdown(i.ekitCountdown, (function (e) {
                    this.innerHTML = e.strftime(i.markup)
                })).on("finish.countdown", (function () {
                    this.innerHTML = i.finishTitle + "<br />" + i.finishContent, "elementskit-countdown-timer-4" === this.classList[0] && e(this).addClass("elementskit-coundown-finish")
                }))
            }
            let l = t.find(".elementskit-flip-clock"),
                r = l.data();
            if (l.length) {
                let e = [r.dateEkitWeek, r.dateEkitDay, r.dateEkitHour, r.dateEkitMinute, r.dateEkitSecond],
                    t = ["elementskit-wks", "elementskit-days", "elementskit-hrs", "elementskit-mins", "elementskit-secs"],
                    n = "";
                e.forEach((function (e, i) {
                    n += '<div class="elementskit-time ' + t[i] + ' ekit-countdown-inner"><span class="elementskit-count elementskit-curr elementskit-top"></span><span class="elementskit-count elementskit-next elementskit-top"></span><span class="elementskit-count elementskit-next elementskit-bottom"></span><span class="elementskit-count elementskit-curr elementskit-bottom"></span><span class="elementskit-label">' + e + "</span></div>"
                })), l.html(n);
                let i = l.children(".elementskit-mins"),
                    s = l.children(".elementskit-secs"),
                    a = l.children(".elementskit-hrs"),
                    o = l.children(".elementskit-days"),
                    d = l.children(".elementskit-wks"),
                    c = {
                        s: "",
                        m: "",
                        h: "",
                        d: "",
                        w: ""
                    },
                    m = function (e, t, n) {
                        e !== t && (e = 1 === e.toString().length ? "0" + e : e, t = 1 === t.toString().length ? "0" + t : t, n.removeClass("elementskit-flip"), n.children(".elementskit-curr").text(e), n.children(".elementskit-next").text(t), setTimeout((function (e) {
                            e.addClass("elementskit-flip")
                        }), 50, n))
                    };
                l.theFinalCountdown(r.ekitCountdown, (function (e) {
                    m(c.s, e.offset.seconds, s), m(c.m, e.offset.minutes, i), m(c.h, e.offset.hours, a), m(c.d, e.offset.days, o), m(c.w, e.offset.weeks, d), c.s = e.offset.seconds, c.m = e.offset.minutes, c.h = e.offset.hours, c.d = e.offset.days, c.w = e.offset.weeks
                })).on("finish.countdown", (function () {
                    this.innerHTML = r.finishTitle + "<br/>" + r.finishContent
                }))
            }
        },
        Client_Logo: function (e) {
            var t = e.find(".elementskit-clients-slider").data("config");
            t.arrows && (t.navigation = {
                prevEl: e.find(".slick-prev"),
                nextEl: e.find(".slick-next")
            }), t.dots && (t.pagination = {
                el: e.find(".swiper-pagination"),
                type: "custom",
                clickable: !0,
                renderCustom: (e, t, n) => {
                    var i = "";
                    for (let e = 1; e <= n; e++) i += '<li role="presentation" class="' + (t === e ? " swiper-pagination-bullet-active slick-active" : "swiper-pagination-bullet") + '"><button type="button" role="tab"  tabindex="0" aria-selected="true" class="">' + e + "</button></li>";
                    return i
                }
            });
            let n = new Swiper(e.find(".swiper-container"), t);
            t.autoplay && t.pauseOnHover && e.find(".swiper-container").hover((function () {
                n.autoplay.stop()
            }), (function () {
                n.autoplay.start()
            }))
        },
        Testimonial_Slider: function (e) {
            var t = e.find(".elementskit-testimonial-slider").data("config");
            t.arrows && (t.navigation = {
                prevEl: e.find(".slick-prev"),
                nextEl: e.find(".slick-next")
            }), t.dots && (t.pagination = {
                el: e.find(".swiper-pagination"),
                type: "custom",
                clickable: !0,
                renderCustom: (e, t, n) => {
                    var i = "";
                    for (let e = 1; e <= n; e++) i += '<li role="presentation" class="' + (t === e ? " swiper-pagination-bullet-active slick-active" : "swiper-pagination-bullet") + '"><button type="button" role="tab"  tabindex="0" aria-selected="true" class="">' + e + "</button></li>";
                    return i
                }
            });
            let n = new Swiper(e.find(".swiper-container"), t);
            t.autoplay && t.pauseOnHover && e.find(".swiper-container").hover((function () {
                n.autoplay.stop()
            }), (function () {
                n.autoplay.start()
            }))
        },
        Image_Comparison: function (e) {
            var t = e.find(".elementskit-image-comparison");
            t.imagesLoaded((function () {
                var e = {
                    orientation: t.hasClass("image-comparison-container-vertical") ? "vertical" : "horizontal",
                    before_label: t.data("label_before"),
                    after_label: t.data("label_after"),
                    default_offset_pct: t.data("offset"),
                    no_overlay: t.data("overlay"),
                    move_slider_on_hover: t.data("move_slider_on_hover"),
                    click_to_move: t.data("click_to_move")
                };
                t.twentytwenty(e)
            }))
        },
        Piechart: function (t) {
            var n = t.find(".colorful-chart"),
                i = n.data(),
                s = {
                    barColor: i.color,
                    lineWidth: i.linewidth,
                    trackColor: i.barbg
                };
            "pie_color_style" in i && (s = {
                gradientChart: !0,
                barColor: i.gradientcolor1,
                gradientColor1: i.gradientcolor2,
                gradientColor2: i.gradientcolor1,
                lineWidth: i.linewidth,
                trackColor: i.barbg
            }), n.elementorWaypoint((function () {
                e(this.element).myChart(s)
            }), {
                offset: "100%"
            })
        },
        PostTab: function (t) {
            var n = t.hasClass("is-click-yes") ? "click" : "mouseenter",
                i = t.find(".tab__list__item"),
                s = t.find(".tabItem");
            t.on(n, ".tab__list__item", (function () {
                var t = e(this),
                    n = s.eq(t.index());
                i.add(s).removeClass("active"), t.add(n).addClass("active")
            }))
        },
        Header_Search: function (t) {
            var n = t.find(".ekit_navsearch-button"),
                i = e("body");
            n.magnificPopup({
                type: "inline",
                fixedContentPos: !0,
                fixedBgPos: !0,
                overflowY: "auto",
                closeBtnInside: !1,
                prependTo: n.parent(".ekit-wid-con"),
                callbacks: {
                    beforeOpen: function () {
                        this.st.mainClass = "my-mfp-slide-bottom ekit-promo-popup"
                    },
                    open: function () {
                        i.css("overflow", "hidden")
                    },
                    close: function () {
                        i.css("overflow", "auto")
                    }
                }
            })
        },
        Team: function (e) {
            var t = e.find(".ekit-team-popup");
            t.magnificPopup({
                type: "inline",
                fixedContentPos: !0,
                fixedBgPos: !0,
                overflowY: "auto",
                closeBtnInside: !0,
                prependTo: e.find(".ekit-wid-con"),
                showCloseBtn: !1,
                callbacks: {
                    beforeOpen: function () {
                        this.st.mainClass = "my-mfp-slide-bottom ekit-promo-popup ekit-team-modal"
                    }
                }
            }), e.find(".ekit-team-modal-close").on("click", (function () {
                t.magnificPopup("close")
            }))
        },
        Tab: function (e) {
            var t = e.find('[data-ekit-toggle="tab"]'),
                n = t.data("ekit-toggle-trigger"),
                i = e.data("settings");
            ElementsKit_Helper.triggerClickOnEvent(n, t), t.on("shown.bs.tab", (function () {
                ElementsKit_Helper.setURLHash(i, this, "ekit-handler-id")
            }))
        },
        Header_Off_Canvas: function (e) {
            var t = e.find(".ekit-sidebar-group");
            e.find(".ekit_offcanvas-sidebar, .ekit_close-side-widget, .ekit-overlay").on("click", (function (e) {
                e.preventDefault(), t.toggleClass("ekit_isActive")
            }))
        },
        Back_To_Top: function (t) {
            const n = t.find(".ekit-btt__button"),
                {
                    offset_top: i,
                    show_after: s,
                    show_scroll: a,
                    style: o,
                    fg: l,
                    bg: r
                } = t.find(".ekit-btt").data("settings");
            if ("progress_indicator" === o) {
                const e = t.find("#canvas");
                animateCircle({
                    element: e,
                    size: 100,
                    percentage: 100,
                    onScroll: !0,
                    speed: 5,
                    color: l,
                    background_clr: r,
                    stroke_width: 10
                })
            }
            n.on("click", (e => {
                e.target;
                var t;
                t = i, window.scrollTo({
                    left: 0,
                    top: t,
                    behavior: "smooth"
                })
            })), "yes" === a && e(document).on("scroll", (() => {
                (e => {
                    let t = n.hasClass("ekit-tt-show");
                    e && !t && n.addClass("ekit-tt-show"), !e && t && n.removeClass("ekit-tt-show")
                })(Math.ceil(window.pageYOffset) > s + i)
            }))
        },
        Whatsapp: function (t) {
            const n = t.find(".elementskit-whatsapp__popup--btn"),
                i = t.find(".elementskit-whatsapp__input--field"),
                s = t.find(".elementskit-whatsapp__input--btn");

            function a() {
                let t = e(i).val(),
                    n = e(".elementskit-whatsapp__input--btn").attr("href").replace(/text=/g, `text=${t}`);
                e(".elementskit-whatsapp__input--btn").attr("href", n)
            }
            "show" == e(".elementskit-whatsapp__content").data("show") && e(".elementskit-whatsapp__content").addClass("elementskit-whatsapp__active"), e(n).click((function () {
                e(".elementskit-whatsapp__content").toggleClass("elementskit-whatsapp__active")
            })), e(s).on("click", (function () {
                a()
            })), e(i).keypress((function (t) {
                13 == t.which && (a(), window.location = e(".elementskit-whatsapp__input--btn").attr("href"))
            }))
        },
        rememberTab: function () {
            if (!window.location.hash) return;
            let t = '[data-ekit-handler-id="' + window.location.hash.split("?")[0].substring(1) + '"]';
            e(t).tab("show")
        },
        load: function () {
            n.rememberTab()
        },
        hash: function () {
            n.rememberTab()
        }
    };
    e(window).on("elementor/frontend/init", n.init).on("load", n.load).on("hashchange", n.hash)
}(jQuery, window.elementorFrontend),
function (e) {
    "use strict";
    e.fn.animateNumbers = function (t, n, i, s) {
        return this.each((function () {
            var a = e(this),
                o = parseInt(a.text().replace(/,/g, ""), 10);
            n = n === undefined || n, e({
                value: o
            }).animate({
                value: t
            }, {
                duration: i === undefined ? 500 : i,
                easing: s === undefined ? "swing" : s,
                step: function () {
                    a.text(Math.floor(this.value)), n && a.text(a.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
                },
                complete: function () {
                    parseInt(a.text(), 10) !== t && (a.text(t), n && a.text(a.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")))
                }
            })
        }))
    }, e.fn.myChart = function (t) {
        var n = e.extend({
            barColor: "#666666",
            gradientColor1: "",
            gradientColor2: "",
            scaleColor: "transparent",
            lineWidth: 20,
            size: 150,
            trackColor: "#f7f7f7",
            lineCap: "round",
            gradientChart: !1
        }, t);
        return this.easyPieChart({
            barColor: !0 === n.gradientChart ? function (e) {
                var t = this.renderer.getCtx(),
                    i = this.renderer.getCanvas(),
                    s = t.createLinearGradient(0, 0, i.width, 0);
                return s.addColorStop(0, n.gradientColor1), s.addColorStop(1, n.gradientColor2), s
            } : n.barColor,
            scaleColor: n.scaleColor,
            trackColor: n.trackColor,
            lineCap: n.lineCap,
            size: n.size,
            lineWidth: n.lineWidth
        })
    }, e((function () {
        var t = e(".ekit-video-popup");
        if (t.length > 0 && t.magnificPopup({
                type: "iframe",
                iframe: {
                    markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe"  frameborder="0" allowfullscreen></iframe></div>',
                    patterns: {
                        youtube: {
                            index: "https://youtube.com/",
                            id: "v=",
                            src: "%id%"
                        }
                    }
                },
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !0,
                fixedContentPos: !1
            }), e("#wp-admin-bar-elementor_edit_page-default").length > 0) {
            let t = e("#wp-admin-bar-elementor_edit_page-default").children("li");
            e(t).map((function (t, n) {
                var i = e(n).find(".elementor-edit-link-title"); - 1 !== i.text().indexOf("dynamic-content-") && i.parent().parent().remove()
            }))
        }
    }))
}(jQuery);
