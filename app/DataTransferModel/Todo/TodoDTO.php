<?php 

namespace App\DataTransferModel\Todo;

use Illuminate\Http\Request;

class TodoDTO
{
    private function __construct(
        public readonly string $name,
        public readonly string $description,
    ) {
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->input('name'),
            $request->input('description'),
        );
    }
}
