@extends('.layouts.users')
@section('content')
    <div class="container-fluid coins-container">
        <div class="row coins-cards">
            <div class="col-md-6 top-card-coins">
                <div class="row card-coins-top-row">
                    <div class="col-md-7 card-coins-top-row-left-col">
                        <div class="row">
                            <div class="col-md-12" style="padding: 0">
                                <div class="" style="display: inline-block">
                                    <h5>BTC - USD</h5>
                                </div>
                                <div class="pull-right coins-card-vol">
                                    <h6>Vol: B 23626.24</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding: 0">
                                <div class="" style="display: inline-block">
                                    <h3>$ 3207.96</h3>
                                </div>
                                <div class="pull-right">
                                    <p class="coins-card-percentage">^3.25%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 card-coins-top-row-right-col">
                        GRAPH HERE
                    </div>
                </div>


                <div class="row card-coins-bottom-row">
                    <div class="col-md-7 card-coins-bottom-row-left-col">
                        <button class="btn btn-primary coins-card-buy-btn">Buy/Sell</button>
                    </div>

                    <div class="col-md-5 card-coins-bottom-row-right-col btn-group" style="padding: 0">
                        <button type="button" class="btn btn-secondary">Bitindex</button>
                        <button type="button" class="btn btn-secondary">0.00</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row table-responsive">
            <table class="table table-striped table-borderless coins-table">
                <thead>
                <tr>
                    <th scope="col">Coin</th>
                    <th scope="col">Price</th>
                    <th scope="col">Direct Vol. 24h</th>
                    <th scope="col">Total Vol. 24h</th>
                    <th scope="col">Top Tier Vol.</th>
                    <th scope="col">Mkt. Cap.</th>
                    <th scope="col">7d Chart</th>
                    <th scope="col">Chg 24H</th>
                </tr>
                </thead>
                <tbody class="coins-table-body">
                <tr>
                    <td>
                        <p><a class="hyper-link" href="{{route('users.rates')}}">Bitcoin</a></p>
                    </td>
                    <td>$ 8,460</td>
                    <td>$ 106.07 M</td>
                    <td>$ 1.46 B</td>
                    <td>$ 560.76 M</td>
                    <td>$ 152.19 M</td>
                    <td>Graph</td>
                    <td>1.27%</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
