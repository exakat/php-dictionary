---
type: "keyword"
title: "Var"
description: "``var`` keyword for introducing PHP properties in classes."
resource: "https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Var

``var`` keyword for introducing PHP properties in classes. It originates from PHP 4, where it was the only way to declare class properties. Since PHP 5, visibility keywords like ``public``, ``private``, ``protected`` replaced it as the idiomatic syntax.

``var`` is equivalent to ``public``: a property declared with ``var`` is publicly accessible. It is considered legacy syntax and is not recommended.

Modern property declarations support additional modifiers unavailable with ``var``, such as ``final``, ``static``, ``readonly``, and type declarations. 

``var`` may be omitted with other options such as ``final``, ``static``, ``readonly``, or asymmetric visibility: then, the property is publicly accessible.

```php
<?php

    class X {
        var $y;   // public $y
        final $z; // public final $z;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties)

## See Also
- [PHP RFC: var Deprecation](https://wiki.php.net/rfc/var_deprecation)
- [Drop 'public' not 'var'!](https://evertpot.com/drop-public-not-var/)

## Related
- [Visibility](/features/visibility.md)
- [Protected Visibility](/features/protected.md)
- [Private Visibility](/features/private.md)
- [Public Visibility](/features/public.md)
- [Properties](/features/property.md)
- [static](/features/static.md)
- [Final Keyword](/features/final.md)
- [Readonly](/features/readonly.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Promoted Properties](/features/promoted-property.md)
- [Asymmetric Visibility](/features/asymmetric-visibility.md)
- [OOP (Object Oriented Programming)](/features/oop.md)
- [Dynamic Properties](/features/dynamic-property.md)
- [Legacy](/features/legacy.md)

