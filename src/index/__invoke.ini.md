# \_\_invoke() Method
The ``__invoke()`` magic method is called when the code calls an object as a function name. This type of class is also called a functor. 

The method is able to take an arbitrary number of arguments, as usual. 

When a class has the ``__invoke`` method, it is possible to call a method on its objects without mentioning a method's name: the object itself is the method.

``__invoke`` is also considered as the anonymous method: it is called without using its name.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__invoke.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__invoke.ini.html","name":"__invoke() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:22:52 +0000","dateModified":"Thu, 16 Jul 2026 08:22:52 +0000","description":"The ``__invoke()`` magic method is called when the code calls an object as a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__invoke() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // extracted from the PHP manual
    class CallableClass
    {
        public function __invoke($x)
        {
            var_dump($x);
        }
    }

    $obj = new CallableClass;
    $obj(5);
    var_dump(is_callable($obj));

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke)**
## See Also

+ [PHP __invoke](https://www.phptutorial.net/php-oop/php-__invoke/)
+ [The Magical invoke Method in PHP. Your Clean Code Ally](https://www.juannicolas.eu/the-invoke-method-in-php/)
+ [Why PHP’s __invoke Might Be Your Best Kept Secret!](https://medium.com/@jochelle.mendonca/why-phps-invoke-might-be-your-best-kept-secret-96c0bb8f1da9/)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [SOLID](solid.ini.html)
+ [Anonymous](anonymous.ini.html)
+ [Functor](functor.ini.html)
+ [Callables](callable.ini.html)
+ [Invoke](invoke.ini.html)
+ [New Without Parenthesis](new-without-parenthesis.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
