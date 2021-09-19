<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

use Modules\Home\Controller\BackendController;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
	'^.*/legal/privacy.*$' => [
        [
            'dest'       => '\Modules\Home\Controller\BackendController:viewLegalDocuments',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => null,
            ],
        ],
    ],

    '^.*/legal/terms.*$' => [
        [
            'dest'       => '\Modules\Home\Controller\BackendController:viewLegalDocuments',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => null,
            ],
        ],
    ],

    '^.*/legal/imprint.*$' => [
        [
            'dest'       => '\Modules\Home\Controller\BackendController:viewLegalDocuments',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => null,
            ],
        ],
    ],
];
