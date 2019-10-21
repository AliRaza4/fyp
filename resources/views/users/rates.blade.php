@extends('.layouts.users')
@section('content')





    <div class="container-fluid rates-container">
        <div id="graph-1" class="graph">
            <h1 style="width:100%;" class="graph-dummy-text">
                <div id="chartdiv" style="">
                </div>
            </h1>
        </div>
        <div id="graph-2" class="graph">
            <h1 class="graph-dummy-text">More Graphs if any</h1>
        </div>
        <div class="recommendations">
            <h1 class="recommendations-dummy-text prdChart">
                <div id="controls" style="width: 100%; overflow: hidden;">
                    <div class="form-inline mb-3 ml-3">
                        From: <input type="text" id="fromfield" class="amcharts-input form-control" />
                        To: <input type="text" id="tofield" class="amcharts-input form-control" />
                        <div class="float-right bt-adjust">
                            <button id="b1m" class="amcharts-input btn btn-info">1m</button>
                            <button id="b3m" class="amcharts-input btn btn-info">3m</button>
                            <button id="b6m" class="amcharts-input btn btn-info">6m</button>
                            <button id="b1y" class="amcharts-input btn btn-info">1y</button>
                            <button id="bytd" class="amcharts-input btn btn-info">YTD</button>
                            <button id="bmax" class="amcharts-input btn btn-info">MAX</button>
                        </div>
                    </div>
                    
                </div>  
                <div id="predictionChart">
                    
                </div> 
            </h1>
        </div>
    </div>



 


<!--include chart file -->
@push('chart-scripts')
    <!-- Scripts -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{asset('js/ratesCharts.js')}}"></script>
    <script src="{{asset('js/predictionCharts.js')}}"></script>
@endpush

@endsection
