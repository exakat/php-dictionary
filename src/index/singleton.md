# Singleton
A singleton is a class which can only have one object. There is no way to instantiate the class and get a second, distinct object.

A singleton is used when there is a significant cost or limitations at maintaining multiple instances of the same object. For example, multiple ``SQLite3`` access to the same file, even as read-only, means several copies of the same file in memory. Or, several object referencing the same lock may be a problem.

Singleton are more difficult to test, as there is only one instance, and it is difficult to control it. Singleton may be achieve by dependency injection, with the same object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/singleton.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/singleton.html","name":"Singleton","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A singleton is a class which can only have one object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Singleton.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiton.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Singleton_pattern"},{"@type":"CreativeWork","name":"The little singleton","url":"https:\/\/blog.cleancoder.com\/uncle-bob\/2015\/07\/01\/TheLittleSingleton.html"},{"@type":"CreativeWork","name":"Stop Using Singleton Pattern","url":"https:\/\/medium.com\/@dotcom.software\/stop-using-singleton-pattern-c078abc99eb2"},{"@type":"CreativeWork","name":"PHP Design Patterns Game : The Singleton Pattern","url":"https:\/\/phpmagazine.net\/2023\/03\/php-design-patterns-game-the-singleton-pattern.html"},{"@type":"CreativeWork","name":"The Singleton Labyrinth","url":"https:\/\/dev.to\/suckup_de\/the-singleton-labyrinth-19je"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"singleton"}]}]}</script>
```php
<?php

// One method to build a singleton class
class Singleton {
  private static self $instance;
  
  // The constructor is private, to avoid multiple instantiation
  // it is still accessible indirectly, via a public static method. 
  private function __construct()
  {
    // the usual constructor code
  }

  // the factory to build the singleton 
  public static function getInstance() : self {
    if (!isset(self::$instance)) {
      self::$instance = new self;
    }
 
    return self::$instance;
  }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Singleton_pattern)**
## See Also

+ [The little singleton](https://blog.cleancoder.com/uncle-bob/2015/07/01/TheLittleSingleton.html)
+ [Stop Using Singleton Pattern](https://medium.com/@dotcom.software/stop-using-singleton-pattern-c078abc99eb2)
+ [PHP Design Patterns Game : The Singleton Pattern](https://phpmagazine.net/2023/03/php-design-patterns-game-the-singleton-pattern.html)
+ [The Singleton Labyrinth](https://dev.to/suckup_de/the-singleton-labyrinth-19je)

## Related

+ [Design Pattern](design-pattern.html)
+ [Multiton](multiton.html)
