<?php
require('vendor/autoload.php');
class HeadDecorator extends Widget
{
    protected $content;
    protected $reportContent;

    public function __construct(Widget $content){



        $this->content=$content;
    }

    public function draw(){
        $this->reportContent=$this->html_header();
        $this->reportContent.=$this->bar();
        $this->reportContent.=$this->content->draw();
        $this->reportContent.=$this->html_footer();
        return $this->reportContent;
    }

    protected function html_header(){

        $msg=<<<HTML

HTML;
        return $msg;
    }
    protected function bar(){
        $msg=<<<HTML

HTML;
        return $msg;
    }
    protected function html_footer(){
        $msg=<<<HTML

HTML;
        return $msg;
    }
}

/**
 *
 */
class AdminDecorator extends HeadDecorator
{
    public function __construct(Widget $content){

    }

    public function draw(){

    }
    private function navigation(){
        $msg=<<<HTML

HTML;
        return $msg;
    }

}
class StudentDecorator extends HeadDecorator
{
    public function __construct(Widget $content){

    }

    public function draw(){

    }
    private function navigation(){
        $msg=<<<HTML
        
HTML;
        return $msg;
    }

}
?>
