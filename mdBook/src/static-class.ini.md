# Static Class
A static class is a class that only holds static methods, properties or constants. 

There is no special syntax for such a class: it is simply created with the above-mentioned structures. Other programming languages have a dedicated syntax for them.

A static class is usually used by direct call, with the ``::`` operator. A static class may still be instantiated, though there is little usage for such an object.

```php
<?php

    class X {
        public static int $p = 0;
        
        public static function increment(): int {
            return self::$p++;
        }
    }
    
    echo X::increment(); // 1

?>
```

Related : [Scope Resolution Operator ::](Scope Resolution Operator ::), [Static Method](Static Method), [Static Constant](Static Constant), [Static Property](Static Property), [Colon](Colon)
