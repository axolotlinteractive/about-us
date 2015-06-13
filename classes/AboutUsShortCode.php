<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 6/13/15
 * Time: 1:17 PM
 */

namespace AboutUs;


use AboutUs\Model\Person;
use WordWrap\ShortCodeScriptLoader;
use WordWrap\View\View;
use WordWrap\View\ViewCollection;

class AboutUsShortCode extends ShortCodeScriptLoader{

    /**
     * @param  $atts array shortcode inputs
     * @return string shortcode content
     */
    public function handleShortcode($atts) {
        $us = Person::all();

        $collection = new ViewCollection($this->lifeCycle, "front_end_container");

        foreach($us as $entry) {
            $entryView = new View($this->lifeCycle, "front_end_entry");

            $entryView->setTemplateVar("name", $entry->name);
            $entryView->setTemplateVar("image_url", $entry->image_url);
            $entryView->setTemplateVar("title", $entry->title);

            $collection->addChildView("person_entry", $entryView);
        }

        return $collection->export();
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