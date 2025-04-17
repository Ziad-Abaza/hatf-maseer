@extends('layouts.dash')

@section('content')
<div class="card">
    <div class="table-responsive text-nowrap">
        <div class="card-header flex-column flex-md-row" id="hide">
            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                <a href="{{ route('marketers.create') }}" class="btn btn-secondary create-new btn-primary">
                    <span><i class="ti ti-plus me-sm-1"></i> <span>{{ __('dash/index.add_record') }}</span></span>
                </a>
            </div>
        </div>
        <div id="myTabel">
            <table class="datatables-basic table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th><i class="ti ti-user"></i> {{ __('dash/index.name') }}</th>
                        <th><i class="ti ti-phone"></i> {{ __('dash/index.phone') }}</th>
                        <th><i class="ti ti-code"></i> {{ __('dash/index.referral_code') }}</th>
                        <th><i class="ti ti-settings"></i> {{ __('dash/index.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marketers as $marketer)
                    <tr>
                        <td>{{ $marketer->name }}</td>
                        <td>{{ $marketer->phone }}</td>
                        <td>
                            <span id="referral-link-{{ $marketer->id }}">
                                {{$marketer->referral_code}}
                            </span>
                            <button class="btn btn-sm btn-outline-primary ms-2"
                                onclick="copyToClipboard('{{ url('/?ref=' . $marketer->referral_code) }}')">
                                <i class="ti ti-copy"></i>
                            </button>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button type="button" class="btn btn-light p-0 dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item text-primary"
                                        href="{{ route('marketers.edit', $marketer->id) }}">
                                        <i class="ti ti-pencil"></i> {{ __('dash/index.edit') }}
                                    </a>
                                    <form action="{{ route('marketers.destroy', $marketer->id) }}" method="POST"
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
        {{ $marketers->links() }}
    </div>
</div>

<!-- JavaScript to copy referral link -->
<script>
    function copyToClipboard(text) {
        // Create a temporary input element
        const tempInput = document.createElement('input');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
    }
</script>
@endsection
