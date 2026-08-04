# Character
A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc. 

Characters may be represented as a byte, on 8 bits, but also on longer sequences, with UTF-8 or UTF-16. By default, PHP uses 8 bits, and there are several extensions to manipulate the encodings.

There is no dedicated type for characters: a string of one element is used for that purpose. There are some special constraints related to manipulating characters inside a string: it is possible to access individual character in a string, with the array syntax, both to read or modify them.
```php
<?php

    $string = 'abc';
    
    echo $string[1]; // display b
    
    var_dump($string[1]);
    //string(1) b

?>
```

Related : [Encoding](Encoding), [UTF-8](UTF-8), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII)), [Byte](Byte), [Text Encoding](Text Encoding), [Null Byte](Null Byte)
