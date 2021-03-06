@extends('layouts.master')

@section('content')
<section class="section">
    <h1 class="section-header">
      <div>Font Awesome</div>
    </h1>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Font Awesome</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-primary alert-has-icon">
                <div class="alert-icon"><i class="ion-ios-lightbulb-outline"></i></div>
                <div class="alert-body">
                  <div class="alert-title">Oh, no!</div>
                  <p>In addition to Ionicons, we also use the Awesome Font 5 to make it easier for you to use the icon.
                  However, the Awsome Font 5 has many icons and we can not load it on this page, but you can still go to the official page to see the available icons.</p>
                  <p>Font Awesome Free by @fontawesome</p>
                  <p>
                    <a href="https://fontawesome.com/icons" target="_blank" class="btn btn-light text-dark">Let's Go</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
