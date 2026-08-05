# instanceof
``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function ``is_a()``.

``instanceof`` has a higher precedence than ``!`` operator, so it is applied before the latter. In case of confusion, use parenthesis.

``instanceof`` does not check that the checked class exists: it just checks that the provided object match the class name. If a typo happens in the class name or the class does not exists, the operator fails every time.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instanceof.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instanceof.ini.html","name":"instanceof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:18:46 +0000","dateModified":"Wed, 08 Jul 2026 16:18:46 +0000","description":"``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instanceof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($user instanceof Administrator) {
        $user->admin();
    }
    
    // If The user is not of class User...
    if ( !$user instanceof User ) {
    //if ( !($user instanceof User) ) {
        $user->admin();
    }
    
    var_dump($user instanceof UndefinedClass); // false

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.type.php#language.operators.type)**
## Related

+ [Operators](operator.ini.html)
+ [is\_a()](is_a.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Object](object.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [is\_object()](is_object.ini.html)
+ [Object Type](object-type.ini.html)
+ [Multiple Dispatch](multiple-dispatch.ini.html)
+ [Smart Cast](smart-cast.ini.html)
+ [Sum Type](sum-type.ini.html)
+ [Type Narrowing](type-narrowing.ini.html)
