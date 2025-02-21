<?php

namespace TanNhatCMS\ThemeTablerLMS\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuDropdownColumn extends Component
{   
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tannhatcms.theme-tabler-lms::components.menu-dropdown-column');
    }
}
