<?php
class QuestionsController extends AppController {

    function index() {
        $this->set('questions', $this->Question->find('all'));
    }
}