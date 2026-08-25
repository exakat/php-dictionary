# stdclass
Stdclass is a native PHP class. It is the class used when a generic object is created, for example with ``json_decode()`` or the ``(object)`` cast operator.

The stdClass is allowed to create dynamic properties on the fly, as its base definition has none.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html","name":"stdclass","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Stdclass is a native PHP class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html"]}],"keywords":["native class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/popo.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.object.php#language.types.object.casting"},{"@type":"CreativeWork","name":"Quick way to create a PHP stdClass","url":"https:\/\/www.simonholywell.com\/post\/2016\/11\/quick-way-to-create-php-stdclass\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stdclass"}]}]}</script>
```php
<?php

class X {
    private $property = 1;
    
    function foo() {
        // dynamic property
        $this->a = 1;
        
        // dynamic property with variable name 
        $b = "abc";
        $this->$b = 1; 
        
        // static property
        $this->property = 1;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.object.php#language.types.object.casting)**
## See Also

+ [Quick way to create a PHP stdClass](https://www.simonholywell.com/post/2016/11/quick-way-to-create-php-stdclass/)

## Related

+ [Properties](property.html)
+ [Dynamic Properties](dynamic-property.html)
+ [is\_object()](is_object.html)
+ [Plain Old PHP Object (POPO)](popo.html)
