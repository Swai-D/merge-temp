@extends('layouts.app')
@section('title', 'Subscription Plan')
@section('content')
@verbatim
<div class="page-header"><div class="add-item d-flex"><div class="page-title"><h4>Subscription Plan</h4><h6>Dashboard</h6></div></div><ul class="table-top-head"><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" href="javascript:location.reload()" title="Refresh"><i class="ti ti-refresh"></i></a></li><li class="me-2"><a data-bs-placement="top" data-bs-toggle="tooltip" id="collapse-header" title="Collapse"><i class="ti ti-chevron-up"></i></a></li></ul></div>

<div class="mt-4">
<div class="card h-100 p-0 rounded-3 overflow-hidden mt-4">
<div class="card-body p-5">
<div class="row justify-content-center">
<div class="col-xxl-10">
<div class="text-center">
<h4 class="mb-0">Simple, Transparent Pricing</h4>
</div>
<div>
<div class="form-switch d-flex align-items-center gap-3 mt-4 justify-content-center">
<label class="form-check-label fw-medium text-gray-5" for="yes">Monthly</label>
<input class="form-check-input choose-plan-input" id="yes" role="switch" type="checkbox"/>
<label class="form-check-label fw-medium text-gray-5" for="yes">Annually</label>
</div>
</div>
<div class="row gy-4">
<div class="col-xxl-4 col-sm-6">
<div class="position-relative overflow-hidden border">
<div class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center rounded-3 bg-primary-transparent" style="width:72px;height:72px">
<img alt="Image" src="@endverbatim{{ asset('assets/img/edu/icons/price-icon1.png') }}@verbatim"/>
</span>
<div class="">
<span class="fw-medium text-gray-5">For
                                                    individuals</span>
<h6 class="mb-0">Basic</h6>
</div>
</div>
<p class="mt-3 mb-0 text-gray-5 mb-4">Lorem ipsum dolor sit amet
                                            doloroli sitiol conse ctetur adipiscing elit. </p>
<h3 class="mb-4">
                                            $<span class="price-range">99</span>
<span class="fw-medium text-gray-5">/monthly</span>
</h3>
<span class="mb-3 fw-medium">What's included</span>
<ul>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">All analytics features</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Up to 250,000 tracked
                                                    visits</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Normal support</span>
</li>
<li class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Up to 3 team members</span>
</li>
</ul>
<button class="bg-primary text-white text-center border btn-sm px-2 py-2 w-100 rounded mt-4" data-bs-target="#exampleModal" data-bs-toggle="modal" type="button">Get started</button>
</div>
</div>
<div class="col-xxl-4 col-sm-6">
<div class="position-relative overflow-hidden border bg-primary text-white z-1">
<img alt="Image" class="position-absolute end-0 z-n1" src="@endverbatim{{ asset('assets/img/edu/icons/pricing-shape.png') }}@verbatim"/>
<span class="bg-white bg-opacity-25 text-white py-2 px-4 position-absolute end-0 top-0 z-1">Popular</span>
<div class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center rounded-3" style="width:72px;height:72px">
<img alt="Image" src="@endverbatim{{ asset('assets/img/edu/icons/price-icon2.png') }}@verbatim"/>
</span>
<div class="">
<span class="fw-medium text-white">For startups</span>
<h6 class="mb-0 text-white">Pro</h6>
</div>
</div>
<p class="mt-3 mb-0 text-white mb-4">Lorem ipsum dolor sit amet doloroli
                                            sitiol conse ctetur adipiscing elit. </p>
<h3 class="mb-4 text-white">
                                            $<span class="price-range">199</span>
<span class="fw-medium text-white">/monthly</span>
</h3>
<span class="mb-3 fw-medium">What's included</span>
<ul>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-white rounded-circle text-primary" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-white">All analytics features</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-white rounded-circle text-primary" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-white">Up to 250,000 tracked visits</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-white rounded-circle text-primary" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-white">Normal support</span>
</li>
<li class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center bg-white rounded-circle text-primary" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-white">Up to 3 team members</span>
</li>
</ul>
<button class="bg-white text-primary text-white text-center border border-white btn-sm px-2 py-2 w-100 rounded mt-4" data-bs-target="#exampleModal" data-bs-toggle="modal" type="button">Get started</button>
</div>
</div>
<div class="col-xxl-4 col-sm-6">
<div class="position-relative overflow-hidden border">
<div class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center rounded-3 bg-primary-transparent" style="width:72px;height:72px">
<img alt="Image" src="@endverbatim{{ asset('assets/img/edu/icons/price-icon3.png') }}@verbatim"/>
</span>
<div class="">
<span class="fw-medium text-gray-5">For big
                                                    companies</span>
<h6 class="mb-0">Enterprise</h6>
</div>
</div>
<p class="mt-3 mb-0 text-gray-5 mb-4">Lorem ipsum dolor sit amet
                                            doloroli sitiol conse ctetur adipiscing elit. </p>
<h3 class="mb-4">
                                            $<span class="price-range">399</span>
<span class="fw-medium text-gray-5">/monthly</span>
</h3>
<span class="mb-3 fw-medium">What's included</span>
<ul>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">All analytics features</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Up to 250,000 tracked
                                                    visits</span>
</li>
<li class="d-flex align-items-center gap-3 mb-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Normal support</span>
</li>
<li class="d-flex align-items-center gap-3">
<span class="d-flex justify-content-center align-items-center bg-primary rounded-circle" style="width:24px;height:24px"><i class="ti ti-check"></i></span>
<span class="text-gray-5">Up to 3 team members</span>
</li>
</ul>
<button class="bg-primary text-white text-center border btn-sm px-2 py-2 w-100 rounded mt-4" data-bs-target="#exampleModal" data-bs-toggle="modal" type="button">Get started</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endverbatim
@endsection
@push('scripts')
@verbatim
<script>

    let choosePlanInput = document.querySelector('.choose-plan-input');
    let priceRanges = document.querySelectorAll('.price-range');

    // Store original prices (once)
    priceRanges.forEach(price => {
        price.dataset.original = price.innerHTML.trim();
    });

    choosePlanInput.addEventListener('change', function () {

        if (this.checked) {
            // When checked → Multiply by 10
            priceRanges.forEach(price => {
                let cleanValue = price.dataset.original.replace(/[^0-9.]/g, '').trim();
                let multiplied = Number(cleanValue) * 10;
                price.innerHTML = multiplied;
            });

        } else {
            // When unchecked → Restore original values
            priceRanges.forEach(price => {
                price.innerHTML = price.dataset.original;
            });
        }
    });

</script>
<script>document.querySelectorAll("#current-year").forEach(function(e){e.textContent=new Date().getFullYear()});</script>
@endverbatim
@endpush
