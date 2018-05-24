@extends('layouts.default')

@section('content')
    <p style="font-family: 'Fira Code'">
        We offer a variety of services. The most notable being print-on-air: Buy it, and we will print for you.
    </p>
    <div class="row">
        @foreach ($wares as $ware)
            <div class="card mb-3 m-3" style="max-width: 20rem;">
                <div class="card-header">{{ $ware->name }}</div>
                <div class="card-body">
                    @if(empty($ware->description))
                        <p class="text-muted">No description given.</p>
                    @else
                        <p class="card-text">{{ $ware->description }}</p>
                    @endif
                    <h4 class="card-title" style="background-color: gold;">{{ $ware->price }} CNY</h4>
                    <form method="post" action="{{ route('paypost') }}">
                        {{ csrf_field() }}
                        <input class="form-control" hidden value="{{ $ware->name }}" name="WIDsubject" readonly>
                        <input class="form-control" hidden value="{{ $ware->price }}" name="WIDtotal_amount" readonly>
                        <input class="form-control" hidden value="{{ $ware->description }}" name="WIDbody" readonly>
                        <button type="submit" class="btn btn-dark" style="color: gold;">Purchase</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@stop