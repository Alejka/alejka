<?php
namespace app\components;

use Yii;
use yii\base\Object;
use yii\base\InvalidConfigException;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/**
 * Description of MultiLang
 *
 * @author alejka
 */
class MultiLangHelper extends Object
{
    public $defaultLanguage;
    public $languages = [];
    /**
     * For more information on the concept and syntax of locales, check the documentation of the ICU project.
     * @see http://userguide.icu-project.org/locale#TOC-The-Locale-Concept
     */
    public $codes = [
        'ru' => 'ru-RU',
        'en' => 'en-US',
    ];
    public $labels = [];
    public $paramName = 'language';
    
    public function init()
    {
//        throw new InvalidConfigException('Invalid component configuration');
//        throw new InvalidConfigException("The 'label' option is required.");
        if (!is_array($this->languages) || $this->languages === []) {
            throw new InvalidConfigException('Invalid component configuration');
        }
        if (!is_array($this->codes) || $this->codes === []) {
            throw new InvalidConfigException('Invalid component configuration');
        }
        if (count($this->languages) !== count($this->codes)) {
            throw new InvalidConfigException('Invalid component configuration');
        }
        foreach($this->languages as $lang) {
            if (!isset($this->codes[$lang])) {
                throw new InvalidConfigException('Invalid component configuration');
            }
            if (!isset($this->labels[$lang])) {
                $this->labels[$lang] = $lang;
            }
        }
        if (empty($this->defaultLanguage) || !in_array($this->defaultLanguage, $this->languages)) {
            throw new InvalidConfigException('Invalid component configuration');
        }
    }
    
    public function addCurrentLanguageToParams(&$params)
    {
        $params[$this->paramName] = $this->getCurrentLanguage();
    }
    
    public function getCurrentLanguage()
    {
        return $this->getLanguageFromCode(Yii::$app->language);
    }
    
    public function getLanguageFromCode($code)
    {
        $codes = array_flip($this->codes);
        if (!isset($codes[$code])) {
            throw new InvalidConfigException('Code ' . $code . ' not found');
        }
        return $codes[$code];
    }
    
    public function getDefaultLanguageCode()
    {
        return $this->codes[$this->defaultLanguage];
    }
    
    public function getCodeFromLanguage($lang)
    {
        return $this->codes[$lang];
    }
    
    public function getCurrentLanguageLabel()
    {
        return $this->getLanguageLabel($this->getCurrentLanguage());
    }
    
    public function getLanguageLabel($lang)
    {
        if (!isset($this->labels[$lang])) {
            throw new InvalidConfigException('Language ' . $lang . ' not found');
        }
        return $this->labels[$lang];
    }

    public function setLanguage()
    {
        if (isset($_GET[$this->paramName]) && in_array($_GET[$this->paramName], $this->languages)) {
            Yii::$app->language = $this->getCodeFromLanguage($_GET[$this->paramName]);
        }
        else {
            Yii::$app->language = $this->getDefaultLanguageCode();
        }
    }
    
    public function getChangeLanguageUrl($lang)
    {
        return $this->getCurrentUrl([$this->paramName => $lang]);
    }

    /**
     * @see Url::current(); // @since 2.0.3
     */
    public function getCurrentUrl(array $params = [], $scheme = false)
    {
        $currentParams = Yii::$app->getRequest()->getQueryParams();
        $currentParams[0] = '/' . Yii::$app->controller->getRoute();
        $route = ArrayHelper::merge($currentParams, $params);
        return Url::toRoute($route, $scheme);
    }
    
    /**
     * @todo
     * init() error messages
     * redirect() override
     * createUrl($param) param sting|array (now only array)
     */
}
