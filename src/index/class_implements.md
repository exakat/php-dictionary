# class\_implements()
``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes. The keys and values of the returned array are both the interface names.

An optional second parameter, by default ``true``, controls whether the autoloader should be invoked if the class does not yet exist. Pass ``false`` to suppress autoloading.

``class_implements()`` returns ``false`` if the class does not exist and autoloading is disabled.

Related functions are ``class_parents()``, which returns parent classes, and ``class_uses()``, which returns traits used by the class.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_implements.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_implements.html","name":"class_implements()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:18:04 +0000","dateModified":"Fri, 17 Jul 2026 09:18:04 +0000","description":"``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_implements().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class_implements"}]}]}</script>
```php
<?php

interface Countable {}
interface Stringable {}

class MyCollection implements Countable, Stringable {
    public function count(): int { return 0; }
    public function __toString(): string { return ''; }
}

$interfaces = class_implements(MyCollection::class);
// ['Countable' => 'Countable', 'Stringable' => 'Stringable']

// Also works with a string class name
$interfaces = class_implements('MyCollection');

// Works on instances too
$obj = new MyCollection();
$interfaces = class_implements($obj);

var_dump(isset($interfaces['Countable'])); // true

?>
```

**[Documentation](https://www.php.net/class_implements)**
## See Also

+ [class_implements - PHP Manual](https://www.php.net/manual/en/function.class-implements.php)

## Related

+ [Interface](interface.html)
+ [implements](implements.html)
+ [Introspection](introspection.html)
