
/**
 * @file
 * Using jQuery to init ziehharmonika.
 */

(function ($) {
    Drupal.behaviors.drupallab = {
        attach: function (context, settings) {
            $('.ziehharmonika').ziehharmonika({
                collapsible: true,
                prefix: '•',
            });
            $('.ziehharmonika h3:eq(0)').ziehharmonika('open', true);
        }
    };
}(jQuery));
