@extends('layouts.default')

@section('content')
    <div class="container">
        <?php
            if (empty($datas)) {
                $WIDout_trade_no = str_random(20);
                $WIDsubject = 'Book';
                $WIDtotal_amount = 0.01;
                $WIDbody = '';
            } else {
                $WIDout_trade_no = $datas['WIDout_trade_no'];
                $WIDsubject = $datas['WIDsubject'];
                $WIDtotal_amount = $datas['WIDtotal_amount'];
                $WIDbody = $datas['WIDbody'];
            }
        ?>

        <form method="post" action="{{ asset('vendor/alipay/pagepay/pagepay.php') }}" style="font-family: monospace, monospace">
            <div class="card">
                <div class="card-header" style="font-size: 1.5rem;">
                    Billing invoice
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <h5>
                            Serial number
                        </h5>
                        <p style="font-family: monospace, monospace; color: #007bff;">{{ $WIDout_trade_no }}</p>
                        <input hidden class="form-control" value="{{ $WIDout_trade_no }}" style="color: #007bff; font-family: monospace;" name="WIDout_trade_no" readonly>
                    </div>
                    <div class="form-group">
                        <h5>
                            Name
                        </h5>
                        <p>{{ $WIDsubject }}</p>
                        <input hidden class="form-control" value="{{ $WIDsubject }}" name="WIDsubject" readonly>
                    </div>
                    <div class="form-group">
                        <h5>
                            Price
                        </h5>
                        <p>{{ $WIDtotal_amount }}</p>
                        <input hidden class="form-control" value="{{ $WIDtotal_amount }}" name="WIDtotal_amount" readonly>
                    </div>
                    <div class="form-group">
                        <h5>
                            Description
                        </h5>
                        @if (empty($WIDbody))
                            <p class="text-muted">There is no description.</p>
                        @endif
                        <p>{{ $WIDbody }}</p>
                        <input hidden class="form-control" value="{{ $WIDbody }}" name="WIDbody" readonly>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark" style="color: gold;">Confirm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop