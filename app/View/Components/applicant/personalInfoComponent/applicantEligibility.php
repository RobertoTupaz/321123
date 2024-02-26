<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class applicantEligibility extends Component
{
    public $eligibility;
    /**
     * Create a new component instance.
     */
    public function __construct($eligibility)
    {
        $this->eligibility = $eligibility;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.applicant-eligibility');
    }
}
