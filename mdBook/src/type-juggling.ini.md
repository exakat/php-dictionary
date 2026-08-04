# Type Juggling
Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.

```php
<?php

    $a = '35';
    echo $a + 4; // display 39
    
    echo substr($a, -1); // display 5

?>
```

## See Also

+ [How PHP Type Juggling Works – Explained with Code Examples](https://www.freecodecamp.org/news/how-php-type-juggling-works-explained-with-code-examples/)
+ [PHP Type Juggling Vulnerability](https://medium.com/@abdelrahman0x01/php-type-juggling-vulnerability-768bca4d8b3b)
+ [Type Juggling](https://swisskyrepo.github.io/PayloadsAllTheThings/Type%20Juggling/)
+ [How I Chained Mass Assignment + PHP Type Juggling to Take Over Any Account on a Live Platform](https://medium.com/@angry.althaf/how-i-chained-mass-assignment-php-type-juggling-to-take-over-any-account-on-a-live-platform-8ad4b193e171)

Related : [Cast Operator](Cast Operator), [Boolean](Boolean), [Comparison](Comparison), [Condition](Condition), [Magic Hash](Magic Hash), [Silent Behavior](Silent Behavior), [String Increment](String Increment), [Type Checking](Type Checking), [Type Inference](Type Inference), [Hash Comparisons](Hash Comparisons), [Type Coercion](Type Coercion), [Capture The Flag (CTF)](Capture The Flag (CTF)), [Footgun](Footgun), [Strict](Strict)
