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

    public function thoughtGenerator()
    {
        $this->set('pageTitle', 'Experiment #3: Thought Generator');
    }

    public function thoughtGeneratorSource()
    {
        $sourceUrl = 'http://theether.com/generator/getSource';
        $results = json_decode(file_get_contents($sourceUrl));
        $this->viewBuilder()->setLayout('json');
        $this->set('source', $results->source);
    }

    public function vowelScrambler()
    {
        $this->set('pageTitle', 'Experiment #4: Vowel Scrambler');
    }

    public function colorWalk()
    {
        $this->set('pageTitle', 'Experiment #5: Color Walk');
    }

    public function ghostMessages()
    {
        $this->set('pageTitle', 'Experiment #6: Ghost Messages');
    }
}
