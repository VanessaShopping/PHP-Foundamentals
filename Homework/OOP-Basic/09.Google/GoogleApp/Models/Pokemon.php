<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:38 AM
 */

namespace GoogleApp\Models;
class Pokemon
{
    private $name;
    private $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function __toString(): string
    {
        return "{$this->name} {$this->type}";
    }
}