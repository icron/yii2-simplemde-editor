<?php
namespace icron\simplemde;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

class Widget extends InputWidget
{
    public $htmlOptions = [];

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->htmlOptions);
        } else {
            $this->htmlOptions['id'] = $this->getId();
            echo Html::textarea($this->name, $this->value, $this->htmlOptions);
        }
        $this->registerScripts();
    }

    public function registerScripts()
    {
        $view = $this->getView();
        SimpleMDEAsset::register($view);
        $this->options['element'] = new JsExpression("jQuery('#{$this->options['id']}')[0]");
        $options = Json::encode($this->options);
        $js = "jQuery('#{$this->options['id']}').data('simpleMDE', new SimpleMDE($options));";
        $view->registerJs($js);
    }
}