<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {


    public function template($template_name, $vars = array(), $return = FALSE)
    {

        $vars_header = $vars;
        $vars_header['js_files'] = array();
        $vars_header['css_files'] = array();

        if($return):

        $content  = $this->view('head', $vars_header, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('footer', $vars, $return);

        return $content;
    else:
           $content  = $this->view('head', $vars_header);
        $this->view($template_name, $vars);
        $this->view('footer', $vars);
    endif;
    }


}