<?php
namespace Ramsey\Collection\Test\Mock;

use Ramsey\Collection\AbstractCollection;

class BarCollection extends AbstractCollection
{
    public function getType()
    {
        return Bar::class;
    }
}
