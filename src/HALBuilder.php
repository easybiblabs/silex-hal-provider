<?php
/*
 * This file is part of easybib/generator-processes
 *
 * (c) Imagine Easy Solutions, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license  BSD-2-Clause
 * @link     http://www.imagineeasy.com
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
