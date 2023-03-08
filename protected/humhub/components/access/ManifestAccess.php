<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2023 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\components\access;

/**
 * Class ManifestAccess is responsible to allow Public Access to the Manifest JSON and ServiceWorker JS.
 *
 * @since X.XX
 *
 * @see ControllerAccess
 * @see ManifestController
 * @see ServiceWorkerController
 * @author cs8898
 */
class ManifestAccess extends ControllerAccess
{

    /**
     * @var array fixed rules will always be added to the current rule set
     */
    protected $fixedRules = [
    ];
}
