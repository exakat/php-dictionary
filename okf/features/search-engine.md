---
type: "PHP Feature"
title: "Search Engine"
description: "A search engine is a system that indexes and retrieves data based on queries."
resource: "https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html"
tags: ["architecture", "storage"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Search Engine

A search engine is a system that indexes and retrieves data based on queries. In applications, a search engine typically refers to a dedicated search service or library that provides full-text search capabilities beyond what a relational database can offer natively.

Popular search engines used with PHP projects include Elasticsearch, OpenSearch, Meilisearch, Typesense, and Apache Solr. They offer features such as full-text indexing, relevance ranking, faceted search, autocomplete, and typo tolerance.

Search engines usually operate as external services communicating via HTTP APIs. PHP libraries are used as clients to index documents and execute queries against the engine.

```php
<?php

    // Indexing a document with Elasticsearch PHP client
    use Elastic\Elasticsearch\ClientBuilder;
    
    $client = ClientBuilder::create()
        ->setHosts(['localhost:9200'])
        ->build();
    
    $client->index([
        'index' => 'products',
        'id'    => 42,
        'body'  => [
            'title'       => 'Widget Pro',
            'description' => 'A high-quality widget for professionals.',
            'price'       => 29.99,
        ],
    ]);
    
    // Searching documents
    $response = $client->search([
        'index' => 'products',
        'body'  => [
            'query' => [
                'match' => ['description' => 'widget'],
            ],
        ],
    ]);
    
    foreach ($response['hits']['hits'] as $hit) {
        echo $hit['_source']['title'] . PHP_EOL;
    }

?>
```

## Documentation
- [https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html](https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html)

## See Also
- [Meilisearch PHP SDK](https://github.com/meilisearch/meilisearch-php)
- [Typesense PHP client](https://github.com/typesense/typesense-php)

## Related
- [Database](/features/database.md)
- [Index For SQL](/features/index-sql.md)
- [Cache](/features/cache.md)
- [REST API](/features/rest-api.md)
- [Application Programming Interface (API)](/features/api.md)
- [Storage Systems](/features/storage-system.md)
- [robots.txt](/features/robots.txt.md)

## Details
- Packagist: [elasticsearch/elasticsearch](https://packagist.org/packages/elasticsearch/elasticsearch)
- Packagist: [meilisearch/meilisearch-php](https://packagist.org/packages/meilisearch/meilisearch-php)
- Packagist: [typesense/typesense-php](https://packagist.org/packages/typesense/typesense-php)

