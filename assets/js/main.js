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
    // Echo.init({
    //     offset: 100,
    //     throttle: 250
    // });

//  Clean up typography
    // ragadjust('p', 'all');

//  Expand sidebar
    // var btnshowsidebar = document.getElementById('btnShowSidebar'),
    // sidebar = document.getElementById('sidebar'),
     
    // hasClass = function (el, cl) {
    //     var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
    //     return !!el.className.match(regex);
    // },
 
    // addClass = function (el, cl) {
    //     el.className += ' ' + cl;
    // },
 
    // removeClass = function (el, cl) {
    //     var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
    //     el.className = el.className.replace(regex, ' ');
    // },
 
    // toggleClass = function (el, cl) {
    //     hasClass(el, cl) ? removeClass(el, cl) : addClass(el, cl);
    // };

    // btnshowsidebar.onclick = function() {
    //     toggleClass(btnshowsidebar, 'btn--show-sidebar--is-active');
    //     toggleClass(sidebar, 'sidebar--is-visible');
    //     return false;
    // };

//  Expand sidebar
    var showMenu = document.getElementById('showMenu'),
    hideMenu = document.getElementById('hideMenu'),
    menu = document.getElementById('menu'),
    container = document.getElementById('container'),
    links = document.getElementById('menu').getElementsByTagName('a'),
    pusher = document.getElementById('pusher'),
     
    hasClass = function (el, cl) {
        var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
        return !!el.className.match(regex);
    },
 
    addClass = function (el, cl) {
        el.className += ' ' + cl;
    },
 
    removeClass = function (el, cl) {
        var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
        el.className = el.className.replace(regex, ' ');
    },
 
    toggleClass = function (el, cl) {
        hasClass(el, cl) ? removeClass(el, cl) : addClass(el, cl);
    };

    showMenu.onclick = function() {
        toggleClass(menu, 'nav--main--is-visible');
        toggleClass(container, 'nav--main--is-open');
        return false;
    };

    hideMenu.onclick = function() {
        removeClass(menu, 'nav--main--is-visible');
        removeClass(container, 'nav--main--is-open');
        return false;
    };

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', linkClick, false);
    }

    function linkClick() {
        addClass(pusher, 'pusher--no-transition');
        removeClass(menu, 'nav--main--is-visible');
        removeClass(container, 'nav--main--is-open');
        pusher.offsetWidth = pusher.offsetWidth;
        removeClass(pusher, 'pusher--no-transition');
    };

//  GA Events

    var twitterBtn = document.getElementById('twitterBtn'),
        facebookBtn = document.getElementById('facebookBtn'),
        linkedinBtn = document.getElementById('linkedinBtn'),
        twitterLinkBtn = document.getElementById('twitterLinkBtn'),
        facebookLinkBtn = document.getElementById('facebookLinkBtn'),
        linkedinLinkBtn = document.getElementById('linkedinLinkBtn'),
        pinterestLinkBtn = document.getElementById('pinterestLinkBtn'),
        pageUrl = document.URL;

//  Share buttons
    addListener(twitterBtn, 'click', function() {
      ga('send', 'social', 'twitter', 'share', pageUrl);
    });

    addListener(facebookBtn, 'click', function() {
      ga('send', 'social', 'facebook', 'like', pageUrl);
    });

    addListener(linkedinBtn, 'click', function() {
      ga('send', 'social', 'linkedin', 'share', pageUrl);
    });

//  Profile buttons
    addListener(twitterLinkBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'twitter button');
    });

    addListener(facebookLinkBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'facebook button');
    });

    addListener(linkedinLinkBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'linkedin button');
    });

    addListener(pinterestLinkBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'pinterest button');
    });


    /**
     * Utility to wrap the different behaviors between W3C-compliant browsers
     * and IE when adding event handlers.
     *
     * @param {Object} element Object on which to attach the event listener.
     * @param {string} type A string representing the event type to listen for
     *     (e.g. load, click, etc.).
     * @param {function()} callback The function that receives the notification.
     */
    function addListener(element, type, callback) {
        if (element) {
            if (element.addEventListener) element.addEventListener(type, callback);
            else if (element.attachEvent) element.attachEvent('on' + type, callback);
        }
    }