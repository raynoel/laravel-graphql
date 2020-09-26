# GraphQL with Laravel and VueJS

## Introduction

Simple Example Single Page application for GraphQL.

## Technologies used:

-   Laravel 5.8.\*
-   VueJS 2.5.\*
-   Lighthouse PHP
-   Vue Apollo
-   MySQL

## Installation Guide:

-   Clone 
-   cd `laravel-vue-graphql-example`
-   Install composer: `composer install`
-   Copy `.env.example` file: `cp .env.example .env`
-   Generate key: `php artisan key:generate`
-   Set the database credentials in `.env` file
-   Run migration: `php artisan migrate`
-   Run seeder: `php artisan db:seed`
-   Install npm dependencies: `npm install`
-   Compile JS and CSS: `npm run dev`
-   Serve application: `php artisan serve`
-   Access: `http://localhost:8000` 
-   Access GraphQL Playground: `http://localhost:8000/graphql-playground`


## Examples de requètes utilisée dans GraphQL Playground
# query {
#   books {
#     id
#     title
#     author
#   }
# }

# query {
#   book(id: 1) {
#     id
#     title
#     author
#     category {
#       name
#     }
#   }
# }

# query {
#   category(id: 1) {
#     name
#   }
# }

# query {
#   category(id: 1) {
#     id
#     name
#     books {
#       id
#       title
#       author
#       image
#     }
#   }
# }

# query {
#   booksByFeatured(featured: false) {
#     title
#   }
# }

# query {
#   someComplexQuery(search: "Gary Vay") {
#     title
#     author
#   }
# }

# mutation {
# 	createBook (
#     title: "A New Book"
#     author: "Someone"
#     category_id: 1
#   ) {
#     id
#     title
#   }
# }
