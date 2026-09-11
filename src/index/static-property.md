# Static Property
Static properties are properties defined with the ``static`` keyword. They may be accessed with the name of the class, or instantiated object. 

Static properties are also called 'class properties' as they are common to all objects of the same class: there is no need to instantiate an object to access them, when they are public.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html","name":"Static Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:22:37 +0000","dateModified":"Thu, 10 Sep 2026 20:22:37 +0000","description":"Static properties are properties defined with the static keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"]}],"alternateName":["class-property"],"keywords":["data-container","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.static.php#language.oop5.static.properties"},{"@type":"CreativeWork","name":"Late Static Bindings","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.late-static-bindings.php"},{"@type":"CreativeWork","name":"Class variable","url":"https:\/\/en.wikipedia.org\/wiki\/Class_variable"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-property"}]}]}</script>
```php
<?php

    class Elephpant {
        static $trunkLength = 1;
    }

    //displays elephpant::trunkLength
    print elephpant::$trunkLength;
    $object = new elephpant;

    print $object::$trunkLength;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)**
## See Also

+ [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
+ [Class variable](https://en.wikipedia.org/wiki/Class_variable)

## Related

+ [Properties](property.html)
+ [Static Method](static-method.html)
+ [Data Container](data-container.html)
+ [Readable](readable.html)
+ [Static Variables](static-variable.html)
+ [Writable](writable.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Static Class](static-class.html)
+ [Writeable](writeable.html)
+ [Testable](testable.html)
