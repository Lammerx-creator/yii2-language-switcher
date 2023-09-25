<?php


/** @var \backend\modules\helpdesk\widgets\languageSwitcher\LanguageSwitcherWidget $widget */
$widget = $this->context;

echo \yii\bootstrap\Nav::widget([
    'options' => [
        'class' => 'navbar-nav navbar-right',
        'id' => 'language-selector'
    ],
    'dropDownCaret' => '',
    'items' => [
        $widget->getItems()
    ]
]);
