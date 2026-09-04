# \_\_debugInfo() Method
``__debugInfo()`` is called by ``var_dump()`` to customize the information displayed for an object.

By default, ``var_dump()`` shows every property of an object, including private and protected ones. When ``__debugInfo()`` is defined, its return value is shown instead, allowing sensitive properties to be hidden, computed values to be added, or the output to be simplified.

``__debugInfo()`` must return an array. The keys become the displayed property names, and are not required to match actual property names.

``__debugInfo()`` was introduced in version 5.6. Before that version, ``var_dump()`` always displays the object's actual properties, and the method, if present, is simply ignored.

``__debugInfo()`` is a magic method.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__debuginfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__debuginfo.html","name":"__debugInfo() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 07:50:30 +0000","dateModified":"Tue, 01 Sep 2026 07:50:30 +0000","description":"__debugInfo() is called by var_dump() to customize the information displayed for an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__debuginfo.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__wakeup.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print_r.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php#object.debuginfo"},{"@type":"CreativeWork","name":"__debugInfo()","url":"https:\/\/riptutorial.com\/php\/example\/4605\/--debuginfo--"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__debuginfo"}]}]}</script>
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

+ [Magic Methods](magic-method.html)
+ [var\_dump()](var_dump.html)
+ [\_\_toString() Method](__tostring.html)
+ [\_\_sleep() Method](__sleep.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [print\_r()](print_r.html)
+ [var\_export()](var_export.html)
