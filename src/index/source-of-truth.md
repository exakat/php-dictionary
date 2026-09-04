# Source Of Truth
A source of truth is the one place designated to hold the authoritative version of a piece of data. Every other copy of that data, whether cached, denormalized, replicated, or displayed, is derived from it and must defer to it whenever a conflict appears.

The idea shows up at every scale of a PHP application. A configuration value should live in one file or environment variable, not be duplicated across several classes that might drift apart. A database column is the source of truth for an entity's state, while a Redis cache or a computed property is only a disposable projection of it, and must be invalidated or recomputed whenever the underlying row changes. In event-sourced systems, the ``event-store`` itself is the source of truth: the current state is never trusted directly, but rebuilt on demand by replaying events.

Without a clear source of truth, systems accumulate silent inconsistencies: a cache that outlives its data, two services that each believe their own copy is authoritative, or a generated file that is manually edited and diverges from its generator. Establishing one explicitly is what makes reconciliation and debugging possible, since there is always a reference to compare against.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source-of-truth.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source-of-truth.html","name":"Source Of Truth","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 04:48:03 +0000","dateModified":"Mon, 24 Aug 2026 04:48:03 +0000","description":"A source of truth is the one place designated to hold the authoritative version of a piece of data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source-of-truth.html"]}],"alternateName":["single-source-of-truth","ssot"],"keywords":["concept","code architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-store.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporal-replay.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Single_source_of_truth"},{"@type":"CreativeWork","name":"How to establish a single source of truth (SSOT)","url":"https:\/\/www.thoughtspot.com\/data-trends\/best-practices\/single-source-of-truth"},{"@type":"CreativeWork","name":"What Is a Single Source of Truth and How to Build One for Seamless Data Management","url":"https:\/\/strapi.io\/blog\/what-is-single-source-of-truth"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"source-of-truth"}]}]}</script>
```php
<?php

    class UserRepository {
        // The database row is the source of truth for the user's state.
        public function getEmail(int $userId): string {
            if ($cached = $this->cache->get("user:$userId:email")) {
                return $cached; // a disposable projection, not the truth itself
            }

            $email = $this->pdo
                ->query("SELECT email FROM users WHERE id = $userId")
                ->fetchColumn();

            $this->cache->set("user:$userId:email", $email, ttl: 300);

            return $email;
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Single_source_of_truth)**
## See Also

+ [How to establish a single source of truth (SSOT)](https://www.thoughtspot.com/data-trends/best-practices/single-source-of-truth)
+ [What Is a Single Source of Truth and How to Build One for Seamless Data Management](https://strapi.io/blog/what-is-single-source-of-truth)

## Related

+ [Event Store](event-store.html)
+ [Cache](cache.html)
+ [Idempotent](idempotent.html)
+ [Don't Repeat Yourself (DRY)](dry.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Temporal Replay](temporal-replay.html)
