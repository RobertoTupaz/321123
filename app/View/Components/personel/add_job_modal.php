<?php

namespace App\View\Components\personel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class add_job_modal extends Component
{
    public $positions;
    /**
     * Create a new component instance.
     */
    public function __construct($positions)
    {
        $this->positions = $positions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.personel.add_job_modal');
    }
}
