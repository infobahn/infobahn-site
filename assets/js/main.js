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