# Public Visibility
The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility: it doesn't restrict usage.

``public`` is also the default visibility when it is omitted.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html","name":"Public Visibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:29 +0000","dateModified":"Tue, 18 Aug 2026 05:24:29 +0000","description":"The public keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html"]}],"keywords":["keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php"},{"@type":"CreativeWork","name":"PHP public Keyword - Visibility Modifiers in PHP","url":"https:\/\/zetcode.com\/php\/public-keyword\/"},{"@type":"CreativeWork","name":"PHP Public, Private, Protected Access Explained","url":"https:\/\/nulldog.com\/php-public-private-protected-access-explained"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"public"}]}]}</script>
```php
<?php

    class X {
        // public constant
        const X = 1;
        public $p = 2;
    }
    
    $x = new x;
    echo $x->p;
    echo x::X;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## See Also

+ [PHP public Keyword - Visibility Modifiers in PHP](https://zetcode.com/php/public-keyword/)
+ [PHP Public, Private, Protected Access Explained](https://nulldog.com/php-public-private-protected-access-explained)

## Related

+ [Final Keyword](final.html)
+ [Visibility](visibility.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Var](var.html)
