@extends('layouts.app')
@section('title', 'Income Head List')
@section('content')
@verbatim
<div class="page-header"><div class="add-item d-flex"><div class="page-title"><h4>Income Head List</h4><h6>Dashboard</h6></div></div><ul class="table-top-head"><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" href="javascript:location.reload()" title="Refresh"><i class="ti ti-refresh"></i></a></li><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" id="collapse-header" title="Collapse"><i class="ti ti-chevron-up"></i></a></li></ul><div class="page-btn"><button class="btn btn-primary d-flex align-items-center gap-1" type="button">

<i class="ti ti-circle-plus me-1"></i>

                Add Income Head List
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
<th scope="col">Name</th>
<th scope="col">Fees Type</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">01</span></div>
</td>
<td>Book Sale</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">02</span></div>
</td>
<td>Uniform Sale</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">03</span></div>
</td>
<td>Donation</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">04</span></div>
</td>
<td>Fundraising Gala</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">05</span></div>
</td>
<td>Raffle Tickets</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">06</span></div>
</td>
<td>Membership Drive</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">07</span></div>
</td>
<td>Bake Sale</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">08</span></div>
</td>
<td>Car Wash</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">09</span></div>
</td>
<td>Silent Auction</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">10</span></div>
</td>
<td>Craft Fair</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">11</span></div>
</td>
<td>Donation</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-success d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Active</span>
</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">12</span></div>
</td>
<td>Membership Drive</td>
<td>May month fees, Admission fees, Exam fees</td>
<td><span class="badge badge-danger d-inline-flex align-items-center badge-xs"><i class="ti ti-point-filled me-1"></i>Inactive</span>
</td>
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
