{{-- ���� ������ � ������ �����, ���������� ��� Bootstrap --}}

<div class="form-group">
    {{-- ����� � ���� ����� ������������ ������ --}}
    {{-- �� ����� ����� ������� ������� ����� Title --}}
    {{ Form::label('title', __('Title')) }}

    {{-- ���� ����� ������������ ������ --}}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{-- ����� � ���� ����� ���� ������ --}}
    {{-- �� ����� ����� ������� ������� ����� Price --}}
    {{ Form::label('price', __('Price')) }}

    {{-- ���� ����� ���� ������ --}}
    {{ Form::number('price', null, ['class' => 'form-control']) }}
</div>