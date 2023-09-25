<?php

namespace backend\modules\helpdesk\widgets\languageSwitcher;

use yii\base\Widget;
use backend\models\Customer;
use backend\models\Language;
use cetver\LanguageSelector\items\DropDownLanguageItem;
use backend\modules\helpdesk\widgets\languageSwitcher\assets\LanguageSwitcherAsset;

class LanguageSwitcherWidget extends Widget
{
    /**
     * @var Customer
     */
    public $customer;
    public function run()
    {
        $this->initCss();
        return $this->render('switcher');
    }

    public function getItems()
    {
        $languages = $this->getLanguages();

        $languageItem = new DropDownLanguageItem([
            'languages' => $languages,
            'options' => ['encode' => false],
            'queryParam' => 'lang',
        ]);

        return $languageItem->toArray();
    }

    private function initCss()
    {
        $this->view->registerAssetBundle(LanguageSwitcherAsset::class);
    }

    private function getLanguages()
    {
        $languages = [];
        $langs = $this->customer->getLanguages();
        $langs[] = Language::findOne(['language_isocode' => 'de']);

        /** @var Language $lang */
        foreach ($langs as $lang) {
            $languages[$lang->language_isocode] = strtoupper($lang->language_isocode);
        }
        return $languages;
    }
}