<?php defined('SYSPATH') OR die('No direct script access.');

class HTML extends Kohana_HTML {

    /**
     * Creates a style sheet link element.
     *
     *     echo HTML::style('media/css/screen.css');
     *
     * @param   string  $file       file name
     * @param   array   $attributes default attributes
     * @param   mixed   $protocol   protocol to pass to URL::base()
     * @param   boolean $index      include the index page
     * @return  string
     * @uses    URL::base
     * @uses    HTML::attributes
     */
    public static function style($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            // Add the base URL
            $file = URL::site($file, $protocol, $index);
        }

        // Set the stylesheet link
        $attributes['href'] = $file;

        // Set the stylesheet rel
        $attributes['rel'] = empty($attributes['rel']) ? 'stylesheet' : $attributes['rel'];

        return '<link'.HTML::attributes($attributes).' />';
    }

    /**
     * Creates a script link.
     *
     *     echo HTML::script('media/js/jquery.min.js');
     *
     * @param   string  $file       file name
     * @param   array   $attributes default attributes
     * @param   mixed   $protocol   protocol to pass to URL::base()
     * @param   boolean $index      include the index page
     * @return  string
     * @uses    URL::base
     * @uses    HTML::attributes
     */
    public static function script($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            // Add the base URL
            $file = URL::site($file, $protocol, $index);
        }

        // Set the script link
        $attributes['src'] = $file;

        return '<script'.HTML::attributes($attributes).'></script>';
    }

}
