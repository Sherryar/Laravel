@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $cow->name }}</div>

                    <div class="card-body">
                        <p>This cow was added to the system at {{ $cow->created_at->format('d/m/Y H:i') }}.  Below is a list of the milk output (litres) by the corresponding date.</p>

                        @if(count($cow->milkOutputs))
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Milk Output (litres)</th>
                                        <th>Added on</th>
                                        <th>Edited at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cow->milkOutputs as $milkOutput)
                                    <tr>
                                        <td>{{ $milkOutput->milk_output }}</td>
                                        <td>{{ $milkOutput->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $milkOutput->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger">No records found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
