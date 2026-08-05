# Stringable
``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant; or an object which has the ``__toString()`` method.

Stringable is automatically added to any class and subclasses that has the ``__toString()`` method, though it is recommended to add it explicitly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stringable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stringable.ini.html","name":"Stringable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:38:18 +0000","dateModified":"Mon, 13 Jul 2026 09:38:18 +0000","description":"``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Stringable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [String](string.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [PHP Natives](native-type.ini.html)
