# Refactoring
Refactoring, as in any programming language, refers to the process of restructuring and improving the codebase of an application without changing its external behavior. The primary goal of refactoring is to make the code more readable, maintainable, and efficient while reducing code duplication and potential bugs. 

Refactoring is an essential practice in software development to ensure that the code remains clean and adaptable as the project evolves.

The constraint of rewriting the code without changing the external behavior is somewhat misleading: for example, changing the algorithm to speed up the processing of a piece of data, changes its behavior as it is faster. Such behavior is usually desirable, so it is not considered as a change in behavior: at least, not a negative one. Yet, it still may have consequences on the rest of the application.
```php
<?php

    function factorial(int $n) : int {
        $return = 2;
        for($i = 3; $i <= $n; ++$i) {
            $return *= $i;
        }
        
        return $return;
    }
    
    function factorialr(int $n) : int {
        if ($n === 2) { return 1; }
        
        return factorialr($n - 1);
    
        return $return;
    }
    
    // Note : checks on $n >= 1 are omitted here.

?>
```

## See Also

+ [Refactoring without tests should be fine](https://matthiasnoback.nl/2022/10/refactoring-without-tests-should-be-fine/)
+ [Refactoring Guru](https://refactoring.guru/refactoring)
+ [PHP Refactoring: The Art of Improving Code Quality and Maintainability](https://www.fuseweb.nl/en/blog/2023/05/10/php-refactoring-code-quality-maintainability)
+ [Refactoring Techniques in PHP](https://devm.io/php/refactoring-techniques-in-php)

Related : [Test](Test), [Autowiring](Autowiring), [Drop-in](Drop-in), [Legacy](Legacy), [Streamlining](Streamlining), [Maintenance](Maintenance), [Total Cost Of Ownership (TCO)](Total Cost Of Ownership (TCO)), [Brownfield](Brownfield), [Fat](Fat), [Rector](Rector), [Test-Driven Development](Test-Driven Development)
