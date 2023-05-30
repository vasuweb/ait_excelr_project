 // window.HFCHAT_CONFIG = {
 //    EMBED_TOKEN: 'c7a0af50-930c-11ec-b2bc-8fea36c4a193',
 //    ASSETS_URL: 'https://widget.happyfoxchat.com/v2/visitor'
 //  };
 //  function chatload()
 //          {
 //          (function () {
 //            var scriptTag = document.createElement('script')
 //            scriptTag.type = 'text/javascript'
 //            scriptTag.async = true
 //            scriptTag.src = window.HFCHAT_CONFIG.ASSETS_URL + '/js/widget-loader.js'
        
 //            var s = document.getElementsByTagName('script')[0]
 //            s.parentNode.insertBefore(scriptTag, s)
 //          })()
 //          }
 //          setTimeout(function() {
 //                        chatload();
 //                }, 10000)

// function downloadGaAtOnload()
// {
// 	var delay = window.CUSTOM_DELAY || window.pageLoadDelay || 0;
// 	if(!delay) {
// 		delay = (typeof PAGE_DELAY_CONFIG === "object" && !isNaN(PAGE_DELAY_CONFIG.gtm))?PAGE_DELAY_CONFIG.gtm:0;
// 	}
// }
			  
// if (window.addEventListener)
// window.addEventListener("load", downloadGaAtOnload, false);
// else if (window.attachEvent)
// window.attachEvent("onload", downloadGaAtOnload);
// else window.onload = downloadGaAtOnload;
		 
		!function(window){
		  var $q = function(q, res){
				if (document.querySelectorAll) {
				  res = document.querySelectorAll(q);
				} else {
				  var d=document
					, a=d.styleSheets[0] || d.createStyleSheet();
				  a.addRule(q,'f:b');
				  for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
					l[b].currentStyle.f && c.push(l[b]);

				  a.removeRule(0);
				  res = c;
				}
				return res;
			  }
			, addEventListener = function(evt, fn){
				window.addEventListener
				  ? this.addEventListener(evt, fn, false)
				  : (window.attachEvent)
					? this.attachEvent('on' + evt, fn)
					: this['on' + evt] = fn;
			  }
			, _has = function(obj, key) {
				return Object.prototype.hasOwnProperty.call(obj, key);
			  }
			;

		  function loadImage (el, fn) {
			var img = new Image()
			  , src = el.getAttribute('data-src');
			img.onload = function() {
			  if (!! el.parent)
				el.parent.replaceChild(img, el)
			  else
				el.src = src;

			  fn? fn() : null;
			}
			img.src = src;
		  }

		  function elementInViewport(el) {
			var rect = el.getBoundingClientRect()

			return (
			   rect.top    >= 0
			&& rect.left   >= 0
			&& rect.top <= (window.innerHeight || document.documentElement.clientHeight)
			)
		  }

			var images = new Array()
			  , query = $q('img.lazy')
			  , processScroll = function(){
				  for (var i = 0; i < images.length; i++) {
					if (elementInViewport(images[i])) {
					  loadImage(images[i], function () {
						images.splice(i, i);
					  });
					}
				  };
				}
			  ;
			// Array.prototype.slice.call is not callable under our lovely IE8 
			for (var i = 0; i < query.length; i++) {
			  images.push(query[i]);
			};

			processScroll();
			addEventListener('scroll',processScroll);

		}(this);