# Breadth-First Search
Breadth-first search, or BFS, is an algorithm for traversing or searching a tree or graph that explores all neighbors of a node before moving on to the next level of neighbors. Starting from a root node, it visits every node at distance 1, then every node at distance 2, and so on, expanding outward one full layer at a time.

BFS is typically implemented with a queue: the starting node is pushed in, and then, repeatedly, a node is popped from the front, its unvisited neighbors are marked visited and pushed to the back, until the queue is empty. This first-in-first-out order is what produces the level-by-level traversal, in contrast with depth-first search, which uses a stack, or recursion, and dives down one branch before backtracking.

Because it explores the graph one layer at a time, BFS is the natural choice for finding the shortest path between two nodes in an unweighted graph, since the first time the target node is reached is guaranteed to be via the fewest possible edges. It is used for tasks such as finding the shortest chain of relations in a social graph, crawling a website level by level, or checking whether a graph is connected.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/breadth-first-search.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/breadth-first-search.html","name":"Breadth-First Search","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 09:09:48 +0000","dateModified":"Mon, 07 Sep 2026 09:09:48 +0000","description":"Breadth-first search, or BFS, is an algorithm for traversing or searching a tree or graph that explores all neighbors of a node before moving on to the next level of neighbors","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/breadth-first-search.html"]}],"alternateName":["bfs"],"keywords":["algorithm","graph"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth-first-search.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tree.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithm.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Breadth-first_search"},{"@type":"CreativeWork","name":"SplQueue","url":"https:\/\/www.php.net\/manual\/en\/class.splqueue.php"},{"@type":"CreativeWork","name":"Breadth-First Search (BFS) - GeeksforGeeks","url":"https:\/\/www.geeksforgeeks.org\/dsa\/breadth-first-search-or-bfs-for-a-graph\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"breadth-first-search"}]}]}</script>
```php
<?php

    function bfs(array $graph, string $start): array {
        $visited = [$start => true];
        $order = [];
        $queue = new SplQueue();
        $queue->enqueue($start);

        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            $order[] = $node;

            foreach ($graph[$node] ?? [] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $visited[$neighbor] = true;
                    $queue->enqueue($neighbor);
                }
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

    print_r(bfs($graph, 'A')); // ['A', 'B', 'C', 'D']

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Breadth-first_search)**
## See Also

+ [SplQueue](https://www.php.net/manual/en/class.splqueue.php)
+ [Breadth-First Search (BFS) - GeeksforGeeks](https://www.geeksforgeeks.org/dsa/breadth-first-search-or-bfs-for-a-graph/)

## Related

+ [Depth-First Search](depth-first-search.html)
+ [Graph](graph.html)
+ [Tree](tree.html)
+ [Traversal](traversal.html)
+ [Queue](queue.html)
+ [Algorithm](algorithm.html)

## Related packages

+ [graphp/algorithms](https://packagist.org/packages/graphp/algorithms)
