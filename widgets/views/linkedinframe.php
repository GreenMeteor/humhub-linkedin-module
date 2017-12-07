<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\linkedin\Assets::register($this);
?>

<div class="panel panel-default panel-linkedin" id="panel-linkedin">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-linkedin']); ?>
  <div class="panel-heading">
    <?=Yii::t('LinkedinModule.base', '<strong>LinkedIn</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>

<script type="IN/MemberProfile" data-id="<?= $linkedinUrl; ?>" width="fixed" height="100%" data-format="inline" data-related="false"></script>
<?= Html::endTag('div'); ?>
</div>
</div>
