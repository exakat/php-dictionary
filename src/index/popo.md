# Plain Old PHP Object (POPO)
``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance. POPOs are just basic classes with properties and methods, used to represent data or logic without any external dependencies. They are often contrasted with objects that are tied to frameworks, like Doctrine entities in Symfony, or use magic methods or reflection heavily.

``Plain Old <Language> Object`` also works for any other programming language.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/popo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/popo.html","name":"Plain Old PHP Object (POPO)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:03:45 +0000","dateModified":"Thu, 09 Jul 2026 09:03:45 +0000","description":"Plain Old PHP Object, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/popo.html"]}],"keywords":["class","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Plain_old_Java_object"},{"@type":"CreativeWork","name":"POPO \u2014 What is it, and why should you not use it?","url":"https:\/\/medium.com\/@damiankryger\/popo-what-is-it-and-why-should-you-not-use-it-29c1487e2740"},{"@type":"CreativeWork","name":"Plain old PHP Object - Usability and benefits in modern PHP programming","url":"https:\/\/dev.to\/fuadardiono\/plain-old-php-object-usability-and-benefits-in-modern-php-programming-32oc"},{"@type":"CreativeWork","name":"Do not Forget POPO, the Plain Old PHP Object approach","url":"https:\/\/ivonascimento.com\/2014\/03\/06\/do-not-forget-popo-the-plain-old-php-object-approach\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"popo"}]}]}</script>
```php
<?php

    class User {
        public string $name;
        public string $email;
    
        public function __construct(string $name, string $email)
        {
            $this->name = $name;
            $this->email = $email;
        }
    
        public function getInfo(): string
        {
            return "Name: {$this->name}, Email: {$this->email}";
        }
    }
    
    // Usage
    $user = new User('Elephpant PHP', 'elephpant@php.net');
    echo $user->getInfo(); // Output: Name: Elephpant PHP, Email: elephpant@php.net

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Plain_old_Java_object)**
## See Also

+ [POPO — What is it, and why should you not use it?](https://medium.com/@damiankryger/popo-what-is-it-and-why-should-you-not-use-it-29c1487e2740)
+ [Plain old PHP Object - Usability and benefits in modern PHP programming](https://dev.to/fuadardiono/plain-old-php-object-usability-and-benefits-in-modern-php-programming-32oc)
+ [Do not Forget POPO, the Plain Old PHP Object approach](https://ivonascimento.com/2014/03/06/do-not-forget-popo-the-plain-old-php-object-approach/)

## Related

+ [Data Transfer Object (DTO)](dto.html)
+ [Value Object (VO)](vo.html)
+ [stdclass](stdclass.html)
