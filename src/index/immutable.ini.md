# Immutable
An immutable object is an object that can't be changed. It may be created, read and cloned. On the other hand, a mutable object may change when one of its method is called, even if this is not visible from the outside.

Immutable objects are thread-safe. 

Immutable objects often return a clone version of themselves, after modification.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/immutable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/immutable.ini.html","name":"Immutable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:09:13 +0000","dateModified":"Sat, 11 Jul 2026 09:09:13 +0000","description":"An immutable object is an object that can't be changed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Immutable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Clock](clock.ini.html)
+ [Determinism](determinism.ini.html)
+ [Snapshot](snapshot.ini.html)
+ [State](state.ini.html)
+ [Class Wither Method](wither.ini.html)
+ [Actor Model](actor-model.ini.html)
+ [Ownership](borrow-checking.ini.html)
+ [Linear Type](linear-type.ini.html)
+ [Phantom Type](phantom-type.ini.html)
+ [Record Type](record-type.ini.html)
+ [Value Type](value-type.ini.html)
