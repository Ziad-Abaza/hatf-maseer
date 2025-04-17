<!-- Content -->
<div class="card">

    <div class="table-responsive text-nowrap">
        <div class="card-header flex-column flex-md-row" id="hide">
            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                <div class="dt-buttons btn-group flex-wrap">
                    <div class="btn-group">
                        <button onclick="printDiv('contacts')"
                            class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2"
                            tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                            aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                                </i> <span
                                    class="d-none d-sm-inline-block">{{ __('contacts/index.print') }}</span></span><span
                                class="dt-down-arrow"></span>
                        </button>
                    </div>

                    <div class="btn-group">
                        <button onclick="exportToExcel('contacts')"
                            class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2"
                            tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                            aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                                </i> <span
                                    class="d-none d-sm-inline-block">{{ __('contacts/index.export') }}</span></span><span
                                class="dt-down-arrow"></span>
                        </button>
                    </div>


                    <div class="btn-group" style="width: 10px;">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>{{ __('contacts/index.show') }}
                            <select wire:model.live="select" name="DataTables_Table_0_length"
                                aria-controls="DataTables_Table_0" class="form-select">
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select> {{ __('contacts/index.entries') }}
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>{{ __('contacts/index.search') }}:
                            <input type="search" wire:model.live="search" class="form-control" placeholder=""
                                aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="myTabel" class="table-responsive">
            <table class="datatables-basic table">
                <thead class="d-none d-md-table-header">
                    <tr>
                        <th>{{ __('contacts/index.name') }}</th>
                        <th>{{ __('contacts/index.details') }}</th>
                        <th>{{ __('contacts/index.message') }}</th>
                        <th>{{ __('contacts/index.marketer') }}</th>
                        <th>{{ __('contacts/index.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <!-- Row for Small Screens (Stacked) -->
                        <tr class="d-table-row d-md-none">
                            <td colspan="4">
                                <div class="p-2">
                                    <strong>{{ __('contacts/index.name') }}:</strong>
                                    <i class="ti ti-user text-primary me-1"></i> {{ $contact->name }}
                                </div>
                                <div class="p-2">
                                    <strong>{{ __('contacts/index.details') }}:</strong>
                                    <div><i class="ti ti-mail text-secondary"></i> {{ $contact->email }}</div>
                                    <div><i class="ti ti-phone text-success"></i> {{ $contact->phone }}</div>
                                    <div><i class="ti ti-building text-warning"></i> {{ $contact->company }}</div>
                                    <div><i class="ti ti-briefcase text-info"></i> {{ $contact->position }}</div>
                                    <div><i class="ti ti-map-pin text-danger"></i> {{ $contact->city }}</div>
                                </div>
                                <div class="p-2">
                                    <strong>{{ __('contacts/index.message') }}:</strong>
                                    <i class="ti ti-message-circle text-dark"></i> {{ Str::limit($contact->message, 50) }}
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">
                                        <i class="ti ti-eye text-primary"></i>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <strong>{{ __('contacts/index.marketer') }}:</strong>
                                    @if ($contact->marketer)
                                    <i class="ti ti-user-check text-primary"></i> {{ $contact->marketer->name }}
                                    @else
                                    <span class="text-muted">لا يوجد مسوق</span>
                                    @endif
                                </div>
                                <div class="p-2">
                                    <strong>{{ __('contacts/index.actions') }}:</strong>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item text-danger" type="button" wire:click="delete({{ $contact->id }})">
                                                <i class="ti ti-trash"></i> حذف
                                            </button>
                                            <a class="dropdown-item text-dark"
                                                href="{{ route('contacts.show', ['contact' => $contact->id, 'slug' => 'replay']) }}">
                                                <i class="ti ti-mail-forward"></i> رد
                                            </a>
                                            <button class="dropdown-item text-dark" type="button" data-bs-toggle="modal"
                                                data-bs-target="#messageModal{{ $contact->id }}">
                                                <i class="ti ti-message-circle"></i> عرض الرسالة
                                            </button>
                                            <a class="dropdown-item text-dark"
                                                href="{{ route('contacts.show', ['contact' => $contact->id, 'slug' => 'redirect']) }}">
                                                <i class="ti ti-send"></i> إعادة توجيه
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Row for Large Screens (Table Format) -->
                        <tr class="d-none d-md-table-row">
                            <td>
                                <i class="ti ti-user text-primary me-1"></i> {{ $contact->name }}
                            </td>
                            <td>
                                <div><i class="ti ti-mail text-secondary"></i> {{ $contact->email }}</div>
                                <div><i class="ti ti-phone text-success"></i> {{ $contact->phone }}</div>
                                <div><i class="ti ti-building text-warning"></i> {{ $contact->company }}</div>
                                <div><i class="ti ti-briefcase text-info"></i> {{ $contact->position }}</div>
                                <div><i class="ti ti-map-pin text-danger"></i> {{ $contact->city }}</div>
                            </td>
                            <td>
                                <i class="ti ti-message-circle text-dark"></i> {{ Str::limit($contact->message, 50) }}
                                <a href="#" data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">
                                    <i class="ti ti-eye text-primary"></i>
                                </a>
                            </td>
                            <td>
                                @if ($contact->marketer)
                                <i class="ti ti-user-check text-primary"></i> {{ $contact->marketer->name }}
                                @else
                                <span class="text-muted">لا يوجد مسوق</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item text-danger" type="button" wire:click="delete({{ $contact->id }})">
                                            <i class="ti ti-trash"></i> حذف
                                        </button>
                                        <a class="dropdown-item text-dark"
                                            href="{{ route('contacts.show', ['contact' => $contact->id, 'slug' => 'replay']) }}">
                                            <i class="ti ti-mail-forward"></i> رد
                                        </a>
                                        <button class="dropdown-item text-dark" type="button" data-bs-toggle="modal"
                                            data-bs-target="#messageModal{{ $contact->id }}">
                                            <i class="ti ti-message-circle"></i> عرض الرسالة
                                        </button>
                                        <a class="dropdown-item text-dark"
                                            href="{{ route('contacts.show', ['contact' => $contact->id, 'slug' => 'redirect']) }}">
                                            <i class="ti ti-send"></i> إعادة توجيه
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Message Modal -->
                        <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $contact->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel{{ $contact->id }}">
                                            <i class="ti ti-message-circle"></i> محتوى الرسالة
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                                    </div>
                                    <div class="modal-body text-wrap">
                                        {{ $contact->message }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    @endforeach
                </tbody>
            </table>
        </div>



        {{ $contacts->links() }}

        <div style="width: 1%;"></div>
        <div style="width: 1%;"></div>
    </div>
</div>
<!-- / Content -->




@script
    <script>
        $wire.on('del', (data) => {
            const message = data.message;
            Swal.fire({
                icon: 'success',
                title: message,
                showConfirmButton: false,
                timer: 2000
            });
        });
    </script>
@endscript
