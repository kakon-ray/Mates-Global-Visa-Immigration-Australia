<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Migrationform;

class MigrationformController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'migration_name' => 'required|regex:/^[a-z A-Z]+$/u|max:25|min:3',
            'migration_phone' => 'required|numeric|',
            'migration_email' => 'required',
            'migration_from_country' => 'required',
            'migration_migrate_country' => 'required',
            'migration_visa' => 'required',
            'other_visa' => 'nullable',
        ]);


        $newvariable = new Migrationform;
        $newvariable ->migration_name = $request->migration_name;
        $newvariable ->migration_phone = $request->migration_phone;
        $newvariable ->migration_email = $request->migration_email;
        $newvariable ->migration_from_country = $request->migration_from_country;
        $newvariable ->migration_migrate_country = $request->migration_migrate_country;
        $newvariable ->migration_visa = $request->migration_visa;
        $newvariable ->other_visa = $request->other_visa;
        $newvariable ->save();
        return redirect()->route('migration')->with('status', 'Application submitted successfully!');
    }
}
