!function(d){woodmartThemeModule.$document.on("wdBackHistory wdProductsTabsLoaded wdSearchFullScreenContentLoaded wdActionAfterAddToCart wdShopPageInit wdArrowsLoadProducts wdLoadMoreLoadProducts wdUpdateWishlist wdQuickViewOpen wdQuickShopSuccess wdProductBaseHoverIconsResize wdRecentlyViewedProductLoaded updated_checkout updated_cart_totals",function(){woodmartThemeModule.btnsToolTips()}),woodmartThemeModule.$document.on("wdUpdateTooltip",function(t,o){woodmartThemeModule.updateTooltip(o)}),d.each(["frontend/element_ready/wd_products.default","frontend/element_ready/wd_products_tabs.default","frontend/element_ready/wd_single_product_nav.default","frontend/element_ready/wd_single_product_size_guide_button.default","frontend/element_ready/wd_single_product_compare_button.default","frontend/element_ready/wd_single_product_wishlist_button.default"],function(t,o){woodmartThemeModule.wdElementorAddAction(o,function(){woodmartThemeModule.btnsToolTips()})}),woodmartThemeModule.btnsToolTips=function(){d('.woodmart-css-tooltip, .wd-buttons[class*="wd-pos-r"] div > a').on("mouseenter touchstart",function(){var t=d(this);t.hasClass("wd-tooltip-inited")||(t.find(".wd-tooltip-label").remove(),t.addClass("wd-tltp").prepend('<span class="wd-tooltip-label">'+t.text()+"</span>"),t.addClass("wd-tooltip-inited"))}),d(".wd-tooltip, .wd-hover-icons .wd-buttons .wd-action-btn:not(.wd-add-btn) > a, .wd-hover-icons .wd-buttons .wd-add-btn, body:not(.catalog-mode-on):not(.login-see-prices) .wd-hover-base .wd-bottom-actions .wd-action-btn.wd-style-icon:not(.wd-add-btn) > a, body:not(.catalog-mode-on):not(.login-see-prices) .wd-hover-base .wd-bottom-actions .wd-action-btn.wd-style-icon.wd-add-btn, .wd-hover-base .wd-compare-btn > a, .wd-products-nav .wd-btn-back, .wd-single-action-btn .wd-action-btn.wd-style-icon a, body:not(.logged-in) .wd-review-likes a").on("mouseenter touchstart",function(){var t=d(this),o=0!==t.closest(".wd-review-likes").length;!t.hasClass("wd-hint")&&!o&&woodmartThemeModule.windowWidth<=1024||t.hasClass("wd-tooltip-inited")||(t.tooltip({animation:!1,container:"body",trigger:"hover",boundary:"window",placement:"auto",title:function(){var t=d(this);return 0<t.find(".added_to_cart").length||0<t.find(".add_to_cart_button").length?t.find(".add_to_cart_button").text():0<t.find(".wd-swatch-text").length?t.find(".wd-swatch-text").text():o?woodmart_settings.review_likes_tooltip:t.text()}}),t.tooltip("show"),t.addClass("wd-tooltip-inited"))})},woodmartThemeModule.updateTooltip=function(t){t=d(t);t.hasClass("wd-tooltip-inited")||(t=t.parent(".wd-tooltip-inited")),woodmartThemeModule.windowWidth<=1024||!t.hasClass("wd-tooltip-inited")||void 0===d.fn.tooltip||!t.is(":hover")||t.tooltip("update").tooltip("show")},d(document).ready(function(){woodmartThemeModule.btnsToolTips()})}(jQuery);