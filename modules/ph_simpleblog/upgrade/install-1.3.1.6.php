<?php
/**
 * Blog for PrestaShop module by Krystian Podemski from PrestaHome.
 *
 * @author    Krystian Podemski <krystian@prestahome.com>
 * @copyright Copyright (c) 2014-2016 Krystian Podemski - www.PrestaHome.com / www.Podemski.info
 * @license   You only can use module, nothing more!
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_1_6($object)
{
    if (function_exists('date_default_timezone_get')) {
        $timezone = @date_default_timezone_get();
    } else {
        $timezone = 'Europe/Warsaw';
    }

    Configuration::updateGlobalValue('PH_BLOG_TIMEZONE', $timezone);

    return true;
}
