<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.student.index', [
            'student' => Student::paginate(10)
        ]);
    }
}
