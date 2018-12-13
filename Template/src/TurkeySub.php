<?php namespace App;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('adding the turkey');
        return $this;
    }
}
