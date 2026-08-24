# Destructor
The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. It is called ``__destruct``.

Most of the time, the destructor is automatic: removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and has no access to any display, including stdout. As such, calls to echo are ineffective, and it is recommended to store the needed logs in another system.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html","name":"Destructor","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:39 +0000","dateModified":"Wed, 19 Aug 2026 08:25:39 +0000","description":"The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html"]}],"alternateName":["__destruct"],"keywords":["oop","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-lifecycle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php"},{"@type":"CreativeWork","name":"Introduction to Destructor in PHP","url":"https:\/\/www.educba.com\/destructor-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"destructor"}]}]}</script>
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

+ [Constructor](constructor.html)
+ [Exit](exit.html)
+ [Literal](literal.html)
+ [Defer Statement](defer.html)
+ [Linear Type](linear-type.html)
+ [Object Lifecycle](object-lifecycle.html)
+ [Shutdown](shutdown.html)
