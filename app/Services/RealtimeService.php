<?php

namespace App\Services;

class RealtimeService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private string $data
    ) {
        //
    }

    public function filterBy($key, $value)
    {
        $lines = collect(str_getcsv($this->data, "\n"));

        $headers = $lines->first();

        $extractHeaders = str()->of($headers)->explode("|");

        $index = $extractHeaders->search($key);

        return $lines->skip(1)
            ->filter(
                fn($item) => str()->of($item)->explode('|')[$index] === $value
            )
            ->prepend($headers)
            ->implode("\n") . "\n";
    }
}
