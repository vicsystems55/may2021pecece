<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function choose()
    {
           
                # code...
                if (Auth::user()->role =='admin') {
                    return redirect('/admin');
                }
        
                elseif (Auth::user()->role =='author') {
                    
                    return redirect('/author');
                }
        

        
                else{
                    abort(403);
                }

    }


    public function where()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->tournament =='yes') {
            return redirect('/tournament');
        }

        elseif (Auth::user()->role =='student') {
            return redirect('/');
        }

        elseif (Auth::user()->role =='tutor') {
            return redirect('/tutor');
        }

        else{
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
