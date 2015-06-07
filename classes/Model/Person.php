<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 6/7/15
 * Time: 5:24 PM
 */
namespace AboutUs\Model;

use WordWrap\ORM\BaseModel;

class Person extends BaseModel{

    /**
     * @var int the auto incrementing id of this entry in the database
     */
    public $id;

    /**
     * @var string this persons name
     */
    public $name;

    /**
     * @var string this persons title in the company
     */
    public $title;

    /**
     * @var string the url to this persons image
     */
    public $image_url;

    /**
     * Overwrite this in your concrete class. Returns the table name used to
     * store models of this class.
     *
     * @return string
     */
    public static function get_table() {
        return "wp_about_us_person";
    }

    /**
     * Get an array of fields to search during a search query.
     *
     * @return array
     */
    public static function get_searchable_fields() {
        // TODO: Implement get_searchable_fields() method.
    }

    /**
     * Get an array of all fields for this Model with a key and a value
     * The key should be the name of the column in the database and the value should be the structure of it
     *
     * @return array
     */
    public static function get_fields() {
        return [
            "name" => "VARCHAR(40)",
            "title" => "VARCHAR(40)",
            "image_url" => "VARCHAR(145)"
        ];
    }
}