# Destructor
The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. It is called ``__destruct``.

Most of the time, the destructor is automatic: removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and has no access to any display, including stdout. As such, calls to echo are ineffective, and it is recommended to store the needed logs in another system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/destructor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/destructor.html","name":"Destructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:40:45 +0000","dateModified":"Mon, 13 Jul 2026 18:40:45 +0000","description":"The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Destructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    private $file;

    function __construct($path) {
        $this->file = fopen($path, 'w');
    }
    
    function __destruct() {
        fwrite($this->file, 'End');
        fclose($this->file);
    }
}

$x = new X('/tmp/test.txt');
unset($x);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php)**
## See Also

+ [Introduction to Destructor in PHP](https://www.educba.com/destructor-in-php/)

## Related

+ [Constructor](constructor.ini.html)
+ [Exit](exit.ini.html)
+ [Literal](literal.ini.html)
+ [Defer Statement](defer.ini.html)
+ [Linear Type](linear-type.ini.html)
+ [Object Lifecycle](object-lifecycle.ini.html)
+ [Shutdown](shutdown.ini.html)
