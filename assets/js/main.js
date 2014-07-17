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

    var validator = new FormValidator('contact-form', [{
        name: 'personName',
        display: 'Name',    
        rules: 'required'
    }, {
        name: 'email',
        display: 'Email',
        rules: 'required|valid_email'
    }, {
        name: 'companyName',
        display: 'Company name',
        rules: 'required'
    }, {
        name: 'budget',
        display: 'budget',
        rules: 'required|numeric'
    }, {
        name: 'comments',
        display: 'comments'
    }, {
        name: 'website',
        display: 'You have filled in the hidden file',
        rules: 'max_length[0]'
    }], function(errors, event) {

        var previousErrors = getElementsByClassName("validation-error");


        for ( var i = 0; i < previousErrors.length; i++ ) {

            previousErrors[i].parentNode.removeChild(previousErrors[i]);

        }


        if (errors.length > 0) {
            for( var i = 0; i < errors.length; i++ ) {

                var refNode = document.getElementById( errors[i].id ),
                    span = document.createElement('span'),
                    errorNode = refNode.nextSibling;

                span.className = "validation-error";

                if ( !errorNode || errorNode.nodeType != 1 ) {

                    span.innerHTML = errors[i].message;

                    refNode.parentNode.insertBefore(span, errorNode );

                } else {

                    errorNode.innerHTML = errors[i].message;

                }

            }
        }
    });


    
    // console.log("Hello");

    // function processForm(e) {
    //     if (e.preventDefault) e.preventDefault();
    //     /* do what you want with the form */

    //     var personName = form.personName.value,
    //         email = form.email.value,
    //         companyName = form.companyName.value,
    //         budget = form.budget.value,
    //         comments = form.comments.value,
    //         specialField = form.website.value;

    //     console.log( specialField );

    //     if ( specialField != '' ) {

    //         return false;

    //     } else {

    //         return true;

    //     }

       

    //     // You must return false to prevent the default form behavior
    //     return false;
    // }

    // var form = document.getElementById('contact-form');
    // if (form.attachEvent) {
    //     form.attachEvent("submit", processForm);
    // } else {
    //     form.addEventListener("submit", processForm);
    // }
