# Serializable
``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serializable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serializable.html","name":"Serializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"Serializable is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Serializable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"serializable"}]}]}</script>
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
