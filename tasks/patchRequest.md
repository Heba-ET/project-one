PUT is a method of modifying resource where the client sends data that updates the entire resource .                                     	
In a PUT request, the enclosed entity is considered to be a modified version of the resource stored on the origin server, and the client is requesting that the stored version be replaced
HTTP PUT is said to be idempotent, So if you send retry a request multiple times, that should be equivalent to a single request modification
It has High Bandwidth

PATCH is a method of modifying resources where the client sends partial data that is to be updated without modifying the entire data.
With PATCH, however, the enclosed entity contains a set of instructions describing how a resource currently residing on the origin server should be modified to produce a new version. HTTP PATCH is considered idempotent. When a PATCH request is sent multiple times, it will have the same effect as sending it once
Since Only data that need to be modified if send in the request body as a payload , It has Low Bandwidth