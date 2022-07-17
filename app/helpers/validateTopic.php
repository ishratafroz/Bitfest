<?php
function validateTopic($topic)
{
 $errors= array();
 if(empty($topic['name'])){
    array_push($errors, 'Name is required');
} 
$existingTopic = selectOne('topics', ['name' => $topic['name']]);

if($existingTopic){
    if(isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']){
        array_push($errors, 'Event with that title already exsits');
    }
    if(isset($topic['add-topic']))
    {
        array_push($errors, 'Name already exsits');
    }
    
} return $errors;
}