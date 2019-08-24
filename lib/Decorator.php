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
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<title>Ftm designs</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="fatma.hassan@gmail.com" />
	<meta name="description" content="FTM" />


	<link rel="stylesheet" href="lib/touching.css" type="text/css" />
	</head>
			<body>
				<div id="container">
				<div id="banner">
				<div id='bannertitle'>Touching</div>
				</div>

				<div id="outer">
 				<div id="inner">
 				<div id="left">
  <div class="verticalmenu">
 </div> 
 </div>
	<div id="content">

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
        			</div>
				</div>
				</div>
 				<div id="footer"><h1><a href="http://freethoughts.ftmblog.com">copyrights&copy;FTM</a></h1></div>
				</div>
	</body></html>
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
