@extends('admin.layout.layout')
@section('title', Route::is('admin.transaction.index') ? 'Transactions' : '')
@section('content')

    <div class="container-fluid transactions">

        @include('layout.alert')

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between gap-3">
                            <div class="text-dark fs-3 fw-semibold ">
                                <iconify-icon icon="solar:wallet-money-broken" class="me-1 pt-1"></iconify-icon>
                                Transactions
                            </div>
                            <div>
                                @if ($totalSuccessAmount != $totalAmount)
                                    <button class="btn btn-outline-dark cursor-default" style="cursor: default;">
                                        Paid:
                                        <b>
                                            <iconify-icon icon="bi:currency-rupee" class="me-0 pt-1-px"></iconify-icon>
                                            {{ round($totalSuccessAmount) }}
                                        </b>
                                    </button>
                                @endif
                                <button class="btn btn-outline-warning cursor-default" style="cursor: default;">
                                    Total:
                                    <b>
                                        <iconify-icon icon="bi:currency-rupee" class="me-0 pt-1-px"></iconify-icon>
                                        {{ round($totalAmount) }}
                                    </b>
                                </button>
                                <button class="btn btn-outline-success cursor-default" style="cursor: default;">
                                    <b class="me-1">
                                        +{{ $last30days }}
                                    </b>
                                    last Month
                                </button>

                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">

                            {{-- <div class="dataTables_wrapper dt-bootstrap4 no-footer mb-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="DataTables_Table_0"></label></div>
                                    </div>
                                </div>
                            </div> --}}

                            <table class="table table-striped table-borderless table-centered" data-table="true">
                                <thead class="table-light">
                                    <tr>
                                        {{-- <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault5">
                                            </div>
                                        </th> --}}
                                        <th>
                                            <div class="d-flex justify-content-between">
                                                ID
                                                {{-- <iconify-icon icon="ph:arrows-down-up-thin" class="me-1 pt-1 cursor-pointer"
                                                    onclick="orderBy('id')">
                                                </iconify-icon> --}}
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex justify-content-between">
                                                Transaction ID
                                            </div>
                                        </th>
                                        <th>User</th>
                                        <th>Purchase Type</th>
                                        <th>Purchase Item</th>
                                        <th>Amount</th>
                                        <th>Medium</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr
                                            class="{{ session()->has('first_id') && session('first_id') == $transaction->id ? 'first_search_bg' : '' }}">
                                            {{-- <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="check-selectpr">
                                                </div>
                                            </td> --}}
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $transaction->transaction_id }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $transaction->user->getImageURL() ?? '#' }}" alt="user"
                                                        class="avatar-xs rounded-circle me-2">
                                                    <div>
                                                        <a href="{{ route('profile.index', $transaction->user->id) }}">
                                                            <h5 class="fs-14 m-0 fw-normal">
                                                                {{ $transaction->user->name ?? '-' }}
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> {{ basename(str_replace('\\', '/', $transaction->purchasable_type)) }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $transaction->purchasable->getImageURL() ?? '#' }}"
                                                        alt="user" class="avatar-xs rounded-circle me-2">
                                                    <div>
                                                        @if (strtolower(basename(str_replace('\\', '/', $transaction->purchasable_type))) == 'book')
                                                            <a
                                                                href="{{ route('books.show', $transaction->purchasable_id) }}">
                                                                <h5 class="fs-14 m-0 fw-normal">
                                                                    {{ $transaction->purchasable->title ?? '-' }}
                                                                </h5>
                                                            @else
                                                                <h5 class="fs-14 m-0 fw-normal">
                                                                    {{ $transaction->purchasable->title ?? '-' }}
                                                                </h5>
                                                        @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <iconify-icon icon="bi:currency-rupee" class="me-0 pt-1-px"></iconify-icon>
                                                <span class="">{{ round($transaction->amount, 2) }}</span>

                                            </td>
                                            <td> {{ strtoupper($transaction->payment_method) }} </td>
                                            <td>
                                                <span
                                                    class="badge badge-soft-{{ $transaction->status == 'pending' ? 'warning' : ($transaction->status == 'completed' ? 'success' : 'danger') }}">
                                                    {{ ucfirst($transaction->status) }}
                                                </span>

                                            </td>
                                            <td> {{ date('d M, Y', strtotime($transaction->created_at)) }}
                                                <small>{{ date('h:i A', strtotime($transaction->created_at)) }}</small>
                                            </td>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
