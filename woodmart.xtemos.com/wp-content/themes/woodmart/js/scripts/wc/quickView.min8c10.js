!function(a){a.each(["frontend/element_ready/wd_products.default","frontend/element_ready/wd_products_tabs.default"],function(e,o){woodmartThemeModule.wdElementorAddAction(o,function(){woodmartThemeModule.quickViewInit()})}),woodmartThemeModule.quickViewInit=function(){woodmartThemeModule.$document.on("click",".open-quick-view",function(e){if(e.preventDefault(),a(".open-quick-view").hasClass("loading"))return!0;var e=a(this),o=e.data("id"),t=e.data("loop-name"),i=e.data("loop"),n="",d="",t=a(".quick-view").find('[data-loop-name="'+t+'"]');e.addClass("loading"),void 0!==t[i-1]&&(n=t.eq(i-1).addClass("quick-view-prev"),n=a("<div>").append(n.clone()).html()),void 0!==t[i+1]&&(d=t.eq(i+1).addClass("quick-view-next"),d=a("<div>").append(d.clone()).html()),woodmartThemeModule.quickViewLoad(o,e,n,d)})},woodmartThemeModule.quickViewLoad=function(e,o){function t(e){e=a(e),a.magnificPopup.open({items:{src:e,type:"inline"},tClose:woodmart_settings.close,tLoading:woodmart_settings.loading,removalDelay:600,fixedContentPos:!0,callbacks:{beforeOpen:function(){this.wrap.addClass("wd-popup-slide-from-left")},open:function(){var e=a(this.content[0]).find(".variations_form");e.each(function(){a(this).wc_variation_form().find(".variations select:eq(0)").trigger("change")}),e.trigger("wc_variation_form"),woodmartThemeModule.$body.trigger("woodmart-quick-view-displayed"),woodmartThemeModule.$document.trigger("wdQuickViewOpen"),setTimeout(function(){woodmartThemeModule.$document.trigger("wdQuickViewOpen300")},300)}}})}e={id:e,action:"woodmart_quick_view"};void 0!==o.data("attribute")&&a.extend(e,o.data("attribute"));a.ajax({url:woodmart_settings.ajaxurl,data:e,method:"get",success:function(e){woodmartThemeModule.removeDuplicatedStylesFromHTML(e,function(e){woodmart_settings.quickview_in_popup_fix?(a.magnificPopup.close(),setTimeout(function(){t(e)},500)):t(e)})},complete:function(){o.removeClass("loading")}})},a(document).ready(function(){woodmartThemeModule.quickViewInit()})}(jQuery);