<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class education extends Component
{
    public $educationalAttainment;
    /**
     * Create a new component instance.
     */
    public function __construct($educationalAttainment)
    {
        $this->educationalAttainment = $educationalAttainment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.education');
    }
}
