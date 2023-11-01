@extends('admin.admin_master')
@section('title', 'Property')
@section('admin')

<h2 class="text-bold text-1100 mb-5">@yield('title')</h2>
<div id="members" data-list='{"valueNames":["property_name","lowest_price","max_price","property_type","property_status","status"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input search" type="search" placeholder="Search members" aria-label="Search">
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center">
                <button class="btn btn-link text-900 me-4 px-0">
                    <span class="fa-solid fa-file-export fs--1 me-2"></span>Export
                </button>
                <a href="{{ route('property.add') }}" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add Property</a>
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="property_name" style="width:15%; min-width:200px;">Property Name</th>
                        <th class="sort align-middle" scope="col" data-sort="lowest_price" style="width:15%; min-width:200px;">Lowest Price</th>
                        <th class="sort align-middle" scope="col" data-sort="max_price" style="width:15%; min-width:200px;">Max Price</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="property_type" style="width:20%; min-width:200px;">Property Type</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="property_status" style="width:20%; min-width:200px;">Property Status</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="status" style="width:21%; min-width:200px;">Status</th>
                        <th scope="col" style="width: auto;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list" id="members-table-body">
                    @foreach($allData as $key => $item)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="property_name align-middle white-space-nowrap">
                            <a class="d-flex align-items-center text-900 text-hover-1000" href="#!">
                                <div class="avatar avatar-m">
                                    <img class="rounded-circle" src="{{ asset($item->property_thumbnail) }}" alt="">
                                </div>
                                <h6 class="mb-0 ms-3 fw-semi-bold">{{ $item->property_name }}</h6>
                            </a>
                        </td>
                        <td class="lowest_price align-middle white-space-nowrap">₦{{ number_format($item->lowest_price, 2) }}</td>
                        <td class="max_price align-middle white-space-nowrap">₦{{ number_format($item->max_price, 2) }}</td>
                        <td class="property_type align-middle white-space-nowrap">{{ $item['type']['property_type_name'] }} </td>
                        <td class="property_status align-middle white-space-nowrap">
                                @if ($item->property_status == 'sale')
                                <span class="badge badge-phoenix fs--2 badge-phoenix-primary">Sale</span>
                                @else
                                <span class="badge badge-phoenix fs--2 badge-phoenix-danger">Rent</span>
                                @endif
                        </td>
                        <td class="status align-middle white-space-nowrap">
                            @if ($item->status == 'active')
                            <span class="badge badge-phoenix fs--2 badge-phoenix-success">Active</span>
                            @else
                            <span class="badge badge-phoenix fs--2 badge-phoenix-warning">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group d-flex flex-fill">

                                <a class="btn btn-sm btn-warning me-1" title="Data Detail" href="{{ route('property.details', ['id' => $item->id, 'slug' => Str::slug($item->property_name)]) }}">Details</a>

                                <a class="btn btn-sm btn-secondary me-1" title="Edit Data" href="{{ route('property.edit', ['id' => $item->id, 'slug' => Str::slug($item->property_name)]) }}">Edit</a>
                                <a class="btn btn-sm btn-danger" title="Delete Data" id="delete_data" href="{{ route('property.delete', $item->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p>
                <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                <a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex">
                <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul>
                <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
</div>
@endsection
