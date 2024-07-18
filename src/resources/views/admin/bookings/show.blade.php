@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.details') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>{{ trans('cruds.booking.fields.id') }}</th>
                    <td>{{ $booking->id }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.nama_pemesan') }}</th>
                    <td>{{ $booking->nama_pemesan }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.jenis_tempat') }}</th>
                    <td>{{ $booking->jenis_tempat }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.jenis_tamu') }}</th>
                    <td>{{ $booking->jenis_tamu }}</td>
                </tr>
                <tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.jumlah_tamu') }}</th>
                    <td>{{ $booking->jumlah_tamu }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.start_book') }}</th>
                    <td>{{ $booking->start_book }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.finish_book') }}</th>
                    <td>{{ $booking->finish_book }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.booking.fields.category') }}</th>
                    <td>{{ App\Models\Booking::CATEGORY_SELECT[$booking->category] }}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
</div>
@endsection
