<?php
class Question extends AppModel{
    public $belongsTo = 'User';
    public $hasMany = 'Answer';
}