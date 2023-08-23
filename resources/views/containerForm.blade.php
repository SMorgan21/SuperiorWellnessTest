@extends('layout.master')

@section('pageTitle', 'Container Data Entry Form')

@include('nav')

@section('main')
    <div class="container">
        <!-- Page Heading -->
        <h1 class="mt-5 mb-2 text-gray-800">A form to add shipping container data</h1>

        <div class="containerInfoForm pt-5">

            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
            @endif

            <form method="post" action='{{url('saveContainerData')}}' id="addContainerData">
                @csrf
                <div class="form-group">
                    <label for="containerNumber">Container Number</label>
                    <input type="text" class="form-control" pattern="^([A-Z a-z]{3})(U|J|Z|u|j|)(\d{6})(\d{1})$" name="containerNumber"  placeholder="Enter Container Number (to ISO 6346 standard)"
                           maxlength="11">
                    <small id="containerNumberHelp" class="form-text text-muted">The container number MUST be formatted to ISO 6346 standard e.g. QSWU1231231</small>
                    @error('containerNumber')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="containerFinalDestination">Container Final Destination</label>
                    <input type="text" class="form-control" id="containerFinalDestination"
                           name="containerFinalDestination" placeholder="Enter Container Final Destination">
                    @error('containerFinalDestination')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="portDueDate">Port Due Date</label>
                    <input type="date" class="form-control" id="portDueDate" name="portDueDate"
                           placeholder="Enter Port Due Date">
                    @error('portDueDate')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warehouseDueDate">Warehouse Due Date</label>
                    <input type="date" class="form-control" id="warehouseDueDate" name="warehouseDueDate"
                           placeholder="Enter Warehouse Due Date">
                    @error('warehouseDueDate')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shipperReferenceNumber">Shipper Reference Number</label>
                    <input type="number" class="form-control" id="shipperReferenceNumber" name="shipperReferenceNumber"
                           placeholder="Enter Shipper Reference Number">
                    @error('shipperReferenceNumber')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shipperInvoiceNumber">Shipper Invoice Number</label>
                    <input type="number" class="form-control" id="shipperInvoiceNumber" name="shipperInvoiceNumber"
                           placeholder="Enter Shipper Invoice Number">
                    @error('shipperInvoiceNumber')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shippingInvoiceValue">Shipping Invoice Value</label>
                    <input type="number" class="form-control" id="shippingInvoiceValue" name="shippingInvoiceValue"
                           placeholder="Enter Shipping Invoice Value" min="0" max="9999"
                           step=".01">
                    @error('shippingInvoiceValue')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="amountOfItemsInContainer">Amount of items in container</label>
                    <input type="number" class="form-control" id="amountOfItemsInContainer"
                           name="amountOfItemsInContainer" placeholder="Enter Amount of items in container">
                    @error('amountOfItemsInContainer')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
