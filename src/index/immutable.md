# Immutable
An immutable object is an object that can't be changed. It may be created, read and cloned. On the other hand, a mutable object may change when one of its method is called, even if this is not visible from the outside.

Immutable objects are thread-safe. 

Immutable objects often return a clone version of themselves, after modification.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html","name":"Immutable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An immutable object is an object that can't be changed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Immutable.html"]}],"alternateName":["immutability"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wither.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/borrow-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phantom-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Immutable_object"},{"@type":"CreativeWork","name":"The case for immutability","url":"https:\/\/dev.to\/timoschinkel\/the-case-for-immutability-1gfa"},{"@type":"CreativeWork","name":"Elegant immutable object pattern in PHP","url":"https:\/\/dev.to\/hbgl\/elegant-immutable-object-pattern-in-php-1dg3"},{"@type":"CreativeWork","name":"Immutable Objects in PHP: Your Secret Weapon for Safer Applications","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/immutable-objects-in-php-your-secret-weapon-for-safer-applications-04eb88c49150"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"immutable"}]}]}</script>
```php
<?php

    class X {
        private $x = 0;
        
        function inc() : self {
            $return = clone $this;
            $return->x +=1;
            
            return $return;
        }
    }
    
    $a = new x();
    $b = $a->inc();
    
    // $a and $b are two distinct objects

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Immutable_object)**
## See Also

+ [The case for immutability](https://dev.to/timoschinkel/the-case-for-immutability-1gfa)
+ [Elegant immutable object pattern in PHP](https://dev.to/hbgl/elegant-immutable-object-pattern-in-php-1dg3)
+ [Immutable Objects in PHP: Your Secret Weapon for Safer Applications](https://medium.com/@mohamadshahkhajeh/immutable-objects-in-php-your-secret-weapon-for-safer-applications-04eb88c49150)

## Related

+ [Clock](clock.html)
+ [Determinism](determinism.html)
+ [Snapshot](snapshot.html)
+ [State](state.html)
+ [Class Wither Method](wither.html)
+ [Actor Model](actor-model.html)
+ [Ownership](borrow-checking.html)
+ [Linear Type](linear-type.html)
+ [Phantom Type](phantom-type.html)
+ [Record Type](record-type.html)
+ [Value Type](value-type.html)
