# Fluent Interface
A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface: it may be implemented without them.
```php
<?php

class script {
    function hello() {
        print 'Hello ';
        return $this;
    }

    function word() {
        print 'word.';
        return $this;
    }
}

$script = new Script();

$script->hello()->world();
// 

?>
```

## See Also

+ [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)
+ [Fluent Interfaces Are Bad for Maintainability](https://news.ycombinator.com/item?id=16619171)
+ [Fluent Interfaces are Evil](https://ocramius.github.io/blog/fluent-interfaces-are-evil/)

Related : [Final Keyword](Final Keyword), [Interface](Interface), [Chaining](Chaining), [Expressive Interface](Expressive Interface)
