# Insteadof
The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.

When a class uses multiple traits that have methods or properties with the same name, naming conflicts can arise. The insteadof operator helps to resolve these conflicts by specifying which trait's implementation should be used in the class.
```php
<?php

// Example from the PHP documentation
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

?>
```

## See Also

+ [How to Reuse PHP Code Effectively – Introduction to PHP traits](https://linuxconfig.org/how-to-reuse-php-code-effectively-introduction-to-php-traits)

Related : [Use](Use), [Alias](Alias), [Method Collision](Method Collision)
