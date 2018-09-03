{{-- ��� ������ ����� ���������� ������ � ��, ���������� ��� Bootstrap --}}

{{-- ���� ������ ��������� (���������) resources/views/base.blade.php --}}
@extends('base')

{{-- � ������ title ������������� ������� ����� ������� ������� �����: Create product --}}
@section('title', __('Create product'))

{{-- � ������ main ������������� ������� ����� �������� ����� --}}
@section('main')

    {{-- ����� ������������� ������� HTTP POST �� ������� products.create --}}
    {{
        Form::model($product, [
            'method' => 'POST',
            'route'  => 'products.store'
        ])
    }}

    {{-- �������� ������ resources/views/products/partials/form.blade.php --}}
    @include('products.partials.form')

    {{-- ������ ������������ ����� --}}
    {{
        Form::submit(
            __('Save product'),
            [
                'class' => 'btn btn-block btn-success',
            ]
        )
    }}

    {{ Form::close() }}
@endsection