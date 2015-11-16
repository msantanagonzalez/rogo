<?php
class Answer extends AppModel{
    public $belongsTo = 'User';
    public $hasMany = 'Comment';
}