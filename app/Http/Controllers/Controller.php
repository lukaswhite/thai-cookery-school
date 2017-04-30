<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use AcuityScheduling;

class Controller extends BaseController
{
    /**
     * The available classes
     *
     * @var array
     */
    protected $classes = [
        [
            'name'	=>	'Introduction to Thai Cookery',
            'key'	=>	'introduction-to-thai-cookery',
            'description' => 'A basic introduction to Thai cookery, which teaches you to make three popular Thai dishes - Tom Yum, a ferocious hot and sour prawn soup, a fragrant green chicken curry and a dessert of mangoes with cocounut and sticky rice.',
            'acuity_id' => 3027517,
        ],
        [
            'name'	=>	'Thai Curry Pastes',
            'key' => 'thai-curry-pastes',
            'description' => 'Pestle and mortar at the ready, as we take a look at Thai curry pastes, the foundation of all Thai curries. Specifically, the course teaches you to make red, green and Panang curry pastes. We will also be cooking a roast duck red curry with sticky rice.',
            'acuity_id' => 3027529,
        ],
        [
            'name'	=>	'Taste of the North',
            'key' => 'taste-of-the-north',
            'description' => 'An in-depth look at the cusine of the North of Thailand.',
            'acuity_id' => 3027535,
        ],
    ];

}
