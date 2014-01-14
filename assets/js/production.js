/*!
 *  Echo v1.4.0
 *  Lazy-loading with data-* attributes, offsets and throttle options
 *  Project: https://github.com/toddmotto/echo
 *  by Todd Motto: http://toddmotto.com
 *  Copyright. MIT licensed.
 */
window.Echo = (function (window, document, undefined) {

  'use strict';

  var store = [], offset, throttle, poll;

  var _inView = function (el) {
    var coords = el.getBoundingClientRect();
    return ((coords.top >= 0 && coords.left >= 0 && coords.top) <= (window.innerHeight || document.documentElement.clientHeight) + parseInt(offset));
  };

  var _pollImages = function () {
    for (var i = store.length; i--;) {
      var self = store[i];
      if (_inView(self)) {
        self.src = self.getAttribute('data-echo');
        // self.style.backgroundImage = 'url(' + self.getAttribute('data-echo') + ')';
        store.splice(i, 1);
      }
    }
  };

  var _throttle = function () {
    clearTimeout(poll);
    poll = setTimeout(_pollImages, throttle);
  };

  var init = function (obj) {
    var nodes = document.querySelectorAll('[data-echo]');
    var opts = obj || {};
    offset = opts.offset || 0;
    throttle = opts.throttle || 250;

    for (var i = 0; i < nodes.length; i++) {
      store.push(nodes[i]);
    }

    _throttle();

    if (document.addEventListener) {
      window.addEventListener('scroll', _throttle, false);
    } else {
      window.attachEvent('onscroll', _throttle);
    }
  };

  return {
    init: init,
    render: _throttle
  };

})(window, document);
ragadjust = function (s, method) {
    
    if (document.querySelectorAll) {
    
        var eles = document.querySelectorAll(s),
                elescount = eles.length;
        
        while (elescount-- > 0) {
            
            var preps = /(\s|^|>)((aboard|about|above|across|after|against|along|amid|among|anti|around|before|behind|below|beneath|beside|besides|between|beyond|concerning|considering|despite|down|during|except|excepting|excluding|following|from|inside|into|like|minus|near|onto|opposite|outside|over|past|plus|regarding|round|save|since|than|that|this|through|toward|towards|under|underneath|unlike|until|upon|versus|with|within|without|-|–|—)?\s)+/gi,
            
                    smallwords = /(\s|^)(([a-zA-Z-_(]{1,2}('|’)*[a-zA-Z-_,;]?\s)+)/gi, // words with 3 or less characters
                    
                    emphasis = /(<(strong|em|b|i)>)(([^\s]+\s*){2,3})?(<\/(strong|em|b|i)>)/gi,
            
                    ele = eles[elescount],
                    
                    elehtml = ele.innerHTML;
            
            if (method == 'small-words' || method == 'all') 
                
                // replace small words
                elehtml = elehtml.replace(smallwords, function(contents, p1, p2) {
                return p1 + p2.replace(/\s/g, '&nbsp;');
            }); 
            
            if (method == 'prepositions' || method == 'all') 
            
                // replace prepositions (greater than 3 characters)
                elehtml = elehtml.replace(preps, function(contents, p1, p2) {
                        return p1 + p2.replace(/\s/gi, '&nbsp;');
                    });
            
            if (method == 'emphasis' || method == 'all') 
            
                // emphasized text
                elehtml = elehtml.replace(emphasis, function(contents, p1, p2, p3, p4, p5) {
                        return p1 + p3.replace(/\s/gi, '&nbsp;') + p5;
                    });
            
            ele.innerHTML = elehtml;
            
        }
    
    }
    
};
// $(function() {

//     $('.project__link').click(function(e) {
//         var href = $(this).attr('href');
//         var id   = href.split('.').shift().split('/').pop();

//         $('.project__link').removeClass('project__link--is-selected');
//         $('.case-study').removeClass('case-study--is-visible');
//         $('#' + id).addClass('case-study--is-visible');
//         $(this).addClass('project__link--is-selected');

//         e.preventDefault();
//     });

// });

//  Allow for selecting elements by data attribute

    // function getAllElementsWithAttribute(attribute) {
    //     var matchingElements = [];
    //     var allElements = document.getElementsByTagName('*');

    //     for ( var i = 0; i < allElements.length; i++ ) {

    //         if ( typeof allElements[i].getAttribute(attribute) != null ) {
    //             // Element exists with attribute. Add to array.
    //             matchingElements.push(allElements[i]);
    //         }

    //     }

    //     return matchingElements;
    // }

    // getAllElementsWithAttribute('data-echo');


//  Lazy load images
    Echo.init({
        offset: 100,
        throttle: 250
    });

//  Clean up typography
    ragadjust('p', 'all');