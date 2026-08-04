# Rate Limiting
Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window. It protects services from abuse, denial-of-service attacks, and resource exhaustion.

Common strategies include fixed window, sliding window, token bucket, and leaky bucket algorithms. In applications, rate limiting is often implemented at the web server, reverse proxy, or application layer, using shared storage such as Redis or Memcached to track request counts across processes.

Rate limit apply both to external client submitting requests to PHP applications, and to PHP as a client, submitting requests to a remote server.
## See Also

+ [How to Implement Rate Limiting in PHP to Prevent Abuse](https://dev.to/patoliyainfotech/how-to-implement-rate-limiting-in-php-to-prevent-abuse-4id2)

Related : [Quality of Service (QoS)](Quality of Service (QoS)), [Distributed Denial Of Service (DDOS)](Distributed Denial Of Service (DDOS)), [Availability](Availability), [Performance](Performance), [Middleware Pattern](Middleware Pattern), [Cache](Cache), [Security](Security)
