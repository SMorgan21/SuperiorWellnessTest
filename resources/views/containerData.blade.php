@extends('layout.master')

@section('pageTitle', 'Container Data')

<!-- Push a style dynamically from a view -->
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>
@endpush

@include('nav')

@section('main')
    <div class="container">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table id="containerData" class="table table-condensed table-striped table-bordered table-fit table-hover">
                    <thead>
                    <tr>
                        <th>container_number</th>
                        <th>container_final_destination</th>
                        <th>port_due_date</th>
                        <th>warehouse_due_date</th>
                        <th>shipper_reference_number</th>
                        <th>shipper_invoice_number</th>
                        <th>shipping_invoice_value</th>
                        <th>number_items_in_container</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>

@endsection

<!-- Push a script dynamically from a view -->
@push('scripts')
    <script src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://nightly.datatables.net/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ URL::asset('/js/containerDataDisplayTables.js') }}"></script>
@endpush
