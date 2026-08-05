# Magic Methods
Special methods, which provide extended support for PHP features.

The magic methods are: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

The constructor and destructors are not considered as magic methods, even though they are reserved.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-method.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-method.ini.html","name":"Magic Methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Special methods, which provide extended support for PHP features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Magic Methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    function __get($name) {
        return $this->$name;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## See Also

+ [What are magic methods in PHP? and How to Implement them?](https://www.edureka.co/blog/magic-methods-in-php)
+ [PHP Magic Methods Explained](https://atakde.medium.com/php-magic-methods-explained-bac7053c007d)
+ [Magic Methods in PHP: Why Programmers Need Magic Too](https://dev.to/ianpatricck/magic-methods-in-php-why-programmers-need-magic-too-2f02)

## Related

+ [\_\_get() Method](__get.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [\_\_call() Method](__call.ini.html)
+ [\_\_isset() Method](__isset.ini.html)
+ [\_\_clone() Method](__clone.ini.html)
+ [\_\_sleep() Method](__sleep.ini.html)
+ [\_\_wakeup() Method](__wakeup.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [\_\_invoke() Method](__invoke.ini.html)
+ [\_\_set\_state() Method](__set_state.ini.html)
+ [Dynamic Properties](dynamic-property.ini.html)
+ [String](string.ini.html)
+ [Deep Clone](deep-clone.ini.html)
+ [Isset](isset.ini.html)
+ [Magic Constants](magic-constant.ini.html)
+ [Magic](magic.ini.html)
+ [Object](object.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Shallow Clone](shallow-clone.ini.html)
+ [\_\_callStatic() Method](__callstatic.ini.html)
+ [Invoke](invoke.ini.html)
+ [Object Type](object-type.ini.html)
+ [Overloading](overloading.ini.html)
+ [Automagic](automagic.ini.html)
+ [Callbacks](callback.ini.html)
