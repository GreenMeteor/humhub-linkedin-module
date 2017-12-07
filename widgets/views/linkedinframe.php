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
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js"></script>

<div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="light"><a class="LI-simple-link" href='<?= $linkedinUrl; ?>'></a></div>
<?= Html::endTag('div'); ?>
</div>
</div>
