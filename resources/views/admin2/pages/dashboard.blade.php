@extends('admin2.layouts.app')

@section('content')

  <!-- Navbar -->
   
    <!-- End Navbar -->
    <div class="container-fluid py-2">
     
  
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
          <p class="mb-4">
            Check the sales, value and bounce rate by country.
          </p>
         
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Agent SignUp</p>
                  <h4 class="mb-0">{{$data['agentSignUpDetails']}}</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">weekend</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              {{-- <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>than last week</p> --}}
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Agent Register</p>
                  <h4 class="mb-0">{{$data['agentRegisterDetails']}}</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">person</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              {{-- <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span>than last month</p> --}}
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Contact Us</p>
                  <h4 class="mb-0">{{$data['contactUsDetails']}}</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">leaderboard</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              {{-- <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than yesterday</p> --}}
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Career</p>
                 
                  <h4 class="mb-0">{{$data['contactUsDetails']}}</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">weekend</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              {{-- <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than yesterday</p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        {{-- <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card" style="display: none;">
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
               
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-4 col-md-6 mt-4 mb-4" style="display: none;">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Agent SignUp</h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Agent SignUp</h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-1" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                {{-- <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i> --}}
                {{-- <p class="mb-0 text-sm"> updated 4 min ago </p> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Agent Register</h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-2" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                {{-- <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i> --}}
                {{-- <p class="mb-0 text-sm"> updated 4 min ago </p> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Contact Us</h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-3" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                {{-- <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i> --}}
                {{-- <p class="mb-0 text-sm"> updated 4 min ago </p> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Career</h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-4" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                {{-- <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i> --}}
                {{-- <p class="mb-0 text-sm"> updated 4 min ago </p> --}}
              </div>
            </div>
          </div>
        </div>


        {{-- - --}}
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card" style="display: none">
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>

     

      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          {{-- <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Projects</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="team1">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team2">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-3.jpg" alt="team3">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team4">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $14,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">60%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team5">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team6">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="team8">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="team9">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Not set </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user1">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="user2">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-4.jpg" alt="user3">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="user4">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $20,500 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user5">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $500 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">25%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="user6">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="user7">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $2,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">40%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-4 col-md-6">
          {{-- <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Orders overview</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-success text-gradient">notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-danger text-gradient">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-info text-gradient">shopping_cart</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-warning text-gradient">credit_card</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-primary text-gradient">key</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-dark text-gradient">payments</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      {{-- <pre>{{ print_r($data['signUpMonthWiseCount'] ?? 'No Data', true) }}</pre> --}}


      <footer class="footer" style="margin-top: 16rem;" >
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://rahatitsolutions.com/" class="font-weight-bold" target="_blank">Rahat IT Solutions</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              {{-- <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul> --}}
            </div>
          </div>
        </div>
      </footer>


    </div>

@endsection

@section('scripts')
  {{--  --}}
<script>
  // var ctx = document.getElementById("chart-bars").getContext("2d");

  // new Chart(ctx, {
  //   type: "bar",
  //   data: {
  //     labels: ["M", "T", "W", "T", "F", "S", "S"],
  //     datasets: [{
  //       label: "Views",
  //       tension: 0.4,
  //       borderWidth: 0,
  //       borderRadius: 4,
  //       borderSkipped: false,
  //       backgroundColor: "#43A047",
  //       data: [10, 45, 22, 28, 50, 60, 76],
  //       barThickness: 'flex'
  //     }, ],
  //   },
  //   options: {
  //     responsive: true,
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         display: false,
  //       }
  //     },
  //     interaction: {
  //       intersect: false,
  //       mode: 'index',
  //     },
  //     scales: {
  //       y: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5],
  //           color: '#e5e5e5'
  //         },
  //         ticks: {
  //           suggestedMin: 0,
  //           suggestedMax: 500,
  //           beginAtZero: true,
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             lineHeight: 2
  //           },
  //           color: "#737373"
  //         },
  //       },
  //       x: {
  //         grid: {
  //           drawBorder: false,
  //           display: false,
  //           drawOnChartArea: false,
  //           drawTicks: false,
  //           borderDash: [5, 5]
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#737373',
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //     },
  //   },
  // });


  var ctx2 = document.getElementById("chart-line").getContext("2d");
  var signUpMonthWiseCount  = @json($data['signUpMonthWiseCount']);
//   var labels = signUpMonthWiseCount.months || []; // Extract days
// var values = signUpMonthWiseCount.signupCounts || []; // Extract signup counts
var labels = Object.values(signUpMonthWiseCount.months); // Ensure values only
var values = Object.values(signUpMonthWiseCount.signupCounts); 

console.log("Labels:", labels);
console.log("Values:", values);
  new Chart(ctx2, {
    
    type: "line",
    data: {
      // labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
      labels:labels,
      datasets: [{
        label: "Sales",
        tension: 0,
        borderWidth: 2,
        pointRadius: 3,
        pointBackgroundColor: "#43A047",
        pointBorderColor: "transparent",
        borderColor: "#43A047",
        backgroundColor: "transparent",
        fill: true,
        // data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
        data:values,
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          callbacks: {
            title: function(context) {
              const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
              return fullMonths[context[0].dataIndex];
            }
          }
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [4, 4],
            color: '#e5e5e5'
          },
          ticks: {
            display: true,
            color: '#737373',
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#737373',
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2
            },
          }
        },
      },
    },
  });

///---------agent-register-graph-data-------------------------
 
//   var signUpMonthWiseCount  = @json($data['signUpMonthWiseCount']);

// var labels = Object.values(signUpMonthWiseCount.months); // Ensure values only
// var values = Object.values(signUpMonthWiseCount.signupCounts); 
// var ctx8 = document.getElementById("chart-line-register").getContext("2d");
// console.log("Labels:", labels);
//  new Chart(ctx8, {
//     type: "line",
//     data: {
//       // labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//       labels: labels;
//       datasets: [{
//         label: "Tasks",
//         tension: 0,
//         borderWidth: 2,
//         pointRadius: 3,
//         pointBackgroundColor: "#43A047",
//         pointBorderColor: "transparent",
//         borderColor: "#43A047",
//         backgroundColor: "transparent",
//         fill: true,
//         // data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
//         data:values,
//         maxBarThickness: 6

//       }],
//     },
//     options: {
//       responsive: true,
//       maintainAspectRatio: false,
//       plugins: {
//         legend: {
//           display: false,
//         }
//       },
//       interaction: {
//         intersect: false,
//         mode: 'index',
//       },
//       scales: {
//         y: {
//           grid: {
//             drawBorder: false,
//             display: true,
//             drawOnChartArea: true,
//             drawTicks: false,
//             borderDash: [4, 4],
//             color: '#e5e5e5'
//           },
//           ticks: {
//             display: true,
//             padding: 10,
//             color: '#737373',
//             font: {
//               size: 14,
//               lineHeight: 2
//             },
//           }
//         },
//         x: {
//           grid: {
//             drawBorder: false,
//             display: false,
//             drawOnChartArea: false,
//             drawTicks: false,
//             borderDash: [4, 4]
//           },
//           ticks: {
//             display: true,
//             color: '#737373',
//             padding: 10,
//             font: {
//               size: 14,
//               lineHeight: 2
//             },
//           }
//         },
//       },
//     },
//   });

  // ----------not-working--------------------------------------------------------------

//   document.addEventListener("DOMContentLoaded", function () {
//     const lineCharts = [
//         {
//            id: "chart-line-1", 
//            label: "Sales", 
//            data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220] 
//           },
//         { id: "chart-line-2", label: "Users", data: [80, 150, 100, 200, 220, 300, 270, 190, 120, 280, 290, 200] },
//         { id: "chart-line-3", label: "Revenue", data: [90, 180, 160, 250, 300, 400, 350, 290, 230, 320, 330, 280] }
//     ];

//     lineCharts.forEach(chart => {
//         let ctx = document.getElementById(chart.id);
//         if (ctx) {
//             new Chart(ctx.getContext("2d"), {
//                 type: "line",
//                 data: {
//                     labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
//                     datasets: [{
//                         label: chart.label,
//                         borderColor: "#43A047",
//                         backgroundColor: "transparent",
//                         data: chart.data
//                     }]
//                 },
//                 options: { responsive: true, maintainAspectRatio: false }
//             });
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
        var chartData = @json($data['allChartData']);

        console.log("Chart Data Debug:", chartData); // Check if data is coming correctly

        var labels = chartData.months; // Get month labels

        var datasets = [
            {
                id: "chart-line-1",
                label: "Signups",
                borderColor: "#43A047",
                backgroundColor: "transparent",
                data: chartData.signupCounts
            },
            {
                id: "chart-line-2",
                label: "Agent Registrations",
                borderColor: "#1E88E5",
                backgroundColor: "transparent",
                data: chartData.agentRegisterCounts
            },
            {
                id: "chart-line-3",
                label: "Contact Us",
                borderColor: "#E53935",
                backgroundColor: "transparent",
                data: chartData.contactUsCounts
            },
            {
                id: "chart-line-4",
                label: "Career",
                borderColor: "#8E24AA",
                backgroundColor: "transparent",
                data: chartData.careerCounts
            }
        ];

        datasets.forEach(chart => {
            let ctx = document.getElementById(chart.id);
            if (ctx) {
                new Chart(ctx.getContext("2d"), {
                    type: "line",
                    data: {
                        labels: labels, // Dynamic labels from Laravel
                        datasets: [{
                            label: chart.label,
                            borderColor: chart.borderColor,
                            backgroundColor: chart.backgroundColor,
                            data: chart.data
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false }
                });
            }
        });
    });
  //--------------------------------
  var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");



  new Chart(ctx3, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      // labels: labels;
      datasets: [{
        label: "Tasks",
        tension: 0,
        borderWidth: 2,
        pointRadius: 3,
        pointBackgroundColor: "#43A047",
        pointBorderColor: "transparent",
        borderColor: "#43A047",
        backgroundColor: "transparent",
        fill: true,
        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
        // data:values,
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [4, 4],
            color: '#e5e5e5'
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#737373',
            font: {
              size: 14,
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [4, 4]
          },
          ticks: {
            display: true,
            color: '#737373',
            padding: 10,
            font: {
              size: 14,
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
{{--  --}}
      
@endsection