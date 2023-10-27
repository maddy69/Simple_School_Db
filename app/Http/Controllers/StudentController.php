<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $databaseName = config('database.connections.mysql.database');
        $excludedTables = ['migrations', 'users', 'failed_jobs', 'password_resets', 'personal_access_tokens', 'Password_reset_tokens'];
        $excludedTablesQueryPart = implode("', '", $excludedTables);
        $tables = DB::select("SHOW TABLES WHERE `Tables_in_$databaseName` NOT IN ('$excludedTablesQueryPart')");

        $data = [];

        foreach ($tables as $table) {
            $tableName = $table->{"Tables_in_$databaseName"};
            $data[$tableName] = DB::table($tableName)->get();
    }
        return view('students.index', compact('data'));
    }
}
