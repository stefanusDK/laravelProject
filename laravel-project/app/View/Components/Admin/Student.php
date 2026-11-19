<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Student extends Component
{
    public function __construct(
        public string $title = '',
        public string $subtitle = '',
        public Collection|array $students = [],
        public Collection|array $classrooms = [],
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.admin.student');
    }
}
