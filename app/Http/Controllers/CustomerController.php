<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $searchId = $searchName = $searchEmail = "";
        if (isset($_GET['id'])) {
            $searchId = $_GET['id'];
        }

        if (isset($_GET['name'])) {
            $searchName = $_GET['name'];
        }

        if (isset($_GET['email'])) {
            $searchEmail = $_GET['email'];
        }

        $customers = Customer::
            where('id', 'LIKE', '%' . $searchId . '%')
            ->where('name', 'LIKE', '%' . $searchName . '%')
            ->where('email', 'LIKE', '%' . $searchEmail . '%')
            ->paginate($id);
        return $customers;
    }

    public function chart()
    {
        $year = Customer::where('created_at', '>', Carbon::now()->subYear(1))->get();
        $yearCount = $year->count();

        $threeMonths = Customer::where('created_at', '>', Carbon::now()->subMonth(3))->get();
        $threeMonthsCount = $threeMonths->count();

        $month = Customer::where('created_at', '>', Carbon::now()->subMonth(1))->get();
        $monthCount = $month->count();

        $week = Customer::where('created_at', '>', Carbon::now()->subWeek(1))->get();
        $weekCount = $week->count();

        $day = Customer::where('created_at', '>', Carbon::now()->today()->subDay(1))->get();
        $dayCount = $day->count();
        return [$yearCount / 365, $threeMonthsCount / 90, $monthCount / 30, $weekCount / 7, $dayCount];
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
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
