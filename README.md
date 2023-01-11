# Yii2 Category

[![Latest Stable Version](https://poser.pugx.org/zakharov-andrew/yii2-category/v/stable)](https://packagist.org/packages/zakharov-andrew/yii2-category)
[![License](https://poser.pugx.org/zakharov-andrew/yii2-category/license)](https://packagist.org/packages/zakharov-andrew/yii2-category)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

This extension allows you to add categories to your app.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require zakharov-andrew/yii2-category
```
or add

```
"zakharov-andrew/yii2-category": "*"
```

to the ```require``` section of your ```composer.json``` file.

Subsequently, run

```
./yii migrate/up --migrationPath=@vendor/zakharov-andrew/yii2-category/migrations
```

in order to create the settings table in your database.

Or add to console config

```php
return [
    // ...
    'controllerMap' => [
        // ...
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => [
                '@console/migrations', // Default migration folder
                '@vendor/zakharov-andrew/yii2-category/src/migrations'
            ]
        ]
        // ...
    ]
    // ...
];
```

## Usage

Add this to your main configuration's modules array

```
    'modules' => [
        'settings' => [
            'class' => 'ZakharovAndrew\category\Module',
            'bootstrapVersion' => 5, // if use bootstrap 5
        ],
        // ...
    ],
```

## License

**yii2-category** it is available under a MIT License. Detailed information can be found in the `LICENSE.md`.
