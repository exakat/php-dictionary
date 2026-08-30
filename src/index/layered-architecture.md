# Layered Architecture
Layered architecture, also called multi-tier architecture, n-tier architecture, or three-tier architecture in its classic three-layer form, organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it. The classic four layers are: presentation, business logic, data access, and infrastructure.

The Presentation layer handles user interaction and HTTP concerns, with controllers, templates. The Business Logic layer contains domain rules and application workflows. The Data Access layer, such as repository or DAO, abstracts persistence. The Infrastructure layer wraps external systems, like email, queues, file storage.

Layered architecture is the implicit structure of most MVC frameworks: controllers belong to the presentation layer, services to the business logic layer, and repositories to the data access layer.

The main risk is layer bleeding: business logic leaking into controllers, aka fat controller, or SQL queries scattered through the business layer. The anemic domain model anti-pattern often accompanies layered architecture when domain logic is spread across service classes rather than entities.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/layered-architecture.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/layered-architecture.html","name":"Layered Architecture","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 14:48:39 +0000","dateModified":"Sun, 30 Aug 2026 14:48:39 +0000","description":"Layered architecture, also called multi-tier architecture, n-tier architecture, or three-tier architecture in its classic three-layer form, organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/layered-architecture.html"]}],"alternateName":["n-tier-architecture","three-tier-architecture","multi-tier-architecture"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexagonal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clean-architecture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mvc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separation-of-concerns.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/business-logic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anemic-domain-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Multitier_architecture"},{"@type":"CreativeWork","name":"The Clean Architecture","url":"https:\/\/blog.cleancoder.com\/uncle-bob\/2012\/08\/13\/the-clean-architecture.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"layered-architecture"}]}]}</script>
```php
<?php

    // Presentation layer, controller
    class OrderController {
        public function __construct(private OrderService $service) {}
    
        public function create(Request $request): Response {
            $order = $this->service->placeOrder($request->validated());
            return new JsonResponse($order->toArray(), 201);
        }
    }
    
    // Business logic layer, service
    class OrderService {
        public function __construct(private OrderRepository $orders) {}
    
        public function placeOrder(array $data): Order {
            $order = Order::new($data);
            $order->validate();
            return $this->orders->save($order);
        }
    }

    // Data access layer, repository
    class OrderRepository {
        public function save(Order $order): Order {
            $this->pdo->prepare('INSERT INTO orders ...');
            return $order;
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Multitier_architecture)**
## See Also

+ [The Clean Architecture](https://blog.cleancoder.com/uncle-bob/2012/08/13/the-clean-architecture.html)

## Related

+ [Hexagonal Architecture](hexagonal.html)
+ [Clean Architecture](clean-architecture.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [Separation Of Concerns](separation-of-concerns.html)
+ [Business Logic](business-logic.html)
+ [Anemic Domain Model](anemic-domain-model.html)
+ [Fat Controller](fat-controller.html)
