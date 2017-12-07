<?php

namespace humhub\modules\linkedin\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class LinkedinFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
   public function run()
    {
        $url = Yii::$app->getModule('linkedin')->getServerUrl() . '/in';
        return $this->render('linkedinframe', ['linkedinUrl' => $url]);
    }
}
