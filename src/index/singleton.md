# Singleton
A singleton is a class which can only have one object. There is no way to instantiate the class and get a second, distinct object.

A singleton is used when there is a significant cost or limitations at maintaining multiple instances of the same object. For example, multiple ``SQLite3`` access to the same file, even as read-only, means several copies of the same file in memory. Or, several object referencing the same lock may be a problem.

Singleton are more difficult to test, as there is only one instance, and it is difficult to control it. Singleton may be achieve by dependency injection, with the same object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/singleton.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/singleton.html","name":"Singleton","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A singleton is a class which can only have one object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Singleton.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Design Pattern](design-pattern.ini.html)
+ [Multiton](multiton.ini.html)
