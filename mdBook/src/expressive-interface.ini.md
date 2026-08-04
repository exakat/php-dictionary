# Expressive Interface
An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write. It emphasizes clarity and ease of use, often resembling natural language.

The goal is to make your code self-documenting and reduce the cognitive load on developers reading or writing it.

An expressive interface is not related to an interface: it may be implemented without them.

The notion of expressive interface is similar to the fluent interface.
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

?>
```

## See Also

+ [Fluent Interface](https://www.codegenes.net/blog/php-method-chaining-or-fluent-interface/)
+ [Fluent Interface Pattern in PHP](https://softwarepatternslexicon.com/php/structural-patterns-in-php/fluent-interface-pattern/)

Related : [Fluent Interface](Fluent Interface), [Self-documenting](Self-documenting), [Interface](Interface)
