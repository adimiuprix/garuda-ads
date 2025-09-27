<x-layouts.admin_wrapper title="{{ 'dashboard' }}">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-6">
        <!-- Congratulations card -->
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body text-nowrap">
                    <h5 class="card-title mb-0 flex-wrap text-nowrap">Congratulations Norris! 🎉</h5>
                    <p class="mb-2">Best seller of the month</p>
                    <h4 class="text-primary mb-0">$42.8k</h4>
                    <p class="mb-2">78% of target 🚀</p>
                    <a href="javascript:;" class="btn btn-sm btn-primary waves-effect waves-light">View Sales</a>
                </div>
                <img src="../assets/img/illustrations/trophy.png" class="position-absolute bottom-0 end-0 me-5 mb-5" width="83" alt="view sales">
            </div>
        </div>
        <!--/ Congratulations card -->
        <!-- Transactions -->
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button class="btn text-body-secondary p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-base ri ri-more-2-line icon-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                            </div>
                        </div>
                    </div>
                    <p class="small mb-0"><span class="h6 mb-0">Total 48.5% Growth</span> 😎 this month</p>
                </div>
                <div class="card-body pt-lg-10">
                    <div class="row g-6">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-primary rounded shadow-xs">
                                        <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Sales</p>
                                    <h5 class="mb-0">245k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow-xs">
                                        <i class="icon-base ri ri-group-line icon-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Customers</p>
                                    <h5 class="mb-0">12.5k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded shadow-xs">
                                        <i class="icon-base ri ri-macbook-line icon-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Product</p>
                                    <h5 class="mb-0">1.54k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded shadow-xs">
                                        <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Revenue</p>
                                    <h5 class="mb-0">$88k</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
        <!-- Weekly Overview Chart -->
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Weekly Overview</h5>
                        <div class="dropdown">
                            <button class="btn text-body-secondary p-0" type="button" id="weeklyOverviewDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-base ri ri-more-2-line icon-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-lg-2">
                    <div id="weeklyOverviewChart" style="min-height: 200px;">
                        <div id="apexchartsuz5nd4ts" class="apexcharts-canvas apexchartsuz5nd4ts apexcharts-theme-" style="width: 364px; height: 200px;">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(-16, -9)" width="364" height="200">
                                <foreignObject x="0" y="0" width="364" height="200">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div>
                                    <style type="text/css">
                                        .apexcharts-flip-y {
                                        transform: scaleY(-1) translateY(-100%);
                                        transform-origin: top;
                                        transform-box: fill-box;
                                        }
                                        .apexcharts-flip-x {
                                        transform: scaleX(-1);
                                        transform-origin: center;
                                        transform-box: fill-box;
                                        }
                                        .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                        }
                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                        flex-direction: column;
                                        }
                                        .apexcharts-legend-group {
                                        display: flex;
                                        }
                                        .apexcharts-legend-group-vertical {
                                        flex-direction: column-reverse;
                                        }
                                        .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap
                                        }
                                        .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                        }
                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                        align-items: flex-start;
                                        }
                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                        align-items: center;
                                        }
                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                        align-items: flex-end;
                                        }
                                        .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                        display: flex;
                                        align-items: center;
                                        }
                                        .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                        }
                                        .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                        pointer-events: none;
                                        }
                                        .apexcharts-legend-marker {
                                        position: relative;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        cursor: pointer;
                                        margin-right: 1px;
                                        }
                                        .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                        }
                                        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                        display: none !important;
                                        }
                                        .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                <g class="apexcharts-yaxis" rel="0" transform="translate(22.56268310546875, 0)">
                                    <g class="apexcharts-yaxis-texts-g">
                                        <text x="20" y="34.333333333333336" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="var(--bs-font-family-base)" font-weight="400" fill="var(--bs-secondary-color)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: var(--bs-font-family-base);">
                                            <tspan>90K</tspan>
                                            <title>90K</title>
                                        </text>
                                        <text x="20" y="89.33333333333334" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="var(--bs-font-family-base)" font-weight="400" fill="var(--bs-secondary-color)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: var(--bs-font-family-base);">
                                            <tspan>60K</tspan>
                                            <title>60K</title>
                                        </text>
                                        <text x="20" y="144.33333333333334" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="var(--bs-font-family-base)" font-weight="400" fill="var(--bs-secondary-color)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: var(--bs-font-family-base);">
                                            <tspan>30K</tspan>
                                            <title>30K</title>
                                        </text>
                                        <text x="20" y="199.33333333333334" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="var(--bs-font-family-base)" font-weight="400" fill="var(--bs-secondary-color)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: var(--bs-font-family-base);">
                                            <tspan>0K</tspan>
                                            <title>0K</title>
                                        </text>
                                    </g>
                                </g>
                                <g class="apexcharts-inner apexcharts-graphical" transform="translate(67.63454895019531, 30)">
                                    <defs>
                                        <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1000">
                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskuz5nd4ts">
                                            <rect width="271.2935852050781" height="165" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectBarMaskuz5nd4ts">
                                            <rect width="305.43731689453125" height="169" x="-17.071865844726563" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaskuz5nd4ts">
                                            <rect width="271.2935852050781" height="165" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskuz5nd4ts"></clipPath>
                                        <clipPath id="nonForecastMaskuz5nd4ts"></clipPath>
                                    </defs>
                                    <rect width="13.564679260253905" height="165" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1000)" class="apexcharts-xcrosshairs" y2="165" filter="none" fill-opacity="0"></rect>
                                    <g class="apexcharts-grid">
                                        <g class="apexcharts-gridlines-horizontal">
                                            <line x1="-15.071865844726563" y1="55" x2="286.3654510498047" y2="55" stroke="var(--bs-border-color)" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line x1="-15.071865844726563" y1="110" x2="286.3654510498047" y2="110" stroke="var(--bs-border-color)" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g class="apexcharts-gridlines-vertical"></g>
                                        <line x1="0" y1="165" x2="271.2935852050781" y2="165" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line x1="0" y1="1" x2="0" y2="165" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g class="apexcharts-grid-borders">
                                        <line x1="-15.071865844726563" y1="0" x2="286.3654510498047" y2="0" stroke="var(--bs-border-color)" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line x1="-15.071865844726563" y1="165" x2="286.3654510498047" y2="165" stroke="var(--bs-border-color)" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                        <g class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0">
                                            <path d="M-6.782339630126953 157.001L-6.782339630126953 114.33433333333333C-6.782339630126953 110.33433333333333 -2.7823396301269527 106.33433333333333 1.2176603698730473 106.33433333333333L1.2176603698730473 106.33433333333333C4 106.33433333333333 6.782339630126953 110.33433333333333 6.782339630126953 114.33433333333333L6.782339630126953 157.001C6.782339630126953 161.001 2.7823396301269527 165.001 -1.2176603698730473 165.001L-1.2176603698730473 165.001C-4 165.001 -6.782339630126953 161.001 -6.782339630126953 157.001C-6.782339630126953 157.001 -6.782339630126953 157.001 -6.782339630126953 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M -6.782339630126953 157.001 L -6.782339630126953 114.33433333333333 C -6.782339630126953 110.33433333333333 -2.7823396301269527 106.33433333333333 1.2176603698730473 106.33433333333333 L 1.2176603698730473 106.33433333333333 C 4 106.33433333333333 6.782339630126953 110.33433333333333 6.782339630126953 114.33433333333333 L 6.782339630126953 157.001 C 6.782339630126953 161.001 2.7823396301269527 165.001 -1.2176603698730473 165.001 L -1.2176603698730473 165.001 C -4 165.001 -6.782339630126953 161.001 -6.782339630126953 157.001 Z " pathFrom="M -6.782339630126953 165.001 L -6.782339630126953 165.001 L 6.782339630126953 165.001 L 6.782339630126953 165.001 L 6.782339630126953 165.001 L 6.782339630126953 165.001 L 6.782339630126953 165.001 L -6.782339630126953 165.001 Z" cy="106.33333333333333" cx="6.782339630126953" j="0" val="32" barHeight="58.66666666666667" barWidth="13.564679260253905"></path>
                                            <path d="M38.43325790405273 157.001L38.43325790405273 72.16766666666666C38.43325790405273 68.16766666666666 42.43325790405273 64.16766666666666 46.43325790405273 64.16766666666666L46.43325790405273 64.16766666666666C49.21559753417968 64.16766666666666 51.997937164306634 68.16766666666666 51.997937164306634 72.16766666666666L51.997937164306634 157.001C51.997937164306634 161.001 47.997937164306634 165.001 43.997937164306634 165.001L43.997937164306634 165.001C41.21559753417968 165.001 38.43325790405273 161.001 38.43325790405273 157.001C38.43325790405273 157.001 38.43325790405273 157.001 38.43325790405273 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 38.43325790405273 157.001 L 38.43325790405273 72.16766666666666 C 38.43325790405273 68.16766666666666 42.43325790405273 64.16766666666666 46.43325790405273 64.16766666666666 L 46.43325790405273 64.16766666666666 C 49.21559753417968 64.16766666666666 51.997937164306634 68.16766666666666 51.997937164306634 72.16766666666666 L 51.997937164306634 157.001 C 51.997937164306634 161.001 47.997937164306634 165.001 43.997937164306634 165.001 L 43.997937164306634 165.001 C 41.21559753417968 165.001 38.43325790405273 161.001 38.43325790405273 157.001 Z " pathFrom="M 38.43325790405273 165.001 L 38.43325790405273 165.001 L 51.997937164306634 165.001 L 51.997937164306634 165.001 L 51.997937164306634 165.001 L 51.997937164306634 165.001 L 51.997937164306634 165.001 L 38.43325790405273 165.001 Z" cy="64.16666666666666" cx="51.997937164306634" j="1" val="55" barHeight="100.83333333333334" barWidth="13.564679260253905"></path>
                                            <path d="M83.64885543823242 157.001L83.64885543823242 90.501C83.64885543823242 86.501 87.64885543823242 82.501 91.64885543823242 82.501L91.64885543823242 82.501C94.43119506835937 82.501 97.21353469848633 86.501 97.21353469848633 90.501L97.21353469848633 157.001C97.21353469848633 161.001 93.21353469848633 165.001 89.21353469848633 165.001L89.21353469848633 165.001C86.43119506835937 165.001 83.64885543823242 161.001 83.64885543823242 157.001C83.64885543823242 157.001 83.64885543823242 157.001 83.64885543823242 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 83.64885543823242 157.001 L 83.64885543823242 90.501 C 83.64885543823242 86.501 87.64885543823242 82.501 91.64885543823242 82.501 L 91.64885543823242 82.501 C 94.43119506835937 82.501 97.21353469848633 86.501 97.21353469848633 90.501 L 97.21353469848633 157.001 C 97.21353469848633 161.001 93.21353469848633 165.001 89.21353469848633 165.001 L 89.21353469848633 165.001 C 86.43119506835937 165.001 83.64885543823242 161.001 83.64885543823242 157.001 Z " pathFrom="M 83.64885543823242 165.001 L 83.64885543823242 165.001 L 97.21353469848633 165.001 L 97.21353469848633 165.001 L 97.21353469848633 165.001 L 97.21353469848633 165.001 L 97.21353469848633 165.001 L 83.64885543823242 165.001 Z" cy="82.5" cx="97.21353469848633" j="2" val="45" barHeight="82.5" barWidth="13.564679260253905"></path>
                                            <path d="M128.8644529724121 157.001L128.8644529724121 35.501000000000005C128.8644529724121 31.501000000000005 132.8644529724121 27.501000000000005 136.8644529724121 27.501000000000005L136.8644529724121 27.501000000000005C139.64679260253905 27.501000000000005 142.429132232666 31.501000000000005 142.429132232666 35.501000000000005L142.429132232666 157.001C142.429132232666 161.001 138.429132232666 165.001 134.429132232666 165.001L134.429132232666 165.001C131.64679260253905 165.001 128.8644529724121 161.001 128.8644529724121 157.001C128.8644529724121 157.001 128.8644529724121 157.001 128.8644529724121 157.001 " fill="var(--bs-primary)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 128.8644529724121 157.001 L 128.8644529724121 35.501000000000005 C 128.8644529724121 31.501000000000005 132.8644529724121 27.501 136.8644529724121 27.501 L 136.8644529724121 27.501 C 139.64679260253905 27.501 142.429132232666 31.501000000000005 142.429132232666 35.501000000000005 L 142.429132232666 157.001 C 142.429132232666 161.001 138.429132232666 165.001 134.429132232666 165.001 L 134.429132232666 165.001 C 131.64679260253905 165.001 128.8644529724121 161.001 128.8644529724121 157.001 Z " pathFrom="M 128.8644529724121 165.001 L 128.8644529724121 165.001 L 142.429132232666 165.001 L 142.429132232666 165.001 L 142.429132232666 165.001 L 142.429132232666 165.001 L 142.429132232666 165.001 L 128.8644529724121 165.001 Z" cy="27.5" cx="142.429132232666" j="3" val="75" barHeight="137.5" barWidth="13.564679260253905"></path>
                                            <path d="M174.0800505065918 157.001L174.0800505065918 72.16766666666666C174.0800505065918 68.16766666666666 178.0800505065918 64.16766666666666 182.0800505065918 64.16766666666666L182.0800505065918 64.16766666666666C184.86239013671874 64.16766666666666 187.6447297668457 68.16766666666666 187.6447297668457 72.16766666666666L187.6447297668457 157.001C187.6447297668457 161.001 183.6447297668457 165.001 179.6447297668457 165.001L179.6447297668457 165.001C176.86239013671874 165.001 174.0800505065918 161.001 174.0800505065918 157.001C174.0800505065918 157.001 174.0800505065918 157.001 174.0800505065918 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 174.0800505065918 157.001 L 174.0800505065918 72.16766666666666 C 174.0800505065918 68.16766666666666 178.0800505065918 64.16766666666666 182.0800505065918 64.16766666666666 L 182.0800505065918 64.16766666666666 C 184.86239013671874 64.16766666666666 187.6447297668457 68.16766666666666 187.6447297668457 72.16766666666666 L 187.6447297668457 157.001 C 187.6447297668457 161.001 183.6447297668457 165.001 179.6447297668457 165.001 L 179.6447297668457 165.001 C 176.86239013671874 165.001 174.0800505065918 161.001 174.0800505065918 157.001 Z " pathFrom="M 174.0800505065918 165.001 L 174.0800505065918 165.001 L 187.6447297668457 165.001 L 187.6447297668457 165.001 L 187.6447297668457 165.001 L 187.6447297668457 165.001 L 187.6447297668457 165.001 L 174.0800505065918 165.001 Z" cy="64.16666666666666" cx="187.6447297668457" j="4" val="55" barHeight="100.83333333333334" barWidth="13.564679260253905"></path>
                                            <path d="M219.29564804077145 157.001L219.29564804077145 108.83433333333333C219.29564804077145 104.83433333333333 223.29564804077145 100.83433333333333 227.29564804077145 100.83433333333333L227.29564804077145 100.83433333333333C230.0779876708984 100.83433333333333 232.86032730102536 104.83433333333333 232.86032730102536 108.83433333333333L232.86032730102536 157.001C232.86032730102536 161.001 228.86032730102536 165.001 224.86032730102536 165.001L224.86032730102536 165.001C222.0779876708984 165.001 219.29564804077145 161.001 219.29564804077145 157.001C219.29564804077145 157.001 219.29564804077145 157.001 219.29564804077145 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 219.29564804077145 157.001 L 219.29564804077145 108.83433333333333 C 219.29564804077145 104.83433333333333 223.29564804077145 100.83433333333333 227.29564804077145 100.83433333333333 L 227.29564804077145 100.83433333333333 C 230.0779876708984 100.83433333333333 232.86032730102536 104.83433333333333 232.86032730102536 108.83433333333333 L 232.86032730102536 157.001 C 232.86032730102536 161.001 228.86032730102536 165.001 224.86032730102536 165.001 L 224.86032730102536 165.001 C 222.0779876708984 165.001 219.29564804077145 161.001 219.29564804077145 157.001 Z " pathFrom="M 219.29564804077145 165.001 L 219.29564804077145 165.001 L 232.86032730102536 165.001 L 232.86032730102536 165.001 L 232.86032730102536 165.001 L 232.86032730102536 165.001 L 232.86032730102536 165.001 L 219.29564804077145 165.001 Z" cy="100.83333333333333" cx="232.86032730102536" j="5" val="35" barHeight="64.16666666666667" barWidth="13.564679260253905"></path>
                                            <path d="M264.51124557495115 157.001L264.51124557495115 44.66766666666666C264.51124557495115 40.66766666666666 268.51124557495115 36.66766666666666 272.51124557495115 36.66766666666666L272.51124557495115 36.66766666666666C275.2935852050781 36.66766666666666 278.07592483520506 40.66766666666666 278.07592483520506 44.66766666666666L278.07592483520506 157.001C278.07592483520506 161.001 274.07592483520506 165.001 270.07592483520506 165.001L270.07592483520506 165.001C267.2935852050781 165.001 264.51124557495115 161.001 264.51124557495115 157.001C264.51124557495115 157.001 264.51124557495115 157.001 264.51124557495115 157.001 " fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke="#f0f2f8" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskuz5nd4ts)" pathTo="M 264.51124557495115 157.001 L 264.51124557495115 44.667666666666655 C 264.51124557495115 40.667666666666655 268.51124557495115 36.667666666666655 272.51124557495115 36.667666666666655 L 272.51124557495115 36.667666666666655 C 275.2935852050781 36.667666666666655 278.07592483520506 40.667666666666655 278.07592483520506 44.667666666666655 L 278.07592483520506 157.001 C 278.07592483520506 161.001 274.07592483520506 165.001 270.07592483520506 165.001 L 270.07592483520506 165.001 C 267.2935852050781 165.001 264.51124557495115 161.001 264.51124557495115 157.001 Z " pathFrom="M 264.51124557495115 165.001 L 264.51124557495115 165.001 L 278.07592483520506 165.001 L 278.07592483520506 165.001 L 278.07592483520506 165.001 L 278.07592483520506 165.001 L 278.07592483520506 165.001 L 264.51124557495115 165.001 Z" cy="36.66666666666666" cx="278.07592483520506" j="6" val="70" barHeight="128.33333333333334" barWidth="13.564679260253905"></path>
                                            <g class="apexcharts-bar-goals-markers">
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskuz5nd4ts)"></g>
                                            </g>
                                            <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                    </g>
                                    <line x1="-15.071865844726563" y1="0" x2="286.3654510498047" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line x1="-15.071865844726563" y1="0" x2="286.3654510498047" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                    </g>
                                    <g class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                </g>
                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 242, 248);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 mt-md-3">
                        <div class="d-flex align-items-center gap-4">
                            <h4 class="mb-0">45%</h4>
                            <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
                        </div>
                        <div class="d-grid mt-3 mt-md-4">
                            <button class="btn btn-primary waves-effect waves-light" type="button">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Weekly Overview Chart -->
        <!-- Total Earnings -->
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Total Earning</h5>
                    <div class="dropdown">
                        <button class="btn text-body-secondary p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-base ri ri-more-2-line icon-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-lg-8">
                    <div class="mb-5 mb-lg-12">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$24,895</h3>
                            <span class="text-success ms-2">
                            <i class="icon-base ri ri-arrow-up-s-line icon-sm"></i>
                            <span>10%</span>
                            </span>
                        </div>
                        <p class="mb-0">Compared to $84,325 last year</p>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-6">
                            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                <img src="../assets/img/icons/misc/zipcar.png" alt="zipcar">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Zipcar</h6>
                                    <p class="mb-0">Vuejs, React &amp; HTML</p>
                                </div>
                                <div>
                                    <h6 class="mb-2">$24,895.65</h6>
                                    <div class="progress bg-label-primary" style="height: 4px;">
                                        <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-6">
                            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                <img src="../assets/img/icons/misc/bitbank.png" alt="bitbank">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Bitbank</h6>
                                    <p class="mb-0">Sketch, Figma &amp; XD</p>
                                </div>
                                <div>
                                    <h6 class="mb-2">$8,6500.20</h6>
                                    <div class="progress bg-label-info" style="height: 4px;">
                                        <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                <img src="../assets/img/icons/misc/aviato.png" alt="aviato">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Aviato</h6>
                                    <p class="mb-0">HTML &amp; Angular</p>
                                </div>
                                <div>
                                    <h6 class="mb-2">$1,2450.80</h6>
                                    <div class="progress bg-label-secondary" style="height: 4px;">
                                        <div class="progress-bar bg-secondary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Total Earnings -->
        <!-- Four Cards -->
        <div class="col-xl-4 col-md-6">
            <div class="row gy-6">
                <!-- Total Profit line chart -->
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h4 class="mb-0">$86.4k</h4>
                        </div>
                        <div class="card-body">
                            <div id="totalProfitLineChart" class="mb-3" style="min-height: 110px;">
                                <div id="apexchartsj99o047y" class="apexcharts-canvas apexchartsj99o047y apexcharts-theme-" style="width: 364px; height: 110px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="364" height="110">
                                        <foreignObject x="0" y="0" width="364" height="110">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 55px;"></div>
                                            <style type="text/css">
                                                .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                                }
                                                .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                                }
                                                .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                                }
                                                .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                                }
                                                .apexcharts-legend-group {
                                                display: flex;
                                                }
                                                .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                                }
                                                .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                                }
                                                .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                                }
                                                .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                                }
                                                .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                pointer-events: none;
                                                }
                                                .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                                }
                                                .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                                }
                                                .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                                }
                                                .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                            <g class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(3, 15)">
                                            <defs>
                                                <clipPath id="gridRectMaskj99o047y">
                                                    <rect width="352" height="95" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectBarMaskj99o047y">
                                                    <rect width="359" height="102" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskj99o047y">
                                                    <rect width="366" height="109" x="-7" y="-7" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskj99o047y"></clipPath>
                                                <clipPath id="nonForecastMaskj99o047y"></clipPath>
                                            </defs>
                                            <line x1="0" y1="0" x2="0" y2="95" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="95" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g class="apexcharts-grid">
                                                <g class="apexcharts-gridlines-horizontal"></g>
                                                <g class="apexcharts-gridlines-vertical">
                                                    <line x1="0" y1="0" x2="0" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="70.4" y1="0" x2="70.4" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="140.8" y1="0" x2="140.8" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="211.20000000000002" y1="0" x2="211.20000000000002" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="281.6" y1="0" x2="281.6" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="352" y1="0" x2="352" y2="95" stroke="var(--bs-secondary-color)" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <line x1="0" y1="95" x2="352" y2="95" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line x1="0" y1="1" x2="0" y2="95" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g class="apexcharts-grid-borders"></g>
                                            <g class="apexcharts-line-series apexcharts-plot-series">
                                                <g class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path d="M0 95L70.4 57L140.8 85.5L211.20000000000002 38L281.6 66.5L352 9.5C352 9.5 352 9.5 352 9.5 " fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskj99o047y)" pathTo="M 0 95 L 70.4 57 L 140.8 85.5 L 211.20000000000002 38 L 281.6 66.5 L 352 9.5" pathFrom="M 0 95 L 0 95 L 70.4 95 L 140.8 95 L 211.20000000000002 95 L 281.6 95 L 352 95" fill-rule="evenodd"></path>
                                                    <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="" clip-path="url(#gridRectMarkerMaskj99o047y)">
                                                            <path d="M 0, 95 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="transparent" fill-opacity="1" stroke="transparent" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="0" cy="95" shape="circle" class="apexcharts-marker no-pointer-events w8kdlinlj" rel="0" j="0" index="0" default-marker-size="6"></path>
                                                            <path d="M 70.4, 57 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="transparent" fill-opacity="1" stroke="transparent" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="70.4" cy="57" shape="circle" class="apexcharts-marker no-pointer-events wcffr8csl" rel="1" j="1" index="0" default-marker-size="6"></path>
                                                        </g>
                                                        <g class="" clip-path="url(#gridRectMarkerMaskj99o047y)">
                                                            <path d="M 140.8, 85.5 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="transparent" fill-opacity="1" stroke="transparent" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="140.8" cy="85.5" shape="circle" class="apexcharts-marker no-pointer-events wpbuo7dql" rel="2" j="2" index="0" default-marker-size="6"></path>
                                                        </g>
                                                        <g class="" clip-path="url(#gridRectMarkerMaskj99o047y)">
                                                            <path d="M 211.20000000000002, 38 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="transparent" fill-opacity="1" stroke="transparent" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="211.20000000000002" cy="38" shape="circle" class="apexcharts-marker no-pointer-events wgla72kde" rel="3" j="3" index="0" default-marker-size="6"></path>
                                                        </g>
                                                        <g class="" clip-path="url(#gridRectMarkerMaskj99o047y)">
                                                            <path d="M 281.6, 66.5 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="transparent" fill-opacity="1" stroke="transparent" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="281.6" cy="66.5" shape="circle" class="apexcharts-marker no-pointer-events wlv9y0g6z" rel="4" j="4" index="0" default-marker-size="6"></path>
                                                        </g>
                                                        <g class="" clip-path="url(#gridRectMarkerMaskj99o047y)">
                                                            <path d="M 352, 9.5 
                                                                m -6, 0 
                                                                a 6,6 0 1,0 12,0 
                                                                a 6,6 0 1,0 -12,0" fill="var(--bs-paper-bg)" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="352" cy="9.5" shape="circle" class="apexcharts-marker no-pointer-events wj3aamrve" rel="5" j="5" index="0" default-marker-size="6"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line x1="0" y1="0" x2="352" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line x1="0" y1="0" x2="352" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                            <g class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                            <g class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </svg>
                                </div>
                            </div>
                            <h6 class="text-center mb-0">Total Profit</h6>
                        </div>
                    </div>
                </div>
                <!--/ Total Profit line chart -->
                <!-- Total Profit Weekly Project -->
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="avatar">
                                <div class="avatar-initial bg-secondary rounded-circle shadow-xs">
                                    <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn text-body-secondary p-0" type="button" id="totalProfitID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-base ri ri-more-2-line icon-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-1">Total Profit</h6>
                            <div class="d-flex flex-wrap mb-1 align-items-center">
                                <h4 class="mb-0 me-2">$25.6k</h4>
                                <p class="text-success mb-0">+42%</p>
                            </div>
                            <small>Weekly Project</small>
                        </div>
                    </div>
                </div>
                <!--/ Total Profit Weekly Project -->
                <!-- New Yearly Project -->
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="avatar">
                                <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                                    <i class="icon-base ri ri-file-word-2-line icon-24px"></i>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn text-body-secondary p-0" type="button" id="newProjectID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-base ri ri-more-2-line icon-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-1">New Project</h6>
                            <div class="d-flex flex-wrap mb-1 align-items-center">
                                <h4 class="mb-0 me-2">862</h4>
                                <p class="text-danger mb-0">-18%</p>
                            </div>
                            <small>Yearly Project</small>
                        </div>
                    </div>
                </div>
                <!--/ New Yearly Project -->
                <!-- Sessions chart -->
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h4 class="mb-0">2,856</h4>
                        </div>
                        <div class="card-body">
                            <div id="sessionsColumnChart" class="mb-3" style="min-height: 110px;">
                                <div id="apexchartspjj78jyu" class="apexcharts-canvas apexchartspjj78jyu apexcharts-theme-" style="width: 364px; height: 110px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="364" height="110">
                                        <foreignObject x="0" y="0" width="364" height="110">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 55px;"></div>
                                            <style type="text/css">
                                                .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                                }
                                                .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                                }
                                                .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                                }
                                                .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                                }
                                                .apexcharts-legend-group {
                                                display: flex;
                                                }
                                                .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                                }
                                                .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                                }
                                                .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                                }
                                                .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                                }
                                                .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                pointer-events: none;
                                                }
                                                .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                                }
                                                .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                                }
                                                .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                                }
                                                .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                            <g class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(17.7, 20)">
                                            <defs>
                                                <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1001">
                                                    <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskpjj78jyu">
                                                    <rect width="318.6" height="90" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectBarMaskpjj78jyu">
                                                    <rect width="358" height="94" x="-19.7" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskpjj78jyu">
                                                    <rect width="318.6" height="90" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskpjj78jyu"></clipPath>
                                                <clipPath id="nonForecastMaskpjj78jyu"></clipPath>
                                            </defs>
                                            <rect width="0" height="90" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1001)" class="apexcharts-xcrosshairs" y2="90" filter="none" fill-opacity="0.9"></rect>
                                            <g class="apexcharts-grid">
                                                <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line x1="-17.7" y1="0" x2="336.3" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="-17.7" y1="45" x2="336.3" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="-17.7" y1="90" x2="336.3" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line x1="0" y1="90" x2="318.6" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line x1="0" y1="1" x2="0" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g class="apexcharts-grid-borders" style="display: none;"></g>
                                            <g class="apexcharts-bar-series apexcharts-plot-series">
                                                <g class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                    <rect width="15.93" height="90" x="-7.965" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                    <path d="M-7.965 86.001L-7.965 67.001C-7.965 65.001 -5.965 63.001 -3.965 63.001L3.965 63.001C5.965 63.001 7.965 65.001 7.965 67.001L7.965 86.001C7.965 88.001 5.965 90.001 3.965 90.001L-3.965 90.001C-5.965 90.001 -7.965 88.001 -7.965 86.001C-7.965 86.001 -7.965 86.001 -7.965 86.001 " fill="var(--bs-danger)" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskpjj78jyu)" pathTo="M -7.965 86.001 L -7.965 67.001 C -7.965 65.001 -5.965 63.001 -3.965 63.001 L 3.965 63.001 C 5.965 63.001 7.965 65.001 7.965 67.001 L 7.965 86.001 C 7.965 88.001 5.965 90.001 3.965 90.001 L -3.965 90.001 C -5.965 90.001 -7.965 88.001 -7.965 86.001 Z " pathFrom="M -7.965 90.001 L -7.965 90.001 L 7.965 90.001 L 7.965 90.001 L 7.965 90.001 L 7.965 90.001 L 7.965 90.001 L -7.965 90.001 Z" cy="63" cx="7.965" j="0" val="30" barHeight="27" barWidth="15.93"></path>
                                                    <rect width="15.93" height="90" x="71.685" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                    <path d="M71.685 86.001L71.685 31.001000000000005C71.685 29.001000000000005 73.685 27.001000000000005 75.685 27.001000000000005L83.61500000000001 27.001000000000005C85.61500000000001 27.001000000000005 87.61500000000001 29.001000000000005 87.61500000000001 31.001000000000005L87.61500000000001 86.001C87.61500000000001 88.001 85.61500000000001 90.001 83.61500000000001 90.001L75.685 90.001C73.685 90.001 71.685 88.001 71.685 86.001C71.685 86.001 71.685 86.001 71.685 86.001 " fill="var(--bs-primary)" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskpjj78jyu)" pathTo="M 71.685 86.001 L 71.685 31.001 C 71.685 29.001 73.685 27.001 75.685 27.001 L 83.61500000000001 27.001 C 85.61500000000001 27.001 87.61500000000001 29.001 87.61500000000001 31.001 L 87.61500000000001 86.001 C 87.61500000000001 88.001 85.61500000000001 90.001 83.61500000000001 90.001 L 75.685 90.001 C 73.685 90.001 71.685 88.001 71.685 86.001 Z " pathFrom="M 71.685 90.001 L 71.685 90.001 L 87.61500000000001 90.001 L 87.61500000000001 90.001 L 87.61500000000001 90.001 L 87.61500000000001 90.001 L 87.61500000000001 90.001 L 71.685 90.001 Z" cy="27" cx="87.61500000000001" j="1" val="70" barHeight="63" barWidth="15.93"></path>
                                                    <rect width="15.93" height="90" x="151.335" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                    <path d="M151.335 86.001L151.335 49.001C151.335 47.001 153.335 45.001 155.335 45.001L163.26500000000001 45.001C165.26500000000001 45.001 167.26500000000001 47.001 167.26500000000001 49.001L167.26500000000001 86.001C167.26500000000001 88.001 165.26500000000001 90.001 163.26500000000001 90.001L155.335 90.001C153.335 90.001 151.335 88.001 151.335 86.001C151.335 86.001 151.335 86.001 151.335 86.001 " fill="var(--bs-danger)" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskpjj78jyu)" pathTo="M 151.335 86.001 L 151.335 49.001 C 151.335 47.001 153.335 45.001 155.335 45.001 L 163.26500000000001 45.001 C 165.26500000000001 45.001 167.26500000000001 47.001 167.26500000000001 49.001 L 167.26500000000001 86.001 C 167.26500000000001 88.001 165.26500000000001 90.001 163.26500000000001 90.001 L 155.335 90.001 C 153.335 90.001 151.335 88.001 151.335 86.001 Z " pathFrom="M 151.335 90.001 L 151.335 90.001 L 167.26500000000001 90.001 L 167.26500000000001 90.001 L 167.26500000000001 90.001 L 167.26500000000001 90.001 L 167.26500000000001 90.001 L 151.335 90.001 Z" cy="45" cx="167.26500000000001" j="2" val="50" barHeight="45" barWidth="15.93"></path>
                                                    <rect width="15.93" height="90" x="230.985" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                    <path d="M230.985 86.001L230.985 58.001C230.985 56.001 232.985 54.001 234.985 54.001L242.91500000000002 54.001C244.91500000000002 54.001 246.91500000000002 56.001 246.91500000000002 58.001L246.91500000000002 86.001C246.91500000000002 88.001 244.91500000000002 90.001 242.91500000000002 90.001L234.985 90.001C232.985 90.001 230.985 88.001 230.985 86.001C230.985 86.001 230.985 86.001 230.985 86.001 " fill="var(--bs-primary)" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskpjj78jyu)" pathTo="M 230.985 86.001 L 230.985 58.001 C 230.985 56.001 232.985 54.001 234.985 54.001 L 242.91500000000002 54.001 C 244.91500000000002 54.001 246.91500000000002 56.001 246.91500000000002 58.001 L 246.91500000000002 86.001 C 246.91500000000002 88.001 244.91500000000002 90.001 242.91500000000002 90.001 L 234.985 90.001 C 232.985 90.001 230.985 88.001 230.985 86.001 Z " pathFrom="M 230.985 90.001 L 230.985 90.001 L 246.91500000000002 90.001 L 246.91500000000002 90.001 L 246.91500000000002 90.001 L 246.91500000000002 90.001 L 246.91500000000002 90.001 L 230.985 90.001 Z" cy="54" cx="246.91500000000002" j="3" val="40" barHeight="36" barWidth="15.93"></path>
                                                    <rect width="15.93" height="90" x="310.63500000000005" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                    <path d="M310.63500000000005 86.001L310.63500000000005 40.001C310.63500000000005 38.001 312.63500000000005 36.001 314.63500000000005 36.001L322.56500000000005 36.001C324.56500000000005 36.001 326.56500000000005 38.001 326.56500000000005 40.001L326.56500000000005 86.001C326.56500000000005 88.001 324.56500000000005 90.001 322.56500000000005 90.001L314.63500000000005 90.001C312.63500000000005 90.001 310.63500000000005 88.001 310.63500000000005 86.001C310.63500000000005 86.001 310.63500000000005 86.001 310.63500000000005 86.001 " fill="var(--bs-primary)" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskpjj78jyu)" pathTo="M 310.63500000000005 86.001 L 310.63500000000005 40.001 C 310.63500000000005 38.001 312.63500000000005 36.001 314.63500000000005 36.001 L 322.56500000000005 36.001 C 324.56500000000005 36.001 326.56500000000005 38.001 326.56500000000005 40.001 L 326.56500000000005 86.001 C 326.56500000000005 88.001 324.56500000000005 90.001 322.56500000000005 90.001 L 314.63500000000005 90.001 C 312.63500000000005 90.001 310.63500000000005 88.001 310.63500000000005 86.001 Z " pathFrom="M 310.63500000000005 90.001 L 310.63500000000005 90.001 L 326.56500000000005 90.001 L 326.56500000000005 90.001 L 326.56500000000005 90.001 L 326.56500000000005 90.001 L 326.56500000000005 90.001 L 310.63500000000005 90.001 Z" cy="36" cx="326.56500000000005" j="4" val="60" barHeight="54" barWidth="15.93"></path>
                                                    <g class="apexcharts-bar-goals-markers">
                                                        <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskpjj78jyu)"></g>
                                                        <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskpjj78jyu)"></g>
                                                        <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskpjj78jyu)"></g>
                                                        <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskpjj78jyu)"></g>
                                                        <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskpjj78jyu)"></g>
                                                    </g>
                                                    <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                </g>
                                                <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                            </g>
                                            <line x1="-17.7" y1="0" x2="336.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line x1="-17.7" y1="0" x2="336.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                            <g class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                            <g class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </svg>
                                </div>
                            </div>
                            <h6 class="text-center mb-0">Sessions</h6>
                        </div>
                    </div>
                </div>
                <!--/ Sessions chart -->
            </div>
        </div>
        <!--/ four cards -->
        <!-- Sales by Countries -->
        <div class="col-xl-4 col-md-6">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Sales by Countries</h5>
                    <div class="dropdown">
                        <button class="btn text-body-secondary p-0" type="button" id="saleStatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-base ri ri-more-2-line icon-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center mb-4">
                            <div class="avatar me-4">
                                <div class="avatar-initial bg-label-success rounded-circle">US</div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1 mb-1">
                                    <h6 class="mb-0">$8,656k</h6>
                                    <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                                    <span class="text-success">25.8%</span>
                                </div>
                                <p class="mb-0">United states of america</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-1">894k</h6>
                            <small class="text-body-secondary">Sales</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center mb-4">
                            <div class="avatar me-4">
                                <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1 mb-1">
                                    <h6 class="mb-0">$2,415k</h6>
                                    <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
                                    <span class="text-danger">6.2%</span>
                                </div>
                                <p class="mb-0">United Kingdom</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-1">645k</h6>
                            <small class="text-body-secondary">Sales</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center mb-4">
                            <div class="avatar me-4">
                                <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1 mb-1">
                                    <h6 class="mb-0">865k</h6>
                                    <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                                    <span class="text-success"> 12.4%</span>
                                </div>
                                <p class="mb-0">India</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-1">148k</h6>
                            <small class="text-body-secondary">Sales</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center mb-4">
                            <div class="avatar me-4">
                                <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1 mb-1">
                                    <h6 class="mb-0">$745k</h6>
                                    <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
                                    <span class="text-danger">11.9%</span>
                                </div>
                                <p class="mb-0">Japan</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-1">86k</h6>
                            <small class="text-body-secondary">Sales</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="avatar me-4">
                                <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1 mb-1">
                                    <h6 class="mb-0">$45k</h6>
                                    <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                                    <span class="text-success">16.2%</span>
                                </div>
                                <p class="mb-0">Korea</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-1">42k</h6>
                            <small class="text-body-secondary">Sales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Sales by Countries -->
        <!-- Deposit / Withdraw -->
        <div class="col-xl-8">
            <div class="card-group">
                <div class="card mb-0">
                    <div class="card-body card-separator">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                            <h5 class="m-0 me-2">Deposit</h5>
                            <a class="fw-medium" href="javascript:void(0);">View all</a>
                        </div>
                        <div class="deposit-content pt-2">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/gumroad.png" class="img-fluid" alt="gumroad" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Gumroad Account</h6>
                                            <p class="mb-0">Sell UI Kit</p>
                                        </div>
                                        <h6 class="text-success mb-0">+$4,650</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/mastercard-2.png" class="img-fluid" alt="mastercard" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Mastercard</h6>
                                            <p class="mb-0">Wallet deposit</p>
                                        </div>
                                        <h6 class="text-success mb-0">+$92,705</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/stripes.png" class="img-fluid" alt="stripes" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Stripe Account</h6>
                                            <p class="mb-0">iOS Application</p>
                                        </div>
                                        <h6 class="text-success mb-0">+$957</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/american-bank.png" class="img-fluid" alt="american" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">American Bank</h6>
                                            <p class="mb-0">Bank Transfer</p>
                                        </div>
                                        <h6 class="text-success mb-0">+$6,837</h6>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/citi.png" class="img-fluid" alt="citi" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bank Account</h6>
                                            <p class="mb-0">Wallet deposit</p>
                                        </div>
                                        <h6 class="text-success mb-0">+$446</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                            <h5 class="m-0 me-2">Withdraw</h5>
                            <a class="fw-medium" href="javascript:void(0);">View all</a>
                        </div>
                        <div class="withdraw-content pt-2">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/brands/google.png" class="img-fluid" alt="google" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Google Adsense</h6>
                                            <p class="mb-0">Paypal deposit</p>
                                        </div>
                                        <h6 class="text-danger mb-0">-$145</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/brands/github.png" class="img-fluid" alt="github" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Github Enterprise</h6>
                                            <p class="mb-0">Security &amp; compliance</p>
                                        </div>
                                        <h6 class="text-danger mb-0">-$1870</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/brands/slack.png" class="img-fluid" alt="slack" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Upgrade Slack Plan</h6>
                                            <p class="mb-0">Debit card deposit</p>
                                        </div>
                                        <h6 class="text-danger mb-0">$450</h6>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center pb-2">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/payments/digital-ocean.png" class="img-fluid" alt="digital" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Digital Ocean</h6>
                                            <p class="mb-0">Cloud Hosting</p>
                                        </div>
                                        <h6 class="text-danger mb-0">-$540</h6>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="../assets/img/icons/brands/aws.png" class="img-fluid" alt="aws" height="30" width="30">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">AWS Account</h6>
                                            <p class="mb-0">Choosing a Cloud Platform</p>
                                        </div>
                                        <h6 class="text-danger mb-0">-$21</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Deposit / Withdraw -->
        <!-- Data Tables -->
        <div class="col-12">
            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="text-truncate">User</th>
                                <th class="text-truncate">Email</th>
                                <th class="text-truncate">Role</th>
                                <th class="text-truncate">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                                            <small class="text-truncate">@amiccoo</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">susanna.Lind57@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-vip-crown-line icon-22px text-primary me-2"></i>
                                        <span>Admin</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                                            <small class="text-truncate">@brossiter15</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-edit-box-line text-warning icon-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                                            <small class="text-truncate">@bemblinf</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">milo86@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-computer-line text-danger icon-22px me-2"></i>
                                        <span>Author</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                                            <small class="text-truncate">@bbinerh</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">lonnie35@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-edit-box-line text-warning icon-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                                            <small class="text-truncate">@bkrabbe1d</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-pie-chart-2-line icon-22px text-info me-2"></i>
                                        <span>Maintainer</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                                            <small class="text-truncate">@brosebothamz</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-edit-box-line text-warning icon-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                                            <small class="text-truncate">@bkildayr</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">otho21@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-user-3-line icon-22px text-success me-2"></i>
                                        <span>Subscriber</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr class="border-transparent">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                                            <small class="text-truncate">@bgallemore6</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">florencio.Little@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="icon-base ri ri-user-3-line icon-22px text-success me-2"></i>
                                        <span>Subscriber</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
</div>
<!-- Content -->
</x-layouts.admin_wrapper>