---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Posts

Class PostsController
<!-- START_b59514618939469a1367e18797eec2b3 -->
## Deletes a certain post.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/posts/{post}`


<!-- END_b59514618939469a1367e18797eec2b3 -->

<!-- START_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->
## Creates a new post.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/posts" \
-H "Accept: application/json" \
    -d "title"="et" \
    -d "body"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts",
    "method": "POST",
    "data": {
        "title": "et",
        "body": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/posts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    body | string |  required  | 

<!-- END_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->

<!-- START_87be16b21ad5a10b0cebd40a3cfdddbc -->
## Updates a certain post.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/posts/{post}`


<!-- END_87be16b21ad5a10b0cebd40a3cfdddbc -->

<!-- START_d4ac54c52158ea2dc79730cfac8d8a3f -->
## Retrieve all the posts present in the database.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "title": "Omnis nobis repellendus numquam rerum.",
            "body": "Consequatur veritatis delectus eius incidunt cupiditate pariatur aut. Fugiat mollitia dolores consectetur magni mollitia. Omnis aut autem ea deleniti aspernatur."
        },
        {
            "id": 4,
            "title": "Ab consequuntur ut iure enim id.",
            "body": "Quis ipsum tempora ipsum ullam quo nam aut. Voluptatum et rerum recusandae error libero tempore nemo et. Corporis dolorem quos iste qui."
        },
        {
            "id": 6,
            "title": "Quos tempora ullam et ipsum voluptatem.",
            "body": "Nesciunt id unde aut ex. Qui blanditiis vitae est amet illo sit est voluptatem. Quae nihil quibusdam repellat dolores sit."
        },
        {
            "id": 7,
            "title": "Quam quibusdam autem vitae occaecati.",
            "body": "In quis doloribus voluptas facere quia. Doloribus illum dolore voluptas numquam voluptates. Nostrum aut dignissimos non sed molestias sequi libero. Quas iusto ipsum quia molestiae dolores iusto sint."
        },
        {
            "id": 8,
            "title": "Cupiditate dolorem ipsum enim dolores dolores.",
            "body": "Ea vero impedit et sed. Rerum fugit dolorem voluptatum nulla dolorem deserunt."
        },
        {
            "id": 9,
            "title": "Error corporis sapiente et praesentium.",
            "body": "Reiciendis rem corporis molestias. Voluptatem id neque pariatur aut sunt non. Maiores accusamus animi nemo praesentium quidem dolor eum non. Saepe ut et voluptatem."
        },
        {
            "id": 10,
            "title": "Et quisquam nulla natus soluta quidem nisi.",
            "body": "Rem consequatur unde quo. Occaecati et qui impedit mollitia fuga. Rerum quis ut quia id accusamus hic qui hic. Quas laudantium hic quos."
        },
        {
            "id": 11,
            "title": "Et error harum est et quia fugiat.",
            "body": "Possimus qui corporis animi et. Asperiores est ipsa nihil tempora velit. Ut adipisci sunt occaecati distinctio tempora aut. Dolorem magni possimus dolores et beatae qui libero qui."
        },
        {
            "id": 12,
            "title": "Accusantium sunt iste ut dolores quod nisi optio sit.",
            "body": "Dolorem neque velit similique. Ipsa aut et in rerum labore maxime sint. Dolores sint et magnam. Reiciendis accusantium quisquam animi sunt vitae."
        },
        {
            "id": 13,
            "title": "Est possimus non qui quis enim animi.",
            "body": "Soluta accusantium accusamus aliquam esse et. Odio aut voluptatem harum et expedita saepe. Laboriosam minima culpa ut deserunt qui minus necessitatibus. Cupiditate esse labore expedita et ullam sit."
        },
        {
            "id": 14,
            "title": "Deleniti et numquam reiciendis tempore.",
            "body": "Voluptatibus consequatur optio alias velit alias natus. In consequatur illo eveniet quis odit qui. Et incidunt et ratione labore excepturi reiciendis."
        },
        {
            "id": 15,
            "title": "Et et facere et voluptatum culpa in magnam.",
            "body": "Magnam aliquam rerum aut dolorem cumque quia eum. Qui eveniet voluptatem et aut. Perferendis repellat corporis ut aperiam."
        },
        {
            "id": 16,
            "title": "Qui ipsa sequi ut est et.",
            "body": "Ut autem sed maiores. Incidunt necessitatibus qui molestiae vel. Velit autem tenetur eum est repudiandae."
        },
        {
            "id": 17,
            "title": "Qui dolorem praesentium cum quo labore nemo quo consequatur.",
            "body": "Voluptatem quia tempora itaque et. Illum repudiandae nisi sed eligendi a quo quod. Sit cum sunt necessitatibus et autem velit. Maiores qui dolorem officia incidunt quasi vitae explicabo architecto."
        },
        {
            "id": 18,
            "title": "Aut nihil qui quia consequuntur.",
            "body": "Quos dolores odit quos reprehenderit suscipit debitis qui. Autem rem soluta minus autem minima. Sed omnis voluptate aut est nesciunt quis velit."
        },
        {
            "id": 19,
            "title": "Velit consequuntur dolor earum reiciendis.",
            "body": "Dolores molestiae deserunt eum. Qui eligendi aperiam voluptatem nesciunt id ullam voluptas. Sequi labore autem aut id ipsa et."
        },
        {
            "id": 20,
            "title": "Ducimus iusto nostrum ab quod quos earum sint.",
            "body": "Quae in eum autem et. Distinctio eius illum eos ipsum dolorem. Nihil quis molestias est reiciendis ut."
        },
        {
            "id": 21,
            "title": "Rerum in accusantium aut quisquam.",
            "body": "Rerum quasi esse omnis eos vitae. Ipsa ut qui earum culpa. Nihil repudiandae tempore ut velit dolores ipsa eum. Id assumenda natus eum eaque sed."
        },
        {
            "id": 22,
            "title": "Ad atque nihil dolores excepturi id.",
            "body": "Molestiae ut doloribus voluptatum quos doloribus occaecati quibusdam. Voluptate eum consequatur omnis similique dolor molestiae doloribus. Repellendus eaque sit eius dolor natus quae et velit."
        },
        {
            "id": 23,
            "title": "Voluptas nisi qui nihil porro.",
            "body": "Dolor ipsum ipsum dolores qui et. Atque sapiente dolorum soluta molestiae odio omnis veniam. Nostrum vitae sequi aut enim commodi earum."
        },
        {
            "id": 24,
            "title": "Occaecati et voluptates quis tenetur quia aut.",
            "body": "Quas et odit voluptatem. Soluta voluptatibus qui necessitatibus minima quasi laborum ratione. Corrupti neque quaerat quis perspiciatis eligendi architecto quam dolores."
        },
        {
            "id": 25,
            "title": "Asperiores et tempore voluptatum ut.",
            "body": "Sit molestiae et iusto eos. Sit reiciendis omnis occaecati quo. Dignissimos quidem ab occaecati nam rerum ex commodi. Eos asperiores beatae ut."
        },
        {
            "id": 26,
            "title": "Est consequatur est explicabo sed aliquid molestiae assumenda.",
            "body": "Repellat ut esse occaecati quod est et sint. Voluptatibus et molestias veritatis iusto quo iusto voluptatum. Velit corrupti quibusdam est quis. Sed id tempora sed. Aperiam et magni ea molestiae aut."
        },
        {
            "id": 27,
            "title": "Odit facere dignissimos accusantium et modi quisquam.",
            "body": "Sapiente reprehenderit necessitatibus pariatur voluptas exercitationem. Sed voluptatem deserunt maxime ut pariatur perferendis deserunt animi. Rerum ipsam et nulla consectetur molestiae."
        },
        {
            "id": 28,
            "title": "Doloremque culpa ut cumque vel alias excepturi.",
            "body": "Laborum omnis quo dolorem voluptatem repellendus soluta. Reprehenderit laboriosam earum facilis incidunt at. Officiis quos aut reprehenderit quis."
        },
        {
            "id": 29,
            "title": "Dignissimos facilis laborum dolores odit ut.",
            "body": "Aut qui qui non molestiae. Dignissimos nulla deserunt eaque qui et quae aut. Ex quod cupiditate reprehenderit hic quasi non nulla tempora. Maxime magni in ipsum."
        },
        {
            "id": 30,
            "title": "Veritatis consequuntur ut voluptatum temporibus assumenda dolores.",
            "body": "Minima harum dolor et inventore. Officiis sapiente optio fugiat facilis omnis possimus. Excepturi iste officiis nam cupiditate saepe."
        },
        {
            "id": 31,
            "title": "Deserunt ipsam nemo laboriosam impedit voluptatibus aut quisquam.",
            "body": "Cumque tenetur deserunt sed in illum accusamus. Ipsam quos alias autem laborum optio tempora. Commodi ut repellendus rerum aspernatur accusamus repudiandae voluptates."
        },
        {
            "id": 32,
            "title": "Repellendus quibusdam omnis enim laborum suscipit minus ut.",
            "body": "At laudantium et doloremque laboriosam. Sit delectus incidunt ratione. Cumque asperiores vel fuga. Omnis repellendus nihil voluptates eligendi sequi."
        },
        {
            "id": 33,
            "title": "A tenetur ea fugiat.",
            "body": "Ut optio ut sint qui repudiandae. Qui itaque dolor assumenda voluptatem."
        },
        {
            "id": 34,
            "title": "Quasi reiciendis sunt veniam eum commodi qui.",
            "body": "Ea velit odio reprehenderit et unde atque ipsam. Et impedit voluptatem autem. Optio ducimus voluptatem non voluptatem. Corrupti labore quod excepturi est explicabo voluptatibus dolorum."
        },
        {
            "id": 35,
            "title": "Et blanditiis velit natus et.",
            "body": "Quia in aut quaerat error nihil. Reprehenderit fugit vel voluptas unde repellat labore rem. Sapiente et voluptas asperiores omnis deserunt. Debitis unde molestiae tempora eos fugit fuga deleniti."
        },
        {
            "id": 36,
            "title": "Eos est blanditiis praesentium rerum.",
            "body": "Maxime facere incidunt id doloremque. Voluptatem perferendis consequuntur quibusdam voluptatibus. A architecto vel sunt sequi dolorem dolore voluptatem dolorem."
        },
        {
            "id": 37,
            "title": "Qui dolorem nam cum modi exercitationem ducimus voluptatum.",
            "body": "Explicabo tempora consequuntur magnam aut temporibus eum. Et dicta excepturi non illum officia."
        },
        {
            "id": 38,
            "title": "Fuga laudantium reiciendis quos distinctio.",
            "body": "Et sed saepe quam voluptas. Ea tempora dolores praesentium iste ipsam soluta. Ad voluptatum et aperiam maxime corporis ad suscipit sed. Amet quam quisquam quia et et voluptatibus ut."
        },
        {
            "id": 39,
            "title": "Odit deleniti suscipit ut et illo.",
            "body": "Assumenda quia adipisci recusandae et. Error dolorem qui qui esse aut quam sit. Error quia qui voluptas vel. Aut voluptas pariatur id vero beatae voluptatum cupiditate commodi."
        },
        {
            "id": 40,
            "title": "Doloribus qui nam magni quae velit et.",
            "body": "Expedita dolores quis quia qui aliquid nemo. Atque rerum a quo sint. Rerum reiciendis et in. Culpa sunt ullam sapiente aliquam."
        },
        {
            "id": 41,
            "title": "Voluptatem ipsa necessitatibus quam ut.",
            "body": "Non minima quia ut earum ut sed saepe. Rem quod ex doloribus eum fugiat asperiores laboriosam. Et ducimus dignissimos aut veniam. Assumenda atque repellendus occaecati inventore eum."
        },
        {
            "id": 42,
            "title": "Facere excepturi exercitationem minima esse nisi perspiciatis.",
            "body": "Consectetur provident iste ut iste aut. Est ea laborum ut provident dolor laudantium. At vero earum est magnam enim nisi eaque illo. Accusantium dolorum ea rerum dolorem ut eveniet."
        },
        {
            "id": 43,
            "title": "Explicabo accusantium beatae velit et.",
            "body": "Ut ut illo rerum ratione. Tenetur et quis sed reiciendis et. Et qui enim porro sunt vero. Minus repudiandae sunt dolorem eos asperiores est cum."
        },
        {
            "id": 44,
            "title": "Ut perferendis nobis ipsa temporibus sunt consectetur quaerat est.",
            "body": "Sint placeat sit magnam mollitia a velit et. Pariatur sit dignissimos eos magnam quasi. Amet porro alias sequi est. Voluptatum ducimus totam minus unde voluptatem."
        },
        {
            "id": 45,
            "title": "Numquam optio maxime aliquam voluptatum ex quis.",
            "body": "Est est non voluptas corporis eos aspernatur quis sint. Est sit nihil rerum corporis quisquam. Aut ea aut possimus aut aut."
        },
        {
            "id": 46,
            "title": "Recusandae similique dolorem quo ab exercitationem.",
            "body": "Illo ut blanditiis consequatur distinctio sunt. Voluptatem magni fugiat in. Et praesentium rerum sed et eos sed."
        },
        {
            "id": 47,
            "title": "Minus non alias sunt maiores odio.",
            "body": "Quia aut odio excepturi doloribus. Et nisi cupiditate veniam. Dolor a nesciunt iure maiores quis voluptas."
        },
        {
            "id": 48,
            "title": "Rerum molestias sequi nemo minima.",
            "body": "Consequatur debitis et dolorum hic debitis asperiores. Non sint dolor a distinctio. Magnam eius illum cupiditate ipsum. Ipsa quod qui provident nihil consectetur."
        },
        {
            "id": 49,
            "title": "Debitis voluptatem assumenda rerum quia repudiandae.",
            "body": "Quis sapiente ut fugiat reiciendis qui autem. Aut qui incidunt minima modi quibusdam occaecati minima. Et et qui ea voluptas laudantium. Unde ex nemo dolores atque voluptas ut."
        },
        {
            "id": 50,
            "title": "Voluptas voluptate ex aspernatur qui sequi.",
            "body": "Eius dolor dicta necessitatibus labore harum expedita ut. Nostrum odio illum totam."
        },
        {
            "id": 51,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 52,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 53,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 54,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 55,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 56,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 57,
            "title": "My best post",
            "body": "My new body post"
        },
        {
            "id": 58,
            "title": "My best post",
            "body": "My new body post"
        }
    ],
    "meta": {
        "message": "Success",
        "status_code": 200
    }
}
```

### HTTP Request
`GET api/v1/posts`

`HEAD api/v1/posts`


<!-- END_d4ac54c52158ea2dc79730cfac8d8a3f -->

<!-- START_dfff1d9b6a3c668b128436efa4e175c6 -->
## Finds a single post.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 1,
        "title": "Omnis nobis repellendus numquam rerum.",
        "body": "Consequatur veritatis delectus eius incidunt cupiditate pariatur aut. Fugiat mollitia dolores consectetur magni mollitia. Omnis aut autem ea deleniti aspernatur."
    },
    "meta": {
        "message": "Success",
        "status_code": 200
    }
}
```

### HTTP Request
`GET api/v1/posts/{post}`

`HEAD api/v1/posts/{post}`


<!-- END_dfff1d9b6a3c668b128436efa4e175c6 -->

#general
<!-- START_57011a4e29c6bc1cfec9270de49657bf -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET "http://localhost/oauth/authorize" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/authorize",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "unsupported_grant_type",
    "message": "The authorization grant type is not supported by the authorization server.",
    "hint": "Check the `grant_type` parameter"
}
```

### HTTP Request
`GET oauth/authorize`

`HEAD oauth/authorize`


<!-- END_57011a4e29c6bc1cfec9270de49657bf -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "http://localhost/oauth/authorize" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/authorize",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/authorize" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/authorize",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/token",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_e96d5ebaecbbcd30089fa499c8d21792 -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET "http://localhost/oauth/tokens" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/tokens",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`

`HEAD oauth/tokens`


<!-- END_e96d5ebaecbbcd30089fa499c8d21792 -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/tokens/{token_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/tokens/{token_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token/refresh" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/token/refresh",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_258e7e83c3ea28db7720e63d358b33ff -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET "http://localhost/oauth/clients" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/clients",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`

`HEAD oauth/clients`


<!-- END_258e7e83c3ea28db7720e63d358b33ff -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "http://localhost/oauth/clients" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/clients",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "http://localhost/oauth/clients/{client_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/clients/{client_id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/clients/{client_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/clients/{client_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_6eec11382f34d0f08c826d2813b02d04 -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET "http://localhost/oauth/scopes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/scopes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`

`HEAD oauth/scopes`


<!-- END_6eec11382f34d0f08c826d2813b02d04 -->

<!-- START_b4c3e68afae3c4de78758b62c49ac9a9 -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET "http://localhost/oauth/personal-access-tokens" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/personal-access-tokens",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`

`HEAD oauth/personal-access-tokens`


<!-- END_b4c3e68afae3c4de78758b62c49ac9a9 -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/personal-access-tokens" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/personal-access-tokens",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/personal-access-tokens/{token_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/oauth/personal-access-tokens/{token_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

