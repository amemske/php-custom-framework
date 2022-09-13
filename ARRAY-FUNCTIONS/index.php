<?php

//create a post class
//properties $title and $published
//create a collection of posts
//use array filter to get unpublished posts
//var_dump the results

class Post {
   public $title;
   public $published;
 
    public function __construct($title, $published){
        $this->title = $title;
        $this->published = $published;
    }
}

$allPosts = [
    new Post('Blog post 1', true),
    new Post('Blog post 2', true),
    new Post('Blog post 3', false),
    new Post('Blog post 4', true)
];

//get me only the unpublished
$unpublished = array_filter($allPosts, function ($allPosts){
    return ! $allPosts->published;

});

//var_dump($unpublished );

//ARRAY MAP-----------------------------------------------------
//get all the titles of the blog posts using array_map
//var_dump the results

$titles = array_map(function ($allPosts){
    return $allPosts->title;
}, $allPosts);

//var_dump($titles);


//give me the array version of $allPosts (an array of arrays)

$modifiedPosts = array_map(function ($allPosts){
    return (array) $allPosts; //casting as array from object

}, $allPosts);

//var_dump($modifiedPosts);

//ARRAY_COLUMN--------------------------------------------------------
//get only the title using array_column

$onlyTitle = array_column($allPosts, 'title');
var_dump($onlyTitle);



