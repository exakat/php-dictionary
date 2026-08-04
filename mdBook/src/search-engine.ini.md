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

## See Also

+ [Meilisearch PHP SDK](https://github.com/meilisearch/meilisearch-php)
+ [Typesense PHP client](https://github.com/typesense/typesense-php)

Related : [Database](Database), [Index For SQL](Index For SQL), [Cache](Cache), [REST API](REST API), [Application Programming Interface (API)](Application Programming Interface (API)), [Storage Systems](Storage Systems), [robots\.txt](robots\.txt)
