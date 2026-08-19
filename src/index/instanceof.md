# instanceof
``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function ``is_a()``.

``instanceof`` has a higher precedence than ``!`` operator, so it is applied before the latter. In case of confusion, use parenthesis.

``instanceof`` does not check that the checked class exists: it just checks that the provided object match the class name. If a typo happens in the class name or the class does not exists, the operator fails every time.


<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html","name":"instanceof","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:08 +0000","dateModified":"Sun, 16 Aug 2026 07:46:08 +0000","description":"instanceof is used to determine whether a PHP variable is an instantiated object of a certain class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"]}],"keywords":["object","confusion","classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-dispatch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/smart-cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-narrowing.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.type.php#language.operators.type"},{"@type":"CreativeWork","name":"is_a","url":"https:\/\/www.php.net\/manual\/en\/function.is-a.php"},{"@type":"CreativeWork","name":"Polymorphism (computer science) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Polymorphism_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"instanceof"}]}]}</script>
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
## See Also

+ [is_a](https://www.php.net/manual/en/function.is-a.php)
+ [Polymorphism (computer science) (Wikipedia)](https://en.wikipedia.org/wiki/Polymorphism_(computer_science))

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
