# Object Persistence
Object persistence is the feature that keeps an object available between two different PHP requests, on a web server.

In practice, this is achieved by saving a current object, with its properties and data, so that it may be reconstructed later. 

This is achieved natively with the ``serialize()`` and ``unserialize()`` functions. 

The text representation of the object may then be stored in various medium, such as files, sessions, database. 

It is also possible to achieve object persistence by using a different format, such as JSON, XML, CSV, etc. The whole process works similarly to PHP's own process, though it has to be reconstructed entirely.

Object persistence may save the values of the object's property, such as scalars or arrays; or it may remove data, and reconstruct it later, such as database connections, composed objects or references.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-persistence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-persistence.html","name":"Object Persistence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:03 +0000","dateModified":"Sat, 08 Aug 2026 14:31:03 +0000","description":"Object persistence is the feature that keeps an object available between two different PHP requests, on a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-persistence.html"]}],"keywords":["object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/persistence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.serialization.php"},{"@type":"CreativeWork","name":"Persist Large Object Graphs in PHP","url":"https:\/\/dev.to\/melia72\/persist-php-objects-without-a-database-5fip"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-persistence"}]}]}</script>
```php
<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

// Create an object
$user = new User('Damien', 'damien@exakat.io');

// Serialize the object
$serializedUser = serialize($user);

// Save to a file (or database)
file_put_contents('user.txt', $serializedUser);

// Later, reconstruct the object
$loadedUser = unserialize(file_get_contents('user.txt'));

echo $loadedUser->name; // Outputs: Damien

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.serialization.php)**
## See Also

+ [Persist Large Object Graphs in PHP](https://dev.to/melia72/persist-php-objects-without-a-database-5fip)

## Related

+ [Session](session.html)
+ [Persistence](persistence.html)
+ [Snapshot](snapshot.html)
