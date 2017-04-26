<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
class Post extends Model
{
	use ElasticquentTrait;
     public $fillable = ['title', 'content', 'tags'];
     protected $mappingProperties = array(
    'title' => [
      'type' => 'string',
      "analyzer" => "standard",
    ],
    'content' => [
      'type' => 'string',
      "analyzer" => "standard",
    ],
    'tags' => [
      'type' => 'string',
      "analyzer" => "stop",
      "stopwords" => [","]
    ],
  );
}
