# Code Reuse
Code reuse, as in any programming language, refers to the practice of writing code that can be used in multiple parts of an application or across different projects. This approach offers several benefits, including:

+ Efficiency: instead of writing the same functionality multiple times, the code is written once and used wherever needed
+ Consistency: reusing code promotes consistency across the application and projects, as the same logic is used in multiple places
+ Maintenance: when the code needs to be updated or fixed, there is only one place to do it, reducing the time to spread the fix

Code reuse can be achieved through various techniques, including functions, classes, traits, file inclusions and composer components.
```php
<?php

    // list elements like humans.
    function implodeWithAnd(array $array) : string {
        $last = array_pop($array);
        return implode(', ', $array).' and '.$last;
    }
    
    print implodeWithAnd(['Alice', 'Bob', 'Eve']);
    
    print implodeWithAnd(['Tom', 'Jerry']);

?>
```

## See Also

+ [What is code reuse and why is it important?](https://www.opslevel.com/resources/what-is-code-reuse-and-why-is-it-important)

Related : [Code Architecture](Code Architecture)
