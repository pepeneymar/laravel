<?php

namespace App\Http\Controllers;

use App\Models\IncomeExpenses;
use Illuminate\Http\Request;

class IncomeExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $getData = IncomeExpenses::orderBy('id','desc')->get();
        return view('incomeexpenses',compact('getData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create_data = new IncomeExpenses();
        $create_data->name = $request->input('name');
        $create_data->amount = $request->input('amount');
        $create_data->type = $request->input('type');
        $create_data->datetime = $request->input('datetime');
        if(!$create_data->save()){
            session()->flash('success', 'บันทึกข้อมูลไม่สำเร็จ');
            return redirect('/create');
        }
        session()->flash('success', 'บันทึกข้อมูลสำเร็จ');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
