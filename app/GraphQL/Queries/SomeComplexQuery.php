<?php

namespace App\GraphQL\Queries;
use App;

class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // On peut définir une requète complexe.
        // Ici, la query recherche un auteur
        return \App\Book::where('author', 'like', '%' . $args['search'] . '%')->get();
    }
}
