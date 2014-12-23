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

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class HALServiceProvider
 */
class HALServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['hal'] = $app->share(
            function () {
                return new HALBuilder();
            }
        );
    }

    /**
     * @param Application $app
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function boot(Application $app)
    {
    }
}
