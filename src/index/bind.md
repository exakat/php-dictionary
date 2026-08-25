# Bind
A closure, when build on a method, is bound to an object. When the closure is executed, it will be with that object. Unless the closure is rebound with another object: in that case, the new object will be used as context for the closure execution.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html","name":"Bind","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A closure, when build on a method, is bound to an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html"]}],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/closure.bindto.php"},{"@type":"CreativeWork","name":"PHP: Closure::bind - Manual","url":"https:\/\/www.php.net\/manual\/en\/closure.bind.php"},{"@type":"CreativeWork","name":"PHP Tutorial => Closure binding and scope","url":"https:\/\/riptutorial.com\/php\/example\/8746\/closure-binding-and-scope"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bind"}]}]}</script>
```php
<?php

class A {
        public function __construct(private int $a) {    }

    public function method() {  echo $this->a;  }
}

$fn = Closure::fromCallable([new A(10), 'method']);
$fn();

$fn2 = $fn->bindTo(new A(99), A::class);
$fn2();

// $fn is called with another object
$fn->call(new A (100));

?>
```

**[Documentation](https://www.php.net/manual/en/closure.bindto.php)**
## See Also

+ [PHP: Closure::bind - Manual](https://www.php.net/manual/en/closure.bind.php)
+ [PHP Tutorial => Closure binding and scope](https://riptutorial.com/php/example/8746/closure-binding-and-scope)

## Related

+ [Closure](closure.html)
