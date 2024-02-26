<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class oa extends Component
{
    public $types;
    public $outstandingAccomplishment;
    /**
     * Create a new component instance.
     */
    public function __construct($types, $outstandingAccomplishment)
    {
        $this->types = $types;
        $this->outstandingAccomplishment = $outstandingAccomplishment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.oa');
    }
}
