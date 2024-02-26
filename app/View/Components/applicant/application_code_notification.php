<?php

namespace App\View\Components\applicant;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class application_code_notification extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.application_code_notification');
    }
}
