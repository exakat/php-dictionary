# PHP Native Attribute
PHP supports a system of attributes, to add local configuration to methods, classes, etc. There are currently, as of PHP 8.5, 7 attributes: 

+ ``Attribute``
+ ``AllowDynamicProperties``
+ ``ReturnTypeWillChange``
+ ``SensitiveParameter``
+ ``Override``
+ ``Deprecated``
+ ``NoDiscard``
+ ``DelayedTargetValidation``.
```php
<?php

class X extends Y {
    #[Override]
    function foo() {
        
    }
}

?>
```

## See Also

+ [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)

Related : [Attribute](Attribute), [Allow Dynamic Properties](Allow Dynamic Properties), [Return Type Will Change](Return Type Will Change), [Sensitive Parameter](Sensitive Parameter), [Override Attribute](Override Attribute), [Deprecated](Deprecated), [delayedtargetvalidation](delayedtargetvalidation), [NoDiscard](NoDiscard), [Overriding](Overriding)
