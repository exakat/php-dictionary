# Docblock
A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties. It is written in a specific format and is typically placed just before the element it describes. Docblocks are used by tools like phpDocumentor, PHPDoc, and IDEs to generate documentation and provide code hints.

Docblocks improve readability, enable IDE features, and automate reference documentation generation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html","name":"Docblock","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:52:14 +0000","dateModified":"Fri, 14 Aug 2026 07:52:14 +0000","description":"A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html"]}],"keywords":["comment","documentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-documenting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/documentation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explanation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/effect-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metadata.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psalm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/PHPDoc"},{"@type":"CreativeWork","name":"PHPDoc reference","url":"https:\/\/docs.phpdoc.org\/guide\/references\/phpdoc\/index.html#phpdoc-reference"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"docblock"}]}]}</script>
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

+ [Self-documenting](self-documenting.html)
+ [Documentation](documentation.html)
+ [Readability](readability.html)
+ [Block](block.html)
+ [Explanation](explanation.html)
+ [Effect System](effect-system.html)
+ [Metadata](metadata.html)
+ [PHPStan](phpstan.html)
+ [Psalm](psalm.html)
+ [Static Code Analysis (SCA)](sca.html)
+ [Type Parametricity](type-parametricity.html)

## Related packages

+ [phpdocumentor/phpdocumentor](https://packagist.org/packages/phpdocumentor/phpdocumentor)
+ [php-di/phpdoc-reader](https://packagist.org/packages/php-di/phpdoc-reader)
+ [phpowermove/docblock](https://packagist.org/packages/phpowermove/docblock)
