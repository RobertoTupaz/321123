<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class training extends Component
{
    public $training;
    /**
     * Create a new component instance.
     */
    public function __construct($training)
    {
        $this->training = $training;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.training');
    }
}
