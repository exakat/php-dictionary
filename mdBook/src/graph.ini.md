# Graph
A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes. Graphs can be directed or undirected, weighted or unweighted.

Graphs are used to model many real-world problems: social networks, dependency trees, network topology, and code analysis tools such as call graphs and control flow graphs.

PHP has no built-in graph data structure, but several libraries provide graph implementations and algorithms.
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

Related : [Call Graph](Call Graph), [Control Flow Graph (CFG)](Control Flow Graph (CFG)), [Graph Database](Graph Database), [GraphQL](GraphQL), [Tree](Tree), [Network](Network), [Treemap](Treemap)
