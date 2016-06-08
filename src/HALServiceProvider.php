<?php
/*
 * This file is part of easybib/generator-processes
 * 
 * Copyright (c) 2016 Chegg Inc.
 * Apache-2.0 licensed, see LICENSE.txt file for details.
 *
 * @license  Apache-2.0
 * @link     http://www.apache.org/licenses/LICENSE-2.0
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
