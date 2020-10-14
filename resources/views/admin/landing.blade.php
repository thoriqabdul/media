@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Visitor</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">0</h2>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
                <h6 class="text-muted font-weight-normal">Since last month</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi mdi-account-multiple text-primary ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Blog</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">0</h2>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
                <h6 class="text-muted font-weight-normal">Since last month</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi mdi-blogger text-danger ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Subsribe</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">0</h2>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0% </p>
                </div>
                <h6 class="text-muted font-weight-normal">Since last month</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi mdi-glass-tulip text-success ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title">Messages</h4>
              <p class="text-muted mb-1 small">View all</p>
            </div>
            <div class="preview-list">
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="{{asset('asset-admin/images/faces/face6.jpg')}}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Leonard</h6>
                      <p class="text-muted text-small">5 minutes ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="{{asset('asset-admin/images/faces/face8.jpg')}}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Luella Mills</h6>
                      <p class="text-muted text-small">10 Minutes Ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="{{asset('asset-admin/images/faces/face9.jpg')}}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Ethel Kelly</h6>
                      <p class="text-muted text-small">2 Hours Ago</p>
                    </div>
                    <p class="text-muted">Please review the tickets</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="{{asset('asset-admin/images/faces/face11.jpg')}}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Herman May</h6>
                      <p class="text-muted text-small">4 Hours Ago</p>
                    </div>
                    <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Portfolio Slide</h4>
            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
              <div class="item">
                <img src="{{asset('asset-admin/images/dashboard/Rectangle.jpg')}}" alt="">
              </div>
              <div class="item">
                <img src="{{asset('asset-admin/images/dashboard/Img_5.jpg')}}" alt="">
              </div>
              <div class="item">
                <img src="{{asset('asset-admin/images/dashboard/img_6.jpg')}}" alt="">
              </div>
            </div>
            <div class="d-flex py-4">
              <div class="preview-list w-100">
                <div class="preview-item p-0">
                  <div class="preview-thumbnail">
                    <img src="{{asset('asset-admin/images/faces/face12.jpg')}}" class="rounded-circle" alt="">
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">CeeCee Bass</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                      </div>
                      <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-muted">Well, it seems to be working now. </p>
            <div class="progress progress-md portfolio-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To do list</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="enter task..">
              <button class="add btn btn-primary todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Create invoice </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">World Maps</h4>
            <div class="row">
              <div class="col-md-12">
                <div id="audience-map" class="vector-map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection