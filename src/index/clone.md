# Clone
Clone creates a duplicate of an object.

By default, PHP creates a shallow clone: it only makes a copy of the scalar properties, and it keeps the references and any objects untouched. This means that object properties are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method ``__clone()``.

Until PHP 8.5, ``clone`` was only an operator. Ever since, it is also a native PHP function, which accepts a second argument to update the public properties. That argument prevents using the magic method ``__clone``, although both may happen at the same time. When ``__clone`` and ``clone()`` update the same property, the ``clone()`` is applied last, and stays.

Cloning had a conflict with the ``readonly`` properties, until updating readonly during the cloning operation was allowed, in version 8.5.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html","name":"Clone","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:31 +0000","dateModified":"Wed, 19 Aug 2026 06:48:31 +0000","description":"Clone creates a duplicate of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Clone.html"]}],"keywords":["keyword","concept","oop","native function","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shallow-clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deep-clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.cloning.php"},{"@type":"CreativeWork","name":"What happens when we clone?","url":"https:\/\/doeken.org\/blog\/what-happens-when-we-clone"},{"@type":"CreativeWork","name":"How to clone an object in PHP","url":"https:\/\/linuxhint.com\/cloning_objects_php\/"},{"@type":"CreativeWork","name":"PHP Clone All The Things","url":"https:\/\/jolicode.com\/blog\/php-clone-all-the-things"},{"@type":"CreativeWork","name":"Clone version 2","url":"https:\/\/wiki.php.net\/rfc\/clone_with_v2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"clone"}]}]}</script>
```php
<?php

    class X {
        protected $property = 1;
        
        function __clone() {
            $this->property = 2;
        }
    }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;
    
    $z2 = clone($x);  // parenthesis are now useful
    echo $z2->property;  // 2
    $z3 = clone($x, ['property' => 3]);
    echo $z3->property;
    
?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.cloning.php)**
## See Also

+ [What happens when we clone?](https://doeken.org/blog/what-happens-when-we-clone)
+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
+ [PHP Clone All The Things](https://jolicode.com/blog/php-clone-all-the-things)
+ [Clone version 2](https://wiki.php.net/rfc/clone_with_v2)

## Related

+ [Shallow Clone](shallow-clone.html)
+ [Deep Clone](deep-clone.html)
+ [Readonly](readonly.html)
+ [References](reference.html)
+ [Object](object.html)
+ [Identity](identity.html)
+ [Object Type](object-type.html)
