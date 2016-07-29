<?php

/**
 * @author  Florian Petruschke <florian.petruschke@gmail.com>
 * @date    29.02.16  -  08:28
 * @version 1.0
 */
class MainController extends Controller
{
    function render() {
        // setting a new global variable
        $this->f3->set('name', '"Your name could be here"');
        // instantiating new template object
        $template = new Template();
        $this->f3->set('view', 'mainpage.html');
        echo $template->render('base/layout.html');
    }

    function renderAbout($f3) {
        // initialisation and definition of the path variable for the README
        $filePath = 'README.md';
        // read the file content
        $fileContent = $f3->read($filePath); // read file contents
        // render the content as a Mardown instance
        echo \Markdown::instance()->convert($fileContent);
    }

}