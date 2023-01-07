<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QueryBuilder extends Controller
{
    function Select()
    {
        // $users = DB::table('customer')->get();
        // $users = DB::table('customer')->find(2);
        // $users = DB::table('customer')->where('id',"=",1)->get();
        // $users = DB::table('customer')->where('name','divya')->first();


        //aggrigate function
        // $users = DB::table('customer')->count();
        // $users = DB::table('customer')->max('pwd');
        // $users = DB::table('customer')->min('pwd');
        // $users = DB::table('customer')->avg('pwd');
        // $users = DB::table('customer')->orderby('name')->get();
        // $users = DB::table('customer')->orderByDesc('name')->get();

        //insert data
        // $users = DB::table('customer')->insert([
        //     'name' => "aniket",
        //     'email' => "d@gmail.com",
        //     'pwd' => 12345
        // ]);
        // return DB::table('customer')->get();

        //update data
        // $users = DB::table('customer')->where('id',4)->update([
        //         'name' => "pandit",
        //         'email' => "p@gmail.com",
        //         'pwd' => 1234
        //     ]);
        // return DB::table('customer')->get();

        //delete data
        $users = DB::table('customer')->where('id',6)->delete();
        return DB::table('customer')->get();
    } 
}
