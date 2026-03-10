jQuery(document).ready(function ($) {
    // When the notice is dismissed
    $(document).on('click', '.event-caterer-notice .notice-dismiss', function () {
        $.post(ajaxurl, {
            action: 'event_caterer_dismiss_notice'
        });
    });
});