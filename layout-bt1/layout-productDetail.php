<?php
include_once 'src/Controller/ProductController.php';
include_once 'src/Model/ProductManager.php';
include_once 'src/Model/Products.php';
include_once 'src/Model/DBConnect.php';
?>
<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
    <script>
        var BASE_URL = 'https\u003A\u002F\u002Fdemo\u002Dm2.bird.eu\u002F';
        var require = {
            'baseUrl': 'https\u003A\u002F\u002Fdemo\u002Dm2.bird.eu\u002Fstatic\u002Fversion1616499168\u002Ffrontend\u002FBlackbird\u002Fdemo\u002Fen_US'
        };</script>
    <meta charset="utf-8">
    <meta name="title" content="Hera Pullover Hoodie">
    <meta name="description" content="Get ready to rule the studio and dominate the yoga mat in the Hera Pullover Hoodie, a cozy yet classy look for any level of yogi.
• Teal with purple stiching.• Hoodie pullover.• Snug fit.">
    <meta name="keywords" content="Magento, Varien, E-commerce">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Hera Pullover Hoodie</title>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/calendar.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/css/styles-m.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/css/custom.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Blackbird_MenuManager/css/menumanager_menu_front.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/gallery/gallery.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/css/styles-l.css">
    <link rel="stylesheet" type="text/css" media="print"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/css/print.css">
    <link rel="icon" type="image/x-icon"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/favicon.ico">
    <script type="text/javascript"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/requirejs/require.js"></script>
    <script type="text/javascript"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/requirejs/mixins.js"></script>
    <script type="text/javascript"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/requirejs-config.js"></script>
    <link rel="preload" as="font" crossorigin="anonymous"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fonts/opensans/light/opensans-300.woff2">
    <link rel="preload" as="font" crossorigin="anonymous"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fonts/opensans/regular/opensans-400.woff2">
    <link rel="preload" as="font" crossorigin="anonymous"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fonts/opensans/semibold/opensans-600.woff2">
    <link rel="preload" as="font" crossorigin="anonymous"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fonts/opensans/bold/opensans-700.woff2">
    <link rel="preload" as="font" crossorigin="anonymous"
          href="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fonts/Luma-Icons.woff2">
    <link rel="stylesheet" type="text/css" media="all" href="https://demo-m2.bird.eu/media/styles.css">
    <meta property="og:type" content="product">
    <meta property="og:title" content="Hera Pullover Hoodie">
    <meta property="og:image"
          content="https://demo-m2.bird.eu/media/catalog/product/cache/61c2607e9a12ede836bc1d7a83b99532/w/h/wh02-blue_main.jpg">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://demo-m2.bird.eu/hera-pullover-hoodie.html">
    <meta property="product:price:amount" content="48">
    <meta property="product:price:currency" content="EUR">
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery.mobile.custom"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.mobile.custom.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/common"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/common.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/dataPost"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/dataPost.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/bootstrap"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_PageCache/js/form-key-provider"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_PageCache/js/form-key-provider.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Translation/js/mage-translation-dictionary"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Translation/js/mage-translation-dictionary.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/customer-data"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/customer-data.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Checkout/js/checkout-data"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Checkout/js/checkout-data.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/theme"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/theme.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery-migrate"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery-migrate.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="domReady"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/requirejs/domReady.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/template"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/template.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/modal/confirm"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/modal/confirm.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/widget"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/widget.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/apply/main"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/apply/main.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bootstrap"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="underscore"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/underscore.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="knockoutjs/knockout"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/knockoutjs/knockout.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/section-config"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/section-config.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/url"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/url.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/storage"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/storage.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery-storageapi"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Cookie/js/jquery.storageapi.extended.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/utils/main"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/main.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="text"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/requirejs/text.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/smart-keyboard-handler"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/smart-keyboard-handler.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/mage"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/mage.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/ie-class-fixer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/ie-class-fixer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/patches/jquery"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/patches/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Persistent/js/view/customer-data-mixin"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Persistent/js/view/customer-data-mixin.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/translate"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/translate.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/modal/modal"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/modal/modal.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="knockoutjs/knockout-es5"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/knockoutjs/knockout-es5.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/apply/scripts"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/apply/scripts.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/template/engine"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/template/engine.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/bootstrap"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/extender/observable_array"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/extender/observable_array.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/extender/bound-nodes"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/extender/bound-nodes.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery.cookie"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.cookie.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery.storageapi.min"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.storageapi.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/arrays"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/arrays.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/compare"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/compare.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/utils/misc"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/misc.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/objects"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/objects.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/strings"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/strings.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/template"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/template.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/utils/wrapper"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/utils/wrapper.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/key-codes"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/key-codes.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/core"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/core.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="knockoutjs/knockout-repeat"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/knockoutjs/knockout-repeat.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="knockoutjs/knockout-fast-foreach"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/knockoutjs/knockout-fast-foreach.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/events"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/events.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/template/observable_source"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/template/observable_source.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/template/renderer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/template/renderer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/console-logger"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/console-logger.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/resizable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/resizable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/i18n"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/i18n.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/scope"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/scope.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/range"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/range.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/mage-init"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/mage-init.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/keyboard"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/keyboard.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/optgroup"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/optgroup.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/after-render"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/after-render.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/autoselect"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/autoselect.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/datepicker"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/datepicker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/outer_click"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/outer_click.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/fadeVisible"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/fadeVisible.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/collapsible"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/collapsible.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/staticChecked"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/staticChecked.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/simple-checked"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/simple-checked.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/bind-html"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/bind-html.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/tooltip"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/tooltip.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/bindings/color-picker"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/bindings/color-picker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/class"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/class.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/storage/local"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/storage/local.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/view/utils/async"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/view/utils/async.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/registry/registry"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/registry/registry.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/resizable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/resizable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="spectrum"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/spectrum/spectrum.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="tinycolor"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/spectrum/tinycolor.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/knockout/template/loader"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/knockout/template/loader.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/logger"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/logger.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/entry-factory"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/entry-factory.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/console-output-handler"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/console-output-handler.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/formatter"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/formatter.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/message-pool"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/message-pool.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/levels-pool"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/levels-pool.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/logger-utils"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/logger-utils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/mouse"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/mouse.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="moment"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/moment.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/view/utils/dom-observer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/view/utils/dom-observer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/view/utils/bindings"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/view/utils/bindings.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/logger/entry"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/logger/entry.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/loader"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/loader.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Wishlist/js/add-to-wishlist"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Wishlist/js/add-to-wishlist.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_PageCache/js/page-cache"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_PageCache/js/page-cache.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Cookie/js/require-cookie"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Cookie/js/require-cookie.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/dropdowns"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/dropdowns.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/core/app"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/core/app.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/dropdown"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/dropdown.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Search/js/form-mini"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Search/js/form-mini.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/tabs"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/tabs.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Blackbird_MenuManager/js/menumanager-main-js"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Blackbird_MenuManager/js/menumanager-main-js.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/validate-product"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/validate-product.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Swatches/js/swatch-renderer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Swatches/js/swatch-renderer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="magnifier/magnify"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/magnifier/magnify.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ProductVideo/js/fotorama-add-video-events"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ProductVideo/js/fotorama-add-video-events.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Review/js/error-placement"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Review/js/error-placement.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Review/js/validate-review"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Review/js/validate-review.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Review/js/submit-review"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Review/js/submit-review.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/validation/validation"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/validation/validation.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/trim-input"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/trim-input.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/cookie-status"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/cookie-status.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/cookies"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/cookies.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/block-loader"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/block-loader.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Blackbird_DynamicPrice/js/product/view/dynamic-price"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Blackbird_DynamicPrice/js/product/view/dynamic-price.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Swatches/js/catalog-add-to-cart"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Swatches/js/catalog-add-to-cart.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Blackbird_EstimateTimeShipping/js/dateForm"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Blackbird_EstimateTimeShipping/js/dateForm.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Review/js/process-reviews"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Review/js/process-reviews.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/invalidation-processor"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/invalidation-processor.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/view/provider"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/view/provider.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/block-submit-on-send"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/block-submit-on-send.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/view/breadcrumbs"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/view/breadcrumbs.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/view/add-home-breadcrumb"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/view/add-home-breadcrumb.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/breadcrumbs"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/breadcrumbs.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/price-box"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/price-box.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Klarna_Onsitemessaging/js/pricebox-widget-mixin"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Klarna_Onsitemessaging/js/pricebox-widget-mixin.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/modal/alert"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/modal/alert.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/collapsible"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/collapsible.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/compat"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/compat.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/menu"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/menu.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/product/view/validation"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/product/view/validation.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/price-utils"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/price-utils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery.parsequery"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.parsequery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/gallery"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/gallery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ProductVideo/js/load-player"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ProductVideo/js/load-player.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/validate"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.validate.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/element/element"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/element/element.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/storage/storage-service"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/storage/storage-service.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/core/renderer/types"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/core/renderer/types.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/core/renderer/layout"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/core/renderer/layout.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/model/breadcrumb-list"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/model/breadcrumb-list.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/dialog"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/dialog.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/patches/jquery-ui"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/patches/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="matchMedia"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/matchMedia.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/catalog-add-to-cart"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/catalog-add-to-cart.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ConfigurableProduct/js/catalog-add-to-cart-mixin"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ConfigurableProduct/js/catalog-add-to-cart-mixin.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="magnifier/magnifier"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/magnifier/magnifier.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/validation"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/validation.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Dotdigitalgroup_Sms/js/telephoneValidatorAddress"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Dotdigitalgroup_Sms/js/telephoneValidatorAddress.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Vertex_AddressValidation/js/shipping-invalidate-mixin"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Vertex_AddressValidation/js/shipping-invalidate-mixin.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/storage/ids-storage"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/storage/ids-storage.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/storage/data-storage"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/storage/data-storage.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/storage/ids-storage-compare"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/storage/ids-storage-compare.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/accordion"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/accordion.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/autocomplete"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/autocomplete.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/button"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/button.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/datepicker"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/datepicker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/draggable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/draggable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/droppable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/droppable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-blind"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-blind.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-bounce"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-bounce.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-clip"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-clip.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-drop"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-drop.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-explode"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-explode.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-fade"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-fade.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-fold"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-fold.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-highlight"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-highlight.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-scale"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-scale.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-pulsate"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-pulsate.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-shake"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-shake.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-slide"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-slide.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect-transfer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect-transfer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/effect"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/effect.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/menu"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/menu.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/position"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/position.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/progressbar"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/progressbar.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/selectable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/selectable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/slider"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/slider.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/sortable"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/sortable.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/spinner"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/spinner.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/tabs"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/tabs.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/timepicker"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/timepicker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery-ui-modules/tooltip"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/ui-modules/tooltip.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="jquery/jquery.metadata"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/jquery/jquery.metadata.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/element/links"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/element/links.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Checkout/js/view/minicart"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Checkout/js/view/minicart.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/core/collection"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/core/collection.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Tax/js/view/checkout/minicart/subtotal/totals"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Tax/js/view/checkout/minicart/subtotal/totals.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Msrp/js/view/checkout/minicart/subtotal/totals"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Msrp/js/view/checkout/minicart/subtotal/totals.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Checkout/js/view/cart-item-renderer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Checkout/js/view/cart-item-renderer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/view/image"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/view/image.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/view/compare-products"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/view/compare-products.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_InstantPurchase/js/view/instant-purchase"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_InstantPurchase/js/view/instant-purchase.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Review/js/view/review"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Review/js/view/review.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/view/authentication-popup"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/view/authentication-popup.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Captcha/js/view/checkout/loginCaptcha"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Captcha/js/view/checkout/loginCaptcha.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/view/customer"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/view/customer.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Theme/js/view/messages"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Theme/js/view/messages.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/storage-manager"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/storage-manager.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/view/product-ids-resolver"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/view/product-ids-resolver.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/view/product-info-resolver"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/view/product-info-resolver.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ConfigurableProduct/js/product/view/product-info-resolver"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ConfigurableProduct/js/product/view/product-info-resolver.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/view/messages"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/view/messages.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ReCaptchaFrontendUi/js/ui-messages-mixin"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ReCaptchaFrontendUi/js/ui-messages-mixin.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/gallery/gallery"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/gallery/gallery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="intlTelInput"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Dotdigitalgroup_Sms/js/intlTelInput.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/query-builder"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/query-builder.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mage/decorate"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/decorate.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/form/form"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/form/form.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/action/login"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/action/login.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/model/authentication-popup"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/model/authentication-popup.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Captcha/js/view/checkout/defaultCaptcha"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Captcha/js/view/checkout/defaultCaptcha.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Captcha/js/model/captchaList"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Captcha/js/model/captchaList.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Checkout/js/sidebar"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Checkout/js/sidebar.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Security/js/escaper"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Security/js/escaper.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/view/product-ids"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/view/product-ids.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Catalog/js/product/view/product-info"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Catalog/js/product/view/product-info.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_ReCaptchaFrontendUi/js/registry"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_ReCaptchaFrontendUi/js/registry.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="fotorama/fotorama"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/fotorama/fotorama.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Customer/js/invalidation-rules/website-rule"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Customer/js/invalidation-rules/website-rule.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/model/messageList"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/model/messageList.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/lib/spinner"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/lib/spinner.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="mage/requirejs/resolver"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/mage/requirejs/resolver.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Captcha/js/model/captcha"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Captcha/js/model/captcha.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/form/adapter"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/form/adapter.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/model/messages"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/model/messages.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Captcha/js/action/refresh"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Captcha/js/action/refresh.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="Magento_Ui/js/form/adapter/buttons"
            src="https://demo-m2.bird.eu/static/version1616499168/frontend/Blackbird/demo/en_US/Magento_Ui/js/form/adapter/buttons.js"></script>
</head>
<body data-container="body" id="html-body" itemtype="http://schema.org/Product" itemscope="itemscope"
      class="page-product-configurable catalog-product-view product- page-layout-1column" aria-busy="false">


<div id="cookie-status" style="display: none;">
    The store will not work correctly in the case when cookies are disabled.
</div>
<script type="text/javascript">document.querySelector("#cookie-status").style.display = "none";</script>


<noscript>
    <div class="message global noscript">
        <div class="content">
            <p>
                <strong>JavaScript seems to be disabled in your browser.</strong>
                <span>
                        For the best experience on our site, be sure to turn on Javascript in your browser.
                </span>
            </p>
        </div>
    </div>
</noscript>

    </header>
    <div class="sections nav-sections">
        <div class="section-items nav-sections-items" role="tablist">
            <div class="section-item-title nav-sections-item-title active" data-role="collapsible" role="tab"
                 data-collapsible="true" aria-controls="store.menu" aria-selected="false" aria-expanded="true"
                 tabindex="0">
                <a class="nav-sections-item-switch" data-toggle="switch" href="#store.menu">
                    Menu </a>
            </div>
            <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content"
                 role="tabpanel" aria-hidden="false">

                <nav class="navigation" data-action="navigation">
                </nav>
            </div>
            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab"
                 data-collapsible="true" aria-controls="store.links" aria-selected="false" aria-expanded="false"
                 tabindex="0">
                <a class="nav-sections-item-switch" data-toggle="switch" href="#store.links">
                    Account </a>
            </div>
            <div class="section-item-content nav-sections-item-content" id="store.links" data-role="content"
                 role="tabpanel" aria-hidden="true" style="display: none;">
                <!-- Account links -->
                <ul class="header links">
                    <li class="greet welcome" data-bind="scope: 'customer'">
                        <!-- ko if: customer().fullname  --><!-- /ko -->
                        <!-- ko ifnot: customer().fullname  -->
                        <span class="not-logged-in" data-bind="html:&quot;Default welcome msg!&quot;">Default welcome msg!</span>
                        <!-- /ko -->
                    </li>

                    <li class="link authorization-link" data-label="or">
                        <a href="https://demo-m2.bird.eu/customer/account/login/referer/aHR0cHM6Ly9kZW1vLW0yLmJpcmQuZXUvaGVyYS1wdWxsb3Zlci1ob29kaWUuaHRtbA%2C%2C/">Sign
                            In</a>
                    </li>
                    <li><a href="https://demo-m2.bird.eu/customer/account/create/" id="idTmQdt3Ch">Create an Account</a>
                    </li>
                </ul>
            </div>
            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab"
                 data-collapsible="true" aria-controls="store.settings" aria-selected="false" aria-expanded="false"
                 tabindex="0">
                <a class="nav-sections-item-switch" data-toggle="switch" href="#store.settings">
                    Settings </a>
            </div>
            <div class="section-item-content nav-sections-item-content" id="store.settings" data-role="content"
                 role="tabpanel" aria-hidden="true" style="display: none;">
                <div class="switcher language switcher-language" data-ui-id="language-switcher"
                     id="switcher-language-nav">
                    <strong class="label switcher-label"><span>Language</span></strong>
                    <div class="actions dropdown options switcher-options">
                        <div class="action toggle switcher-trigger" id="switcher-language-trigger-nav"
                             data-toggle="dropdown" data-trigger-keypress-button="true" aria-haspopup="true"
                             aria-expanded="false" role="button" tabindex="0">
                            <strong class="view-default">
                                <span>Default Store View</span>
                            </strong>
                        </div>
                        <ul class="dropdown switcher-dropdown" data-target="dropdown" aria-hidden="true">
                            <li class="view-en switcher-option">
                                <a href="https://demo-m2.bird.eu/stores/store/redirect/___store/en/___from_store/default/uenc/aHR0cHM6Ly9kZW1vLW0yLmJpcmQuZXUvaGVyYS1wdWxsb3Zlci1ob29kaWUuaHRtbD9fX19zdG9yZT1lbg%2C%2C/">
                                    English </a>
                            </li>
                            <li class="view-fr switcher-option">
                                <a href="https://demo-m2.bird.eu/stores/store/redirect/___store/fr/___from_store/default/uenc/aHR0cHM6Ly9kZW1vLW0yLmJpcmQuZXUvaGVyYS1wdWxsb3Zlci1ob29kaWUuaHRtbD9fX19zdG9yZT1mcg%2C%2C/">
                                    French </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs"><!--
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
-->
    </div>

    <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
        <div class="page messages">
            <div data-placeholder="messages"></div>
            <div data-bind="scope: 'messages'">
                <!-- ko if: cookieMessages && cookieMessages.length > 0 --><!-- /ko -->

                <!-- ko if: messages().messages && messages().messages.length > 0 --><!-- /ko -->
            </div>

        </div>
        <div class="columns">
            <div class="column main">
                <div class="product-info-main">
                    <div class="page-title-wrapper product">
                        <h1 class="page-title">
                            <span class="base" data-ui-id="page-title-wrapper"
                                  itemprop="name">Hera Pullover Hoodie</span></h1>
                    </div>
                    <div class="product-info-price"><div class="price-box price-final_price" data-role="priceBox" data-product-id="1059" data-price-box="product-id-1059"><span class="normal-price">


<span class="price-container price-final_price tax weee" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
            <span class="price-label">As low as</span>
        <span id="product-price-1059" data-price-amount="48" data-price-type="finalPrice" class="price-wrapper "><span class="price">€48.00</span></span>
                <meta itemprop="price" content="48">
        <meta itemprop="priceCurrency" content="EUR">
    </span>
</span>


                        </div><div class="product-info-stock-sku">
                            <div class="stock available" title="Availability">
                                <span>In stock</span>
                            </div>

                            <div class="product attribute sku">
                                <strong class="type">SKU</strong>
                                <div class="value" itemprop="sku">WH02</div>
                            </div>
                        </div></div>
                    <div class="product-add-form">
                        <form data-product-sku="WH02"
                              action="https://demo-m2.bird.eu/checkout/cart/add/uenc/aHR0cHM6Ly9kZW1vLW0yLmJpcmQuZXUvaGVyYS1wdWxsb3Zlci1ob29kaWUuaHRtbA%2C%2C/product/1059/"
                              method="post" id="product_addtocart_form" novalidate="novalidate">
                            <input type="hidden" name="product" value="1059">
                            <input type="hidden" name="selected_configurable_option" value="">
                            <input type="hidden" name="related_product" id="related-products-field" value="">
                            <input type="hidden" name="item" value="1059">
                            <input name="form_key" type="hidden" value="VwAwltRTjF7aERLG">
                            <div class="product-options-wrapper" id="product-options-wrapper">
                                <div class="fieldset" tabindex="0">
                                    <div class="swatch-opt" data-role="swatch-options" data-rendered="true">
                                        <div class="swatch-attribute color" data-attribute-code="color"
                                             data-attribute-id="93"><span id="option-label-color-93"
                                                                          class="swatch-attribute-label">Color</span><span
                                                    class="swatch-attribute-selected-option"></span>
                                            <div aria-activedescendant="" tabindex="0" aria-invalid="false"
                                                 aria-required="true" role="listbox"
                                                 aria-labelledby="option-label-color-93"
                                                 class="swatch-attribute-options clearfix">
                                                <div class="swatch-option color" id="option-label-color-93-item-50"
                                                     index="0" aria-checked="false"
                                                     aria-describedby="option-label-color-93" tabindex="0"
                                                     data-option-type="1" data-option-id="50" data-option-label="Blue"
                                                     aria-label="Blue" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="#1857f7"
                                                     style="background: #1857f7 no-repeat center; background-size: initial;"></div>
                                                <div class="swatch-option color" id="option-label-color-93-item-53"
                                                     index="1" aria-checked="false"
                                                     aria-describedby="option-label-color-93" tabindex="0"
                                                     data-option-type="1" data-option-id="53" data-option-label="Green"
                                                     aria-label="Green" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="#53a828"
                                                     style="background: #53a828 no-repeat center; background-size: initial;"></div>
                                                <div class="swatch-option color" id="option-label-color-93-item-56"
                                                     index="2" aria-checked="false"
                                                     aria-describedby="option-label-color-93" tabindex="0"
                                                     data-option-type="1" data-option-id="56" data-option-label="Orange"
                                                     aria-label="Orange" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="#eb6703"
                                                     style="background: #eb6703 no-repeat center; background-size: initial;"></div>
                                            </div>
                                            <input class="swatch-input super-attribute-select"
                                                   name="super_attribute[93]" type="text" value=""
                                                   data-selector="super_attribute[93]" data-validate="{required: true}"
                                                   aria-required="true" aria-invalid="false"></div>
                                        <div class="swatch-attribute size" data-attribute-code="size"
                                             data-attribute-id="141"><span id="option-label-size-141"
                                                                           class="swatch-attribute-label">Size</span><span
                                                    class="swatch-attribute-selected-option"></span>
                                            <div aria-activedescendant="" tabindex="0" aria-invalid="false"
                                                 aria-required="true" role="listbox"
                                                 aria-labelledby="option-label-size-141"
                                                 class="swatch-attribute-options clearfix">
                                                <div class="swatch-option text" id="option-label-size-141-item-167"
                                                     index="0" aria-checked="false"
                                                     aria-describedby="option-label-size-141" tabindex="0"
                                                     data-option-type="0" data-option-id="167" data-option-label="XS"
                                                     aria-label="XS" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="XS">XS
                                                </div>
                                                <div class="swatch-option text" id="option-label-size-141-item-168"
                                                     index="1" aria-checked="false"
                                                     aria-describedby="option-label-size-141" tabindex="0"
                                                     data-option-type="0" data-option-id="168" data-option-label="S"
                                                     aria-label="S" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="S">S
                                                </div>
                                                <div class="swatch-option text" id="option-label-size-141-item-169"
                                                     index="2" aria-checked="false"
                                                     aria-describedby="option-label-size-141" tabindex="0"
                                                     data-option-type="0" data-option-id="169" data-option-label="M"
                                                     aria-label="M" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="M">M
                                                </div>
                                                <div class="swatch-option text" id="option-label-size-141-item-170"
                                                     index="3" aria-checked="false"
                                                     aria-describedby="option-label-size-141" tabindex="0"
                                                     data-option-type="0" data-option-id="170" data-option-label="L"
                                                     aria-label="L" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="L">L
                                                </div>
                                                <div class="swatch-option text" id="option-label-size-141-item-171"
                                                     index="4" aria-checked="false"
                                                     aria-describedby="option-label-size-141" tabindex="0"
                                                     data-option-type="0" data-option-id="171" data-option-label="XL"
                                                     aria-label="XL" role="option" data-thumb-width="110"
                                                     data-thumb-height="90" data-option-tooltip-value="XL">XL
                                                </div>
                                            </div>
                                            <input class="swatch-input super-attribute-select"
                                                   name="super_attribute[141]" type="text" value=""
                                                   data-selector="super_attribute[141]" data-validate="{required: true}"
                                                   aria-required="true" aria-invalid="false"></div>
                                    </div>


                                    <script>
                                        require([
                                            'jquery',
                                        ], function ($) {

//<![CDATA[
                                            $.extend(true, $, {
                                                calendarConfig: {
                                                    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                                                    dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                                                    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                                    monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                                    infoTitle: 'About\u0020the\u0020calendar',
                                                    firstDay: 0,
                                                    closeText: 'Close',
                                                    currentText: 'Go\u0020Today',
                                                    prevText: 'Previous',
                                                    nextText: 'Next',
                                                    weekHeader: 'WK',
                                                    timeText: 'Time',
                                                    hourText: 'Hour',
                                                    minuteText: 'Minute',
                                                    dateFormat: "D, d M yy", // $.datepicker.RFC_2822
                                                    showOn: 'button',
                                                    showAnim: '',
                                                    changeMonth: true,
                                                    changeYear: true,
                                                    buttonImageOnly: null,
                                                    buttonImage: null,
                                                    showButtonPanel: true,
                                                    showWeek: true,
                                                    timeFormat: '',
                                                    showTime: false,
                                                    showHour: false,
                                                    showMinute: false
                                                }
                                            });

                                            enUS = {
                                                "m": {
                                                    "wide": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                                    "abbr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                                                }
                                            }; // en_US locale reference
//]]>

                                        });</script>
                                </div>
                            </div>
                            <div class="product-options-bottom">
                                <div id="preparation-time" class="message edd-date">

                                </div>
                                <div class="box-tocart">
                                    <div class="fieldset">
                                        <div class="actions">
                                            <button type="submit" title="Add to Cart" class="action primary tocart"
                                                    id="product-addtocart-button">
                                                <span>Add to Cart</span>
                                            </button>

                                            <div id="instant-purchase" data-bind="scope:'instant-purchase'">
                                                <!-- ko template: getTemplate() -->
                                                <!-- ko if: showButton() --><!-- /ko -->
                                                <!-- /ko -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="product media"><a id="gallery-prev-area" tabindex="-1"></a>
                    <div class="action-skip-wrapper"><a class="action skip gallery-next-area" href="#gallery-next-area">
    <span>
        Skip to the end of the images gallery    </span>
                        </a>
                    </div>

                    <div class="gallery-placeholder" data-gallery-role="gallery-placeholder" style="">

                        <!--
                        /**
                         * Copyright © Magento, Inc. All rights reserved.
                         * See COPYING.txt for license details.
                         */
                        -->
                        <div class="fotorama--hidden"></div>
                        <style>.fotorama1623742750419 .fotorama__nav--thumbs .fotorama__nav__frame {
                                padding: 2px;
                                height: 110px
                            }

                            .fotorama1623742750419 .fotorama__thumb-border {
                                height: 110px;
                                border-width: 2px;
                                margin-top: 2px
                            }</style>
                        <div class="fotorama-item fotorama fotorama1623742750419" data-gallery-role="gallery">
                            <div data-gallery-role="fotorama__focusable-start" tabindex="-1"></div>
                            <div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
                                 style="min-width: 0px; max-width: 100%;">
                                <div class="fotorama__stage" data-fotorama-stage="fotorama__stage"
                                     style="height: 454px; width: 454px;">
                                    <div class="fotorama__fullscreen-icon" data-gallery-role="fotorama__fullscreen-icon"
                                         tabindex="0" aria-label="Exit fullscreen" role="button"></div>
                                    <div class="fotorama__arr fotorama__arr--prev" tabindex="0" role="button"
                                         aria-label="Previous" data-gallery-role="arrow">
                                        <div class="fotorama__arr__arr"></div>
                                    </div>
                                    <div class="fotorama__stage__shaft fotorama__grab" tabindex="0"
                                         data-gallery-role="stage-shaft"
                                         style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); margin-left: 0px; width: 454px;">
                                        <div class="fotorama__stage__frame fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img"
                                             aria-hidden="true" data-active="false" style="left: -456px;"
                                             href="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_alt1.jpg">
                                            <img src="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_alt1.jpg"
                                                 alt="Hera Pullover Hoodie" class="fotorama__img" aria-hidden="false">
                                        </div>
                                        <div class="fotorama__stage__frame fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img"
                                             aria-hidden="true" style="left: 456px;"
                                             href="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_back.jpg">
                                            <img src="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_back.jpg"
                                                 alt="Hera Pullover Hoodie" class="fotorama__img" aria-hidden="false">
                                        </div>
                                        <div class="fotorama__stage__frame fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img fotorama__active"
                                             aria-hidden="false" style="left: 0px;" data-active="true"
                                             href="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_main.jpg">
                                            <img src="https://demo-m2.bird.eu/media/catalog/product/cache/00d5f4c4be32dd6972e5a4316b89309a/w/h/wh02-blue_main.jpg"
                                                 alt="Hera Pullover Hoodie" class="fotorama__img" aria-hidden="false">
                                        </div>
                                    </div>
                                    <div class="fotorama__arr fotorama__arr--next" tabindex="0" role="button"
                                         aria-label="Next" data-gallery-role="arrow">
                                        <div class="fotorama__arr__arr"></div>
                                    </div>
                                    <div class="fotorama__video-close"></div>
                                    <div class="fotorama__zoom-in zoom-in-loaded" data-gallery-role="fotorama__zoom-in"
                                         aria-label="Zoom in" role="button" tabindex="0"></div>
                                    <div class="fotorama__zoom-out zoom-out-loaded"
                                         data-gallery-role="fotorama__zoom-out" aria-label="Zoom out" role="button"
                                         tabindex="0"></div>
                                    <div class="fotorama__spinner"></div>
                                </div>
                                <div class="fotorama__nav-wrap fotorama__nav-wrap--horizontal"
                                     data-gallery-role="nav-wrap">
                                    <div class="fotorama__nav fotorama__nav--thumbs"
                                         style="height: 114px; width: 454px;">

                                        <div class="fotorama__thumb__arr fotorama__thumb__arr--left fotorama__arr--disabled"
                                             role="button" aria-label="Previous" data-gallery-role="arrow" tabindex="-1"
                                             disabled="disabled">
                                            <div class="fotorama__thumb--icon"></div>
                                        </div>
                                        <div class="fotorama__nav__shaft"
                                             style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="fotorama__thumb-border"
                                                 style="transition-duration: 0ms; transform: translate3d(90px, 0px, 0px); width: 88px; height: 110px;"></div>
                                            <div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0"
                                                 role="button" data-gallery-role="nav-frame" data-nav-type="thumb"
                                                 aria-label="Hera Pullover Hoodie" style="width: 88px;"
                                                 data-active="false">
                                                <div class="fotorama__thumb fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img">
                                                    <img src="https://demo-m2.bird.eu/media/catalog/product/cache/616045ad01863bdebbd6c54655262b0a/w/h/wh02-blue_alt1.jpg"
                                                         alt="Hera Pullover Hoodie" class="fotorama__img"
                                                         aria-hidden="false">
                                                </div>
                                            </div>
                                            <div class="fotorama__nav__frame fotorama__nav__frame--thumb fotorama__active"
                                                 tabindex="0" role="button" data-gallery-role="nav-frame"
                                                 data-nav-type="thumb" aria-label="Hera Pullover Hoodie"
                                                 style="width: 88px;" data-active="true">
                                                <div class="fotorama__thumb fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img">
                                                    <img src="https://demo-m2.bird.eu/media/catalog/product/cache/616045ad01863bdebbd6c54655262b0a/w/h/wh02-blue_main.jpg"
                                                         alt="Hera Pullover Hoodie" class="fotorama__img"
                                                         aria-hidden="false">
                                                </div>
                                            </div>
                                            <div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0"
                                                 role="button" data-gallery-role="nav-frame" data-nav-type="thumb"
                                                 aria-label="Hera Pullover Hoodie" style="width: 88px;">
                                                <div class="fotorama__thumb fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img">
                                                    <img src="https://demo-m2.bird.eu/media/catalog/product/cache/616045ad01863bdebbd6c54655262b0a/w/h/wh02-blue_back.jpg"
                                                         alt="Hera Pullover Hoodie" class="fotorama__img"
                                                         aria-hidden="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fotorama__thumb__arr fotorama__thumb__arr--right fotorama__arr--disabled"
                                             role="button" aria-label="Next" data-gallery-role="arrow" tabindex="-1"
                                             disabled="disabled">
                                            <div class="fotorama__thumb--icon"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div data-gallery-role="fotorama__focusable-end" tabindex="-1"></div>
                        </div>
                        <div class="magnifier-preview magnify-hidden" data-gallery-role="magnifier" id="preview"
                             style="display: none;"></div>
                    </div>


                    <div class="action-skip-wrapper"><a class="action skip gallery-prev-area" href="#gallery-prev-area">
    <span>
        Skip to the beginning of the images gallery    </span>
                        </a>
                    </div>
                    <a id="gallery-next-area" tabindex="-1"></a>
                </div>
                <div class="product info detailed">
                    <div class="product data items" role="tablist">
                        <div class="data item title active" data-role="collapsible" id="tab-label-description"
                             role="tab" data-collapsible="true" aria-controls="description" aria-selected="false"
                             aria-expanded="true" tabindex="0">
                            <a class="data switch" tabindex="-1" data-toggle="trigger" href="#description"
                               id="tab-label-description-title">
                                Details </a>
                        </div>
                        <div class="data item content" aria-labelledby="tab-label-description" id="description"
                             data-role="content" role="tabpanel" aria-hidden="false">

                            <div class="product attribute description">
                                <div class="value"><p>Get ready to rule the studio and dominate the yoga mat in the Hera
                                        Pullover Hoodie, a cozy yet classy look for any level of yogi.</p>
                                    <p>• Teal with purple stiching.<br>• Hoodie pullover.<br>• Snug fit.</p></div>
                            </div>
                        </div>
                        <div class="data item title" data-role="collapsible" id="tab-label-additional" role="tab"
                             data-collapsible="true" aria-controls="additional" aria-selected="false"
                             aria-expanded="false" tabindex="0">
                            <a class="data switch" tabindex="-1" data-toggle="trigger" href="#additional"
                               id="tab-label-additional-title">
                                More Information </a>
                        </div>
                        <div class="data item content" aria-labelledby="tab-label-additional" id="additional"
                             data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                            <div class="additional-attributes-wrapper table-wrapper">
                                <table class="data table additional-attributes" id="product-attribute-specs-table">
                                    <caption class="table-caption">More Information</caption>
                                    <tbody>
                                    <tr>
                                        <th class="col label" scope="row">Style</th>
                                        <td class="col data" data-th="Style">Pullover, Hoodie</td>
                                    </tr>
                                    <tr>
                                        <th class="col label" scope="row">Material</th>
                                        <td class="col data" data-th="Material">Nylon, Wool</td>
                                    </tr>
                                    <tr>
                                        <th class="col label" scope="row">Pattern</th>
                                        <td class="col data" data-th="Pattern">Solid</td>
                                    </tr>
                                    <tr>
                                        <th class="col label" scope="row">Climate</th>
                                        <td class="col data" data-th="Climate">All-Weather, Cool, Mild, Spring</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="data item title" data-role="collapsible" id="tab-label-reviews" role="tab"
                             data-collapsible="true" aria-controls="reviews" aria-selected="false" aria-expanded="false"
                             tabindex="0">
                            <a class="data switch" tabindex="-1" data-toggle="trigger" href="#reviews"
                               id="tab-label-reviews-title">
                                Reviews <span class="counter">3</span> </a>
                        </div>
                        <div class="data item content" aria-labelledby="tab-label-reviews" id="reviews"
                             data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                            <div id="product-review-container" data-role="product-review"></div>
                            <div class="block review-add">
                                <div class="block-title"><strong>Write Your Own Review</strong></div>
                                <div class="block-content">
                                    <form action="https://demo-m2.bird.eu/review/product/post/id/1059/"
                                          class="review-form" method="post" id="review-form"
                                          data-role="product-review-form" data-bind="scope: 'review-form'"
                                          novalidate="novalidate">
                                        <input name="form_key" type="hidden" value="VwAwltRTjF7aERLG">
                                        <fieldset class="fieldset review-fieldset" data-hasrequired="* Required Fields">
                                            <legend class="legend review-legend"><span>You're reviewing:</span><strong>Hera
                                                    Pullover Hoodie</strong></legend>
                                            <br>
                                            <span id="input-message-box"></span>
                                            <fieldset class="field required review-field-ratings">
                                                <legend class="label"><span>Your Rating</span></legend>
                                                <br>
                                                <div class="control">
                                                    <div class="nested" id="product-review-table">
                                                        <div class="field choice review-field-rating">
                                                            <label class="label"
                                                                   id="Rating_rating_label"><span>Rating</span></label>
                                                            <div class="control review-control-vote">
                                                                <input type="radio" name="ratings[4]" id="Rating_1"
                                                                       value="16" class="radio"
                                                                       data-validate="{'rating-required':true}"
                                                                       aria-labelledby="Rating_rating_label Rating_1_label"
                                                                       aria-required="true">
                                                                <label class="rating-1" for="Rating_1" title="1 star"
                                                                       id="Rating_1_label">
                                                                    <span>1 star</span>
                                                                </label>
                                                                <input type="radio" name="ratings[4]" id="Rating_2"
                                                                       value="17" class="radio"
                                                                       data-validate="{'rating-required':true}"
                                                                       aria-labelledby="Rating_rating_label Rating_2_label"
                                                                       aria-required="true">
                                                                <label class="rating-2" for="Rating_2" title="2 stars"
                                                                       id="Rating_2_label">
                                                                    <span>2 stars</span>
                                                                </label>
                                                                <input type="radio" name="ratings[4]" id="Rating_3"
                                                                       value="18" class="radio"
                                                                       data-validate="{'rating-required':true}"
                                                                       aria-labelledby="Rating_rating_label Rating_3_label"
                                                                       aria-required="true">
                                                                <label class="rating-3" for="Rating_3" title="3 stars"
                                                                       id="Rating_3_label">
                                                                    <span>3 stars</span>
                                                                </label>
                                                                <input type="radio" name="ratings[4]" id="Rating_4"
                                                                       value="19" class="radio"
                                                                       data-validate="{'rating-required':true}"
                                                                       aria-labelledby="Rating_rating_label Rating_4_label"
                                                                       aria-required="true">
                                                                <label class="rating-4" for="Rating_4" title="4 stars"
                                                                       id="Rating_4_label">
                                                                    <span>4 stars</span>
                                                                </label>
                                                                <input type="radio" name="ratings[4]" id="Rating_5"
                                                                       value="20" class="radio"
                                                                       data-validate="{'rating-required':true}"
                                                                       aria-labelledby="Rating_rating_label Rating_5_label"
                                                                       aria-required="true">
                                                                <label class="rating-5" for="Rating_5" title="5 stars"
                                                                       id="Rating_5_label">
                                                                    <span>5 stars</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="validate_rating" class="validate-rating"
                                                           value="" aria-required="true">
                                                </div>
                                            </fieldset>
                                            <div class="field review-field-nickname required">
                                                <label for="nickname_field" class="label"><span>Nickname</span></label>
                                                <div class="control">
                                                    <input type="text" name="nickname" id="nickname_field"
                                                           class="input-text" data-validate="{required:true}"
                                                           data-bind="value: nickname()" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="field review-field-summary required">
                                                <label for="summary_field" class="label"><span>Summary</span></label>
                                                <div class="control">
                                                    <input type="text" name="title" id="summary_field"
                                                           class="input-text" data-validate="{required:true}"
                                                           data-bind="value: review().title" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="field review-field-text required">
                                                <label for="review_field" class="label"><span>Review</span></label>
                                                <div class="control">
                                                    <textarea name="detail" id="review_field" cols="5" rows="3"
                                                              data-validate="{required:true}"
                                                              data-bind="value: review().detail"
                                                              aria-required="true"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="actions-toolbar review-form-actions">
                                            <div class="primary actions-primary">
                                                <button type="submit" class="action submit primary">
                                                    <span>Submit Review</span></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <input name="form_key" type="hidden" value="VwAwltRTjF7aERLG">
                <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                     style="display: none;">
                    <script>window.authenticationPopup = {
                            "autocomplete": "off",
                            "customerRegisterUrl": "https:\/\/demo-m2.bird.eu\/customer\/account\/create\/",
                            "customerForgotPasswordUrl": "https:\/\/demo-m2.bird.eu\/customer\/account\/forgotpassword\/",
                            "baseUrl": "https:\/\/demo-m2.bird.eu\/"
                        }</script>    <!-- ko template: getTemplate() -->


                    <!-- /ko -->

                </div>


                <script data-role="msrp-popup-template" type="text/x-magento-template">
                    <div id="map-popup-click-for-price" class="map-popup">
                        <div class="popup-header">
                            <strong class="title" id="map-popup-heading-price"></strong>
                        </div>
                        <div class="popup-content">
                            <div class="map-info-price" id="map-popup-content">
                                <div class="price-box">
                                    <div class="map-msrp" id="map-popup-msrp-box">
                                        <span class="label">Price</span>
                                        <span class="old-price map-old-price" id="map-popup-msrp">
                            <span class="price"></span>
                        </span>
                                    </div>
                                    <div class="map-price" id="map-popup-price-box">
                                        <span class="label">Actual Price</span>
                                        <span id="map-popup-price" class="actual-price"></span>
                                    </div>
                                </div>
                                <form action="" method="POST" class="map-form-addtocart">
                                    <input type="hidden" name="product" class="product_id" value=""/>
                                    <button type="button"
                                            title="Add to Cart"
                                            class="action tocart primary">
                                        <span>Add to Cart</span>
                                    </button>
                                    <div class="additional-addtocart-box">
                                    </div>
                                </form>
                            </div>
                            <div class="map-text" id="map-popup-text">
                                Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As
                                a result, we cannot show you the price in catalog or the product page. <br><br> You have
                                no obligation to purchase the product once you know the price. You can simply remove the
                                item from your cart.
                            </div>
                        </div>
                    </div>
                </script>
                <script data-role="msrp-info-template" type="text/x-magento-template">
                    <div id="map-popup-what-this" class="map-popup">
                        <div class="popup-header">
                            <strong class="title" id="map-popup-heading-what-this"></strong>
                        </div>
                        <div class="popup-content">
                            <div class="map-help-text" id="map-popup-text-what-this">
                                Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As
                                a result, we cannot show you the price in catalog or the product page. <br><br> You have
                                no obligation to purchase the product once you know the price. You can simply remove the
                                item from your cart.
                            </div>
                        </div>
                    </div>
                </script>


            </div>
        </div>
    </main>
    <footer class="page-footer">
    </footer>
</div>

<div class="swatch-option-tooltip">
    <div class="image"></div>
    <div class="title"></div>
    <div class="corner"></div>
</div>
<div class="modals-wrapper"><!--
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
-->

    <aside role="dialog" class="modal-popup popup-authentication
               modal-slide
               _inner-scroll" aria-describedby="modal-content-36" data-role="modal" data-type="popup" tabindex="0">
        <div data-role="focusable-start" tabindex="0"></div>
        <div class="modal-inner-wrap" data-role="focusable-scope">
            <header class="modal-header">

                <button class="action-close" data-role="closeBtn" type="button">
                    <span>Close</span>
                </button>
            </header>
            <div id="modal-content-36" class="modal-content" data-role="content">
                <div class="block-authentication" data-bind="afterRender: setModalElement, blockLoader: isLoading"
                     style="">
                    <div class="block block-new-customer" data-bind="attr: {'data-label': $t('or')}" data-label="or">
                        <div class="block-title">
                            <strong id="block-new-customer-heading" role="heading" aria-level="2"
                                    data-bind="i18n: 'Checkout as a new customer'">Checkout as a new customer</strong>
                        </div>
                        <div class="block-content" aria-labelledby="block-new-customer-heading">
                            <p data-bind="i18n: 'Creating an account has many benefits:'">Creating an account has many
                                benefits:</p>
                            <ul>
                                <li data-bind="i18n: 'See order and shipping status'">See order and shipping status</li>
                                <li data-bind="i18n: 'Track order history'">Track order history</li>
                                <li data-bind="i18n: 'Check out faster'">Check out faster</li>
                            </ul>
                            <div class="actions-toolbar">
                                <div class="primary">
                                    <a class="action action-register primary" data-bind="attr: {href: registerUrl}"
                                       href="https://demo-m2.bird.eu/customer/account/create/">
                                        <span data-bind="i18n: 'Create an Account'">Create an Account</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block block-customer-login" data-bind="attr: {'data-label': $t('or')}" data-label="or">
                        <div class="block-title">
                            <strong id="block-customer-login-heading" role="heading" aria-level="2"
                                    data-bind="i18n: 'Checkout using your account'">Checkout using your account</strong>
                        </div>
                        <!-- ko foreach: getRegion('messages') -->
                        <!-- ko template: getTemplate() -->
                        <div data-role="checkout-messages" class="messages"
                             data-bind="visible: isVisible(), click: removeAll">
                            <!-- ko foreach: messageContainer.getErrorMessages() --><!--/ko-->
                            <!-- ko foreach: messageContainer.getSuccessMessages() --><!--/ko-->
                        </div>
                        <!-- /ko -->
                        <!--/ko-->
                        <!-- ko foreach: getRegion('before') --><!-- /ko -->
                        <div class="block-content" aria-labelledby="block-customer-login-heading">
                            <form class="form form-login" method="post" data-bind="event: {submit: login }"
                                  id="login-form">
                                <div class="fieldset login"
                                     data-bind="attr: {'data-hasrequired': $t('* Required Fields')}"
                                     data-hasrequired="* Required Fields">
                                    <div class="field email required">
                                        <label class="label" for="customer-email"><span
                                                    data-bind="i18n: 'Email Address'">Email Address</span></label>
                                        <div class="control">
                                            <input name="username" id="customer-email" type="email" class="input-text"
                                                   data-mage-init="{&quot;mage/trim-input&quot;:{}}"
                                                   data-bind="attr: {autocomplete: autocomplete}"
                                                   data-validate="{required:true, 'validate-email':true}"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="field password required">
                                        <label for="pass" class="label"><span
                                                    data-bind="i18n: 'Password'">Password</span></label>
                                        <div class="control">
                                            <input name="password" type="password" class="input-text" id="pass"
                                                   data-bind="attr: {autocomplete: autocomplete}"
                                                   data-validate="{required:true}" autocomplete="off">
                                        </div>
                                    </div>
                                    <!-- ko foreach: getRegion('additional-login-form-fields') -->
                                    <!-- ko template: getTemplate() -->
                                    <input name="captcha_form_id" type="hidden"
                                           data-bind="value: formId,  attr: {'data-scope': dataScope}"
                                           value="user_login" data-scope="">
                                    <!-- ko if: (isRequired() && getIsVisible())--><!-- /ko -->
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <div class="actions-toolbar">
                                        <input name="context" type="hidden" value="checkout">
                                        <div class="primary">
                                            <button type="submit" class="action action-login secondary" name="send"
                                                    id="send2">
                                                <span data-bind="i18n: 'Sign In'">Sign In</span>
                                            </button>
                                        </div>
                                        <div class="secondary">
                                            <a class="action" data-bind="attr: {href: forgotPasswordUrl}"
                                               href="https://demo-m2.bird.eu/customer/account/forgotpassword/">
                                                <span data-bind="i18n: 'Forgot Your Password?'">Forgot Your Password?</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div data-role="focusable-end" tabindex="0"></div>
    </aside>
</div>
</body>
</html>
