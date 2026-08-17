# static
The ``static`` keyword has several distinct usages.

Static is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current called class.

Static is a keyword for methods and properties: they are turned into class elements, and should be reached with the ``::`` syntax, instead of ``->`` or ``?->``.

Static is a keyword for closures and arrow functions: it prevents the current scope from being included in the closure, thus limiting the number of accessible values.

Static is a keyword for variables: those variables aren't removed at the end of the method execution and are available at the beginning of the next call.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html","name":"static","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:59 +0000","dateModified":"Tue, 11 Aug 2026 21:01:59 +0000","description":"The static keyword has several distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-construct.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.paamayim-nekudotayim.php"},{"@type":"CreativeWork","name":"Stop using \u201cstatic\u201d in PHP","url":"https:\/\/blog.devgenius.io\/stop-using-static-in-php-b150527819b2"},{"@type":"CreativeWork","name":"5 usages of static keyword in PHP","url":"https:\/\/www.exakat.io\/en\/5-usages-of-static-keyword-in-php\/"},{"@type":"CreativeWork","name":"Scope of Variables","url":"https:\/\/jobtensor.com\/Tutorial\/PHP\/en\/Variables"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static"}]}]}</script>
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

+ [parent](parent.html)
+ [Closure](closure.html)
+ [Arrow Functions](arrow-function.html)
+ [Variables](variable.html)
+ [Late Static Binding](late-static-binding.html)
+ [Child Class](child-class.html)
+ [Language Construct](language-construct.html)
+ [Properties](property.html)
+ [Self](self.html)
+ [Dynamic](dynamic.html)
+ [Special Types](special-typehint.html)
+ [PHP Natives](native-type.html)
+ [Relative Types](relative-types.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Var](var.html)
