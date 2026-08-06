# static
The ``static`` keyword has several distinct usages.

Static is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current called class.

Static is a keyword for methods and properties: they are turned into class elements, and should be reached with the ``::`` syntax, instead of ``->`` or ``?->``.

Static is a keyword for closures and arrow functions: it prevents the current scope to be included in with the closure, thus limiting the number of accessible values.

Static is a keyword for variables: those variables aren't removed at the end of the method execution and are available at the beginning of the next call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static.html","name":"static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:50:16 +0000","dateModified":"Wed, 24 Jun 2026 05:50:16 +0000","description":"The ``static`` keyword has several distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            return static::X;
    
            // same as \X::C; when the object is of class X
            // same as \Y::C; when the object is of class W
        }
    }
    
    class Y extends X {
        private const X = 2;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## See Also

+ [Stop using “static” in PHP](https://blog.devgenius.io/stop-using-static-in-php-b150527819b2)
+ [5 usages of static keyword in PHP](https://www.exakat.io/en/5-usages-of-static-keyword-in-php/)
+ [Scope of Variables](https://jobtensor.com/Tutorial/PHP/en/Variables)

## Related

+ [parent](parent.ini.html)
+ [Closure](closure.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Variables](variable.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [Child Class](child-class.ini.html)
+ [Language Construct](language-construct.ini.html)
+ [Properties](property.ini.html)
+ [Self](self.ini.html)
+ [Dynamic](dynamic.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Var](var.ini.html)
