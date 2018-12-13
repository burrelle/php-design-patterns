<?php

// Encapsulate and make each one interchangable
interface Logger
{
    public function log($data);
}

// Define a family of algorithms
class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('log the data to the file');
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('log the data to the database');
    }
}

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump('log the data to the Saas');
    }
}

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}

$app = new App;
$app->log('Data to be logged', new LogToDatabase);
