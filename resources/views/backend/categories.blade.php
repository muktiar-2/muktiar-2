<?php
?>
<x-backend.layouts.master>
    <x-slot name="pagetitle">Table</x-slot>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actionn</th>
                            {{--<th>Start date</th>--}}
                            {{--<th>Salary</th>--}}
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actionn</th>
                            {{--<th>Start date</th>--}}
                            {{--<th>Salary</th>--}}
                        </tr>
                        </tfoot>
                       <tbody>

                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</x-backend.layouts.master>
