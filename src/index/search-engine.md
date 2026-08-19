# Search Engine
A search engine is a system that indexes and retrieves data based on queries. In applications, a search engine typically refers to a dedicated search service or library that provides full-text search capabilities beyond what a relational database can offer natively.

Popular search engines used with PHP projects include Elasticsearch, OpenSearch, Meilisearch, Typesense, and Apache Solr. They offer features such as full-text indexing, relevance ranking, faceted search, autocomplete, and typo tolerance.

Search engines usually operate as external services communicating via HTTP APIs. PHP libraries are used as clients to index documents and execute queries against the engine.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/search-engine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/search-engine.html","name":"Search Engine","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:21:48 +0000","dateModified":"Fri, 10 Jul 2026 09:21:48 +0000","description":"A search engine is a system that indexes and retrieves data based on queries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Search Engine.html"]}],"alternateName":["full-text-search","search-index"],"keywords":["architecture","storage"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rest-api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/storage-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/robots.txt.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.elastic.co\/guide\/en\/elasticsearch\/client\/php-api\/current\/index.html"},{"@type":"CreativeWork","name":"Meilisearch PHP SDK","url":"https:\/\/github.com\/meilisearch\/meilisearch-php"},{"@type":"CreativeWork","name":"Typesense PHP client","url":"https:\/\/github.com\/typesense\/typesense-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"search-engine"}]}]}</script>
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

**[Documentation](https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html)**
## See Also

+ [Meilisearch PHP SDK](https://github.com/meilisearch/meilisearch-php)
+ [Typesense PHP client](https://github.com/typesense/typesense-php)

## Related

+ [Database](database.html)
+ [Index For SQL](index-sql.html)
+ [Cache](cache.html)
+ [REST API](rest-api.html)
+ [Application Programming Interface (API)](api.html)
+ [Storage Systems](storage-system.html)
+ [robots\\.txt](robots.txt.html)

## Related packages

+ [elasticsearch/elasticsearch](https://packagist.org/packages/elasticsearch/elasticsearch)
+ [meilisearch/meilisearch-php](https://packagist.org/packages/meilisearch/meilisearch-php)
+ [typesense/typesense-php](https://packagist.org/packages/typesense/typesense-php)
