<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

/*
 * freshman
 *
 * 新生网
 *
 * @author     hbc
 */

class Hello extends CI_Controller {
    public function index() {
        $this->twig->display('hello.html');
    }
}
