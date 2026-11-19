<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
{
    public function __construct(
        public string $title = '',
        public string $subtitle = '',
        public string $greeting = '',
        public string $description = '',
        public array $profile = []
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.admin.about');
    }
}
