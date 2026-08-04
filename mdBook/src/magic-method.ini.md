# Magic Methods
Special methods, which provide extended support for PHP features.

The magic methods are: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

The constructor and destructors are not considered as magic methods, even though they are reserved.
```php
<?php

class X {
    function __get($name) {
        return $this->$name;
    }
}

?>
```

## See Also

+ [What are magic methods in PHP? and How to Implement them?](https://www.edureka.co/blog/magic-methods-in-php)
+ [PHP Magic Methods Explained](https://atakde.medium.com/php-magic-methods-explained-bac7053c007d)
+ [Magic Methods in PHP: Why Programmers Need Magic Too](https://dev.to/ianpatricck/magic-methods-in-php-why-programmers-need-magic-too-2f02)

Related : [__get() Method](__get() Method), [__set() Method](__set() Method), [__call() Method](__call() Method), [__isset() Method](__isset() Method), [__clone() Method](__clone() Method), [__sleep() Method](__sleep() Method), [__wakeup() Method](__wakeup() Method), [__toString() Method](__toString() Method), [__invoke() Method](__invoke() Method), [__set_state() Method](__set_state() Method), [Dynamic Properties](Dynamic Properties), [String](String), [Deep Clone](Deep Clone), [Isset](Isset), [Magic Constants](Magic Constants), [Magic](Magic), [Object](Object), [Property Hook](Property Hook), [Shallow Clone](Shallow Clone), [__callStatic() Method](__callStatic() Method), [Invoke](Invoke), [Object Type](Object Type), [Overloading](Overloading), [Automagic](Automagic), [Callbacks](Callbacks)
