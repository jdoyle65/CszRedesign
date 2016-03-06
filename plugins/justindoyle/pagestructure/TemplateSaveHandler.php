<?php namespace JustinDoyle\PageStructure;

use Cms\Classes\Page;
use Cms\Classes\Theme;
use Log;
use Flash;
use Event;

class TemplateSaveHandler
{
    public function handle($that, $template, $type)
    {
        if($type === 'page')
        {
            $this->handlePage($template);
        }
    }

    public function handlePage(Page $page)
    {

    }

}