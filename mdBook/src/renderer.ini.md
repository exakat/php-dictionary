# Renderer
A renderer is an piece of code that applies the rules to produce a target format. For example, rendering an HTML page, javascript, PDF, YAML, etc..
```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

Related : [Render](Render), [Model - View - Controller (MVC)](Model - View - Controller (MVC))
