<?php
namespace fonclub\tinymce;

use yii\web\AssetBundle;

class TinyMCEAsset extends AssetBundle
{
	public $sourcePath = '@fonclub/tinymce/assets';
	
	public $css = [];
	
	public $js = [
		'tinymce.min.js',
	];
}
