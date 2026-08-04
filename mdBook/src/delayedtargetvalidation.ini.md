# delayedtargetvalidation
The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional. It will shut down complains from the PHP engine for attributes, allowing for future compatibility.
```php
<?php
class Child extends Base {
    #[\DelayedTargetValidation]
        #[\Override]
        const NAME ='Child';
}
?>
```

## See Also

+ [#[\DelayedTargetValidation] Attribute Explained](https://scherzer.dev/Blog/20250820-delayed-target-validation)

Related : [Attribute](Attribute), [PHP Native Attributes](PHP Native Attributes), [Forward Compatible](Forward Compatible), [PHP Native Attribute](PHP Native Attribute)
