# Bind
A closure, when build on a method, is bound to an object. When the closure is executed, it will be with that object. Unless the closure is rebound with another object: in that case, the new object will be used as context for the closure execution.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bind.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bind.html","name":"Bind","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A closure, when build on a method, is bound to an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Bind.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Closure](closure.ini.html)
