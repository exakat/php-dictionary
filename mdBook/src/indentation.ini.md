# Indentation
Indentation is a convention governing the layout of blocks of code to convey program structure.

For example, the body of code in a function should be indented one unit to the right, vis-a-vis the function keyword. 

Indentation may be done with spaces: 2, 3, 4 or 5 spaces, or horizontal tabulations.

Indentation is part of the syntax of the heredoc strings.
```php
<?php

function headers() : never {
    // expected indentation
    headers('Location: https://www.exakat.io/');

// badly indented block
die();
}

?>
```

Related : [Heredocs](Heredocs), [Tabulation](Tabulation), [Space](Space)
