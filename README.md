fonclub/yii2-tinymce
=========================
The TinyMCE Extension for yii framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fonclub/yii2-tinymce "*"
```

or add

```
"fonclub/yii2-tinymce": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use fonclub\tinymce\TinyMCE;

echo TinyMCE::widget(['name' => 'text-content']);

$form->field($model, 'attribute')->widget(TinyMCE::className());

//toggle to tinyMCE or to textarea

echo TinyMCE::widget(['name' => 'text-content', 'toggle' => ['active' => true]]);

$form->field($model, 'attribute')->widget(TinyMCE::className(), [
	'toggle' => [
		'active' => true,
	]
]);
```

----
Thank`s [moonlandsoft/yii2-tinymce](https://github.com/moonlandsoft/yii2-tinymce) ;)
