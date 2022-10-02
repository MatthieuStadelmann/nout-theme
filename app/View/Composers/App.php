<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'theme_general_settings' => $this->theme_general_settings(),
            'home_page' => $this->home_page()
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Returns the theme options
     *
     * @return object
     */

    public function theme_general_settings()
    {
        $address = get_field('address', 'option');
        $email = get_field('email', 'option');
        $phone = get_field('phone', 'option');
        $instagram = get_field('instagram', 'option');
        $facebook = get_field('facebook', 'option');
        return (object)array(
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'instagram' => $instagram,
            'facebook' => $facebook
        );
    }

    /**
     * Returns the home page custom fields
     *
     * @return object
     */

    public function home_page()
    {
        $description = get_field('description');
        return (object)array(
            'description' => $description
        );
    }
}
