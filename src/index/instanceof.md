# instanceof
``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function ``is_a()``.

``instanceof`` has a higher precedence than ``!`` operator, so it is applied before the latter. In case of confusion, use parenthesis.

``instanceof`` does not check that the checked class exists: it just checks that the provided object match the class name. If a typo happens in the class name or the class does not exists, the operator fails every time.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html","name":"instanceof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:18:46 +0000","dateModified":"Wed, 08 Jul 2026 16:18:46 +0000","description":"``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"instanceof"}]}]}</script>
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

+ [Operators](operator.html)
+ [is\_a()](is_a.html)
+ [Type Checking](type-checking.html)
+ [Object](object.html)
+ [Polymorphism](polymorphism.html)
+ [is\_object()](is_object.html)
+ [Object Type](object-type.html)
+ [Multiple Dispatch](multiple-dispatch.html)
+ [Smart Cast](smart-cast.html)
+ [Sum Type](sum-type.html)
+ [Type Narrowing](type-narrowing.html)
