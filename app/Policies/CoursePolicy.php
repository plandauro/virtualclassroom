<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // METODO USADO PARA VISUALIZAR ESTADOS --> SE DENOMINA POLICY DE LARAVEL
    public function enrolled(User $user , Course $course){
        return $course->student->contains($user->id);
    }
}
