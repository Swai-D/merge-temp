@extends('layouts.app')
@section('title', 'Transaction')
@section('content')
@verbatim
<div class="page-header"><div class="add-item d-flex"><div class="page-title"><h4>Transaction</h4><h6>Dashboard</h6></div></div><ul class="table-top-head"><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" href="javascript:location.reload()" title="Refresh"><i class="ti ti-refresh"></i></a></li><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" id="collapse-header" title="Collapse"><i class="ti ti-chevron-up"></i></a></li></ul><div class="page-btn"><button class="btn btn-primary d-flex align-items-center gap-1" type="button">

<i class="ti ti-circle-plus me-1"></i>

                Add Transaction
            </button></div></div>

<div class="mt-4">
<div class="card">

<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3"><div class="search-set"><div class="search-input"><span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span></div></div><div class="d-flex align-items-center flex-wrap gap-2"><div class="dropdown"><a class="btn btn-white btn-md d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-file-export me-1"></i>Export</a><ul class="dropdown-menu p-3">
<li>
<button class="dropdown-item px-3 py-2 rounded text-gray-5 d-flex align-items-center gap-2" data-bs-target="#exampleModalView" data-bs-toggle="modal" type="button">
<i class="ti ti-file-type-pdf"></i>
                                            PDF
                                        </button>
</li>
<li>
<button class="dropdown-item px-3 py-2 rounded text-gray-5 d-flex align-items-center gap-2" data-bs-target="#exampleModalEdit" data-bs-toggle="modal" type="button">
<i class="ti ti-file-spreadsheet"></i>
                                            Excel
                                        </button>
</li>
</ul></div></div></div><div class="card-body p-0"><div class="table-responsive"><table class="datatable table">
<thead class="thead-light">
<tr>
<th scope="col">
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">S.L</span></div>
</th>
<th scope="col">Invoice</th>
<th scope="col">Date</th>
<th scope="col">Transaction Type</th>
<th scope="col">Payment Type</th>
<th scope="col">Amount</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">01</span></div>
</td>
<td>1001</td>
<td>05 Jan 2024</td>
<td>Tuition Fees</td>
<td>Cash</td>
<td>TSh 1,200</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">02</span></div>
</td>
<td>1002</td>
<td>12 Jan 2024</td>
<td>Library Fees</td>
<td>Online</td>
<td>TSh 250</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">03</span></div>
</td>
<td>1003</td>
<td>18 Jan 2024</td>
<td>Exam Fees</td>
<td>Bank Transfer</td>
<td>TSh 600</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">04</span></div>
</td>
<td>1004</td>
<td>25 Jan 2024</td>
<td>Sports Fund</td>
<td>Cash</td>
<td>TSh 430</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">05</span></div>
</td>
<td>1005</td>
<td>30 Jan 2024</td>
<td>Hostel Rent</td>
<td>Online</td>
<td>TSh 1,000</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">06</span></div>
</td>
<td>1006</td>
<td>05 Feb 2024</td>
<td>Book Purchase</td>
<td>Cheque</td>
<td>TSh 540</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">07</span></div>
</td>
<td>1007</td>
<td>12 Feb 2024</td>
<td>Lab Equipment</td>
<td>Cash</td>
<td>TSh 850</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">08</span></div>
</td>
<td>1008</td>
<td>20 Feb 2024</td>
<td>Event Ticket Sale</td>
<td>Online</td>
<td>TSh 1,500</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">09</span></div>
</td>
<td>1009</td>
<td>28 Feb 2024</td>
<td>Donation</td>
<td>Bank Transfer</td>
<td>TSh 2,700</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">10</span></div>
</td>
<td>1010</td>
<td>05 Mar 2024</td>
<td>Miscellaneous</td>
<td>Cash</td>
<td>TSh 320</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
</tbody>
</table></div></div></div>
</div>

@endverbatim
@endsection
@push('modals')
@verbatim
<div aria-hidden="true" class="modal fade" id="exampleModalDelete" tabindex="-1">
<div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:340px">
<div class="modal-content rounded-3 card">
<div class="modal-body pt-4 px-4 pb-4 text-center">
<span class="mb-3 fs-1 text-danger">
<i class="ti ti-trash"></i>
</span>
<h6 class="fw-semibold text-dark mb-0">Are your sure you want to Suspend this teacher
                </h6>
<div class="d-flex align-items-center justify-content-center gap-3 mt-4">
<button class="flex-grow-1 border text-danger px-4 py-2 rounded" data-bs-dismiss="modal" type="reset">
                        Cancel
                    </button>
<button class="flex-grow-1 btn btn-primary border px-3 py-2 rounded" type="button">
                        Yes, Suspend
                    </button>
</div>
</div>
</div>
</div>
</div>
@endverbatim
@endpush
@push('scripts')
@verbatim
<script>document.querySelectorAll("#current-year").forEach(function(e){e.textContent=new Date().getFullYear()});</script>
@endverbatim
@endpush
