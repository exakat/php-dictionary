---
type: "attribute"
title: "delayedtargetvalidation"
description: "The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional."
resource: "https://wiki.php.net/rfc/delayedtargetvalidation_attribute"
tags: ["attribute", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://wiki.php.net/rfc/delayedtargetvalidation_attribute](https://wiki.php.net/rfc/delayedtargetvalidation_attribute)

## See Also
- [#[\DelayedTargetValidation] Attribute Explained](https://scherzer.dev/Blog/20250820-delayed-target-validation)

## Related
- [Attribute](/features/attribute.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [Forward Compatible](/features/forward-compatible.md)
- [PHP Native Attribute](/features/php-native-attribute.md)

