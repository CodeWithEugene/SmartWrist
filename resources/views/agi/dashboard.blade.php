@extends('layouts.master')

@section('title', 'AGI Wristband')

@section('content')
    <x-page-title title="AGI Dashboard" pagetitle="AGI Wristband" />

    <div class="row">
      <div class="col-12 col-xl-8 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
              <h5 class="mb-0 fw-bold">Live Vitals</h5>
              <span class="badge bg-success">Connected</span>
            </div>
            <div class="row g-4">
              <div class="col-6 col-md-3">
                <div class="p-3 border rounded-4 text-center">
                  <p class="mb-1">Temperature</p>
                  <h3 class="mb-0">36.8°C</h3>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="p-3 border rounded-4 text-center">
                  <p class="mb-1">Heart Rate</p>
                  <h3 class="mb-0">128 bpm</h3>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="p-3 border rounded-4 text-center">
                  <p class="mb-1">SpO₂</p>
                  <h3 class="mb-0">98%</h3>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="p-3 border rounded-4 text-center">
                  <p class="mb-1">Resp. Rate</p>
                  <h3 class="mb-0">34 rpm</h3>
                </div>
              </div>
            </div>
            <div class="mt-4" id="agi-vitals-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Status & Battery</h5>
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="material-icons-outlined text-success">health_and_safety</span>
              <div>
                <p class="mb-0">Baby Status</p>
                <h6 class="mb-0">Calm / Sleeping</h6>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="material-icons-outlined text-warning">battery_full</span>
              <div>
                <p class="mb-0">Battery</p>
                <h6 class="mb-0">82% • ~12h remaining</h6>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <span class="material-icons-outlined text-info">wifi</span>
              <div>
                <p class="mb-0">Connectivity</p>
                <h6 class="mb-0">Wi‑Fi • Good signal</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Cry & Sound Classification</h5>
            <p class="mb-2">Last detection: <span class="fw-medium">No cry detected</span></p>
            <div id="agi-cry-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Non‑Vocal Distress (Movement + Vitals)</h5>
            <div class="d-flex align-items-center gap-4">
              <div class="display-4 fw-bold text-danger">12%</div>
              <div>
                <p class="mb-1">Risk level</p>
                <div class="progress" style="height: 8px; width: 220px;">
                  <div class="progress-bar bg-danger" style="width: 12%"></div>
                </div>
              </div>
            </div>
            <div class="mt-3" id="agi-stress-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-7 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Recent Alerts & Guidance</h5>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-center justify-content-between border rounded-4 p-3">
                <div class="d-flex align-items-center gap-3">
                  <span class="material-icons-outlined text-warning">notification_important</span>
                  <div>
                    <h6 class="mb-0">Slight temperature increase</h6>
                    <small>Recommendation: Check room temperature and hydrate the baby.</small>
                  </div>
                </div>
                <span class="text-muted">2 min ago</span>
              </div>
              <div class="d-flex align-items-center justify-content-between border rounded-4 p-3">
                <div class="d-flex align-items-center gap-3">
                  <span class="material-icons-outlined text-info">bedtime</span>
                  <div>
                    <h6 class="mb-0">Sleep cycle change detected</h6>
                    <small>Tip: Reduce noise and dim lights for better sleep continuity.</small>
                  </div>
                </div>
                <span class="text-muted">18 min ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-5 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Caregiver Coach</h5>
            <ol class="mb-0 ps-3">
              <li>Verify wristband placement (2‑finger rule)</li>
              <li>Check diaper and feeding schedule</li>
              <li>Ensure ambient temp 20–22°C and good ventilation</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
  <script src="{{ URL::asset('build/plugins/apexchart/apexcharts.min.js') }}"></script>
  <script>
    const lineOpts = {
      chart: { type: 'line', height: 240, toolbar: { show: false } },
      series: [ { name: 'HR', data: [120,126,130,128,122,118,124] }, { name: 'SpO₂', data: [99,98,98,97,98,99,98] } ],
      stroke: { width: 3 }, markers: { size: 0 }, xaxis: { categories: ['-6m','-5m','-4m','-3m','-2m','-1m','Now'] }
    };
    new ApexCharts(document.querySelector('#agi-vitals-chart'), lineOpts).render();

    const cryOpts = {
      chart: { type: 'bar', height: 220, toolbar: { show: false } },
      series: [{ name: 'Cries', data: [0,1,0,2,0,0,1] }],
      xaxis: { categories: ['12a','2a','4a','6a','8a','10a','12p'] }
    };
    new ApexCharts(document.querySelector('#agi-cry-chart'), cryOpts).render();

    const stressOpts = {
      chart: { type: 'area', height: 220, toolbar: { show: false } },
      series: [{ name: 'Stress score', data: [8,10,9,12,11,13,12] }],
      dataLabels: { enabled: false }, stroke: { width: 2 },
      xaxis: { categories: ['-6h','-5h','-4h','-3h','-2h','-1h','Now'] }
    };
    new ApexCharts(document.querySelector('#agi-stress-chart'), stressOpts).render();
  </script>
@endsection
