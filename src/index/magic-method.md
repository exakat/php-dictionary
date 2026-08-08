# Magic Methods
Special methods, which provide extended support for PHP features.

The magic methods are: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

The constructor and destructors are not considered as magic methods, even though they are reserved.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html","name":"Magic Methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Special methods, which provide extended support for PHP features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Magic Methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Magic Methods"}]}]}</script>
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

+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [\_\_call() Method](__call.html)
+ [\_\_isset() Method](__isset.html)
+ [\_\_clone() Method](__clone.html)
+ [\_\_sleep() Method](__sleep.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [\_\_toString() Method](__tostring.html)
+ [\_\_invoke() Method](__invoke.html)
+ [\_\_set\_state() Method](__set_state.html)
+ [Dynamic Properties](dynamic-property.html)
+ [String](string.html)
+ [Deep Clone](deep-clone.html)
+ [Isset](isset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic](magic.html)
+ [Object](object.html)
+ [Property Hook](property-hook.html)
+ [Shallow Clone](shallow-clone.html)
+ [\_\_callStatic() Method](__callstatic.html)
+ [Invoke](invoke.html)
+ [Object Type](object-type.html)
+ [Overloading](overloading.html)
+ [Automagic](automagic.html)
+ [Callbacks](callback.html)
