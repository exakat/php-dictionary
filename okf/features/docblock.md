---
type: "PHP Feature"
title: "Docblock"
description: "A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties."
resource: "https://en.wikipedia.org/wiki/PHPDoc"
tags: ["comment", "documentation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Docblock

A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties. It is written in a specific format and is typically placed just before the element it describes. Docblocks are used by tools like phpDocumentor, PHPDoc, and IDEs to generate documentation and provide code hints.

Docblocks improve readability, enable IDE features, and automate reference documentation generation.

```php
<?php

/**
 * A brief description of the function.
 *
 * A more detailed description, if needed.
 *
 * @param type $parameter_name Description of the parameter
 * @return type Description of the return value
 */
function exampleFunction($parameter_name) {
    // Function code here
    return $result;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/PHPDoc](https://en.wikipedia.org/wiki/PHPDoc)

## See Also
- [PHPDoc reference](https://docs.phpdoc.org/guide/references/phpdoc/index.html#phpdoc-reference)

## Related
- [Self-documenting](/features/self-documenting.md)
- [Documentation](/features/documentation.md)
- [Readability](/features/readability.md)
- [Block](/features/block.md)
- [Explanation](/features/explanation.md)
- [Effect System](/features/effect-system.md)
- [Metadata](/features/metadata.md)
- [PHPStan](/features/phpstan.md)
- [Psalm](/features/psalm.md)
- [Static Code Analysis (SCA)](/features/sca.md)
- [Type Parametricity](/features/type-parametricity.md)

## Details
- Packagist: [phpdocumentor/phpdocumentor](https://packagist.org/packages/phpdocumentor/phpdocumentor)
- Packagist: [php-di/phpdoc-reader](https://packagist.org/packages/php-di/phpdoc-reader)
- Packagist: [phpowermove/docblock](https://packagist.org/packages/phpowermove/docblock)

