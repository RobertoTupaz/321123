<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class performance-rating extends Component
{
    public $performanceRating;
    /**
     * Create a new component instance.
     */
    public function __construct($performanceRating)
    {
        $this->performanceRating = $performanceRating;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.performance-rating');
    }
}
