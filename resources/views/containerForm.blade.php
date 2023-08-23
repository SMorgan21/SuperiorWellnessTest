@extends('layout.master')

@section('pageTitle', 'Container Data Entry Form')

@include('nav')

@section('main')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <!-- Page Heading -->
                <h1 class="mt-5 mb-5">Add shipping container data</h1>
                <div class="row">
                    <div class="col">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                                <br>
                                <br>
                                <br>
                                <a href='{{url('containerData')}}' class="btn btn-primary"> View Container Data</a>
                            </div>
                        @endif
                        <form method="post" action='{{url('saveContainerData')}}' id="addContainerData">
                            @csrf
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-sm-12 col-lg-6 pb-3">
                                        <label for="containerNumber">Container Number</label>
                                        <input type="text" class="form-control"
                                               pattern="^([A-Z a-z]{3})(U|J|Z|u|j|)(\d{6})(\d{1})$"
                                               name="containerNumber"
                                               placeholder="Enter Container Number (to ISO 6346 standard)"
                                               maxlength="11">
                                        <small id="containerNumberHelp" class="form-text text-muted">The container
                                            number MUST
                                            be
                                            formatted to
                                            <mark>ISO 6346</mark>
                                            standard e.g.
                                            <mark>QSWU1231231</mark>
                                        </small>
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
                                               placeholder="Enter Container Final Destination">
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
                                              min="" placeholder="Enter Port Due Date">
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
                                               placeholder="Enter Warehouse Due Date">
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
                                               name="shipperReferenceNumber"
                                               placeholder="Enter Shipper Reference Number">
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
                                               placeholder="Enter Shipper Invoice Number">
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
                                               placeholder="Enter Shipping Invoice Value" min="0"
                                               step=".01">
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
                                               placeholder="Enter Amount of items in container">
                                        @error('amountOfItemsInContainer')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script src="{{ URL::asset('/js/datePickerRestriction.js') }}"></script>
@endpush
