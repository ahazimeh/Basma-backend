<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
        $year = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 1 YEAR)'))->get();
        $yearCount = $year->count();

        $threeMonths = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 3 MONTH)'))->get();
        $threeMonthsCount = $threeMonths->count();

        $month = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 1 MONTH)'))->get();
        $monthCount = $month->count();

        $week = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 1 WEEK)'))->get();
        $weekCount = $week->count();

        $day = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 1 DAY)'))->get();
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
