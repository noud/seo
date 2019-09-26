<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Events\MyEvent;

class OrganizationController extends Controller
{
    public function field(Organization $organization, String $field)
    {
        return $organization->$field ?? 'not found';
    }

    public function address(Organization $organization, String $field)
    {
        return $organization->postal_address->$field ?? 'not found';
    }

    public function employeesByName(Organization $organization, String $name, String $field)
    {
        // https://stackoverflow.com/questions/33193525/schema-org-laravel-way-too-complicated
        $employees = $organization->employees()->named($name)->get();
        return $employees[0]->role->person->$field ?? 'not found';
    }

    public function foundersByName(Organization $organization, String $name, String $field)
    {
        $founders = $organization->founders()->named($name)->get();
        return $founders[0]->role->person->$field ?? 'not found';
    }
}
