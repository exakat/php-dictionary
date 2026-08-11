# Asymmetric Visibility
Asymmetric visibility is a feature of PHP class properties. They refer to the situation where different scopes may read, or ``get`` or write, or ``set``. 

Traditionally, the visibility options, ``private``, ``protected`` and ``public``, constraints the access to the property, both in reading and writing. With asymmetric visibility, there may be contexts may have different rights of access.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-visibility.html","name":"Asymmetric Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:43 +0000","dateModified":"Fri, 19 Jun 2026 21:24:43 +0000","description":"Asymmetric visibility is a feature of PHP class properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Asymmetric Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"asymmetric-visibility"}]}]}</script>
```php
<?php

class X {
    public private(set) string $p = 'abc';
    
    function setP($p) {
        $this->p = $p;
    }
}

$x = new X();
echo $x->p; // abc
$x->setP('def'); 
echo $x->p; // def

// 
$x->p = 'ghi';

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## See Also

+ [PHP Asymmetric Visibility RFC: An In-Depth Look](https://developerjoy.co/blog/php-asymmetric-visibility-rfc-an-in-depth-look)
+ [New in PHP 8.5: Asymmetric Visibility for Static Properties](https://chrastecky.dev/programming/new-in-php-8-5-asymmetric-visibility-for-static-properties)

## Related

+ [Visibility](visibility.html)
+ [Properties](property.html)
+ [Asymmetric Property](asymmetric-property.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Var](var.html)
