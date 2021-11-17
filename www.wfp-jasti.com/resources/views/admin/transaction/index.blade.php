@php
$titlePage = 'Transaction';
@endphp

@extends('admin.layouts.app', ['activePage' => 'transaction', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Transaction","All
        Transaction"],"breadcrump_href"=>['','transaction.index']])
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Cashier</th>
                        <th>Transaction Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->customer->name }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->date }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('transaction.show', $transaction->id) }}"
                                    role="button">Read More</a>
                                <a class="btn btn-primary" href="{{ route('transaction.edit', $transaction->id) }}"
                                    role="button">Edit</a>
                                <form role="form" method="post" action="{{ route('transaction.destroy', $transaction->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" 
                                        type="submit" value='Delete'
                                        onclick="if(!confirm('Are you sure you want to delete this data?')) {return false;}">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
