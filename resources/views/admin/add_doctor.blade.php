

<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">
          label{
              display:inline-block;
              width:250px;
            }
            input{
                width:250px;
            }
            </style>
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
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">

    
        <div class="container" align="center" style="padding-top: 100px">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
        @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px">
                    <label>Dane lekarza</label>
                    <input type="text" name="name" style="color:green" placeholder="Wpisz dane lekarza" required="">
                </div>

                <div style="padding:15px">
                    <label>Numer telefonu</label>
                    <input type="number" name="phone" style="color:green" placeholder="Wpisz numer telefonu lekarza" required="">
                </div>

                <div style="padding:15px;">
                    <label>Specjalizacja</label>
                    <select name="speciality" style="color:green; width:250px;" required="">
                        <option value="">-Wybierz specjalizację-</option>
                        <option value="Anestezjolog">Anestezjolog</option>
                        <option value="Neurolog">Neurolog</option>
                        <option value="Neurochirurg">Neurochirurg</option>
                        <option value="Pediatra">Pediatra</option>
                        <option value="Psychiatra">Psychiatra</option>
                        <option value="Urolog">Urolog</option>
                    </select>
                </div>

                <div style="padding:15px">
                    <label>Numer gabinetu</label>
                    <input type="text" name="room" style="color:green" placeholder="Wpisz numer gabinetu" required="">
                </div>

                <div style="padding:15px">
                    <label>Zdjęcie lekarza</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px">
                    <button type="submit" text class="btn btn-info">Wyślij</button>
                </div>
            </form>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>
