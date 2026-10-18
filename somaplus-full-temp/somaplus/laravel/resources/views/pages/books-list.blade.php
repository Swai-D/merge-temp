@extends('layouts.app')
@section('title', 'Books List')
@section('content')
@verbatim
<div class="page-header"><div class="add-item d-flex"><div class="page-title"><h4>Books List</h4><h6>Dashboard</h6></div></div><ul class="table-top-head"><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" href="javascript:location.reload()" title="Refresh"><i class="ti ti-refresh"></i></a></li><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" id="collapse-header" title="Collapse"><i class="ti ti-chevron-up"></i></a></li></ul><div class="page-btn"><button class="btn btn-primary d-flex align-items-center gap-1" type="button">

<i class="ti ti-circle-plus me-1"></i>

                Add Book
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
<th scope="col">Subject</th>
<th scope="col">Book Name</th>
<th scope="col">Publisher</th>
<th scope="col">Author</th>
<th scope="col">Number</th>
<th scope="col">Rack No</th>
<th scope="col">Qty</th>
<th scope="col">Available</th>
<th scope="col">Price</th>
<th scope="col">Exam Date</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">01</span></div>
</td>
<td>Art</td>
<td>The Little Prince</td>
<td>Devon Lane</td>
<td>Darrell Steward</td>
<td>101</td>
<td>1234</td>
<td>60</td>
<td>20</td>
<td>TSh 250</td>
<td>05 Jun 2015</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">02</span></div>
</td>
<td>Mathematics</td>
<td>Advanced Algebra</td>
<td>Penguin Books</td>
<td>Jane Cooper</td>
<td>102</td>
<td>5678</td>
<td>40</td>
<td>18</td>
<td>TSh 300</td>
<td>10 Jul 2016</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">03</span></div>
</td>
<td>Science</td>
<td>Physics for Beginners</td>
<td>HarperCollins</td>
<td>Guy Hawkins</td>
<td>103</td>
<td>8790</td>
<td>55</td>
<td>30</td>
<td>TSh 280</td>
<td>15 Mar 2017</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">04</span></div>
</td>
<td>History</td>
<td>World Wars</td>
<td>Oxford Press</td>
<td>Leslie Alexander</td>
<td>104</td>
<td>3210</td>
<td>35</td>
<td>12</td>
<td>TSh 200</td>
<td>21 Sep 2018</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">05</span></div>
</td>
<td>Geography</td>
<td>Earth &amp; Beyond</td>
<td>Macmillan</td>
<td>Robert Fox</td>
<td>105</td>
<td>4311</td>
<td>45</td>
<td>10</td>
<td>TSh 310</td>
<td>08 Jan 2019</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">06</span></div>
</td>
<td>Biology</td>
<td>Human Anatomy</td>
<td>Cambridge House</td>
<td>Annette Black</td>
<td>106</td>
<td>2915</td>
<td>70</td>
<td>35</td>
<td>TSh 400</td>
<td>11 Dec 2020</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">07</span></div>
</td>
<td>Economics</td>
<td>Money &amp; Markets</td>
<td>Random House</td>
<td>Esther Howard</td>
<td>107</td>
<td>3425</td>
<td>50</td>
<td>28</td>
<td>TSh 270</td>
<td>19 Mar 2021</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">08</span></div>
</td>
<td>Computer Science</td>
<td>JavaScript Essentials</td>
<td>TechWorld</td>
<td>Kathryn Murphy</td>
<td>108</td>
<td>5320</td>
<td>80</td>
<td>60</td>
<td>TSh 500</td>
<td>05 Apr 2022</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">09</span></div>
</td>
<td>English</td>
<td>Shakespeare's Works</td>
<td>Vintage Books</td>
<td>Courtney Henry</td>
<td>109</td>
<td>1567</td>
<td>65</td>
<td>45</td>
<td>TSh 350</td>
<td>12 May 2023</td>
<td>
<div class="dropdown table-action"><a aria-expanded="false" class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end p-2"><li><a class="dropdown-item d-flex align-items-center rounded-1" href="javascript:void(0);"><i class="me-2"></i>Edit</a></li><li><a class="dropdown-item d-flex align-items-center rounded-1 text-danger" data-bs-target="#exampleModalDelete" data-bs-toggle="modal" href="javascript:void(0);"><i class="me-2"></i>Delete</a></li></ul></div>
</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center"><label class="checkboxs"><input type="checkbox"/><span class="checkmarks"></span></label><span class="ms-2">10</span></div>
</td>
<td>Chemistry</td>
<td>Organic Compounds</td>
<td>Scholastic</td>
<td>Wade Warren</td>
<td>110</td>
<td>4879</td>
<td>75</td>
<td>55</td>
<td>TSh 420</td>
<td>10 Feb 2024</td>
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
