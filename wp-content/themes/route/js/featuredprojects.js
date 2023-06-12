(function($) {
	 var define, require,
    _this = this,
    __slice = [].slice;
					
	require = this.require;

	define = this.define;
	if (!(define != null ? define.amd : void 0)) {
		require = function(mod) {
		  return {
			jquery: this.jQuery,
			'backbone': this.Backbone,
			'gallerista/carousel': this.gallerista.carousel
			
		  }[mod];
		};
		define = function() {
		  var args, fn, _i, _ref;

		  args = 2 <= arguments.length ? __slice.call(arguments, 0, _i = arguments.length - 1) : (_i = 0, []), fn = arguments[_i++];
		  return ((_ref = _this.gallerista) != null ? _ref : _this.gallerista = {}).carousel = fn(require);
		};
	  }

	define('featured-projects',function(require) {
		var $, _, Backbone, carousel;
			$ = require('jquery');
	Backbone = require('backbone');
	carousel  = require('gallerista/carousel');
	var SnapshotPreviewDeckView;
	console.log('featured-projects');
	function parseProjectSlides(listElement) {
		var slides = [],
		    $listElement = $(listElement);
		_.each($listElement.find('li.slide'), function (el, i) {
			var article = $(el).find('article.snapshot-slide-content')
			slides.push({
				'html': article,
				'target': article.attr('id')
			});
		});
		$listElement.empty();
		return slides;
	}

	SnapshotPreviewDeckView = Backbone.View.extend({
		initialize: function (opts) {
			this.$pods = $('.snapshot-pod');
			this.$pods.on('click', $.proxy(this.podClickHandler, this));
			this.model.on('change:selectedSlide', $.proxy(this.slideChangeHandler, this));
		},

		podClickHandler: function (event) {
			var target = $(event.currentTarget).data('focus-target');
			var targetSlide = this.model.get('slides').detect(function (model) {
				return model.get('target') == target;
			});
			if (targetSlide)
				this.model.goto(targetSlide);
			this.activeStates();
		},

		slideChangeHandler: function (model) {
			this.activeStates();
		},
		activeStates: function (model) {

			var selectedSlide = this.model.get('selectedSlide');
			var targetId = selectedSlide.get('target');

			//remove active class from all pods
			this.$pods.removeClass('pod-active');
			$(".snapshot-pod, .snapshot-pod h3, .snapshot-pod p").removeClass("pod-active");
			$(".snapshot-pod, .snapshot-pod h3, .snapshot-pod p").removeClass("pod-rollover");
			this.$pods.find(".snapshot-link-icon").removeClass('invisible');
			this.$pods.find(".snapshot-link-icon").removeClass('pod-active-icon');

			if (targetId !== "") {
				var snapshot = this.$el.find('[data-focus-target="' + targetId + '"]');
				//set active on target pod
				snapshot.addClass('pod-active');
				snapshot.children(".snapshot-pod h3, .snapshot-pod p").addClass('pod-active');
				snapshot.find(".snapshot-link-icon").addClass('invisible');
			}
		}
	});


	function init () {
		console.log('init');
		var featuredProjectsSlides

		var flexSlideOpts = {
		  namespace: "flex-",
		  selector: ".flexslides > li",
		  animation: "fade",
		  easing: "swing",
		  direction: "horizontal",
		  reverse: false,
		  animationLoop: true,
		  smoothHeight: false,
		  startAt: 0,
		  slideshow: true,
		  slideshowSpeed: 7000,
		  animationSpeed: 600,
		  initDelay: 0,
		  randomize: false,

		  // Usability features
		  pauseOnAction: true,
		  pauseOnHover: false,
		  useCSS: true,
		  touch: true,
		  video: false,

		  // Primary Controls
		  controlNav: false,
		  directionNav: true,
		  prevText: "Previous",
		  nextText: "Next"
		}

		// create carousel models from slides html
		featuredProjectsSlides = new carousel.Gallery({
			slides: parseProjectSlides($('#snapshot-slider-wrap ul.slides'))
		});

		// preview pod view init
		(new SnapshotPreviewDeckView({
			el: '#projects-top-block .snapshot-preview-deck',
			model: featuredProjectsSlides
		}));

		// init carousel
		var featuredProjectCarousel = new carousel.Carousel({
		 el: '#snapshot-slider-wrap ul.slides',
		 model: featuredProjectsSlides,
		 slideView: carousel.HtmlSlideView,
		 nextButton: '#projects-slider-block .next',
		previousButton: '#projects-slider-block .prev',
		animation: {
		duration: 800,
		easing: 'swing'
		},
		 slideSize: {
		 width: 1280,
		 height: 648
		 }
		});

		var flexSlideOpts = {
		  namespace: "flex-",
		  selector: ".flexslides > li",
		  animation: "fade",
		  easing: "swing",
		  direction: "horizontal",
		  reverse: false,
		  animationLoop: true,
		  smoothHeight: false,
		  startAt: 0,
		  slideshow: true,
		  slideshowSpeed: 7000,
		  animationSpeed: 600,
		  initDelay: 0,
		  randomize: false,

		  // Usability features
		  pauseOnAction: true,
		  pauseOnHover: false,
		  useCSS: true,
		  touch: true,
		  video: false,

		  // Primary Controls
		  controlNav: false,
		  directionNav: true,
		  prevText: "Previous",
		  nextText: "Next"
		}

		//Initializes the flexslider gallery for each selected slide

		featuredProjectsSlides.on("change", function (event) {
			
			var currentSlide = this.get('selectedSlide');
  			var selectedId = currentSlide.attributes.target;

  			selectedId = selectedId.toString();

  			$("#" + selectedId).find(".flexslider").flexslider(flexSlideOpts);

		});
	}

	return {init: init};
});

})(jQuery);
