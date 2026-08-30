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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html","name":"$this","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:00:06 +0000","dateModified":"Fri, 14 Aug 2026 09:00:06 +0000","description":"$this is a variable that represents the current object instance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html"]}],"keywords":["oop","variable","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"},{"@type":"CreativeWork","name":"PHP $this","url":"https:\/\/www.phptutorial.net\/php-oop\/php-this\/"},{"@type":"CreativeWork","name":"What is $this?","url":"https:\/\/medium.com\/@erlandmuchasaj\/what-is-this-16846fe8c15e"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$this"}]}]}</script>
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

+ [Class](class.html)
+ [Trait](trait.html)
+ [Arrow Functions](arrow-function.html)
+ [get\_class()](get_class.html)
+ [Closure](closure.html)
+ [Closure Binding](closure-binding.html)
+ [Static Method](static-method.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Pseudo-variable](pseudo-variable.html)
