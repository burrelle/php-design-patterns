<?php

// Decorator Design Pattern

interface CarService
{
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and an oil change';
    }
}

class TireChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and a tire change';
    }
}

// echo (new TireChange(new OilChange(new BasicInspection())))->getCost();
$service = (new OilChange(new BasicInspection()));
echo $service->getDescription();
