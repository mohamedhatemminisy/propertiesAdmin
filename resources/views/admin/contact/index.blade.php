@extends('admin.components.index')
{{-- Preparing page properties --}}
@section('module_name') @lang('contact.contact') @endsection
@section('permission', 'organization')
@section('title') @lang('contact.contact') @endsection
<style>
    .card-toolbar {
        display: none !important
    }

</style>

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.name')</th>
                <th>@lang('general.email')</th>
                <th>@lang('general.phone')</th>
                <th>@lang('general.message')</th>
                <th>@lang('general.created_at')</th>
                <!--<th>@lang('general.control')</th>-->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{!! $value->message !!}</td>
                    <td nowrap="nowrap">{{ $value->created_at }}</td>
            
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data->links('admin.components.pagination.default') !!}
@endsection
