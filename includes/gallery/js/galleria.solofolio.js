/**
 * @preserve Galleria Classic Theme 2011-06-07
 */

(function($) {

Galleria.addTheme({
    name: 'solofolio',
    author: 'solofolio',
    css: 'galleria.solofolio.css',
    defaults: {
        transition: 'none',
        transitionSpeed: 0,
        imageCrop: false,
        thumbCrop: false,
        thumbFit: false,
        carousel:  false,
        clicknext: true,
        fullscreenDoubleTap: false,
        debug: false,
        idleMode: false,
        initialTransition: 'none',
        maxScaleRatio: 1,
        preload: 'all',
        swipe: true,
        _locale: {show_thumbnails: 'Show thumbnails',
         hide_thumbnails: 'Hide thumbnails',
         play: 'Play slideshow',
         pause: 'Pause slideshow',
         enter_fullscreen: 'Enter fullscreen',
         exit_fullscreen: 'Exit fullscreen',
         popout_image: 'Popout image',
         showing_image: 'Showing image %s of %s'},
        _showFullscreen: true,
		_showPopout: false,
		_showProgress: true,
		_showTooltip: true,
    },
	
	
	init: function (s) {
	this.attachKeyboard({
	left: this.prev,
	right: this.next,
	74: this.prev,
	75: this.next,
	70: this.toggleFullscreen
	});	
    this.addElement("bar", "fullscreen", "play", "popout", "thumblink", "s1", "s2", "s3", "s4", "progress");
    this.append({stage: "progress", container: ["bar", "tooltip"], bar: ["fullscreen", "play", "popout", "thumblink", "info", "counter"]});
    var v = this, Q = this.$("thumbnails-container"), M = this.$("thumblink"), O = this.$("fullscreen"), Y = this.$("play"), da = this.$("popout"), W = this.$("bar"), Z = this.$("progress"), ha = s.transition, R = s._locale, ia = false, ga = false, ka = !!s.autoplay, c = false, aa = function () {Q.height(v.getStageHeight()).width(v.getStageWidth()).css("top", ia ? 0 : v.getStageHeight() + 30);};
    aa();
    s._showTooltip &&
        v.bindTooltip({thumblink: R.show_thumbnails, fullscreen: R.enter_fullscreen, play: R.play, popout: R.popout_image, caption: function () {var S = v.getData(), k = "";if (S) {if (S.title && S.title.length) {k += "<strong>" + S.title + "</strong>";}if (S.description && S.description.length) {k += "<br>" + S.description;}}return k;}, counter: function () {return R.showing_image.replace(/\%s/, v.getIndex() + 1).replace(/\%s/, v.getDataLength());}});
    s.showInfo || this.$("info").hide();
    this.bind("play", function () {ka = true;Y.addClass("playing");});
    this.bind("pause", function () {ka = false;Y.removeClass("playing");Z.width(0);});
    s._showProgress &&
        this.bind("progress", function (S) {Z.width(S.percent / 100 * this.getStageWidth());});
    this.bind("loadstart", function (S) {S.cached || this.$("loader").show();});
    this.bind("loadfinish", function () {Z.width(0);this.$("loader").hide();this.refreshTooltip("counter", "caption");});
    
	this.bind("thumbnail", function (S)
	{
	 var oggetto=S.thumbTarget;
	 $(oggetto).bind('click', function() {M.click();});
	 $(oggetto).bind('hover', function () {v.setInfo(S.thumbOrder);v.setCounter(S.thumbOrder);}, function () {v.setInfo();v.setCounter();});
	});
	
	
    this.bind("fullscreen_enter", function () {
    	ga = true;v.setOptions("transition", false);
    	O.addClass("open");W.css("bottom", 0);
    	this.defineTooltip("fullscreen", R.exit_fullscreen);
    	//this.addIdleState(W, {bottom: - 31});
    	});
    this.bind("fullscreen_exit", function () {ga = false;Galleria.utils.clearTimer("bar");v.setOptions("transition", ha);O.removeClass("open");W.css("bottom", 0);this.defineTooltip("fullscreen", R.enter_fullscreen);this.removeIdleState(W, {bottom: - 31});});
    this.bind("rescale", aa);
    //this.addIdleState(this.get("image-nav-left"), {left: - 36});
    //this.addIdleState(this.get("image-nav-right"), {right: - 36});
    M.click	(function () {
    	if (ia && c) {v.play();} 
    	else {c = ka;v.pause();
    }
    Q.animate( {
    	top: ia ? v.getStageHeight() + 30 : 0}, {easing: "galleria", duration: 0, complete: function () {v.defineTooltip("thumblink", ia ? R.show_thumbnails : R.hide_thumbnails);M[ia ? "removeClass" : "addClass"]("open");ia = !ia;}});
    } );
    if (s._showPopout) {
        da.click(function (S) {v.openLightbox();S.preventDefault();});
    } else {
        da.remove();
        if (s._showFullscreen) {
            this.$("s4").remove();
            this.$("info").css("right", 40);
            O.css("right", 0);
        }
    }
    Y.click(function () {v.defineTooltip("play", ka ? R.play : R.pause);if (ka) {v.pause();} else {ia && M.click();v.play();}});
    if (s._showFullscreen) {
        O.click(function () {ga ? v.exitFullscreen() : v.enterFullscreen();});
    } else {
        O.remove();
        if (s._show_popout) {
            this.$("s4").remove();
           // this.$("info").css("right", 40);
            da.css("right", 0);
        }
    }
    if (!s._showFullscreen && !s._showPopout) {
        this.$("s3,s4").remove();
        this.$("info").css("right", 10);
    }
    s.autoplay && this.trigger("play");
	}
 });    
}(jQuery));
