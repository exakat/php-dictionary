# Depth-First Search
Depth-first search, or DFS, is an algorithm for traversing or searching a tree or graph that follows one branch as far down as it can go before backtracking and trying the next unexplored branch. Starting from a root node, it moves to an unvisited neighbor, then to one of that neighbor's unvisited neighbors, and so on, only stepping back once it hits a node with no unvisited neighbor left.

DFS is naturally implemented with recursion, since each recursive call handles one node and calls itself on the next unvisited neighbor, or explicitly with a stack, pushing neighbors and popping the most recently pushed one first. This last-in-first-out order is what produces the deep, branch-by-branch traversal, in contrast with breadth-first search, which uses a queue and explores level by level.

DFS is used for tasks where the full extent of a branch matters more than distance from the start, such as detecting cycles in a graph, finding connected components, topological sorting of a dependency graph, or exhaustively walking a directory tree or an abstract syntax tree. Its memory usage is generally lower than BFS on wide graphs, since it only needs to remember the current path rather than an entire frontier of nodes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth-first-search.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth-first-search.html","name":"Depth-First Search","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 09:09:57 +0000","dateModified":"Mon, 07 Sep 2026 09:09:57 +0000","description":"Depth-first search, or DFS, is an algorithm for traversing or searching a tree or graph that follows one branch as far down as it can go before backtracking and trying the next unexplored branch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth-first-search.html"]}],"alternateName":["dfs","deep first search"],"keywords":["algorithm","graph"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/breadth-first-search.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tree.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithm.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Depth-first_search"},{"@type":"CreativeWork","name":"SplStack","url":"https:\/\/www.php.net\/manual\/en\/class.splstack.php"},{"@type":"CreativeWork","name":"Depth-First Search (DFS) - GeeksforGeeks","url":"https:\/\/www.geeksforgeeks.org\/dsa\/depth-first-search-or-dfs-for-a-graph\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.34","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"depth-first-search"}]}]}</script>
```php
<?php

    function dfs(array $graph, string $node, array &$visited = []): array {
        $visited[$node] = true;
        $order = [$node];

        foreach ($graph[$node] ?? [] as $neighbor) {
            if (!isset($visited[$neighbor])) {
                $order = [...$order, ...dfs($graph, $neighbor, $visited)];
            }
        }

        return $order;
    }

    $graph = [
        'A' => ['B', 'C'],
        'B' => ['A', 'D'],
        'C' => ['A', 'D'],
        'D' => ['B', 'C'],
    ];

    print_r(dfs($graph, 'A')); // ['A', 'B', 'D', 'C']

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Depth-first_search)**
## See Also

+ [SplStack](https://www.php.net/manual/en/class.splstack.php)
+ [Depth-First Search (DFS) - GeeksforGeeks](https://www.geeksforgeeks.org/dsa/depth-first-search-or-dfs-for-a-graph/)

## Related

+ [Breadth-First Search](breadth-first-search.html)
+ [Graph](graph.html)
+ [Tree](tree.html)
+ [Traversal](traversal.html)
+ [Stack](stack.html)
+ [Recursion](recursion.html)
+ [Algorithm](algorithm.html)

## Related packages

+ [graphp/algorithms](https://packagist.org/packages/graphp/algorithms)
