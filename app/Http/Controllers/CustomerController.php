<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = $this->customerRepository->all();
        // $customer = Customer::all();
        // $customer = Customer::orderBy('name')
        // ->where('active', 1)
        // ->with('user')
        // ->get()
        // ->map(function($customer){
        //     return [
        //         'customer_id'=> $customer->id,
        //         'name' => $customer->name,
        //         'created_by'=> $customer->user->email,
        //         'last_updated'=> $customer->updated_at->diffForHumans(),
        //     ];
        // });

        return $customer;
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
    public function show($customerId)
    {
        $customer = $this->customerRepository->findById($customerId);
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customerId)
    {
        $customer = $this->customerRepository->update($customerId);

        // return redirect('/customer/'.$customerId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($customerId)
    {
        $customer = $this->customerRepository->delete($customerId);

        // return redirect('/');
    }
}
