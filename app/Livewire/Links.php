<?php

namespace App\Livewire;

use App\Models\Link;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Links extends Component
{
    public $endpoint = '';
    public $target = '';

    public function createLink(): void
    {
        $validated = $this->validate([
            'endpoint' => [
                'required',
                'string',
                'min:2',
                'max:255',
                Rule::unique(Link::class),
            ],
            'target' => [
                'required',
                'string',
                'min:2',
                'max:255',
                'url'
            ],
        ]);

        $validated['user_id'] = auth()->id();

        Link::create($validated);

        // Reset the form after successful creation
        $this->reset(['endpoint', 'target']);

        // Optional: Add a success message
        session()->flash('message', 'Link created successfully!');
    }


    public function render()
    {
        return view('livewire.links');
    }
}
