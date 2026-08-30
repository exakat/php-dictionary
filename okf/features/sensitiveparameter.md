---
type: "attribute"
title: "Sensitive Parameter"
description: "This is a native PHP attribute, which tells the engine that a parameter is a sensitive parameter, and should not be displayed by PHP when an error displays the stack trace."
resource: "https://www.php.net/manual/en/language.attributes.classes.php"
tags: ["attribute", "php attribute", "parameter", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Sensitive Parameter

This is a native PHP attribute, which tells the engine that a parameter is a sensitive parameter, and should not be displayed by PHP when an error displays the stack trace.

This prevent innocent mistakes, where reading the logs on the production server also tells the actual value of a secret.

```php
<?php

    function foo(
        #[SensitiveParameter] string $apiKey
    ): int {
        throw new Exception('Could not foo');
    }
    
    foo('abc');
    
    /* The code above displays the following : 
    
    Fatal error: Uncaught Exception: Could not foo in file.php:6
    Stack trace:
    #0 file.php(9): foo(Object(SensitiveParameterValue))
    #1 {main}
      thrown in file.php on line 6
    */

?>
```

## Documentation
- [https://www.php.net/manual/en/language.attributes.classes.php](https://www.php.net/manual/en/language.attributes.classes.php)

## See Also
- [Sensitive parameters in PHP 8.2](https://flareapp.io/blog/57-sensitive-parameters-in-php-82)

## Related
- [Attribute](/features/attribute.md)
- [Security](/features/security.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [PHP Native Attribute](/features/php-native-attribute.md)
- [Privacy](/features/privacy.md)

## Details
- PHP since: 8.2+

