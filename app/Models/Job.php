<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$18,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];
    }

    // FIX 1: Change return type to '?array' to allow the possibility of returning null.
    public static function find(int $id): ?array 
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] === $id); // Used strict comparison (===)

        if (! $job) {
            abort(404);
        }

        // FIX 2: Must explicitly return the found $job array.
        return $job; 
    }
}
