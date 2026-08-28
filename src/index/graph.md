# Graph
A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes. Graphs can be directed or undirected, weighted or unweighted.

Graphs are used to model many real-world problems: social networks, dependency trees, network topology, and code analysis tools such as call graphs and control flow graphs.

PHP has no built-in graph data structure, but several libraries provide graph implementations and algorithms.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph.html","name":"Graph","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:38 +0000","dateModified":"Wed, 05 Aug 2026 08:17:38 +0000","description":"A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph.html"]}],"keywords":["data structure","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call-graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graphql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tree.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/network.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/treemap.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Graph_(abstract_data_type)"},{"@type":"CreativeWork","name":"Structures_Graph Tutorial","url":"https:\/\/pear.php.net\/package\/Structures_Graph\/docs\/latest\/Structures_Graph\/tutorial_Structures_Graph.pkg.html"},{"@type":"CreativeWork","name":"GraphDS: An object oriented, lightweight implementation of the graph data-structure in PHP","url":"https:\/\/github.com\/algb12\/GraphDS"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"graph"}]}]}</script>
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

+ [Call Graph](call-graph.html)
+ [Control Flow Graph (CFG)](control-flow-graph.html)
+ [Graph Database](graph-database.html)
+ [GraphQL](graphql.html)
+ [Tree](tree.html)
+ [Network](network.html)
+ [Treemap](treemap.html)

## Related packages

+ [graphp/graph](https://packagist.org/packages/graphp/graph)
