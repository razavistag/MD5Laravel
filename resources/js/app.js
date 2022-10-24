import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
// import '../sass/app.scss';

// import * as bootstrap from 'bootstrap';

import * as mdb from 'mdb-ui-kit'; // lib
import { Input } from 'mdb-ui-kit'; // module

import $ from 'jquery';
window.$ = $;


import DataTable from 'datatables.net';
window.DataTable = DataTable;
DataTable(window, $);