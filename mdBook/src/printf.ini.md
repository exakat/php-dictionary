# printf()
``printf()`` is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.

``printf()`` displays the resulting string directly to STDOUT; ``sprintf()`` returns the string for further processing; ``vprintf()`` works as ``printf()``, but with an array of arguments; ``fprintf()`` writes the result directly in a stream, and vf``printf()`` is the same, with an array of argument.

The first argument of ``printf()`` is a format string. The string contains format specifier, which are detailled on the function's documentation page. 

``printf()`` should have one argument for each of the placeholders, plus the formatting string. The function reports when arguments are missing, and ignore silently any superfluous argument.
```php
<?php

    $variable = 'elephpant';
    printf('The %s is happy.', $variable);

?>
```

Related : [Echo](Echo), [Print](Print), [Format](Format), [sscanf()](sscanf()), [String](String)
