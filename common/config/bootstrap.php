<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('frontendWebroot', 'http://localhost/yii2-app/frontend/web/');
Yii::setAlias('backendWebroot', 'http://localhost/yii2-app/backend/web/');
Yii::setAlias('@themeurl', 'theme');
if($_SERVER['SERVER_NAME'] == 'localhost'){
	Yii::setAlias('@fronturl', 'http://localhost/yii2-app/frontend/web/');
} else {
	Yii::setAlias('@fronturl', '/');
}