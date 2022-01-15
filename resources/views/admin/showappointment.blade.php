

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="width:calc(100% - 1px) !important">
            <div style=""> 
                <table class="table table-stripped table-bordered">
                    <tr style="text-align:center">
                        <th>Dane pacjenta</th>
                        <th>Email</th>
                        <th>Numer telefonu</th>
                        <th>Dane lekarza</th>
                        <th>Date</th>
                        <th>Wiadomość</th>
                        <th>Zaakceptuj</th>
                        <th>Anuluj</th>
                    </tr>
                    @foreach($data as $appoint)
                    <tr style="text-align:center">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Akceptuj</a></td>
                        <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Anuluj</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>