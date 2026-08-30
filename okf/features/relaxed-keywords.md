---
type: "PHP Feature"
title: "Relaxed Keywords"
description: "The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name."
resource: "https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words"
tags: ["syntax", "convention"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Relaxed Keywords

The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name. 

Generally speaking, PHP keywords are not allowed as names for classes, functions, etc. This is still the case here, yet this constraint has been relaxed for method names. 

Functions and global constants do not support that feature. Closures and arrow functions are not applicable, as they have no name. Only methods do use relaxed keywords.

Property names do not have this constraints, as the ``$`` sign make them distinct. 

Using PHP keywords as names is not a commonly known feature, and generate a lot of surprise, when used. As a convention, it is recommended to avoid using PHP keywords. Yet, it may apply in specific situations.

```php
<?php

    class Xs {
        const function = 1;
        function function() {}
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words](https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words)

## See Also
- [List of Keywords](https://www.php.net/manual/en/reserved.keywords.php)
- [PHP RFC: Context Sensitive Lexer](https://wiki.php.net/rfc/context_sensitive_lexer)

## Related
- [Dollar $](/features/dollar.md)

