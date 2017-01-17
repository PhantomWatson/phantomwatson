<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class ExperimentsController extends AppController
{
    public function index()
    {
        $this->set('pageTitle', 'Experiments');
    }

    public function wordCoalesce()
    {
        $this->set('pageTitle', 'Experiment #1: Word Coalesce');
    }

    public function drunk()
    {
        $this->set('pageTitle', 'Experiment #2: Drunk');
    }
}
