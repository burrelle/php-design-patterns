<?php

interface LessonRepositoryInterface
{
    /**
     * Fetch all records
     * PHP does not have a mechanism to ensure
     * the return types are all the same so we
     * can use docblocks to ensure the return value.
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // Return through filesystem
        return [];
    }
}

class DBLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // Use an eloquent model
        // return Lesson::all(); Violates LSP - Returns a collection not array
        return Lesson::all()->toArray();
    }
}
