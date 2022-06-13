<?php

namespace Library\Core;

class AbstractController
{
    public function display(string $template, array $data = []): void
    {
        
        extract($data);
        
        require 'src/App/Views/layout.phtml';
    }
}