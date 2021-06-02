<?php
namespace App\Support;

class Message 
{
    private $test;
    private $type;

    public function getText()
    {
        return $this->text;
    }

    public function getType()
    {
        return $this->type;
    }

    public function success(string $message): Message
    {
       $this->type = 'success';
       $this->text = $message;
       return $this;
    }

    public function error(string $message): Message
    {
       $this->type = 'danger';
       $this->text = $message;
       return $this;
    }

    public function render()
    {
        return "<div style='margin:5px; padding:5px'; class='message bg-{$this->getType()}'>{$this->getText()}</div>";
    }
}