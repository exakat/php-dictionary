---
type: "attribute"
title: "Attribute"
description: "Attributes are machine readable options that may be added to PHP code."
resource: "https://www.php.net/manual/en/language.attributes.overview.php"
tags: ["attribute", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Attribute

Attributes are machine readable options that may be added to PHP code. Since PHP 8.0, they are accessible from PHP. 

Attributes provide extra and customisable options for the PHP engine, static analysis tools and coders alike. 

Attributes are a modern version of the phpdoc comment blocks.

Attributes are backward compatible: they can be used in any PHP version, and are ignored when not supported. 

Attributes may or may not have a supporting class: attributes may be used for their semantic value, or with related code.

```php
<?php

    #[Attribute]
    class X {} // this class is an Attributes
    
    #[X]  // This attribute may be instanciated, and executed
    #[Z]  // This attribute serves only as a flag. No class is available.
    class Y {} // this class is an Attributes

?>
```

## Documentation
- [https://www.php.net/manual/en/language.attributes.overview.php](https://www.php.net/manual/en/language.attributes.overview.php)

## See Also
- [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)
- [Using PHP Attributes instead of Annotations for Static Analysis](https://www.linkedin.com/pulse/using-php-attributes-instead-annotations-static-carlos-granados-qanwe/)
- [Unlocking the Power of Attributes in PHP](https://itsimiro.medium.com/unlocking-the-power-of-attributes-in-php-a6af57225bbf)
- [PHP Language Extensions](https://github.com/DaveLiddament/php-language-extensions)
- [Playtime with PHP Attributes](https://jump24.co.uk/journal/playtime-with-php-attributes/)
- [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

## Related
- [PHPdoc](/features/phpdoc.md)
- [PHP Native Attribute](/features/php-native-attribute.md)
- [Annotations](/features/annotation.md)
- [Attribute Class](/features/attribute-class.md)
- [NoDiscard](/features/nodiscard.md)
- [Properties](/features/property.md)
- [delayedtargetvalidation](/features/delayedtargetvalidation.md)
- [Nested Attributes](/features/nested-attribute.md)
- [Nesting](/features/nesting.md)
- [Sensitive Parameter](/features/sensitiveparameter.md)
- [Code Generation](/features/code-generation.md)
- [Metaclass](/features/metaclass.md)
- [Metaprogramming](/features/metaprogramming.md)
- [Template Metaprogramming (TMP)](/features/template-metaprogramming.md)

## Details
- PHP since: 8.0

