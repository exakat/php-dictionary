# Render
To render, or renderingm is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, javascript, PDF, YAML, etc.. 

Rendering is related to templates, formats and optimisation.
```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

Related : [View](View), [Template](Template), [Renderer](Renderer), [RecursiveTreeIterator](RecursiveTreeIterator)
