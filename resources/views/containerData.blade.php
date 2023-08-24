@extends('layout.master')

@section('pageTitle', 'Container Data')

<!-- Push a style dynamically from a view -->
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"/>
@endpush
{{-- Include for the navbar --}}
@include('nav')
{{-- Beginning of main content section --}}
@section('main')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- Page title --}}
                <h1 class="m-0 font-weight-bold text-dark">Shipping Container Details</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- Data Table --}}
                        <table id="containerData" class="table table-striped table-bordered">
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
        </div>
    </div>
@endsection

<!-- Dynamic scripts only used for this page -->
@push('scripts')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ URL::asset('/js/containerDataDisplayTables.js') }}"></script>
    <script src="{{ URL::asset('/js/checkDelete.js') }}"></script>
@endpush
