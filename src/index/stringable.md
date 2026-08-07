# Stringable
``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant; or an object which has the ``__toString()`` method.

Stringable is automatically added to any class and subclasses that has the ``__toString()`` method, though it is recommended to add it explicitly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html","name":"Stringable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:38:18 +0000","dateModified":"Mon, 13 Jul 2026 09:38:18 +0000","description":"``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stringable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Stringable"}]}]}</script>
```php
<?php

    function foo(Stringable $s) {
        print $s;
    }
    
    class MyString implements Stringable {
        function __toString() {
            return __METHOD__;
        }
    }
    
    foo('foo');    // foo
    foo(new X());  // MyString::__toString

?>
```

**[Documentation](https://www.php.net/manual/en/class.stringable.php)**
## See Also

+ [What is Stringable Interface in PHP 8?](https://www.tutorialspoint.com/what-is-stringable-interface-in-php-8)
+ [PHP 8.0: New Stringable interface](https://php.watch/versions/8.0/stringable)
+ [The Stringable interface](https://spatie.be/courses/front-line-php/the-stringable-interface)

## Related

+ [String](string.html)
+ [PHP Native Interfaces](php-interface.html)
+ [\_\_toString() Method](__tostring.html)
+ [PHP Natives](native-type.html)
