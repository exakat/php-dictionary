# \_\_debugInfo() Method
``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object.

By default, ``var_dump()`` shows every property of an object, including private and protected ones. When ``__debugInfo()`` is defined, its return value is shown instead, allowing sensitive properties to be hidden, computed values to be added, or the output to be simplified.

``__debugInfo()`` must return an array. The keys become the displayed property names, and are not required to match actual property names.

``__debugInfo()`` was introduced in version 5.6. Before that version, ``var_dump()`` always displays the object's actual properties, and the method, if present, is simply ignored.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__debuginfo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__debuginfo.ini.html","name":"__debugInfo() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:22:48 +0000","dateModified":"Mon, 03 Aug 2026 16:22:48 +0000","description":"``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__debugInfo() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $public = 'a';
        private $secret = 'password';

        function __debugInfo() {
            return ['public' => $this->public,
                    'secret' => '***redacted***'];
        }
    }

    var_dump(new X);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo)**
## See Also

+ [__debugInfo()](https://riptutorial.com/php/example/4605/--debuginfo--)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [var\_dump()](var_dump.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [\_\_sleep() Method](__sleep.ini.html)
+ [\_\_wakeup() Method](__wakeup.ini.html)
+ [print\_r()](print_r.ini.html)
+ [var\_export()](var_export.ini.html)
