@extends('layouts.app')

@section('content')

<!-- Workout data -->
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card card-chart">
            <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart">
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                        <g class="ct-grids">
                            <line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="70.66517857142857" x2="70.66517857142857" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="101.33035714285714" x2="101.33035714285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="131.99553571428572" x2="131.99553571428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="162.66071428571428" x2="162.66071428571428" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="193.32589285714286" x2="193.32589285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="223.99107142857144" x2="223.99107142857144" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line y1="120" y2="120" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="96" y2="96" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="72" y2="72" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="48" y2="48" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="24" y2="24" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="0" y2="0" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                        </g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <path d="M 40 91.2 C 70.665 79.2 70.665 79.2 70.665 79.2 C 101.33 103.2 101.33 103.2 101.33 103.2 C 131.996 79.2 131.996 79.2 131.996 79.2 C 162.661 64.8 162.661 64.8 162.661 64.8 C 193.326 76.8 193.326 76.8 193.326 76.8 C 223.991 28.8 223.991 28.8 223.991 28.8" class="ct-line"></path>
                                <line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line>
                                <line x1="70.66517857142857" y1="79.2" x2="70.67517857142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line>
                                <line x1="101.33035714285714" y1="103.2" x2="101.34035714285714" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line>
                                <line x1="131.99553571428572" y1="79.2" x2="132.0055357142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line>
                                <line x1="162.66071428571428" y1="64.8" x2="162.67071428571427" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line>
                                <line x1="193.32589285714286" y1="76.8" x2="193.33589285714285" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line>
                                <line x1="223.99107142857144" y1="28.799999999999997" x2="224.00107142857144" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line>
                            </g>
                        </g>
                        <g class="ct-labels">
                            <foreignObject style="overflow: visible;" x="40" y="125" width="30.665178571428573" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">M</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="70.66517857142857" y="125" width="30.665178571428573" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">T</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="101.33035714285714" y="125" width="30.665178571428577" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">W</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="131.99553571428572" y="125" width="30.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">T</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="162.66071428571428" y="125" width="30.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">F</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="193.32589285714286" y="125" width="30.665178571428584" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">S</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="223.99107142857144" y="125" width="30.665178571428555" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">S</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card card-chart">
            <div class="card-header card-header-warning">
                <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                        <g class="ct-grids">
                            <line y1="120" y2="120" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                            <line y1="96" y2="96" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                            <line y1="72" y2="72" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                            <line y1="48" y2="48" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                            <line y1="24" y2="24" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                            <line y1="0" y2="0" x1="40" x2="249.65625" class="ct-grid ct-vertical"></line>
                        </g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <line x1="48.735677083333336" x2="48.735677083333336" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line>
                                <line x1="66.20703125" x2="66.20703125" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line>
                                <line x1="83.67838541666667" x2="83.67838541666667" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line>
                                <line x1="101.14973958333333" x2="101.14973958333333" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line>
                                <line x1="118.62109375" x2="118.62109375" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line>
                                <line x1="136.09244791666669" x2="136.09244791666669" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line>
                                <line x1="153.56380208333334" x2="153.56380208333334" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line>
                                <line x1="171.03515625000003" x2="171.03515625000003" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line>
                                <line x1="188.50651041666669" x2="188.50651041666669" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line>
                                <line x1="205.97786458333334" x2="205.97786458333334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line>
                                <line x1="223.44921875000003" x2="223.44921875000003" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line>
                                <line x1="240.92057291666669" x2="240.92057291666669" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line>
                            </g>
                        </g>
                        <g class="ct-labels">
                            <foreignObject style="overflow: visible;" x="40" y="125" width="17.471354166666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">J</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="57.47135416666667" y="125" width="17.471354166666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">F</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="74.94270833333334" y="125" width="17.471354166666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">M</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="92.4140625" y="125" width="17.47135416666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">A</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="109.88541666666667" y="125" width="17.47135416666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">M</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="127.35677083333334" y="125" width="17.471354166666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">J</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="144.828125" y="125" width="17.47135416666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">J</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="162.29947916666669" y="125" width="17.47135416666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">A</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="179.77083333333334" y="125" width="17.471354166666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">S</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="197.2421875" y="125" width="17.471354166666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">O</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="214.71354166666669" y="125" width="17.471354166666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 17px; height: 20px;">N</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="232.18489583333334" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Email Subscriptions</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card card-chart">
            <div class="card-header card-header-danger">
                <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                        <g class="ct-grids">
                            <line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="66.83203125" x2="66.83203125" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="93.6640625" x2="93.6640625" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="120.49609375" x2="120.49609375" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="147.328125" x2="147.328125" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="174.16015625" x2="174.16015625" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="200.9921875" x2="200.9921875" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="227.82421875" x2="227.82421875" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line y1="120" y2="120" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="96" y2="96" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="72" y2="72" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="48" y2="48" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="24" y2="24" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                            <line y1="0" y2="0" x1="40" x2="254.65625" class="ct-grid ct-vertical"></line>
                        </g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <path d="M 40 92.4 C 66.832 30 66.832 30 66.832 30 C 93.664 66 93.664 66 93.664 66 C 120.496 84 120.496 84 120.496 84 C 147.328 86.4 147.328 86.4 147.328 86.4 C 174.16 91.2 174.16 91.2 174.16 91.2 C 200.992 96 200.992 96 200.992 96 C 227.824 97.2 227.824 97.2 227.824 97.2" class="ct-line"></path>
                                <line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line>
                                <line x1="66.83203125" y1="30" x2="66.84203125" y2="30" class="ct-point" ct:value="750" opacity="1"></line>
                                <line x1="93.6640625" y1="66" x2="93.6740625" y2="66" class="ct-point" ct:value="450" opacity="1"></line>
                                <line x1="120.49609375" y1="84" x2="120.50609375" y2="84" class="ct-point" ct:value="300" opacity="1"></line>
                                <line x1="147.328125" y1="86.4" x2="147.338125" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line>
                                <line x1="174.16015625" y1="91.2" x2="174.17015625" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line>
                                <line x1="200.9921875" y1="96" x2="201.0021875" y2="96" class="ct-point" ct:value="200" opacity="1"></line>
                                <line x1="227.82421875" y1="97.2" x2="227.83421875" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line>
                            </g>
                        </g>
                        <g class="ct-labels">
                            <foreignObject style="overflow: visible;" x="40" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">12p</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="66.83203125" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">3p</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="93.6640625" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">6p</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="120.49609375" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">9p</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="147.328125" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">12p</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="174.16015625" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">3a</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="200.9921875" y="125" width="26.83203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">6a</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="227.82421875" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject>
                        </g>
                    </svg></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Completed Tasks</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Body and weight data -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Weight</p>
                <h3 class="card-title">{{ $bodymeasurements->weight }}
                    <small>KG</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-warning">warning</i>
                    <a href="#pablo" class="warning-link">Get More Space...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Body Mass Index</p>
                <h3 class="card-title">{{ number_format($BMI, 2, ',','.') }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Weight liftet this week</p>
                <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
            </div>
        </div>
    </div>
</div>



@endsection