@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Recent Stats</div>
{{--{{dd($cows)}}--}}
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Cow</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cows as $cow)
                                <tr>
                                    <td>{{ $cow->name }}</td>
                                    <td>{{ $cow->created_at->format('d/m/Y H:i') }}</td>
                                    <td><a href="/cows/{{ $cow->id }}" class="btn btn-primary">View</a></td>
                                </tr>
                                @if (count($cow->milkOutputs))
                                <tr>
                                    <td>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Milk Output</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cow->milkOutputs as $milkOutput)

                                                <tr>
                                                    <td>{{ $milkOutput->milk_output }}</td>
                                                    <td>{{ $milkOutput->created_at->format('d/m/Y H:i') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
