@extends('admin.layouts.main')


@section('content')
<!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-lg-3 col-sm-6">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-account grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>                    User
                  </div>
                  <span class="pull-right grey-700 font-size-30">1,253</span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <i class="icon md-long-arrow-up green-500 font-size-16"></i>                  15% From this yesterday
                </div>
                <div class="ct-chart height-50"></div>
              </div>
            </div>
          </div>
          <!-- End Widget Linearea One -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <!-- Widget Linearea Two -->
          <div class="widget widget-shadow" id="widgetLineareaTwo">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-flash grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>                    VISITS
                  </div>
                  <span class="pull-right grey-700 font-size-30">2,425</span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <i class="icon md-long-arrow-up green-500 font-size-16"></i>                  34.2% From this week
                </div>
                <div class="ct-chart height-50"></div>
              </div>
            </div>
          </div>
          <!-- End Widget Linearea Two -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <!-- Widget Linearea Three -->
          <div class="widget widget-shadow" id="widgetLineareaThree">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-chart grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>                    Total Clicks
                  </div>
                  <span class="pull-right grey-700 font-size-30">1,864</span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <i class="icon md-long-arrow-down red-500 font-size-16"></i>                  15% From this yesterday
                </div>
                <div class="ct-chart height-50"></div>
              </div>
            </div>
          </div>
          <!-- End Widget Linearea Three -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <!-- Widget Linearea Four -->
          <div class="widget widget-shadow" id="widgetLineareaFour">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>                    Items
                  </div>
                  <span class="pull-right grey-700 font-size-30">845</span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <i class="icon md-long-arrow-up green-500 font-size-16"></i>                  18.4% From this yesterday
                </div>
                <div class="ct-chart height-50"></div>
              </div>
            </div>
          </div>
          <!-- End Widget Linearea Four -->
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection
