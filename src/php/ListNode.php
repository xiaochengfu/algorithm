<?php

namespace php;


class ListNode
{
    public $value = 0;
    public $next = null;

    public function __construct($val = 0)
    {
        $this->value = $val;
    }
}