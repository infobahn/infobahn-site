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
    ragadjust('p', 'all');

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