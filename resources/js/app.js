import './bootstrap';

// resources/js/app.js

window.$ = window.jQuery = require('jquery');
require('datatables.net-bs4');

$(document).ready(function() {
    $('#dataTable').DataTable();
});
