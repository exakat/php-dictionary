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

## See Also

+ [toon format](https://github.com/toon-format/toon)
+ [php toon](https://www.nihardaily.com/133-how-to-use-toon-in-php-reduce-llm-token-consumption-by-50)

Related : [Markdown](Markdown), [Text](Text)
