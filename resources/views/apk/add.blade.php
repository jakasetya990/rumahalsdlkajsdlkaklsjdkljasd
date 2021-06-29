@extends('layout.admin')

@section('title', 'Add New APK')
@section('section-headers')
  <h4>Add New APK</h4>
@endsection
@section('section-body')
  <form action="{{ isset($action) ? route('apk.edit.do', ['id' => $idData]) : route('apk.add.do') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">Basic APK Information</h4>
          </div>
          <div class="card-body">

            <div class="form-group">
              <label for="apk_name">APK Name</label>
              <input type="text" name="apk_name" class="form-control" id="apk_name"
                value="{{ isset($data->apk_name) ? $data->apk_name : '' }}" required>
            </div>
            <div class="form-group">
              <label for="apk_package">APK Package</label>
              <input type="text" name="apk_package" class="form-control" id="apk_package"
                value="{{ isset($data->apk_package) ? $data->apk_package : '' }}" required>
            </div>
            <div class="form-group">
              <label for="apk_status">APK Status</label>
              <select class="form-control" name="apk_status" id="apk_status">
                <option value="banned"
                  {{ isset($data->apk_status) && $data->apk_status === 'banned' ? 'selected' : '' }}>Banned
                </option>
                <option value="active"
                  {{ isset($data->apk_status) && $data->apk_status === 'active' ? 'selected' : '' }}>Active</option>
              </select>

            </div>
            <div class="form-group">
              <label for="apk_icon">APK Icon</label>
              <input type="text" name="apk_icon" class="form-control" id="apk_icon"
                value="{{ isset($data->apk_icon) ? $data->apk_icon : 'https://v2l.cdnsfree.com/sfiles/logo_teams/defaultlogo.png' }}">
            </div>



          </div>
        </div>

        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">NOTICE SETTINGS</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="notice_status">Notice Status</label><select class="form-control" name="apk_status"
                id="apk_status">
                <option value="0" {{ isset($data->notice_status) && $data->notice_status === 0 ? 'selected' : '' }}>
                  BANNED
                </option>
                <option value="1" {{ isset($data->notice_status) && $data->notice_status === 1 ? 'selected' : '' }}>
                  ACTIVE</option>
              </select>



            </div>
            <div class="form-group">
              <label for="notice_title">Notice Title</label>
              <input type="text" name="notice_title" class="form-control" id="notice_title" placeholder="Notice Title"
                value="{{ isset($data->notice_title) ? $data->notice_title : '' }}">
            </div>
            <div class="form-group">
              <label for="notice_desc">Notice Description</label>
              <input type="text" name="notice_desc" class="form-control" id="notice_desc" placeholder="Description"
                value="{{ isset($data->notice_desc) ? $data->notice_desc : '' }}">
            </div>
            <div class="form-group">
              <label for="notice_url">Notice Url</label>
              <input type="text" name="notice_url" class="form-control" id="notice_url" placeholder="url / link"
                value="{{ isset($data->notice_url) ? $data->notice_url : '' }}">
            </div>




          </div>
        </div>




      </div>

      <div class="col-12 col-md-6 col-lg-4">

        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">REDIRECT STATUS</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="redirect_status">Redirect Status</label>
              <select class="form-control" name="redirect_status" id="redirect_status">
                <option value="1"
                  {{ isset($data->redirect_status) && $data->redirect_status === 1 ? 'selected' : '' }}>
                  Enabled
                </option>
                <option value="0"
                  {{ isset($data->redirect_status) && $data->redirect_status === 0 ? 'selected' : '' }}>
                  Disabled</option>
              </select>
            </div>
            <div class="form-group">
              <label for="redirect_to">URL To Redirect</label>
              <input type="text" name="redirect_to" class="form-control" id="redirect_to" placeholder="url / link"
                value="{{ isset($data->redirect_to) ? $data->redirect_to : '' }}">
            </div>



          </div>
        </div>

        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">ADS STATUS</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="redirect_status">Ads Type</label>
              <select class="form-control" name="ads_type" id="ads_type">
                <option value="admob" {{ isset($data->ads_type) && $data->ads_type === 'admob' ? 'selected' : '' }}>
                  ADMOB
                </option>
                <option value="fan" {{ isset($data->ads_type) && $data->ads_type === 'fan' ? 'selected' : '' }}>
                  Facebook Audience Network</option>
              </select>



            </div>
          </div>
        </div>
        <!-- BUTTON-->
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">BUTTON SETTINGS</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="button_detail_status">Button Detail Status</label>

              <select class="form-control" name="button_detail_status" id="button_detail_status">
                <option value="1"
                  {{ isset($data->button_detail_status) && $data->button_detail_status === 1 ? 'selected' : '' }}>
                  ENABLED
                </option>
                <option value="10"
                  {{ isset($data->button_detail_status) && $data->button_detail_status === 0 ? 'selected' : '' }}>
                  DISABLED</option>
              </select>
            </div>
            <div class="form-group">
              <label for="button_download_status">Button Download Status</label>

              <select class="form-control" name="button_download_status" id="button_download_status">
                <option value="1"
                  {{ isset($data->button_detail_status) && $data->button_detail_status === 1 ? 'selected' : '' }}>
                  ENABLED
                </option>
                <option value="0"
                  {{ isset($data->button_detail_status) && $data->button_detail_status === 0 ? 'selected' : '' }}>
                  DISABLED</option>
              </select>
            </div>

          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">


        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">FAN DATA</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="fan_inter">Interstitial Ads</label>
              <input type="text" name="fan_inter" class="form-control" id="fan_inter" placeholder=""
                value="{{ isset($data->fan_inter) ? $data->fan_inter : '' }}">
            </div>
            <div class="form-group">
              <label for="fan_banner">Banner Ads</label>
              <input type="text" name="fan_banner" class="form-control" id="fan_banner" placeholder=""
                value="{{ isset($data->fan_banner) ? $data->fan_banner : '' }}">
            </div>
            <div class="form-group">
              <label for="fan_native">Native Ads</label>
              <input type="text" name="fan_native" class="form-control" id="fan_native" placeholder=""
                value="{{ isset($data->fan_native) ? $data->fan_native : '' }}">
            </div>



          </div>
        </div>
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">ADMOB DATA</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="admob_inter">Interstitial Ads</label>
              <input type="text" name="admob_inter" class="form-control" id="admob_inter" placeholder=""
                value="{{ isset($data->admob_inter) ? $data->admob_inter : '' }}">
            </div>
            <div class="form-group">
              <label for="admob_banner">Banner Ads</label>
              <input type="text" name="admob_banner" class="form-control" id="admob_banner" placeholder=""
                value="{{ isset($data->admob_banner) ? $data->admob_banner : '' }}">
            </div>
            <div class="form-group">
              <label for="admob_native">Native Ads</label>
              <input type="text" name="admob_native" class="form-control" id="admob_native" placeholder=""
                value="{{ isset($data->admob_native) ? $data->admob_native : '' }}">
            </div>



          </div>
        </div>
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="text-danger">OneSignal</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="onesignal_api">Onesignal API Key</label>
              <input type="text" name="onesignal_api" class="form-control" id="onesignal_api" placeholder=""
                value="{{ isset($data->onesignal_api) ? $data->onesignal_api : '' }}">
            </div>
            <div class="form-group">
              <label for="onesignal_secret">Onesignal Secret Key</label>
              <input type="text" name="onesignal_secret" class="form-control" id="onesignal_secret" placeholder=""
                value="{{ isset($data->onesignal_secret) ? $data->onesignal_secret : '' }}">
            </div>




          </div>
        </div>
      </div>


    </div>
    <div class="col-12">
      <input type="submit" value="SAVE" class="btn btn-primary btn-block">
    </div>
  </form>
@endsection
