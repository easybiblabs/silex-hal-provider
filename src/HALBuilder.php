<?php
/**
 * This file is part of easybib/generator-processes
 * 
 * Copyright (c) 2016 Chegg Inc.
 * Apache-2.0 licensed, see LICENSE.txt file for details.
 *
 * @license  Apache-2.0
 * @link     http://www.apache.org/licenses/LICENSE-2.0
 */

namespace EasyBib\Silex\HAL;

use Nocarrier\Hal;

/**
 * Class HALBuilder
 */
class HALBuilder
{
    /**
     * Overwrites the Constructor
     * to call the correct one later
     */
    public function __construct()
    {
    }

    /**
     * @param null  $uri
     * @param array $data
     */
    public function build($uri = null, $data = [])
    {
        return new Hal($uri, $data);
    }
}
