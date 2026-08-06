# $this
``$this`` is a variable that represents the current object instance. Its value is different for each object, and remains the same throughout every non-static method call made on that object.

``$this`` is also called a pseudo-variable. It is never explicitly set, but is available as soon as a non-static method starts. It is also never available, nor can even be created, outside a method.

``$this`` cannot be unset, nor assigned a different value than the current object. This means it cannot be used as the name of a function or method parameter, as a global variable ``global $this;``, or as an explicit lexical variable in a closure ``use ($this)``.

Closures and arrow functions defined inside a non-static method automatically have access to ``$this``, without needing to import it with ``use``. A closure declared with the ``static`` keyword has no access to ``$this``. A named function declared inside a method, on the other hand, is not a closure, and does not have access to ``$this`` either.

``$this`` is not available in ``static`` methods, as they do not require an object to be invoked.

When a non-static method is invoked with the ``::`` syntax from another method of a related class, for example ``parent::method()`` or ``self::method()``, ``$this`` still refers to the calling object.

In a trait, ``$this`` refers to the object of the class that uses the trait, not to the trait itself.

``$this`` may use the array syntax, if the underlying class supports the ``ArrayAccess`` interface.

There is no special variable called ``$that``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24this.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24this.html","name":"$this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 14:49:45 +0000","dateModified":"Fri, 10 Jul 2026 14:49:45 +0000","description":"``$this`` is a variable that represents the current object instance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $y = 1;
    
        function foo() {
            return $this->y;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## See Also

+ [PHP $this](https://www.phptutorial.net/php-oop/php-this/)
+ [What is $this?](https://medium.com/@erlandmuchasaj/what-is-this-16846fe8c15e)

## Related

+ [Class](class.ini.html)
+ [Trait](trait.ini.html)
+ [$php\_errormsg]($php_errormsg.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [get\_class()](get_class.ini.html)
+ [Closure](closure.ini.html)
+ [Closure Binding](closure-binding.ini.html)
+ [Static Method](static-method.ini.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Pseudo-variable](pseudo-variable.ini.html)
