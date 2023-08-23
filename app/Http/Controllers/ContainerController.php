<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;


class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveContainerData(Request $request)
    {
        //Validation
        $request->validate([
            'containerNumber' => 'required',
            'containerFinalDestination' => 'required',
            'portDueDate' => 'required',
            'warehouseDueDate' => 'required',
            'shipperReferenceNumber' => 'required',
            'shipperInvoiceNumber' => 'required',
            'shippingInvoiceValue' => 'required',
            'amountOfItemsInContainer' => 'required|numeric',
        ]);

        //Getting Data from the request
        $containerNumber = $request->containerNumber;
        $containerFinalDestination = $request->containerFinalDestination;
        $portDueDate = $request->portDueDate;
        $warehouseDueDate = $request->warehouseDueDate;
        $shipperReferenceNumber = $request->shipperReferenceNumber;
        $shipperInvoiceNumber = $request->shipperInvoiceNumber;
        $shippingInvoiceValue = $request->shippingInvoiceValue;
        $amountOfItemsInContainer = $request->amountOfItemsInContainer;

        //Saving the new product
        $newContainer = new Container();
        $newContainer->container_number = $containerNumber;
        $newContainer->container_final_destination = $containerFinalDestination;
        $newContainer->port_due_date = $portDueDate;
        $newContainer->warehouse_due_date = $warehouseDueDate;
        $newContainer->shipper_reference_number = $shipperReferenceNumber;
        $newContainer->shipper_invoice_number = $shipperInvoiceNumber;
        $newContainer->shipping_invoice_value = $shippingInvoiceValue;
        $newContainer->number_items_in_container = $amountOfItemsInContainer;

        $newContainer->save();

        return redirect()->back()->with('success', $containerNumber . ' saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function show(Container $container)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function edit(Container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        //
    }
}
