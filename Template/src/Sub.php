<?php

namespace App;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    public function layBread()
    {
        var_dump('laying the bread');
        return $this;
    }

    public function addLettuce()
    {
        var_dump('adding the lettuce');
        return $this;
    }

    public function addSauces()
    {
        var_dump('adding the sauces');
        return $this;
    }

    abstract public function addPrimaryToppings();
}
