---
type: "concept"
title: "Graph"
description: "A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes."
resource: "https://en.wikipedia.org/wiki/Graph_(abstract_data_type)"
tags: ["data structure", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Graph_(abstract_data_type)](https://en.wikipedia.org/wiki/Graph_(abstract_data_type))

## See Also
- [Structures_Graph Tutorial](https://pear.php.net/package/Structures_Graph/docs/latest/Structures_Graph/tutorial_Structures_Graph.pkg.html)
- [GraphDS: An object oriented, lightweight implementation of the graph data-structure in PHP](https://github.com/algb12/GraphDS)

## Related
- [Call Graph](/features/call-graph.md)
- [Control Flow Graph (CFG)](/features/control-flow-graph.md)
- [Graph Database](/features/graph-database.md)
- [GraphQL](/features/graphql.md)
- [Tree](/features/tree.md)
- [Network](/features/network.md)
- [Treemap](/features/treemap.md)

## Details
- Packagist: [graphp/graph](https://packagist.org/packages/graphp/graph)

