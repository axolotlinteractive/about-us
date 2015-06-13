<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 6/13/15
 * Time: 1:17 PM
 */

namespace AboutUs;


use WordWrap\ShortCodeScriptLoader;

class AboutUsShortCode extends ShortCodeScriptLoader{

    /**
     * @param  $atts array shortcode inputs
     * @return string shortcode content
     */
    public function handleShortcode($atts) {
        return 'Butts!';
    }

    /**
     * Example:
     *   wp_register_script('my-script', plugins_url('js/my-script.js', __FILE__), array('jquery'), '1.0', true);
     *   wp_print_scripts('my-script');
     * @return void
     */
    public function addScript() {
        // TODO: Implement addScript() method.
    }
}