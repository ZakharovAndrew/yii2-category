<?php

/**
 * Yii2 Category
 * *************
 * Yii2 categories with database module with GUI manager supported.
 *  
 * @link https://github.com/ZakharovAndrew/yii2-category/
 * @copyright Copyright (c) 2022 Zakharov Andrew
 */
 
namespace ZakharovAndrew\category;

use Yii;

/**
 * Class Module 
 */
class Module extends \yii\base\Module
{    
    public $bootstrapVersion = '';
 
    public $useTranslite = false;
    
    /**
     *
     * @var string source language for translation 
     */
    public $sourceLanguage = 'en-US';
    
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'ZakharovAndrew\category\controllers';

    /**
     * {@inheritdoc}
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }
    
    /**
     * Registers the translation files
     */
    protected function registerTranslations()
    {
        Yii::$app->i18n->translations['extension/yii2-category/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => $this->sourceLanguage,
            'basePath' => '@vendor/zakharov-andrew/yii2-category/src/messages',
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation'],
            'fileMap' => [
                'extension/yii2-category/category' => 'category.php',
            ],
        ];
    }

    /**
     * Translates a message. This is just a wrapper of Yii::t
     *
     * @see Yii::t
     *
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t($message, $params = [], $language = null)
    {
        $category = 'category';
        return Yii::t('extension/yii2-category/' . $category, $message, $params, $language);
    }
    
}
