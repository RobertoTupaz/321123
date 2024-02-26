<?php

namespace App\View\Components\applicant\personalInfoComponent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class personal_info extends Component
{
    public $user, $provinces;
    /**
     * Create a new component instance.
     */
    public function __construct($user, $provinces)
    {
        $this->user = $user;
        $this->provinces = $provinces;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.applicant.personal-info-component.personal_info');
    }
}
