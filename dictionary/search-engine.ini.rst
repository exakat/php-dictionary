.. _search-engine:
.. _full-text-search:
.. _search-index:
.. meta::
	:description:
		Search Engine: A search engine is a system that indexes and retrieves data based on queries.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Search Engine
	:twitter:description: Search Engine: A search engine is a system that indexes and retrieves data based on queries
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Search Engine
	:og:type: article
	:og:description: A search engine is a system that indexes and retrieves data based on queries
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/search-engine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Search Engine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A search engine is a system that indexes and retrieves data based on queries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Search Engine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Search Engine
-------------

A search engine is a system that indexes and retrieves data based on queries. In applications, a search engine typically refers to a dedicated search service or library that provides full-text search capabilities beyond what a relational database can offer natively.

Popular search engines used with PHP projects include Elasticsearch, OpenSearch, Meilisearch, Typesense, and Apache Solr. They offer features such as full-text indexing, relevance ranking, faceted search, autocomplete, and typo tolerance.

Search engines usually operate as external services communicating via HTTP APIs. PHP libraries are used as clients to index documents and execute queries against the engine.

.. code-block:: php
   
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


`Documentation <https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html>`__

See also `Elasticsearch PHP client <https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html>`_, `Meilisearch PHP SDK <https://github.com/meilisearch/meilisearch-php>`_ and `Typesense PHP client <https://github.com/typesense/typesense-php>`_.

Related : :ref:`Database <database>`, :ref:`Index For SQL <index-sql>`, :ref:`Cache <cache>`, :ref:`REST API <rest-api>`, :ref:`Application Programming Interface (API) <api>`, :ref:`Storage Systems <storage-system>`, :ref:`robots\.txt <robots.txt>`

Related packages : `elasticsearch/elasticsearch <https://packagist.org/packages/elasticsearch/elasticsearch>`_, `meilisearch/meilisearch-php <https://packagist.org/packages/meilisearch/meilisearch-php>`_, `typesense/typesense-php <https://packagist.org/packages/typesense/typesense-php>`_
