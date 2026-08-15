# Serializable
``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects.

The ``Serializable`` interface requires two methods: ``serialize()``, which must return a string representing the object's state, and ``unserialize($data)``, which receives that same string back and must use it to rebuild the object's properties. When a class implements ``Serializable``, PHP's own ``serialize()`` and ``unserialize()`` functions call these methods instead of using their default behavior, which is to walk through the object's properties automatically.

``Serializable`` was introduced in version 5.1, and became deprecated in version 8.1, in favor of the ``__serialize()`` and ``__unserialize()`` magic methods. The main problem with ``Serializable`` was that ``unserialize()`` is called before the constructor runs, and before any parent state is initialized, which made it easy to create objects in an inconsistent or unsafe state from untrusted serialized strings, contributing to a whole class of PHP object injection vulnerabilities. The magic methods interact more safely with the object initialization process and PHP's typed properties.

No PHP version has removed the ``Serializable`` interface yet, but its deprecated status means that classes still implementing it without also implementing ``__serialize()`` and ``__unserialize()`` should be migrated, to remain forward compatible with future PHP releases.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serializable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serializable.html","name":"Serializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:47:05 +0000","dateModified":"Fri, 14 Aug 2026 08:47:05 +0000","description":"Serializable is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Serializable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"serializable"}]}]}</script>
```php
<?php
class X implements Serializable {
    public function __construct(private string $data) {    }

    public function serialize() {
        // simple serialization, as there is only one property
        return bz2compress($this->data);
    }

    public function unserialize($data) {
        // simple serialization, as there is only one property
        $this->data = bz2uncompress($data);
    }
}

$object = new X('This is my data, and it may be very long.');
$serialized = serialize($object); 

var_dump($serialized);// Some binary code

$newObject = unserialize($serialized);

var_dump($newObject->getData()); // The original 
?>
```

**[Documentation](https://www.php.net/manual/en/class.serializable.php)**
## See Also

+ [PHP Tutorial => The Serializable interface](https://riptutorial.com/php/example/6096/the-serializable-interface)

## Related

+ [Serialization](serialization.html)
+ [PHP Native Interfaces](php-interface.html)
