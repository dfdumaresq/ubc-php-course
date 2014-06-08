<?php

/*
 * @package MySmarty
 * Extension.
 */

/**
 * Description of MySmarty
 * Extending Smarty with default directory setup.
 *
 * @author dfdumaresq.
 * Attribution: Jim O'Leary.
 */

require_once('config.php');

class MySmarty extends Smarty
{
    function __construct($force_compile=true, $caching=false)
    {
        parent::__construct();
        $this->template_dir  = PATH_TO_ROOT."ext/templates/";    // It is not recommended to put this directory under the web server document root. http://www.smarty.net/docsv2/en/api.variables.tpl#variable.template.dir
        $this->config_dir    = PATH_TO_ROOT."ext/configs/";
        $this->compile_dir   = "/tmp/templates_c/";
        $this->cache_dir     = "/tmp/cache/";
        $this->force_compile = $force_compile;
        $this->caching       = $caching;

    }
}
