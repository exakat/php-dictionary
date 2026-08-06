# Docblock
A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties. It is written in a specific format and is typically placed just before the element it describes. Docblocks are used by tools like phpDocumentor, PHPDoc, and IDEs to generate documentation and provide code hints.

Docblock improve readability, enables IDE features and automate reference documentation generation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/docblock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/docblock.html","name":"Docblock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Docblock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/PHPDoc)**
## See Also

+ [PHPDoc reference](https://docs.phpdoc.org/guide/references/phpdoc/index.html#phpdoc-reference)

## Related

+ [Self-documenting](self-documenting.ini.html)
+ [Documentation](documentation.ini.html)
+ [Readability](readability.ini.html)
+ [Block](block.ini.html)
+ [Explanation](explanation.ini.html)

## Related packages

+ [phpdocumentor/phpdocumentor](https://packagist.org/packages/phpdocumentor/phpdocumentor)
+ [php-di/phpdoc-reader](https://packagist.org/packages/php-di/phpdoc-reader)
+ [phpowermove/docblock](https://packagist.org/packages/phpowermove/docblock)
