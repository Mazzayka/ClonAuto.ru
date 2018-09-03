{{-- ��� ������ ����� �������� ������ �� ��, ���������� ��� Bootstrap --}}

{{-- ���� ������ ��������� (���������) resources/views/base.blade.php --}}
@extends('base')

{{-- � ������ title ������������� ������� ����� ������� ������� �����: Edit product --}}
@section('title', __('Remove product'))

{{-- � ������ main ������������� ������� ����� �������� ����� --}}
@section('main')

    {{-- ����� ������������� ������� HTTP DELETE �� ���?�����: products/ID, ��� ID??�?��������� ���� ������ --}}
    {{
        Form::model($product, [
            'method' => 'DELETE',
            'route'  => [
                'products.destroy',
                $product->id,
            ]
        ])
    }}

    {{-- ������� ������������ ������ --}}
    {{ $product->title }}

    {{-- ������ ������������ ����� --}}
    {{
        Form::submit(
            __('Remove product'),
            [
                'class' => 'btn btn-block btn-success',
            ]
        )
    }}

    {{ Form::close() }}
@endsection