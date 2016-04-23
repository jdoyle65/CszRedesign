/*
 * Created by the Blank scaffold.
 * Should be removed.
 */

$(function () {
    console.log('We got jQuery!');
    $(window).on('ajaxErrorMessage', function (event, message) {

        // This will stop the default alert() message
        event.preventDefault();

    });
});
