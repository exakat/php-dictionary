# Sub (prefix)
``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 

It applies to several concepts: 

+ Subclasses: classes that extends another class
+ Subnamespaces: a namespace that share a prefix with another one

While ``sub-`` is a generic prefix, it is not applied to every possible words, as they are seldom used. It may still produce neologisms, which sound funny, but may become mainstream. For example, a ``sub-interface`` makes sense, but is not used; a sub-trait makes no sense.
```php
<?php

namespace A { }

// this is a subnamespace
namespace A\B { }

?>
```

## See Also

+ [Exploring Inheritance in PHP](https://linu.us/exploring-inheritance-in-php)
+ [Clean code with PHP namespaces](https://www.honeybadger.io/blog/php-namespaces/)

Related : [Subnamespaces](Subnamespaces), [Subclass](Subclass)
