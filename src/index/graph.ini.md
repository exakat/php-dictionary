# Graph
A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes. Graphs can be directed or undirected, weighted or unweighted.

Graphs are used to model many real-world problems: social networks, dependency trees, network topology, and code analysis tools such as call graphs and control flow graphs.

PHP has no built-in graph data structure, but several libraries provide graph implementations and algorithms.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/graph.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/graph.ini.html","name":"Graph","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:38 +0000","dateModified":"Wed, 05 Aug 2026 08:17:38 +0000","description":"A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Graph.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Simple adjacency list representation
$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'D'],
    'C' => ['A'],
    'D' => ['B'],
];

// Traverse neighbors of A
foreach ($graph['A'] as $neighbor) {
    echo $neighbor, PHP_EOL; // B, C
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Graph_(abstract_data_type))**
## See Also

+ [Structures_Graph Tutorial](https://pear.php.net/package/Structures_Graph/docs/latest/Structures_Graph/tutorial_Structures_Graph.pkg.html)
+ [GraphDS: An object oriented, lightweight implementation of the graph data-structure in PHP](https://github.com/algb12/GraphDS)

## Related

+ [Call Graph](call-graph.ini.html)
+ [Control Flow Graph (CFG)](control-flow-graph.ini.html)
+ [Graph Database](graph-database.ini.html)
+ [GraphQL](graphql.ini.html)
+ [Tree](tree.ini.html)
+ [Network](network.ini.html)
+ [Treemap](treemap.ini.html)

## Related packages

+ [graphp/graph](https://packagist.org/packages/graphp/graph)
