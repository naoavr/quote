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
        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Quote Addon');
        $this->description = $this->l('Module for managing quotes.');
    }
}