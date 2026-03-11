<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Quote extends Module
{
    public function __construct()
    {
        $this->name = 'quote';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'naoavr';
        $this->need_instance = 0;
        parent::__construct();
        $this->displayName = $this->l('Quote Management');
        $this->description = $this->l('Manage customer quotes effectively.');
    }

    public function install()
    {
        return parent::install();
    }
}