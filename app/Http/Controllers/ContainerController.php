<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function createContainer()
    {
        return view('containerForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveContainerData(Request $request): RedirectResponse
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
     * @param Container $container
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

                //Edit and Delete Buttons
                'editButton' => '<div class="btn-group"><a href="/editContainer/' . $values['id'] .' " class="btn btn-warning"> Edit</a>',
                'deleteButton' => '<a href="/deleteContainer/' . $values['id'] . ' "  class="btn btn-danger" onclick="return checkDelete()"> Delete</a> </div>'


            );
        }

        return json_encode($containerData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param integer $containerId
     * @return View
     */
    public function editContainer(int $containerId): View
    {
        //Unique container data from db using the container id
        $containerData = Container::where('id', $containerId)->first();
        return view('editContainer', compact('containerData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Container $container
     * @return RedirectResponse
     */
    public function updateContainerData(Request $request, Container $container): RedirectResponse
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
        $containerID = $request->containerId;
        $containerNumber = $request->containerNumber;
        $containerFinalDestination = $request->containerFinalDestination;
        $portDueDate = $request->portDueDate;
        $warehouseDueDate = $request->warehouseDueDate;
        $shipperReferenceNumber = $request->shipperReferenceNumber;
        $shipperInvoiceNumber = $request->shipperInvoiceNumber;
        $shippingInvoiceValue = $request->shippingInvoiceValue;
        $amountOfItemsInContainer = $request->amountOfItemsInContainer;

        $container::where('id', '=', $containerID)->update([
            'container_number' => $containerNumber,
            'container_final_destination' => $containerFinalDestination,
            'port_due_date' =>$portDueDate,
            'warehouse_due_date' => $warehouseDueDate,
            'shipper_reference_number' =>$shipperReferenceNumber,
            'shipper_invoice_number' => $shipperInvoiceNumber,
            'shipping_invoice_value' => $shippingInvoiceValue,
            'number_items_in_container' => $amountOfItemsInContainer,
        ]);


        return redirect()->back()->with('success', $containerNumber . ' has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Container $container
     * @param integer $containerId
     * @return RedirectResponse
     */
    public function deleteContainer(Container $container, int $containerId): RedirectResponse
    {
        $container::where('id', '=', $containerId)->delete();

        return redirect()->back()->with('success', ' Product deleted successfully');
    }
}
