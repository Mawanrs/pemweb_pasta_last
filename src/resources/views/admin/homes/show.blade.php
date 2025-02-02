@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.home.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.homes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.icon.fields.id') }}
                        </th>
                        <td>
                            {{ $home->id }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.home.fields.title') }}
                        </th>
                        <td>
                            {{ $home->title_1 }}
                        </td>
                    </tr> --}}
                    <tr>
                        <th>
                            {{ trans('cruds.home.fields.description') }}
                        </th>
                        <td>
                            {!! $home->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.home.fields.layanan') }}
                        </th>
                        <td>
                            {{ $home->layanan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.home.fields.icon') }}
                        </th>
                        <td>
                            {{ $home->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.home.fields.image') }}
                        </th>
                        <td>
                            @if($home->image)
                                <a href="{{ $home->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $home->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.homes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection