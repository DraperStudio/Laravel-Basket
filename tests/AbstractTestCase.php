<?php

/*
 * This file is part of Laravel Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\LaravelBasket;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use DraperStudio\LaravelBasket\ServiceProvider;

/**
 * This is the abstract test case class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ServiceProvider::class;
    }
}
