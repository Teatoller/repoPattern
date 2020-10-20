<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    public function all()
    {
        $customer = Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
        // ->map(function ($customer) {
        // return [
        //     'customer_id'=> $customer->id,
        //     'name' => $customer->name,
        //     'created_by'=> $customer->user->email,
        //     'last_updated'=> $customer->updated_at->diffForHumans(),
        // ];
        // return $this->format($customer);
        // return $customer->format();
        // });

        return $customer;
    }

    public function findById($customerId)
    {
        $customer = Customer::where('id', $customerId)
            ->where('active', 1)
            ->with('user')
            ->firstOrFail()
            ->format();

        // return $customer;
        // return $this->format($customer);
        // return $customer->format();
        return $customer;
    }

    // protected function format($customer)
    // {
    //     return [
    //         'customer_id'=> $customer->id,
    //         'name' => $customer->name,
    //         'created_by'=> $customer->user->email,
    //         'last_updated'=> $customer->updated_at->diffForHumans(),
    //     ];
    // }

    public function update($customerId)
    {
        $customer = Customer::where('id', $customerId)->firstOrFail();

        $customer->update(request()->only('name'));
    }

    public function delete($customerId)
    {
        $customer = Customer::where('id', $customerId)->delete();

        // $customer->update(request()->only('name'));
    }
}
