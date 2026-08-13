# Annotations
PHP annotations are a system to provide meta data about code, in a way that is programmatically processable. 

PHP annotations are based on PHPDoc comment's syntax, and were later partially modernized by PHP attributes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/annotation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/annotation.html","name":"Annotations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP annotations are a system to provide meta data about code, in a way that is programmatically processable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Annotations.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"annotation"}]}]}</script>
```php
<?php

/**
 * <description of foo>
 * @param int $a : <description of the parameter>
 * @return int : <description of the returned value>
 */
function foo(int $a) {
    
    // This annotation cannot be turned into an attribute
    /**
     * @var int $b : <description of the variable>
     */
     $b = $a + 1;
     
     return $b;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/PHPDoc)**
## See Also

+ [Understanding annotations](https://php-annotations.readthedocs.io/en/latest/UsingAnnotations.html)
+ [Annotating Types via PHP Doc Comments](https://scrutinizer-ci.com/docs/tools/php/php-analyzer/guides/annotating_code)

## Related

+ [Attribute](attribute.html)
+ [PHPdoc](phpdoc.html)

## Related packages

+ [php-annotations/php-annotations](https://packagist.org/packages/php-annotations/php-annotations)
