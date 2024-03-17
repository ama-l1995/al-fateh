@extends('backend.layouts.parent')


@section('title', 'All Admins')


@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection


@extends('backend.incloudes.messages')

@section('content')
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>{{ __($localeLang.'_first_name') }}</th>
            <th>{{ __($localeLang.'_gender') }}</th>
            <th>{{ __('email') }}</th>
            <th>{{ __($localeLang.'_type') }}</th>
            <th>{{ __('created_at') }}</th>
            <th>{{ __($localeLang.'_status') }}</th>
            <th>{{ __('actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin)
        <tr>
            <td>{{ $admin->{$localeLang.'_first_name'} }}</td>
            <td>{{ $admin->{$localeLang.'_gender'} }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->{$localeLang.'_type'} }}</td>
            <td>{{ $admin->created_at }}</td>

            <td class="{{ $admin->status == 0 ? 'text-danger' : 'text-success' }}">
                @if($localeLang == 'en')
                @if($admin->status == 0)
                {{ __('Inactive') }}
                @else
                {{ __('Active') }}
                @endif
                @else
                {{ $admin->status == 0 ? 'غير مفعل' : 'مفعل' }}
                @endif
            </td>
            <td>
                @if($localeLang == 'en')
                <a href="{{ route('edit_admin', ['id' => $admin->id, 'locale' => app()->getLocale()]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('delete_admin', ['id' => $admin->id, 'locale' => app()->getLocale()]) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @else
                <a href="{{ route('edit_admin', ['id' => $admin->id, 'locale' => app()->getLocale()]) }}" class="btn btn-warning">تعديل</a>
                <form action="{{ route('delete_admin', ['id' => $admin->id, 'locale' => app()->getLocale()]) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection


@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection