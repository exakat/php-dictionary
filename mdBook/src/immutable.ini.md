# Immutable
An immutable object is an object that can't be changed. It may be created, read and cloned. On the other hand, a mutable object may change when one of its method is called, even if this is not visible from the outside.

Immutable objects are thread-safe. 

Immutable objects often return a clone version of themselves, after modification.
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

## See Also

+ [The case for immutability](https://dev.to/timoschinkel/the-case-for-immutability-1gfa)
+ [Elegant immutable object pattern in PHP](https://dev.to/hbgl/elegant-immutable-object-pattern-in-php-1dg3)
+ [Immutable Objects in PHP: Your Secret Weapon for Safer Applications](https://medium.com/@mohamadshahkhajeh/immutable-objects-in-php-your-secret-weapon-for-safer-applications-04eb88c49150)

Related : [Clock](Clock), [Determinism](Determinism), [Snapshot](Snapshot), [State](State), [Class Wither Method](Class Wither Method), [Actor Model](Actor Model), [Ownership](Ownership), [Linear Type](Linear Type), [Phantom Type](Phantom Type), [Record Type](Record Type), [Value Type](Value Type)
