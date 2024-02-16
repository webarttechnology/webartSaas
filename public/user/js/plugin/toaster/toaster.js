(function ($) {
    $.fn.toaster = function (options) {
        // Default options
        var settings = $.extend({
            message: 'Hello, World!',
            duration: 3000,
            position: 'top-right',
            type: 'info', // Default type
        }, options);

        // Create toaster container if not exists
        if ($('.custom-toaster-container').length === 0) {
            $('body').append('<div class="custom-toaster-container"></div>');
        }

        // Create toaster element
        var $toaster = $('<div class="custom-toaster"></div>').text(settings.message);

        // Add success or error class based on the specified type
        if (settings.type === 'success') {
            $toaster.addClass('success');
        } else if (settings.type === 'error') {
            $toaster.addClass('error');
        }

        let $toasterContainer = $('.custom-toaster-container');

        // Append toaster to container
        $('.custom-toaster-container').append($toaster);

        // Set position based on the specified option
        switch (settings.position) {
            case 'top-right':
                $toasterContainer.css({ top: 20, right: 20 });
                break;
            case 'top-left':
                $toasterContainer.css({ top: 20, left: 20 });
                break;
            case 'top-center':
                $toasterContainer.css({ top: 20, left: '50%', transform: 'translateX(-50%)' });
                break;
            case 'bottom-left':
                $toasterContainer.css({ bottom: 20, left: 20 });
                break;
            case 'bottom-right':
                $toasterContainer.css({ bottom: 20, right: 20 });
                break;
            case 'bottom-center':
                $toasterContainer.css({ bottom: 20, left: '50%', transform: 'translateX(-50%)' });
                break;
            default:
                // Default to bottom-right if an invalid position is provided
                $toasterContainer.css({ top: 20, right: 20 });
                break;
        }

        // Show toaster
        $toaster.fadeIn();

        // Hide toaster after a specified duration
        setTimeout(function () {
            $toaster.fadeOut(function () {
                // Remove toaster element after fading out
                $(this).remove();
            });
        }, settings.duration);
    };
})(jQuery);