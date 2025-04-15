@extends('layouts.dash')

@section('content')
    <!-- Content -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <div class="card-header flex-column flex-md-row" id="hide">
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <div class="btn-group">
                            <button onclick="printDiv('banners')"
                                class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2"
                                tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                                aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                                    </i> <span
                                        class="d-none d-sm-inline-block">{{ __('dash/index.print') }}</span></span><span
                                    class="dt-down-arrow"></span>
                            </button>
                        </div>

                        <div class="btn-group">
                            <button onclick="exportToExcel('banners')"
                                class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2"
                                tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                                aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                                    </i> <span
                                        class="d-none d-sm-inline-block">{{ __('dash/index.export') }}</span></span><span
                                    class="dt-down-arrow"></span>
                            </button>
                        </div>

                        <div class="btn-group">
                            <a href="{{ route('banners.create') }}" class="btn btn-secondary create-new btn-primary"
                                tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span><i class="ti ti-plus me-sm-1"></i> <span
                                        class="d-none d-sm-inline-block">{{ __('dash/index.add_record') }}</span></span>
                            </a>
                        </div>

                        <div class="btn-group" style="width: 10px;">
                        </div>
                    </div>
                </div>
            </div>

            <div id="myTabel">
                <table class="datatables-basic table table-hover table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            {{-- <th>
                               <div><i class="ti ti-text-size"></i> {{ __('dash/index.content_ar') }}</div> 
                               <div><i class="ti ti-text-size"></i> {{ __('dash/index.content_en') }}</div>     
                            </th> --}}
                            <th><i class="ti ti-photo"></i> {{ __('dash/index.img') }}</th>
                            <th><i class="ti ti-settings"></i> {{ __('dash/index.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($banners as $banner)
                            <tr>
                                {{-- <td>
                                    <ul>
                                        <li>{{ Str::limit(de_ar($banner['content']), 10, '...') }}</li>
                                        <li>{{ Str::limit(de_en($banner['content']), 10, '...') }}</li>
                                    </ul>
                                </td> --}}

                                <!-- Image Preview -->
                                <td class="text-center">
                                    <img src="{{ $banner->getFirstMediaUrl('banners') }}" alt="Banner Image"
                                        class="rounded-circle border shadow-sm"
                                        style="width: 55px; height: 55px; object-fit: cover;">
                                </td>

                                <!-- Actions -->
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-light p-0 dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-5"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- Edit -->
                                            <a class="dropdown-item text-primary"
                                                href="{{ route('banners.edit', $banner->id) }}">
                                                <i class="ti ti-pencil"></i> {{ __('dash/index.edit') }}
                                            </a>

                                            <!-- Show -->
                                            <a class="dropdown-item text-primary"
                                                href="{{ route('banners.show', $banner->id) }}">
                                                <i class="ti ti-eye"></i> {{ __('dash/index.show') }}
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                                                onsubmit="return confirm('{{ __('dash/index.delete_confirm') }}')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item text-danger" type="submit">
                                                    <i class="ti ti-trash"></i> {{ __('dash/index.delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $banners->links() }}

            <div style="width: 1%;"></div>
            <div style="width: 1%;"></div>
        </div>
    </div>
    <!-- / Content -->
@endsection
