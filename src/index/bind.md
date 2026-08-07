# Bind
A closure, when build on a method, is bound to an object. When the closure is executed, it will be with that object. Unless the closure is rebound with another object: in that case, the new object will be used as context for the closure execution.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html","name":"Bind","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A closure, when build on a method, is bound to an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Bind.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Bind"}]}]}</script>
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
## Related

+ [Closure](closure.html)
