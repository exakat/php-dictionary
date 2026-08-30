---
type: "acronym"
title: "Token Oriented Object Notation (TOON)"
description: "``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow."
resource: "https://toonformat.dev/"
tags: ["acronym", "format", "ai"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Token Oriented Object Notation (TOON)

``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow. It's intended for LLM input as a drop-in, lossless representation of JSON data.

```php
<?php

    // example from https://github.com/toon-format/toon
    $toon = <<<TOON
context:
  task: Our favorite hikes together
  location: Boulder
  season: spring_2025
friends[3]: ana,luis,sam
hikes[3]{id,name,distanceKm,elevationGain,companion,wasSunny}:
  1,Blue Lake Trail,7.5,320,ana,true
  2,Ridge Overlook,9.2,540,luis,false
  3,Wildflower Loop,5.1,180,sam,true    
TOON;

?>
```

## Documentation
- [https://toonformat.dev/](https://toonformat.dev/)

## See Also
- [toon format](https://github.com/toon-format/toon)
- [How to Use TOON Format in PHP - Complete Tutorial](https://jsontotable.org/blog/toon/how-to-use-toon-in-php)

## Related
- [Markdown](/features/markdown.md)
- [Text](/features/text.md)

## Details
- Packagist: [sbsaga/toon](https://packagist.org/packages/sbsaga/toon)
- Packagist: [helgesverre/toon](https://packagist.org/packages/helgesverre/toon)

