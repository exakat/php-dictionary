# Interface Segregation Principle (ISP)
The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use. It is the ``I`` in the SOLID principles of object-oriented design, and it recommends splitting large, general-purpose interfaces into smaller, more specific ones, so that implementing classes only need to know about the methods that are actually relevant to them. Violating ISP typically shows up as ``fat`` interfaces, where implementers are forced to provide empty or throwing stubs for methods they don't need, which increases coupling and makes the codebase harder to maintain and extend.
## See Also

+ [SOLID Design Principles Explained: Interface Segregation with Code Examples](https://stackify.com/interface-segregation-principle/)
+ [How To Use Interface Segregation Principle in PHP/Laravel](https://mohasin-dev.medium.com/how-to-use-interface-segregation-principle-in-php-laravel-e5442d847da3)

Related : [SOLID](SOLID)
