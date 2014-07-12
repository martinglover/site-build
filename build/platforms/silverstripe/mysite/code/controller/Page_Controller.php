<?php
class Page_Controller extends ContentController
{
    public function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements

        Requirements::javascript('themes/${sitename}/js/modernizr.js');
        Requirements::javascript('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        Requirements::javascript('themes/${sitename}/js/script.js');

    }
}
