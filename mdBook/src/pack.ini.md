# pack
``pack()`` is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format.
```php
<?php
  
  print pack("nvc*", 0x1234, 0x5678, 65, 66);
  // displays 4xVAB

?>
```

Related : [Unpacking](Unpacking)
