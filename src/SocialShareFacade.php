<?php

namespace Faribe\SocialShare;

use Illuminate\Support\Facades\Facade;

/**
 * @method page($url, ?string $title = null, array $options = [], ?string $prefix = null, ?string $suffix = null)
 * @method currentPage($url, ?string $title = null, array $options = [], ?string $prefix = null, ?string $suffix = null)
 * @method facebook()
 * @method twitter()
 * @method reddit()
 * @method telegram()
 * @method whatsapp()
 * @method linkedin(string $summary = '')
 * @method pinterest()
 * @method viber()
 * @method array getRawLinks()
 */
class SocialShareFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SocialShare::class;
    }
}