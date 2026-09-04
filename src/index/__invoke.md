# \_\_invoke() Method
The ``__invoke()`` magic method is called when the code calls an object as a function name. This type of class is also called a functor. 

The method is able to take an arbitrary number of arguments, as usual. 

When a class has the ``__invoke`` method, it is possible to call a method on its objects without mentioning a method's name: the object itself is the method.

``__invoke`` is also considered as the anonymous method: it is called without using its name.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html","name":"__invoke() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"The __invoke() magic method is called when the code calls an object as a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html"]}],"keywords":["magic method","closure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/solid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php#language.oop5.magic.invoke"},{"@type":"CreativeWork","name":"PHP __invoke","url":"https:\/\/www.phptutorial.net\/php-oop\/php-__invoke\/"},{"@type":"CreativeWork","name":"The Magical invoke Method in PHP. Your Clean Code Ally","url":"https:\/\/www.juannicolas.eu\/the-invoke-method-in-php\/"},{"@type":"CreativeWork","name":"Why PHP\u2019s __invoke Might Be Your Best Kept Secret!","url":"https:\/\/medium.com\/@jochelle.mendonca\/why-phps-invoke-might-be-your-best-kept-secret-96c0bb8f1da9\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__invoke"}]}]}</script>
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

+ [Magic Methods](magic-method.html)
+ [SOLID](solid.html)
+ [Anonymous](anonymous.html)
+ [Functor](functor.html)
+ [Callables](callable.html)
+ [Invoke](invoke.html)
+ [New Without Parenthesis](new-without-parenthesis.html)
+ [Anonymous Function](anonymous-function.html)
