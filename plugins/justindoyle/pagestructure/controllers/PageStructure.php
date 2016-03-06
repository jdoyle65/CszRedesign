<?php namespace JustinDoyle\PageStructure\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Cms\Classes\Content;
use Cms\Classes\Page;
use Input;
use Cms\Classes\Layout;
use Cms\Classes\Theme;

class PageStructure extends Controller
{


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.PageStructure', 'create');
    }

    public function create()
    {
        $this->vars['layouts'] = Layout::listInTheme(Theme::getActiveTheme());
    }

    public function onCreatePage()
    {
        $layout = Input::get('selected-layout', '');

        $url = Input::get('url');
        $title = Input::get('title');
        $fileName = Input::get('filename');

        switch ($layout) {

            case 'one_column':
                return $this->createOneColumnPage($layout, $url, $title, $fileName);
                break;
            case 'two_equal_columns':
                return $this->createTwoEqualColumnsPage($layout, $url, $title, $fileName);
                break;
            default:
                return $this->createOneColumnPage('one_column', $url, $title, $fileName);
                break;

        }
    }

    private function createOneColumnPage($layout, $url, $title, $filename)
    {
        $settings = $this->basePageSettings($url, $title, $layout);
        $settings['editable column_middle'] = ['file' => $filename.'/column_middle.htm'];
        $page = new Page(Theme::getActiveTheme());
        $page->fill([
            'settings' => $settings,
            'markup' => $this->parseLayout($layout, ['title' => $title])
        ]);
        $page->setFileName($filename.'.htm');
        $page->save();
        $this->createEmptyContent($filename.'/column_middle');
        \Flash::success('Created page "'.$title.'"');
    }

    private function createTwoEqualColumnsPage($layout, $url, $title, $filename)
    {
        $settings = $this->basePageSettings($url, $title, $layout);
        $settings['editable column_left'] = ['file' => $filename.'/column_left.htm'];
        $settings['editable column_right'] = ['file' => $filename.'/column_right.htm'];
        $page = new Page(Theme::getActiveTheme());
        $page->fill([
            'settings' => $settings,
            'markup' => $this->parseLayout($layout, ['title' => $title])
        ]);
        $page->setFileName($filename.'.htm');
        $page->save();
        $this->createEmptyContent($filename.'/column_left');
        $this->createEmptyContent($filename.'/column_right');
    }

    private function basePageSettings($url, $title, $layout) {
        return [
            'url' => $url,
            'title' => $title,
            'description' => 'New Page',
            'layout' => $layout,
            'is_hidden' => 0
        ];
    }

    private function parseLayout($layout, array $data = [])
    {
        return \Twig::parse(file_get_contents(__DIR__.'/../layouts/'.$layout.'.htm'), $data);
    }

    private function createEmptyContent($filename) {
        $content = new Content(Theme::getActiveTheme());
        $content->markup = '<p>Enter content</p>';
        $content->setFileName($filename.'.htm');
        $content->save();
        $contentFr = new Content(Theme::getActiveTheme());
        $contentFr->markup = '<p>Entrez le contenu</p>';
        $contentFr->setFileName($filename.'.fr.htm');
        $contentFr->save();
    }
}