# Multiton
A multiton is a singleton which holds several instances of itself. Each instance is identified with a distinct name, and may be reached independently.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiton.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiton.html","name":"Multiton","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A multiton is a singleton which holds several instances of itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Multiton.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/singleton.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Multiton_pattern"},{"@type":"CreativeWork","name":"Multiton in PHP","url":"https:\/\/www.jakowicz.com\/multitons-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multiton"}]}]}</script>
```php
<?php

class Database {
    private static $instances = [];

    private function __construct() { }

    public static function getInstance(string $name) {
 
        // Check if an instance exists with this key already
        if(!isset(self::$instances[$key])) {
            self::$instances[$name] = match($name) {
                'write' => new Connection(self::WRITE_CREDENTIALS),
                'read' => new Connection(self::READ_CREDENTIALS),
                'blackhole' => new NullObject(),
                default => throw new Exception('No such database access')
            };
        }
 
        // Return the correct instance of this class
        return self::$instances[$name];
    }

    private function __clone() { }
}
 
// Create first instance to the master database
$master = Database::getInstance('read');
var_dump($master); // object(Database)#1 (0) { }
 
// Create second instance of this class for a logger database
$logger = Database::getInstance('write');
var_dump($logger); // object(Database)#2 (0) { }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Multiton_pattern)**
## See Also

+ [Multiton in PHP](https://www.jakowicz.com/multitons-in-php/)

## Related

+ [Singleton](singleton.html)
