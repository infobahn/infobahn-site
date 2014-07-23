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
        homeCtaBtn = document.getElementById('homeCtaBtn'),
        projectCtaBtn = document.getElementById('projectCtaBtn'),
        servicesCtaBtn = document.getElementById('servicesCtaBtn'),
        formSubmitBtn = document.getElementById('formSubmitBtn'),
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

//  CTA buttons
    addListener(homeCtaBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'homepage cta button');
    });

    addListener(projectCtaBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'project cta button');
    });

    addListener(servicesCtaBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'services cta button');
    });

    addListener(formSubmitBtn, 'click', function() {
        ga('send', 'event', 'button', 'click', 'contact form submit button');
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


//  Contact form validation

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
        display: 'Company name'
    }, {
        name: 'budget',
        display: 'budget',
        rules: 'required'
    }, {
        name: 'comments',
        display: 'comments'
    }, {
        name: 'website',
        display: 'You have filled in the hidden file',
        rules: 'max_length[0]'
    }], function(errors, event) {


        var lis = document.getElementsByTagName("form")[0].getElementsByTagName("li");

        for ( var i = 0; i < lis.length; i++ ) {

            lis[i].className = lis[i].className.replace(/(^|\s)form__item--is-invalid/ ,'');

        }


        if (errors.length > 0) {
            for( var i = 0; i < errors.length; i++ ) {

                var refNode = document.getElementById( errors[i].id ),
                    errorNode = refNode.parentNode.getElementsByTagName("span")[0],
                    parentLi = refNode.parentNode.parentNode;

                errorNode.innerHTML = errors[i].message;

                parentLi.className = parentLi.className + ' form__item--is-invalid';

            }
        }
    });