---
type: "attribute"
title: "PHP Native Attribute"
description: "PHP supports a system of attributes, to add local configuration to methods, classes, etc."
resource: "https://www.php.net/manual/en/reserved.attributes.php"
tags: ["attribute"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/reserved.attributes.php](https://www.php.net/manual/en/reserved.attributes.php)

## See Also
- [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)

## Related
- [Attribute](/features/attribute.md)
- [Allow Dynamic Properties](/features/allowdynamicproperties.md)
- [Return Type Will Change](/features/returntypewillchange.md)
- [Sensitive Parameter](/features/sensitiveparameter.md)
- [Override Attribute](/features/override.md)
- [Deprecated](/features/deprecated.md)
- [delayedtargetvalidation](/features/delayedtargetvalidation.md)
- [NoDiscard](/features/nodiscard.md)
- [Overriding](/features/overriding.md)

