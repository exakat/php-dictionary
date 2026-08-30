---
type: "folklore"
title: "Tree"
description: "A tree is a data structure which represents data as a set of connected nodes, where each node has only one parent."
resource: "https://en.wikipedia.org/wiki/Tree_(data_structure)"
tags: ["data structure", "folklore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Tree

A tree is a data structure which represents data as a set of connected nodes, where each node has only one parent.

A tree is made of nodes linked by edges, starting from a single node called the root, which has no parent. Every other node has exactly one parent and zero or more children; nodes without children are called leaves. Because each node has a unique parent, there is exactly one path between the root and any other node, and no cycles can exist, which distinguishes a tree from a more general graph. Common measurements on a tree include its depth, the distance from the root to a given node, and its height, the length of the longest path from the root to a leaf. Special cases include the binary tree, where every node has at most two children, and the binary search tree, which additionally keeps its nodes ordered to allow fast lookup, insertion, and deletion.

PHP has no native tree data structure or class: unlike ``SplStack`` or ``SplQueue``, the SPL extension does not ship a dedicated tree implementation. PHP developers typically build trees out of nested arrays, where each entry holds a 'children' key pointing to further arrays, or out of plain objects with a ``$parent`` property and a ``$children`` array, linked together by reference. Recursive functions, or a ``RecursiveIteratorIterator`` combined with a ``RecursiveArrayIterator``, are then used to traverse the resulting structure.

Trees appear throughout PHP itself and its ecosystem, even without a dedicated class: the Document Object Model exposed by the DOM extension is a tree of nodes, an Abstract Syntax Tree is what a PHP parser such as ``nikic/PHP-Parser`` builds from source code, and hierarchical data such as file systems, category trees, or comment threads are all naturally modeled as trees, often stored relationally using the nested set model or an adjacency list.

## Documentation
- [https://en.wikipedia.org/wiki/Tree_(data_structure)](https://en.wikipedia.org/wiki/Tree_(data_structure))

## See Also
- [Trees and Tree Traversal in PHP](https://doeken.org/blog/tree-traversal-in-php)

## Related
- [Array, []](/features/array.md)
- [List](/features/list.md)
- [Data Structure](/features/datastructure.md)
- [Graph](/features/graph.md)

## Details
- Packagist: [nicmart/tree](https://packagist.org/packages/nicmart/tree)

