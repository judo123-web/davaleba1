<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(Request $request) {

    $name = $request->name;
    $surname = $request->surname;
    return view('test',compact('name','surname'));
    }

    public function calculate(Request $request) {
        $numberone = $request->numberOne;
        $numberTwo = $request->numberTwo;
        $action = $request->action;

        if ($action == 'multiply') {
            $ans = $numberone*$numberTwo;
        }
        elseif ($action == 'divide') {
            $ans = $numberone/$numberTwo;
        }
        elseif ($action == 'subtract') {
            $ans = $numberone-$numberTwo;
        }
        elseif ($action == 'add') {
            $ans = $numberone+$numberTwo;
        }
        return view('calculate',compact('ans'));
    }


}
