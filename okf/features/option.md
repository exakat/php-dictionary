---
type: "concept"
title: "Option"
description: "An option represents a value that may or may not be present."
resource: "https://en.wikipedia.org/wiki/Option_type"
tags: ["concept", "parameter"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Option

An option represents a value that may or may not be present. For example, optional values are typically expressed as nullable types ``?type``, default parameter values, or named arguments with defaults.

Some functional libraries introduce an explicit ``Option`` or ``Maybe`` type to avoid null references entirely.

By extension, options are possible alternatives to execute a feature. It may tweak the way it is performed, the format of the result, or any other behavior. Such options often have a default configuration which makes them easy to adopt, until the need for specialisation arise.

Options are sometimes used as synonyms as configuration or directive: this is the case when the option has to be provided and has no default. An initial choice must be done.

```php
<?php

    // Nullable type: value may be absent
    function findUser(?int $id): ?User {
        if ($id === null) {
            return null;
        }
        return User::find($id);
    }
    
    // Default value as option
    function greet(string $name = 'World'): string {
        return 'Hello, ' . $name;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Option_type](https://en.wikipedia.org/wiki/Option_type)

## See Also
- [All the ways to handle null values in PHP](https://www.amitmerchant.com/all-the-ways-to-handle-null-values-in-php/)
- [PHP Null Coalescing Operator](https://www.phptutorial.net/php-tutorial/php-null-coalescing-operator/)

## Related
- [Named Parameters](/features/named-parameter.md)
- [Default Parameter](/features/default-parameter.md)
- [Configuration](/features/configuration.md)
- [Flag](/features/flag.md)
- [SplSubject](/features/splsubject.md)

