<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class experience extends Component
{
    public $experience;
    /**
     * Create a new component instance.
     */
    public function __construct($experience)
    {
        $this->experience = $experience;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.experience');
    }
}
