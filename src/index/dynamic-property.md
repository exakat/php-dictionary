# Dynamic Properties
Dynamic properties are properties created on the fly, without previous definition. 

When the class implements the magic methods ``__get()`` and ``__set()``, of if the class extends ``stdClass``, then no warning is emitted.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-property.html","name":"Dynamic Properties","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Dynamic properties are properties created on the fly, without previous definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Properties.html"]}],"keywords":["dynamic","property","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/deprecate_dynamic_properties"},{"@type":"CreativeWork","name":"PHP, what are dynamic properties?","url":"https:\/\/medium.com\/geekculture\/php-what-are-dynamic-properties-2509c6fbccf8"},{"@type":"CreativeWork","name":"PHP's Dynamic Properties RFC: A Case of Solving the Wrong Problem","url":"https:\/\/luandaphp.unaux.com\/php-dynamic-properties-article.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-property"}]}]}</script>
```php
<?php

    class X {
        private $property = 1;
        
        function foo() {
            // dynamic property
            $this->a = 1;
            
            // dynamic property with variable name 
            $b = 'abc';
            $this->$b = 1; 
            
            // static property
            $this->property = 1;
        }
    }

?>
```

**[Documentation](https://wiki.php.net/rfc/deprecate_dynamic_properties)**
## See Also

+ [PHP, what are dynamic properties?](https://medium.com/geekculture/php-what-are-dynamic-properties-2509c6fbccf8)
+ [PHP's Dynamic Properties RFC: A Case of Solving the Wrong Problem](https://luandaphp.unaux.com/php-dynamic-properties-article.html)

## Related

+ [Properties](property.html)
+ [Magic Methods](magic-method.html)
+ [stdclass](stdclass.html)
+ [Dynamic](dynamic.html)
+ [Var](var.html)
