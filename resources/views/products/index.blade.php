{{-- ��� ������ ������� ������� �� ��, ���������� ��� Bootstrap --}}

{{-- ���� ������ ��������� (���������) resources/views/base.blade.php --}}
@extends('base')

{{-- � ������ title ������������� ������� ����� ������� ������� �����: Products --}}
@section('title', __('Products'))

{{-- � ������ main ������������� ������� ����� �������� ����� --}}
@section('main')
    <p>
        {{-- ����� Html::secureLink(URL, �������, ��������) ������ ������. --}}
        {{
            Html::secureLink(
                route('products.create'),
                __('Create product')
            )
        }}
    </p>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Price') }}</th>
                <th>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                    </span>
                </th>
                <th>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true">
                    </span>
                </th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ Html::secureLink(
                        route('products.edit', $product->id),
                        __('Edit product')
                    ) }}</td>
                    <td>{{ Html::secureLink(
                        route('products.remove', $product->id),
                        __('Remove product')
                    ) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection