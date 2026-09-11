# Method
Methods are functions, dedicated to a class. They are defined inside the body of a class, and may only be accessed in relation to that class: via an object, the class name or another method.

Methods are defined in traits, and then imported in a class for usage.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html","name":"Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:22:36 +0000","dateModified":"Thu, 10 Sep 2026 20:22:36 +0000","description":"Methods are functions, dedicated to a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"]}],"alternateName":["member-function"],"keywords":["method","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fossilized-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call-graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relay-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function-subscripting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php#language.oop5.basic.properties-methods"},{"@type":"CreativeWork","name":"PHP 8 \u2013 Functions and Methods","url":"https:\/\/www.infoq.com\/articles\/php8-functions-methods\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"method"}]}]}</script>
```php
<?php

    class Elephpant {
        public function trumpet() {
            echo "I am trumpet!\n";
        }
    }

    $elephpant = new Y();
    $calf->trumpet(); // calling the trumpet method, defined in Elephpant,

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)**
## See Also

+ [PHP 8 – Functions and Methods](https://www.infoq.com/articles/php8-functions-methods/)

## Related

+ [Class](class.html)
+ [\_\_call() Method](__call.html)
+ [Default Parameter](default-parameter.html)
+ [Fossilized Methods](fossilized-method.html)
+ [Functions](function.html)
+ [Properties](property.html)
+ [Return](return.html)
+ [Static Method](static-method.html)
+ [Visibility](visibility.html)
+ [Call Graph](call-graph.html)
+ [Callbacks](callback.html)
+ [Impure Function](impure-function.html)
+ [Method Compatibility](method-compatibility.html)
+ [Pure Function](pure-function.html)
+ [Trait](trait.html)
+ [Method Collision](method-collision.html)
+ [Non-static](non-static.html)
+ [Relay Function](relay-function.html)
+ [Function Subscripting](function-subscripting.html)
+ [Generator](generator.html)
+ [Modifier](modifier.html)
+ [Recursion](recursion.html)
+ [yield from Keyword](yield-from.html)
+ [Yield](yield.html)
