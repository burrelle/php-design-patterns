<?php

interface ManagableInterface
{
    public function beManaged();
}

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

class Human implements ManageableInterface, SleepableInterface, WorkableInterface
{
    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }   

    public function work()
    {
        return 'Human working';
    }

    public function sleep()
    {
        return 'Human sleeping';
    }
}

class Andriod implements ManagableInterface, WorkableInterface
{
    public function beManaged()
    {
        $this->work();
    }

    public function work()
    {
        return 'Android Working';
    }
}

class Captain 
{
    public function manage(ManagableInterface $worker)
    {
        $worker->beManaged();
    }
}