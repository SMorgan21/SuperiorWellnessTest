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
     * @param \Illuminate\Http\Request $request
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

        return redirect()->back()->with('success', 'Container Number ' . $containerNumber . ' has been saved');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Container $container
     * @return string
     */
    public function showContainerData(Container $container): string
    {

        //Getting data for all container
        $allContainers = $container::select('*')
            ->get()
            ->toArray();

        $containerData = array();

        foreach ($allContainers as $product => $values) {
            $containerData[] = array(
                'container_id' => $values['id'],
                'container_number' => $values['container_number'],
                'container_final_destination' => $values['container_final_destination'],
                'port_due_date' => $values['port_due_date'],
                'warehouse_due_date' => $values['warehouse_due_date'],
                'shipper_reference_number' => $values['shipper_reference_number'],
                'shipper_invoice_number' => $values['shipper_invoice_number'],
                'shipping_invoice_value' => $values['shipping_invoice_value'],
                'number_items_in_container' => $values['number_items_in_container'],
                'editButton' => '<div class="btn-group"><a href="/editProduct/" class="btn btn-warning"> Edit</a>',
//                'editButton' => '<div class="btn-group"><a href="/editProduct/' . $values['aw_product_id'] . '/' . $values['voucherId'] . ' " class="btn btn-warning"> Edit</a>',
//                'deleteButton' => '<button type="button" class="btn btn-info btn-lg deleteButton"  onclick="'alert()">Click here</button>',
//                'deleteButton' => '<a href="/deleteProduct/' . $values['aw_product_id'] . ' " class="btn btn-danger"> Delete</a> </div>'
                'deleteButton' => '<a href="/deleteProduct/" class="btn btn-danger"> Delete</a> </div>'

            );
        }

        return json_encode($containerData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Container $container
     * @return \Illuminate\Http\Response
     */
    public function edit(Container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Container $container
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Container $container
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        //
    }
}
