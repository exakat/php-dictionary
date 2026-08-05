# Serializable
``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/serializable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/serializable.ini.html","name":"Serializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Serializable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Serialization](serialization.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
