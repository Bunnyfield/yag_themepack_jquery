<?php

########################################################################
# Extension Manager/Repository config file for ext "yag_themepack_jquery".
#
# Auto generated 21-11-2011 09:22
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'YAG Themepack jQuery',
	'description' => 'Collection of jQuery based themes for YAG. Scripts included: galleryView, crossSlide, superSized and isotope. See http://www.yag-gallery.de/examples/ for a demonstration.',
	'category' => 'plugin',
	'author' => 'Daniel Lienert',
	'author_email' => 'daniel@lienert.cc',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid,yag',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.5.0-dev',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
			'yag' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:219:{s:12:"ext_icon.gif";s:4:"fb70";s:17:"ext_localconf.php";s:4:"c8ba";s:14:"ext_tables.php";s:4:"71ad";s:14:"ext_tables.sql";s:4:"d41d";s:44:"Classes/ViewHelpers/CrossSlideViewHelper.php";s:4:"fb73";s:44:"Classes/ViewHelpers/NivoSliderViewHelper.php";s:4:"117e";s:44:"Classes/ViewHelpers/SuperSizedViewHelper.php";s:4:"d01e";s:51:"Classes/ViewHelpers/Isotope/ImageListViewHelper.php";s:4:"2230";s:49:"Classes/ViewHelpers/Isotope/TagListViewHelper.php";s:4:"6f30";s:38:"Configuration/TypoScript/constants.txt";s:4:"3f95";s:34:"Configuration/TypoScript/setup.txt";s:4:"64fd";s:53:"Configuration/TypoScript/Themes/CrossSlide/General.ts";s:4:"077d";s:54:"Configuration/TypoScript/Themes/CrossSlide/ItemList.ts";s:4:"5825";s:51:"Configuration/TypoScript/Themes/CrossSlide/Theme.ts";s:4:"885f";s:54:"Configuration/TypoScript/Themes/GalleryView/General.ts";s:4:"7215";s:55:"Configuration/TypoScript/Themes/GalleryView/ItemList.ts";s:4:"23b2";s:52:"Configuration/TypoScript/Themes/GalleryView/Theme.ts";s:4:"22d0";s:50:"Configuration/TypoScript/Themes/Isotope/General.ts";s:4:"8460";s:51:"Configuration/TypoScript/Themes/Isotope/ItemList.ts";s:4:"6016";s:48:"Configuration/TypoScript/Themes/Isotope/Theme.ts";s:4:"003e";s:53:"Configuration/TypoScript/Themes/NivoSlider/General.ts";s:4:"1010";s:54:"Configuration/TypoScript/Themes/NivoSlider/ItemList.ts";s:4:"db8a";s:51:"Configuration/TypoScript/Themes/NivoSlider/Theme.ts";s:4:"f47f";s:53:"Configuration/TypoScript/Themes/SuperSized/General.ts";s:4:"28cf";s:54:"Configuration/TypoScript/Themes/SuperSized/ItemList.ts";s:4:"034a";s:51:"Configuration/TypoScript/Themes/SuperSized/Theme.ts";s:4:"b8dc";s:46:"Configuration/TypoScript/Widgets/CrossSlide.ts";s:4:"13f4";s:40:"Resources/Private/Language/locallang.xml";s:4:"ef62";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"046a";s:57:"Resources/Private/Templates/CrossSlide/ItemList/List.html";s:4:"ae98";s:58:"Resources/Private/Templates/GalleryView/ItemList/List.html";s:4:"8581";s:66:"Resources/Private/Templates/GalleryView/JSTemplates/GalleryView.js";s:4:"b10b";s:54:"Resources/Private/Templates/Isotope/ItemList/List.html";s:4:"1928";s:58:"Resources/Private/Templates/Isotope/JSTemplates/Isotope.js";s:4:"a427";s:57:"Resources/Private/Templates/NivoSlider/ItemList/List.html";s:4:"c4a9";s:57:"Resources/Private/Templates/SuperSized/ItemList/List.html";s:4:"b34b";s:32:"Resources/Public/CSS/Isotope.css";s:4:"1c70";s:35:"Resources/Public/CSS/SuperSized.css";s:4:"1ec4";s:44:"Resources/Public/CSS/NivoSlider/ThumbNav.css";s:4:"4028";s:67:"Resources/Public/GallerySource/CrossSlide/jquery.cross-slide.min.js";s:4:"2607";s:56:"Resources/Public/GallerySource/GalleryView/CHANGELOG.txt";s:4:"3fc6";s:54:"Resources/Public/GallerySource/GalleryView/LICENSE.txt";s:4:"87c7";s:53:"Resources/Public/GallerySource/GalleryView/README.txt";s:4:"1d86";s:73:"Resources/Public/GallerySource/GalleryView/css/jquery.galleryview-3.0.css";s:4:"5884";s:57:"Resources/Public/GallerySource/GalleryView/css/loader.gif";s:4:"c420";s:67:"Resources/Public/GallerySource/GalleryView/css/themes/dark/next.png";s:4:"6357";s:77:"Resources/Public/GallerySource/GalleryView/css/themes/dark/panel-nav-next.png";s:4:"2297";s:77:"Resources/Public/GallerySource/GalleryView/css/themes/dark/panel-nav-prev.png";s:4:"2f1b";s:67:"Resources/Public/GallerySource/GalleryView/css/themes/dark/prev.png";s:4:"197a";s:71:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_dark/next.gif";s:4:"5fbc";s:81:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_dark/panel-nav-next.gif";s:4:"d4c2";s:81:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_dark/panel-nav-prev.gif";s:4:"45d8";s:71:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_dark/prev.gif";s:4:"2d4f";s:72:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_light/next.gif";s:4:"f3e2";s:82:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_light/panel-nav-next.gif";s:4:"e254";s:82:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_light/panel-nav-prev.gif";s:4:"e65b";s:72:"Resources/Public/GallerySource/GalleryView/css/themes/ie6_light/prev.gif";s:4:"df77";s:68:"Resources/Public/GallerySource/GalleryView/css/themes/light/next.png";s:4:"c3bf";s:78:"Resources/Public/GallerySource/GalleryView/css/themes/light/panel-nav-next.png";s:4:"8f5d";s:78:"Resources/Public/GallerySource/GalleryView/css/themes/light/panel-nav-prev.png";s:4:"e0b3";s:68:"Resources/Public/GallerySource/GalleryView/css/themes/light/prev.png";s:4:"9c45";s:66:"Resources/Public/GallerySource/GalleryView/js/jquery.easing.1.3.js";s:4:"a6f7";s:71:"Resources/Public/GallerySource/GalleryView/js/jquery.galleryview-3.0.js";s:4:"2483";s:75:"Resources/Public/GallerySource/GalleryView/js/jquery.galleryview-3.0.min.js";s:4:"2550";s:66:"Resources/Public/GallerySource/GalleryView/js/jquery.timers-1.2.js";s:4:"6c03";s:51:"Resources/Public/GallerySource/Isotope/README.mdown";s:4:"a182";s:50:"Resources/Public/GallerySource/Isotope/_config.yml";s:4:"2e27";s:49:"Resources/Public/GallerySource/Isotope/index.html";s:4:"9995";s:56:"Resources/Public/GallerySource/Isotope/jquery.isotope.js";s:4:"f293";s:60:"Resources/Public/GallerySource/Isotope/jquery.isotope.min.js";s:4:"3c75";s:48:"Resources/Public/GallerySource/Isotope/minify.sh";s:4:"2ac2";s:63:"Resources/Public/GallerySource/Isotope/_includes/add-buttons.js";s:4:"5ce7";s:64:"Resources/Public/GallerySource/Isotope/_includes/change-sizes.js";s:4:"b2dd";s:69:"Resources/Public/GallerySource/Isotope/_includes/element-partial.html";s:4:"9edc";s:72:"Resources/Public/GallerySource/Isotope/_includes/elements-demo-foot.html";s:4:"7826";s:72:"Resources/Public/GallerySource/Isotope/_includes/elements-demo-head.html";s:4:"e6a1";s:68:"Resources/Public/GallerySource/Isotope/_includes/filter-buttons.html";s:4:"5b15";s:69:"Resources/Public/GallerySource/Isotope/_includes/inf-scroll-page.html";s:4:"e0f9";s:65:"Resources/Public/GallerySource/Isotope/_includes/layout-change.js";s:4:"ce73";s:68:"Resources/Public/GallerySource/Isotope/_includes/layout-options.html";s:4:"e870";s:70:"Resources/Public/GallerySource/Isotope/_includes/option-set-buttons.js";s:4:"1282";s:64:"Resources/Public/GallerySource/Isotope/_includes/random-sizes.js";s:4:"2d70";s:66:"Resources/Public/GallerySource/Isotope/_includes/sort-buttons.html";s:4:"3976";s:60:"Resources/Public/GallerySource/Isotope/_layouts/default.html";s:4:"999d";s:73:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-12-basic.html";s:4:"291b";s:85:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-13-elements-complete.html";s:4:"7727";s:84:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-16-elements-partial.html";s:4:"78b3";s:80:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-29-layout-modes.html";s:4:"23c0";s:77:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-30-filtering.html";s:4:"3229";s:75:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-30-sorting.html";s:4:"7176";s:76:"Resources/Public/GallerySource/Isotope/_posts/demos/2010-12-31-relayout.html";s:4:"a1f1";s:80:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-01-02-adding-items.html";s:4:"2d54";s:83:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-01-02-infinite-scroll.html";s:4:"cd5d";s:74:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-01-11-images.html";s:4:"98ff";s:87:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-03-29-combination-filters.html";s:4:"f7e8";s:81:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-05-22-category-rows.html";s:4:"1e6e";s:80:"Resources/Public/GallerySource/Isotope/_posts/demos/2011-06-13-hash-history.html";s:4:"3e01";s:80:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-01-introduction.mdown";s:4:"6c51";s:75:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-03-options.mdown";s:4:"7aec";s:75:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-04-methods.mdown";s:4:"0432";s:80:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-05-layout-modes.mdown";s:4:"ee8c";s:77:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-06-filtering.mdown";s:4:"eb20";s:75:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-07-sorting.mdown";s:4:"8f7e";s:77:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-09-animating.mdown";s:4:"b003";s:80:"Resources/Public/GallerySource/Isotope/_posts/docs/2010-12-10-adding-items.mdown";s:4:"97a1";s:85:"Resources/Public/GallerySource/Isotope/_posts/docs/2011-05-25-extending-isotope.mdown";s:4:"eb83";s:91:"Resources/Public/GallerySource/Isotope/_posts/docs/2011-06-16-hash-history-jquery-bbq.mdown";s:4:"b81f";s:72:"Resources/Public/GallerySource/Isotope/_posts/docs/2011-12-11-help.mdown";s:4:"0dbe";s:75:"Resources/Public/GallerySource/Isotope/_posts/docs/2011-12-20-license.mdown";s:4:"4c9b";s:69:"Resources/Public/GallerySource/Isotope/_posts/pages/2011-01-01-2.html";s:4:"f2a5";s:69:"Resources/Public/GallerySource/Isotope/_posts/pages/2011-01-01-3.html";s:4:"0293";s:69:"Resources/Public/GallerySource/Isotope/_posts/pages/2011-01-01-4.html";s:4:"2659";s:69:"Resources/Public/GallerySource/Isotope/_posts/pages/2011-01-01-5.html";s:4:"38ea";s:69:"Resources/Public/GallerySource/Isotope/_posts/pages/2011-01-01-6.html";s:4:"9d07";s:73:"Resources/Public/GallerySource/Isotope/_posts/tests/2010-01-01-index.html";s:4:"bd4e";s:75:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-03-27-destroy.html";s:4:"b336";s:73:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-03-27-flash.html";s:4:"3d0d";s:76:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-03-27-no-items.html";s:4:"4906";s:86:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-04-26-item-position-data.html";s:4:"337c";s:84:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-05-13-jquery-animation.html";s:4:"ae9b";s:84:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-05-18-centered-masonry.html";s:4:"b3a6";s:90:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-05-24-elements-complete-test.html";s:4:"9fed";s:77:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-05-31-tiny-text.html";s:4:"fc73";s:88:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-07-07-masonry-corner-stamp.html";s:4:"0a0c";s:83:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-07-14-masonry-gutters.html";s:4:"af8c";s:81:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-08-19-right-to-left.html";s:4:"1f55";s:88:"Resources/Public/GallerySource/Isotope/_posts/tests/2011-08-23-unclickable-filtered.html";s:4:"6fd4";s:52:"Resources/Public/GallerySource/Isotope/css/style.css";s:4:"cd8a";s:57:"Resources/Public/GallerySource/Isotope/js/fake-element.js";s:4:"f2ab";s:61:"Resources/Public/GallerySource/Isotope/js/jquery-1.6.2.min.js";s:4:"c408";s:62:"Resources/Public/GallerySource/Isotope/js/jquery.ba-bbq.min.js";s:4:"07c7";s:70:"Resources/Public/GallerySource/Isotope/js/jquery.infinitescroll.min.js";s:4:"ed1c";s:48:"Resources/Public/GallerySource/NivoSlider/README";s:4:"becc";s:63:"Resources/Public/GallerySource/NivoSlider/jquery.nivo.slider.js";s:4:"7fc8";s:68:"Resources/Public/GallerySource/NivoSlider/jquery.nivo.slider.pack.js";s:4:"829e";s:53:"Resources/Public/GallerySource/NivoSlider/license.txt";s:4:"221d";s:57:"Resources/Public/GallerySource/NivoSlider/nivo-slider.css";s:4:"8e64";s:56:"Resources/Public/GallerySource/NivoSlider/demo/demo.html";s:4:"aeb7";s:57:"Resources/Public/GallerySource/NivoSlider/demo/demo2.html";s:4:"ad8a";s:56:"Resources/Public/GallerySource/NivoSlider/demo/style.css";s:4:"2be3";s:66:"Resources/Public/GallerySource/NivoSlider/demo/images/dev7logo.png";s:4:"0306";s:62:"Resources/Public/GallerySource/NivoSlider/demo/images/nemo.jpg";s:4:"7ea9";s:66:"Resources/Public/GallerySource/NivoSlider/demo/images/toystory.jpg";s:4:"7843";s:60:"Resources/Public/GallerySource/NivoSlider/demo/images/up.jpg";s:4:"97a8";s:63:"Resources/Public/GallerySource/NivoSlider/demo/images/walle.jpg";s:4:"0e44";s:74:"Resources/Public/GallerySource/NivoSlider/demo/scripts/jquery-1.6.4.min.js";s:4:"9118";s:67:"Resources/Public/GallerySource/NivoSlider/themes/default/arrows.png";s:4:"09b2";s:68:"Resources/Public/GallerySource/NivoSlider/themes/default/bullets.png";s:4:"acc6";s:68:"Resources/Public/GallerySource/NivoSlider/themes/default/default.css";s:4:"fb40";s:68:"Resources/Public/GallerySource/NivoSlider/themes/default/loading.gif";s:4:"dd6b";s:65:"Resources/Public/GallerySource/NivoSlider/themes/orman/arrows.png";s:4:"1429";s:66:"Resources/Public/GallerySource/NivoSlider/themes/orman/bullets.png";s:4:"637a";s:66:"Resources/Public/GallerySource/NivoSlider/themes/orman/loading.gif";s:4:"c339";s:64:"Resources/Public/GallerySource/NivoSlider/themes/orman/orman.css";s:4:"2c3e";s:65:"Resources/Public/GallerySource/NivoSlider/themes/orman/readme.txt";s:4:"9f9f";s:65:"Resources/Public/GallerySource/NivoSlider/themes/orman/ribbon.png";s:4:"9972";s:65:"Resources/Public/GallerySource/NivoSlider/themes/orman/slider.png";s:4:"88e0";s:67:"Resources/Public/GallerySource/NivoSlider/themes/pascal/bullets.png";s:4:"8680";s:70:"Resources/Public/GallerySource/NivoSlider/themes/pascal/controlnav.png";s:4:"47f7";s:68:"Resources/Public/GallerySource/NivoSlider/themes/pascal/featured.png";s:4:"dd34";s:67:"Resources/Public/GallerySource/NivoSlider/themes/pascal/loading.gif";s:4:"c339";s:66:"Resources/Public/GallerySource/NivoSlider/themes/pascal/pascal.css";s:4:"6250";s:66:"Resources/Public/GallerySource/NivoSlider/themes/pascal/readme.txt";s:4:"db93";s:66:"Resources/Public/GallerySource/NivoSlider/themes/pascal/ribbon.png";s:4:"dd34";s:66:"Resources/Public/GallerySource/NivoSlider/themes/pascal/slider.png";s:4:"54d9";s:57:"Resources/Public/GallerySource/SuperSized/GPL-LICENSE.txt";s:4:"7bac";s:57:"Resources/Public/GallerySource/SuperSized/MIT-LICENSE.txt";s:4:"caa8";s:51:"Resources/Public/GallerySource/SuperSized/README.md";s:4:"ac34";s:56:"Resources/Public/GallerySource/SuperSized/core/core.html";s:4:"af68";s:58:"Resources/Public/GallerySource/SuperSized/core/random.html";s:4:"75e9";s:70:"Resources/Public/GallerySource/SuperSized/core/css/supersized.core.css";s:4:"36d1";s:63:"Resources/Public/GallerySource/SuperSized/core/img/bg-black.png";s:4:"7798";s:63:"Resources/Public/GallerySource/SuperSized/core/img/progress.gif";s:4:"db34";s:70:"Resources/Public/GallerySource/SuperSized/core/img/supersized-logo.png";s:4:"57b4";s:74:"Resources/Public/GallerySource/SuperSized/core/js/supersized.core.3.2.1.js";s:4:"10cc";s:78:"Resources/Public/GallerySource/SuperSized/core/js/supersized.core.3.2.1.min.js";s:4:"2271";s:60:"Resources/Public/GallerySource/SuperSized/flickr/flickr.html";s:4:"b1ca";s:67:"Resources/Public/GallerySource/SuperSized/flickr/css/supersized.css";s:4:"8c55";s:61:"Resources/Public/GallerySource/SuperSized/flickr/img/back.png";s:4:"d9c0";s:66:"Resources/Public/GallerySource/SuperSized/flickr/img/back_dull.png";s:4:"4009";s:75:"Resources/Public/GallerySource/SuperSized/flickr/img/buildinternet-logo.png";s:4:"102e";s:64:"Resources/Public/GallerySource/SuperSized/flickr/img/forward.png";s:4:"0a32";s:69:"Resources/Public/GallerySource/SuperSized/flickr/img/forward_dull.png";s:4:"1187";s:63:"Resources/Public/GallerySource/SuperSized/flickr/img/nav-bg.png";s:4:"6551";s:62:"Resources/Public/GallerySource/SuperSized/flickr/img/pause.png";s:4:"56c6";s:67:"Resources/Public/GallerySource/SuperSized/flickr/img/pause_dull.png";s:4:"05fd";s:66:"Resources/Public/GallerySource/SuperSized/flickr/img/play_dull.png";s:4:"56d0";s:65:"Resources/Public/GallerySource/SuperSized/flickr/img/progress.gif";s:4:"db34";s:72:"Resources/Public/GallerySource/SuperSized/flickr/img/supersized-logo.png";s:4:"57b4";s:78:"Resources/Public/GallerySource/SuperSized/flickr/js/supersized.flickr.1.1.2.js";s:4:"3c8c";s:61:"Resources/Public/GallerySource/SuperSized/slideshow/demo.html";s:4:"73f2";s:61:"Resources/Public/GallerySource/SuperSized/slideshow/fade.html";s:4:"1d6d";s:62:"Resources/Public/GallerySource/SuperSized/slideshow/slide.html";s:4:"b14e";s:70:"Resources/Public/GallerySource/SuperSized/slideshow/css/supersized.css";s:4:"5160";s:64:"Resources/Public/GallerySource/SuperSized/slideshow/img/back.png";s:4:"d3a5";s:68:"Resources/Public/GallerySource/SuperSized/slideshow/img/bg-black.png";s:4:"7798";s:68:"Resources/Public/GallerySource/SuperSized/slideshow/img/bg-hover.png";s:4:"761a";s:76:"Resources/Public/GallerySource/SuperSized/slideshow/img/button-tray-down.png";s:4:"eef3";s:74:"Resources/Public/GallerySource/SuperSized/slideshow/img/button-tray-up.png";s:4:"b0cb";s:67:"Resources/Public/GallerySource/SuperSized/slideshow/img/forward.png";s:4:"8a82";s:66:"Resources/Public/GallerySource/SuperSized/slideshow/img/nav-bg.png";s:4:"7bac";s:67:"Resources/Public/GallerySource/SuperSized/slideshow/img/nav-dot.png";s:4:"88ff";s:65:"Resources/Public/GallerySource/SuperSized/slideshow/img/pause.png";s:4:"2b94";s:64:"Resources/Public/GallerySource/SuperSized/slideshow/img/play.png";s:4:"3579";s:73:"Resources/Public/GallerySource/SuperSized/slideshow/img/progress-back.png";s:4:"b1f5";s:72:"Resources/Public/GallerySource/SuperSized/slideshow/img/progress-bar.png";s:4:"3358";s:68:"Resources/Public/GallerySource/SuperSized/slideshow/img/progress.gif";s:4:"db34";s:75:"Resources/Public/GallerySource/SuperSized/slideshow/img/supersized-logo.png";s:4:"57b4";s:70:"Resources/Public/GallerySource/SuperSized/slideshow/img/thumb-back.png";s:4:"15ad";s:73:"Resources/Public/GallerySource/SuperSized/slideshow/img/thumb-forward.png";s:4:"e4d1";s:75:"Resources/Public/GallerySource/SuperSized/slideshow/js/jquery.easing.min.js";s:4:"ec64";s:74:"Resources/Public/GallerySource/SuperSized/slideshow/js/supersized.3.2.5.js";s:4:"08b3";s:78:"Resources/Public/GallerySource/SuperSized/slideshow/js/supersized.3.2.5.min.js";s:4:"ecae";s:80:"Resources/Public/GallerySource/SuperSized/slideshow/theme/supersized.shutter.css";s:4:"ec71";s:79:"Resources/Public/GallerySource/SuperSized/slideshow/theme/supersized.shutter.js";s:4:"bad1";s:83:"Resources/Public/GallerySource/SuperSized/slideshow/theme/supersized.shutter.min.js";s:4:"527f";s:48:"Resources/Public/Images/Isotope/bg-lightgrey.png";s:4:"5433";s:14:"doc/manual.pdf";s:4:"4e40";s:14:"doc/manual.sxw";s:4:"76ba";}',
);

?>