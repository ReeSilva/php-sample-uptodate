<?php

require __DIR__ . '/vendor/autoload.php';

use \Uptodate\Example;

class Index {
    protected $loader;
    protected $twig;

    public function __construct() {
        $this->loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
        $this->twig = new Twig_Environment($this->loader);
    }
    
    public function index() {
        $example = new Example();
        $phpver = $example->getPhpVersion();
        $template = $this->twig->render('home.twig.html', array('phpversion' => $phpver, 'env' => $_ENV['STAGE']));
        return $template;
    }
}

$index = new Index();
echo $index->index();