//set up of data table for products
$(document).ready(function () {
    $('#containerData').DataTable({

        // Options
        "scrolling": true,
        'ordering': true,
        "paging": true,
        "scrollY": 400,


        //Ajax
        ajax: {
            url: '/showContainerData',
            dataSrc: ''
        },
        //Coloumn Definition
        columnDefs: [
            {
                "defaultContent": "-",
                "targets": "_all"
            },
        ],
        //Column Set up
        columns: [
            {data: 'container_number', title: "Container #"},
            {data: 'container_final_destination', title: "Final Dest.",},
            {data: 'port_due_date', title: "Port Due Date",},
            {data: 'warehouse_due_date', title: "Warehouse Due Date",},
            {data: 'shipper_reference_number', title: "Shipper Reference #",},
            {data: 'shipper_invoice_number', title: "Shipper Invoice #",},
            {data: 'shipping_invoice_value', title: "Shipping Invoice Value",},
            {data: 'number_items_in_container', title: "Number Of Items In Container",},
            {
                data: 'editButton',
                render: function (data, type, row) {
                    return row.editButton + row.deleteButton;
                }
            },
        ],
    });
});
