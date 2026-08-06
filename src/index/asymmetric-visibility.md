# Asymmetric Visibility
Asymmetric visibility is a feature of PHP class properties. They refer to the situation where different scopes may read, or ``get`` or write, or ``set``. 

Traditionally, the visibility options, ``private``, ``protected`` and ``public``, constraints the access to the property, both in reading and writing. With asymmetric visibility, there may be contexts may have different rights of access.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/asymmetric-visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/asymmetric-visibility.html","name":"Asymmetric Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:43 +0000","dateModified":"Fri, 19 Jun 2026 21:24:43 +0000","description":"Asymmetric visibility is a feature of PHP class properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Asymmetric Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Visibility](visibility.ini.html)
+ [Properties](property.ini.html)
+ [Asymmetric Property](asymmetric-property.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Var](var.ini.html)
