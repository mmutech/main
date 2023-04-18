<div>
    @push('dashboard-css')
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

        <!-- Material CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

        <!-- Chart CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    @endpush

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Count Cards -->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div class="dash-widget-info">
                        <h3>218</h3>
                        <span>All Employees</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                    <div class="dash-widget-info">
                        <h3>112</h3>
                        <span>On Leave</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-file"></i></span>
                    <div class="dash-widget-info">
                        <h3>4</h3>
                        <span>Leave Requests</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="la la-sign-out-alt"></i></span>
                    <div class="dash-widget-info">
                        <h3>15</h3>
                        <span>Exit Requests</span>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- Chart -->
    <!--<div class="row">
        <div class="card col-md-6">
            <div class="card-body">
                <h3 class="card-title">Leave Requests Summary</h3>
                <div id="bar-charts"></div>
            </div>
        </div>
        <div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Employees Churn Overview</h3>
											<div id="line-charts" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="303.8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.400024px; top: -0.600006px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.52499961853027" y="303.3999996185303" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.02499961853027,303.3999996185303H278.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="233.7999997138977" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="3.5999903678894043" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.02499961853027,233.7999997138977H278.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="164.19999980926514" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="3.599996566772461" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.02499961853027,164.19999980926514H278.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="94.59999990463257" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="3.5999951362609863" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.02499961853027,94.59999990463257H278.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.02499961853027,25H278.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="278.8" y="315.8999996185303" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="200.91056582452174" y="315.8999996185303" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="122.91443379400854" y="315.8999996185303" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="45.02499961853027" y="315.8999996185303" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="3.59999942779541" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#fc6075" d="M45.02499961853027,52.83999996185301C54.76117889046506,70.23999993801115,74.23353743433462,105.03999989032744,83.96971670626941,122.43999986648558C93.7058959782042,139.83999984264372,113.17825452207376,192.03999977111818,122.91443379400854,192.03999977111818C132.67728752970206,192.03999977111818,152.20299500108908,122.43999986648558,161.9658487367826,122.43999986648558C171.70202800871738,122.43999986648558,191.17438655258695,192.03999977111818,200.91056582452174,192.03999977111818C210.64674509645653,192.03999977111818,230.11910364032607,125.9199998617172,239.85528291226086,122.43999986648558C249.59146218419565,118.95999987125394,269.06382072806525,153.75999982357024,278.8,164.19999980926514" stroke-width="3px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ff9b44" d="M45.02499961853027,164.19999980926514C54.76117889046506,146.799999833107,74.23353743433462,94.59999990463257,83.96971670626941,94.59999990463257C93.7058959782042,94.59999990463257,113.17825452207376,164.19999980926514,122.91443379400854,164.19999980926514C132.67728752970206,164.19999980926514,152.20299500108908,94.59999990463257,161.9658487367826,94.59999990463257C171.70202800871738,94.59999990463257,191.17438655258695,164.19999980926514,200.91056582452174,164.19999980926514C210.64674509645653,164.19999980926514,230.11910364032607,111.99999988079071,239.85528291226086,94.59999990463257C249.59146218419565,77.19999992847443,269.06382072806525,42.39999997615814,278.8,25" stroke-width="3px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.02499961853027" cy="52.83999996185301" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="83.96971670626941" cy="122.43999986648558" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="122.91443379400854" cy="192.03999977111818" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="161.9658487367826" cy="122.43999986648558" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="200.91056582452174" cy="192.03999977111818" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="239.85528291226086" cy="122.43999986648558" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="278.8" cy="164.19999980926514" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="45.02499961853027" cy="164.19999980926514" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="83.96971670626941" cy="94.59999990463257" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="122.91443379400854" cy="164.19999980926514" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="161.9658487367826" cy="94.59999990463257" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="200.91056582452174" cy="164.19999980926514" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="239.85528291226086" cy="94.59999990463257" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="278.8" cy="25" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 191.862px; top: 35px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #ff9b44">
  Total Sales:
  100
</div><div class="morris-hover-point" style="color: #fc6075">
  Total Revenue:
  50
</div></div></div>
										</div>
									</div>
								</div>
        								</div>
      <div class="col-md-12">
       <div class="row">
        <div class="col-md-6 text-center">
 <div class="col-md-6 text-center">
         <div class="card">
          <div class="card-body">
           <h3 class="card-title">Sales Overview</h3>
           <div id="line-charts"></div>
          </div>
         </div>
        </div>							</div>
      </div>
 -->
    </div>

    <!-- Progress bars -->
    <!-- <div class="row">
            <div class="col-md-12">
              <div class="card-group m-b-30">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <div>
                        <span class="d-block">New Employees</span>
                      </div>
                      <div>
                        <span class="text-success">+10%</span>
                      </div>
                    </div>
                    <h3 class="mb-3">10</h3>
                    <div class="progress mb-2" style="height: 5px">
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mb-0">Overall Employees 218</p>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <div>
                        <span class="d-block">Earnings</span>
                      </div>
                      <div>
                        <span class="text-success">+12.5%</span>
                      </div>
                    </div>
                    <h3 class="mb-3">$1,42,300</h3>
                    <div class="progress mb-2" style="height: 5px">
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mb-0">
                      Previous Month <span class="text-muted">$1,15,852</span>
                    </p>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <div>
                        <span class="d-block">Expenses</span>
                      </div>
                      <div>
                        <span class="text-danger">-2.8%</span>
                      </div>
                    </div>
                    <h3 class="mb-3">$8,500</h3>
                    <div class="progress mb-2" style="height: 5px">
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mb-0">
                      Previous Month <span class="text-muted">$7,500</span>
                    </p>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <div>
                        <span class="d-block">Profit</span>
                      </div>
                      <div>
                        <span class="text-danger">-75%</span>
                      </div>
                    </div>
                    <h3 class="mb-3">$1,12,000</h3>
                    <div class="progress mb-2" style="height: 5px">
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mb-0">
                      Previous Month <span class="text-muted">$1,42,000</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

    <!-- Statistics Widget -->
    <div class="row">
        <!-- <div class="col-md-12 col-lg-12 col-xl-4 d-flex">
              <div class="card flex-fill dash-statistics">
                <div class="card-body">
                  <h5 class="card-title">Statistics</h5>
                  <div class="stats-list">
                    <div class="stats-info">
                      <p>
                        Today Leave <strong>4 <small>/ 65</small></strong>
                      </p>
                      <div class="progress">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 31%"
                          aria-valuenow="31"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                    <div class="stats-info">
                      <p>
                        Pending Invoice <strong>15 <small>/ 92</small></strong>
                      </p>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 31%"
                          aria-valuenow="31"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                    <div class="stats-info">
                      <p>
                        Completed Projects
                        <strong>85 <small>/ 112</small></strong>
                      </p>
                      <div class="progress">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 62%"
                          aria-valuenow="62"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                    <div class="stats-info">
                      <p>
                        Open Tickets <strong>190 <small>/ 212</small></strong>
                      </p>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 62%"
                          aria-valuenow="62"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                    <div class="stats-info">
                      <p>
                        Closed Tickets <strong>22 <small>/ 212</small></strong>
                      </p>
                      <div class="progress">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          style="width: 22%"
                          aria-valuenow="22"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

        <!-- Leave statistics -->
        <div class="col-md-6 col-lg-6 col-xl-5 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <h4 class="card-title">Leave Requests Statistics</h4>
                    <div class="statistics">
                        <div class="row">
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>Total Requests</p>
                                    <h3>85</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>Pending Requests</p>
                                    <h3>65</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 24%"
                            aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                            24%
                        </div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 22%"
                            aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                            22%
                        </div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 66%" aria-valuenow="14"
                            aria-valuemin="0" aria-valuemax="100">
                            54%
                        </div>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-dot-circle-o text-success me-2"></i>
                            Approved Request<span class="float-end">13</span>
                        </p>
                        <p>
                            <i class="fa fa-dot-circle-o text-warning me-2"></i>Pending Request<span
                                class="float-end">65</span>
                        </p>
                        <p>
                            <i class="fa fa-dot-circle-o text-danger me-2"></i>
                            Denied Request<span class="float-end">7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exit statistics -->
        <div class="col-md-6 col-lg-6 col-xl-5 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <h4 class="card-title">Exit Processes Statistics</h4>
                    <div class="statistics">
                        <div class="row">
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>Total Requests</p>
                                    <h3>25</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>Pending Requests</p>
                                    <h3>19</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 78%"
                            aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                            88%
                        </div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 24%"
                            aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                            12%
                        </div>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-dot-circle-o text-warning me-2"></i>Pending <span
                                class="float-end">115</span>
                        </p>
                        <p>
                            <i class="fa fa-dot-circle-o text-success me-2"></i>
                            Completed <span class="float-end">31</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
              <div class="card flex-fill">
                <div class="card-body">
                  <h4 class="card-title">
                    Today Absent
                    <span class="badge bg-inverse-danger ms-2">5</span>
                  </h4>
                  <div class="leave-info-box">
                    <div class="media d-flex align-items-center">
                      <a href="profile.html" class="avatar"
                        ><img alt="" src="assets/img/user.jpg"
                      /></a>
                      <div class="media-body flex-grow-1">
                        <div class="text-sm my-0">Martin Lewis</div>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-6">
                        <h6 class="mb-0">4 Sep 2019</h6>
                        <span class="text-sm text-muted">Leave Date</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="badge bg-inverse-danger">Pending</span>
                      </div>
                    </div>
                  </div>
                  <div class="leave-info-box">
                    <div class="media d-flex align-items-center">
                      <a href="profile.html" class="avatar"
                        ><img alt="" src="assets/img/user.jpg"
                      /></a>
                      <div class="media-body flex-grow-1">
                        <div class="text-sm my-0">Martin Lewis</div>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-6">
                        <h6 class="mb-0">4 Sep 2019</h6>
                        <span class="text-sm text-muted">Leave Date</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="badge bg-inverse-success">Approved</span>
                      </div>
                    </div>
                  </div>
                  <div class="load-more text-center">
                    <a class="text-dark" href="javascript:void(0);"
                      >Load More</a
                    >
                  </div>
                </div>
              </div>
            </div> -->
    </div>
    <!-- /Statistics Widget -->

    <!-- <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card card-table flex-fill">
                <div class="card-header">
                  <h3 class="card-title mb-0">Invoices</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-nowrap custom-table mb-0">
                      <thead>
                        <tr>
                          <th>Invoice ID</th>
                          <th>Client</th>
                          <th>Due Date</th>
                          <th>Total</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0001</a></td>
                          <td>
                            <h2><a href="#">Global Technologies</a></h2>
                          </td>
                          <td>11 Mar 2019</td>
                          <td>$380</td>
                          <td>
                            <span class="badge bg-inverse-warning"
                              >Partially Paid</span
                            >
                          </td>
                        </tr>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0002</a></td>
                          <td>
                            <h2><a href="#">Delta Infotech</a></h2>
                          </td>
                          <td>8 Feb 2019</td>
                          <td>$500</td>
                          <td>
                            <span class="badge bg-inverse-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0003</a></td>
                          <td>
                            <h2><a href="#">Cream Inc</a></h2>
                          </td>
                          <td>23 Jan 2019</td>
                          <td>$60</td>
                          <td>
                            <span class="badge bg-inverse-danger">Unpaid</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="invoices.html">View all invoices</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card card-table flex-fill">
                <div class="card-header">
                  <h3 class="card-title mb-0">Payments</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table custom-table table-nowrap mb-0">
                      <thead>
                        <tr>
                          <th>Invoice ID</th>
                          <th>Client</th>
                          <th>Payment Type</th>
                          <th>Paid Date</th>
                          <th>Paid Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0001</a></td>
                          <td>
                            <h2><a href="#">Global Technologies</a></h2>
                          </td>
                          <td>Paypal</td>
                          <td>11 Mar 2019</td>
                          <td>$380</td>
                        </tr>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0002</a></td>
                          <td>
                            <h2><a href="#">Delta Infotech</a></h2>
                          </td>
                          <td>Paypal</td>
                          <td>8 Feb 2019</td>
                          <td>$500</td>
                        </tr>
                        <tr>
                          <td><a href="invoice-view.html">#INV-0003</a></td>
                          <td>
                            <h2><a href="#">Cream Inc</a></h2>
                          </td>
                          <td>Paypal</td>
                          <td>23 Jan 2019</td>
                          <td>$60</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="payments.html">View all payments</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card card-table flex-fill">
                <div class="card-header">
                  <h3 class="card-title mb-0">Clients</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table custom-table mb-0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="#" class="avatar"
                                ><img
                                  alt=""
                                  src="assets/img/profiles/avatar-19.jpg"
                              /></a>
                              <a href="client-profile.html"
                                >Barry Cuda <span>CEO</span></a
                              >
                            </h2>
                          </td>
                          <td>barrycuda@example.com</td>
                          <td>
                            <div class="dropdown action-label">
                              <a
                                class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                href="#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="fa fa-dot-circle-o text-success"></i>
                                Active
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-success"
                                  ></i>
                                  Active</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-danger"
                                  ></i>
                                  Inactive</a
                                >
                              </div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="#" class="avatar"
                                ><img
                                  alt=""
                                  src="assets/img/profiles/avatar-19.jpg"
                              /></a>
                              <a href="client-profile.html"
                                >Tressa Wexler <span>Manager</span></a
                              >
                            </h2>
                          </td>
                          <td>tressawexler@example.com</td>
                          <td>
                            <div class="dropdown action-label">
                              <a
                                class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                href="#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="fa fa-dot-circle-o text-danger"></i>
                                Inactive
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-success"
                                  ></i>
                                  Active</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-danger"
                                  ></i>
                                  Inactive</a
                                >
                              </div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="client-profile.html" class="avatar"
                                ><img
                                  alt=""
                                  src="assets/img/profiles/avatar-07.jpg"
                              /></a>
                              <a href="client-profile.html"
                                >Ruby Bartlett <span>CEO</span></a
                              >
                            </h2>
                          </td>
                          <td>rubybartlett@example.com</td>
                          <td>
                            <div class="dropdown action-label">
                              <a
                                class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                href="#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="fa fa-dot-circle-o text-danger"></i>
                                Inactive
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-success"
                                  ></i>
                                  Active</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-danger"
                                  ></i>
                                  Inactive</a
                                >
                              </div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="client-profile.html" class="avatar"
                                ><img
                                  alt=""
                                  src="assets/img/profiles/avatar-06.jpg"
                              /></a>
                              <a href="client-profile.html">
                                Misty Tison <span>CEO</span></a
                              >
                            </h2>
                          </td>
                          <td>mistytison@example.com</td>
                          <td>
                            <div class="dropdown action-label">
                              <a
                                class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                href="#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="fa fa-dot-circle-o text-success"></i>
                                Active
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-success"
                                  ></i>
                                  Active</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-danger"
                                  ></i>
                                  Inactive</a
                                >
                              </div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="client-profile.html" class="avatar"
                                ><img
                                  alt=""
                                  src="assets/img/profiles/avatar-14.jpg"
                              /></a>
                              <a href="client-profile.html">
                                Daniel Deacon <span>CEO</span></a
                              >
                            </h2>
                          </td>
                          <td>danieldeacon@example.com</td>
                          <td>
                            <div class="dropdown action-label">
                              <a
                                class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                href="#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="fa fa-dot-circle-o text-danger"></i>
                                Inactive
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-success"
                                  ></i>
                                  Active</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i
                                    class="fa fa-dot-circle-o text-danger"
                                  ></i>
                                  Inactive</a
                                >
                              </div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="clients.html">View all clients</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card card-table flex-fill">
                <div class="card-header">
                  <h3 class="card-title mb-0">Recent Projects</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table custom-table mb-0">
                      <thead>
                        <tr>
                          <th>Project Name</th>
                          <th>Progress</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h2>
                              <a href="project-view.html">Office Management</a>
                            </h2>
                            <small class="block text-ellipsis">
                              <span>1</span>
                              <span class="text-muted">open tasks, </span>
                              <span>9</span>
                              <span class="text-muted">tasks completed</span>
                            </small>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                data-bs-toggle="tooltip"
                                title="65%"
                                style="width: 65%"
                              ></div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a href="project-view.html">Project Management</a>
                            </h2>
                            <small class="block text-ellipsis">
                              <span>2</span>
                              <span class="text-muted">open tasks, </span>
                              <span>5</span>
                              <span class="text-muted">tasks completed</span>
                            </small>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                data-bs-toggle="tooltip"
                                title="15%"
                                style="width: 15%"
                              ></div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a href="project-view.html">Video Calling App</a>
                            </h2>
                            <small class="block text-ellipsis">
                              <span>3</span>
                              <span class="text-muted">open tasks, </span>
                              <span>3</span>
                              <span class="text-muted">tasks completed</span>
                            </small>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                data-bs-toggle="tooltip"
                                title="49%"
                                style="width: 49%"
                              ></div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a href="project-view.html"
                                >Hospital Administration</a
                              >
                            </h2>
                            <small class="block text-ellipsis">
                              <span>12</span>
                              <span class="text-muted">open tasks, </span>
                              <span>4</span>
                              <span class="text-muted">tasks completed</span>
                            </small>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                data-bs-toggle="tooltip"
                                title="88%"
                                style="width: 88%"
                              ></div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a href="project-view.html"
                                >Digital Marketplace</a
                              >
                            </h2>
                            <small class="block text-ellipsis">
                              <span>7</span>
                              <span class="text-muted">open tasks, </span>
                              <span>14</span>
                              <span class="text-muted">tasks completed</span>
                            </small>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                data-bs-toggle="tooltip"
                                title="100%"
                                style="width: 100%"
                              ></div>
                            </div>
                          </td>
                          <td class="text-end">
                            <div class="dropdown dropdown-action">
                              <a
                                href="#"
                                class="action-icon dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="material-icons">more_vert</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-pencil m-r-5"></i> Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i class="fa fa-trash-o m-r-5"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="projects.html">View all projects</a>
                </div>
              </div>
            </div>
          </div> -->

    @push('dashboard-js')
        <!-- Chart JS -->
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/js/chart.js') }}"></script>
    @endpush
</div>
