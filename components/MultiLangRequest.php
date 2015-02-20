<?php
namespace app\components;

use Yii;
use yii\web\Request;

/**
 * Description of MultiLangRequest
 *
 * @author alejka
 */
class MultiLangRequest extends Request
{
    /**
     * @todo phpdoc
     */
    public function resolve()
    {
        $resolve = parent::resolve();
        
        Yii::$app->multiLang->setLanguage();
        
        return $resolve;
    }
}
