@extends('layout.master')

@section('pageTitle', 'Container Data Entry Form')

@include('nav')

@section('main')
    {{--  Begining of display  --}}
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- Page title --}}
                <h1 class="m-0 font-weight-bold text-dark">Edit Container Details</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    {{-- Success message once a container is saved--}}
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('success')}}
                            <br>
                            <br>
                            <br>
                            {{-- Link to data table --}}
                            <a href='{{url('containerData')}}' class="btn btn-primary"> View Container Data</a>
                        </div>
                    @endif
                    {{-- Beginning of form --}}
                    <form method="post" action='{{url('updateContainerData')}}' id="updateContainerData">
                        @csrf
                        <div class="form-group">
                            <div class="row pb-3">
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <input type="hidden" name="containerId" value='{{$containerData->id}}'>
                                    <label for="containerNumber">Container Number</label>
                                    {{-- Input for the container number, using regex to validate the input to the iso 6346 standard--}}
                                    <input type="text" class="form-control"
                                           pattern="^([A-Z a-z]{3})(U|J|Z|u|j|)(\d{6})(\d{1})$" name="containerNumber"
                                           placeholder="Enter Container Number (to ISO 6346 standard)"
                                           maxlength="11" id="containerNumber"
                                           value="{{$containerData->container_number}}">
                                    {{-- Helper Text--}}
                                    <small id="containerNumberHelp" class="form-text text-muted">The container number MUST be formatted to <mark>ISO 6346</mark> standard e.g. <mark>QSWU1231231</mark>
                                    </small>
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('containerNumber')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="containerFinalDestination">Container Final Destination</label>
                                    <input type="text" class="form-control" id="containerFinalDestination"
                                           name="containerFinalDestination"
                                           placeholder="Enter Container Final Destination"
                                           value="{{$containerData->container_final_destination}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('containerFinalDestination')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="portDueDate">Port Due Date</label>
                                    <input type="date" class="form-control" id="portDueDate" name="portDueDate"
                                           min="" placeholder="Enter Port Due Date"
                                           value="{{$containerData->port_due_date}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('portDueDate')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="warehouseDueDate">Warehouse Due Date</label>
                                    <input type="date" class="form-control" id="warehouseDueDate"
                                           name="warehouseDueDate"
                                           placeholder="Enter Warehouse Due Date"
                                           value="{{$containerData->warehouse_due_date}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('warehouseDueDate')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="shipperReferenceNumber">Shipper Reference Number</label>
                                    <input type="number" class="form-control" id="shipperReferenceNumber"
                                           name="shipperReferenceNumber" maxlength="11"
                                           placeholder="Enter Shipper Reference Number"
                                           value="{{$containerData->shipper_reference_number}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('shipperReferenceNumber')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="shipperInvoiceNumber">Shipper Invoice Number</label>
                                    <input type="number" class="form-control" id="shipperInvoiceNumber"
                                           name="shipperInvoiceNumber"
                                           placeholder="Enter Shipper Invoice Number" maxlength="11"
                                           value="{{$containerData->shipper_invoice_number}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('shipperInvoiceNumber')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="shippingInvoiceValue">Shipping Invoice Value</label>
                                    <input type="number" class="form-control" id="shippingInvoiceValue"
                                           name="shippingInvoiceValue"
                                           placeholder="Enter Shipping Invoice Value" min="0" max="9999999"
                                           step=".01" value="{{$containerData->shipping_invoice_value}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('shippingInvoiceValue')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-lg-6 pb-3">
                                    <label for="amountOfItemsInContainer">Amount of items in container</label>
                                    <input type="number" class="form-control" id="amountOfItemsInContainer"
                                           name="amountOfItemsInContainer"
                                           placeholder="Enter Amount of items in container" max="9999999"
                                           value="{{$containerData->number_items_in_container}}">
                                    {{-- Error message, will display if nothing has been input--}}
                                    @error('amountOfItemsInContainer')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- Submit button--}}
                        <div class="pb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- Script to restrict the date picker--}}
@push('scripts')
    <script src="{{ URL::asset('/js/datePickerRestriction.js') }}"></script>
@endpush
