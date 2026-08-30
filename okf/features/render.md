---
type: "concept"
title: "Render"
description: "To render, or rendering, is the action of taking a template and its related data to produce a target format."
resource: "https://en.wikipedia.org/wiki/Rendering_(computer_graphics)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Render

To render, or rendering, is the action of taking a template and its related data to produce a target format.

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, JavaScript, PDF, YAML, etc.

Rendering is related to templates, formats and optimisation.

```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Rendering_(computer_graphics)](https://en.wikipedia.org/wiki/Rendering_(computer_graphics))

## See Also
- [Model-view-controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

## Related
- [View](/features/view.md)
- [Template](/features/template.md)
- [Renderer](/features/renderer.md)
- [RecursiveTreeIterator](/features/recursivetreeiterator.md)

## Details
- Packagist: [friendsofcake/cakepdf](https://packagist.org/packages/friendsofcake/cakepdf)

