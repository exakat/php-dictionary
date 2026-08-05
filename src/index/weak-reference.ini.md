# Weak References
Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weak-reference.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weak-reference.ini.html","name":"Weak References","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Weak References.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);

var_dump($weakref->get());
unset($obj);

var_dump($weakref->get());
// NULL

?>
```

**[Documentation](https://www.php.net/manual/en/class.weakreference.php)**
## See Also

+ [PHP 8.0 feature focus: Weak maps](https://platform.sh/blog/php-80-feature-focus-weak-maps/)
+ [WeakReferences](https://www.cmuir.co.nz/post/weakreferences/)

## Related

+ [References](reference.ini.html)
+ [Circular Reference](circular-reference.ini.html)
