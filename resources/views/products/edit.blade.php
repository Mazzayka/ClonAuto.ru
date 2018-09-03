{{-- ��� ������ ����� �������������� ������ � ��, ���������� ��� Bootstrap --}}

{{-- ���� ������ ��������� (���������) resources/views/base.blade.php --}}
@extends('base')

{{-- � ������ title ������������� ������� ����� ������� ������� �����: Edit product --}}
@section('title', __('Edit product'))

{{-- � ������ main ������������� ������� ����� �������� ����� --}}
@section('main')

    {{-- ����� ������������� ������� HTTP PUT �� ���?�����: products/ID, ��� ID??�?��������� ���� ������ --}}
    {{
        Form::model($product, [
            'method' => 'PUT',
            'route'  => [
                'products.update',
                $product->id,
            ]
        ])
    }}

    {{-- �������� ������ resources/views/products/partials/form.blade.php --}}
    @include('products.partials.form')

    {{-- ������ ������������ ����� --}}
    {{
        Form::submit(
            __('Update product'),
            [
                'class' => 'btn btn-block btn-success',
            ]
        )
    }}

    {{ Form::close() }}
@endsection