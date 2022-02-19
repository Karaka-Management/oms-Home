<?php
/**
 * Karaka
 *
 * PHP Version 8.0
 *
 * @package   Modules\Home\Admin\Install
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://karaka.app
 */
declare(strict_types=1);

namespace Modules\Home\Admin\Install;

use phpOMS\Application\ApplicationAbstract;

/**
 * Navigation class.
 *
 * @package Modules\Home\Admin\Install
 * @license OMS License 1.0
 * @link    https://karaka.app
 * @since   1.0.0
 */
class Navigation
{
    /**
     * Install navigation providing
     *
     * @param string              $path Module path
     * @param ApplicationAbstract $app  Application
     *
     * @return void
     *
     * @since 1.0.0
     */
    public static function install(string $path, ApplicationAbstract $app) : void
    {
        \Modules\Navigation\Admin\Installer::installExternal($app, ['path' => __DIR__ . '/Navigation.install.json']);
    }
}
