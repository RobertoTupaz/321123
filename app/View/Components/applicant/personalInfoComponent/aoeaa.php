<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class aoeaa extends Component
{
    public $aoeaa;
    /**
     * Create a new component instance.
     */
    public function __construct($aoeaa)
    {
        $this->aoeaa = $aoeaa;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.aoeaa');
    }
}
