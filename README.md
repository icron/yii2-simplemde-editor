SimpleMDE - Markdown Editor widget for Yii 2
---------------------------------------------

```php
    $form->field($model, 'text')->widget(
        \icron\simplemde\Widget::className(),
        [
            'options' => [
                'toolbar' => null,
            ]
        ]
    );
```

Update custom options
```javascript
    var simple = $('<inputID>').data('simpleMDE');
    simple.options['renderingConfig'] = {codeSyntaxHighlighting: true};
    simple.options['toolbar'] = ['bold', 'italic'];
    simple.createToolbar();
```


