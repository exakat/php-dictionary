---
type: "concept"
title: "Renderer"
description: "A renderer is a piece of code that applies the rules to produce a target format."
resource: "https://en.wikipedia.org/wiki/Template_processor"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Renderer

A renderer is a piece of code that applies the rules to produce a target format. For example, rendering an HTML page, javascript, PDF, YAML, etc..

```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Template_processor](https://en.wikipedia.org/wiki/Template_processor)

## See Also
- [Model-view-controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)
- [Twig](https://twig.symfony.com/)

## Related
- [Render](/features/render.md)
- [Model - View - Controller (MVC)](/features/mvc.md)

