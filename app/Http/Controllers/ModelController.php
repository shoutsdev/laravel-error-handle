<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model  $Model
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user->toArray());
    }
}
