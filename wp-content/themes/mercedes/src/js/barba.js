import "@babel/polyfill";
import Barba from "barba.js";
import bowser from "bowser";
import lazyLoad from "./utils/lazy";
import { scrollIndicator, stickyFooter } from "./components/footer";
import { openSlides } from "./utils/openSlides";
import { TweenLite } from "gsap/TweenLite";
import { CSSPlugin } from "gsap/CSSPlugin";
import { TimelineLite } from "gsap/TimelineLite";

import Swiper from "swiper";
// Single Product Slider
var singleProductSliderInit = function() {
  console.log("test")
  var singleProductSlider = new Swiper(".js-single-product-slider", {
    slidesPerView: 1,
    allowTouchMove: true,
    navigation: {
      nextEl: ".single-product-slider-next",
      prevEl: ".single-product-slider-prev"
    },
    preloadImages: false,
    lazy: {
      loadPrevNext: false
    }
  });

  var singleProductThumbs = new Swiper(".js-single-product-thumbs", {
    slidesPerView: 1,
    allowTouchMove: true,
    navigation: {
      nextEl: ".single-product-slider-next",
      prevEl: ".single-product-slider-prev"
    },
    preloadImages: false,
    lazy: {
      loadPrevNext: false
    }
  });

  if(singleProductSlider){
  //singleProductSlider.controller.control = singleProductThumbs;
  }
  //singleProductThumbs.controller.control = singleProductSlider;

  var singleProductThumbs = new Swiper(".js-video-text-slider", {
    slidesPerView: 1,
    allowTouchMove: true,
    navigation: {
      nextEl: ".single-video-slider-next",
      prevEl: ".single-video-slider-prev"
    },
    preloadImages: false,
    lazy: {
      loadPrevNext: false
    }
  });

};

export const barbaInit = () => {
  let lastClickEl;
  const _html = document.documentElement;
  const _body = document.body;

  Barba.Dispatcher.on("linkClicked", el => {
    lastClickEl = el;
  });
  singleProductSliderInit();
  openSlides()
  /* ----------------------------------
    VIEWS
  ---------------------------------- */
  //singleProductSliderInit();
  // HOME VIEW
  const homeView = Barba.BaseView.extend({
    namespace: "home",
    onEnter: function() {
      _body.classList.add("is-home");
    },
    onEnterCompleted: function() {
      _html.classList.add("home-is-loaded");
      stickyFooter();
      scrollIndicator();
      openSlides();
    },
    onLeave: function() {
      removeAllEventListeners();
    },
    onLeaveCompleted: function() {}
  });

  // ARTICLE VIEW
  const articleView = Barba.BaseView.extend({
    namespace: "article",
    onEnter: function() {
      _body.classList.add("is-article");
    },
    onEnterCompleted: function() {
      _html.classList.add("article-is-loaded");
      stickyFooter();
      scrollIndicator();
    },
    onLeave: function() {
      _body.classList.remove("is-article");
      _html.classList.remove("article-is-loaded");
    },
    onLeaveCompleted: function() {}
  });

  // PAGE VIEW
  const pageView = Barba.BaseView.extend({
    namespace: "page",
    onEnter: function() {
      _body.classList.add("is-page");
    },
    onEnterCompleted: function() {
      _html.classList.remove("c-overlay-active");
      _html.classList.add("page-is-loaded");
      stickyFooter();
      scrollIndicator();
    },
    onLeave: function() {
      _body.classList.remove("is-page");
      _html.classList.remove("page-is-loaded");
    },
    onLeaveCompleted: function() {}
  });

  // INIT VIEWS
  homeView.init();
  articleView.init();
  pageView.init();

  // Google Analytics
  // NL
  if (document.documentElement.lang === "nl") {
    Barba.Dispatcher.on("initStateChange", function() {
      if (window.ga) {
        //gtag('config', 'UA-74211934-19', { 'page_path': location.pathname });
      }
    });
  }
  // FR
  if (document.documentElement.lang === "fr") {
    Barba.Dispatcher.on("initStateChange", function() {
      if (window.ga) {
        //gtag('config', 'UA-74211934-20', { 'page_path': location.pathname });
      }
    });
  }

  /* ----------------------------------
  TRANSITION FUNCTIONS
  ---------------------------------- */

  // FADE TRANSITION
  var fadeTransition = Barba.BaseTransition.extend({
    start: function() {
      Promise.all([this.newContainerLoading, this.fadeOut()]).then(
        this.fadeIn.bind(this)
      );
    },
    fadeOut: function() {
      //showLoader();
      const oldContainer = this.oldContainer;
      return TweenLite.fromTo(
        oldContainer,
        0.6,
        { visibility: "visible", autoAlpha: 1 },
        {
          autoAlpha: 0,
          visibility: "hidden",
          delay: 0.8
        }
      );
    },
    fadeIn: function() {
      var _this = this;
      var _new = this.newContainer;
      var _old = this.oldContainer;

      TweenLite.fromTo(
        _new,
        0.6,
        { visibility: "hidden", autoAlpha: 0 },
        {
          autoAlpha: 1,
          visibility: "visible",
          delay: 0.4,
          onStart: function() {

          },
          onComplete: function() {
            if (window.pageYOffset > 0) {
              window.scrollTo(0, 0);
            }
            TweenLite.set(_old, {
              display: "none"
            });
            _this.done();
          }
        }
      );
    }
  });

  const init = () => {
    Barba.Pjax.init();
    Barba.Prefetch.init();
    Barba.Pjax.getTransition = function() {
      return fadeTransition;
    };
    Barba.Pjax.start();
  };

  init();
};
