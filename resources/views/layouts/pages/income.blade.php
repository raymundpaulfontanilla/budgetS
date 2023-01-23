@extends('layouts/components/Navbar.navbar')

@section('content')
<div class="container fixed-top">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <img src="{{URL('images/avatar.png')}}"><h2>Welcome back, {{ Auth::user()->name }}<span><button class="btn btn-success float-end rounded-pill p-2"data-bs-toggle="modal" data-bs-target="#incomeModal">✚&nbsp;Add Income</button></span></h6></h2>
            <!-- Modal -->
            <div class="modal fade" id="incomeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-success text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Record Income</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="text-muted">Save a new income record.</p>
                    <form>
                      @csrf
                      <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="e.g Salary">
                      </div>
                      Amount
                      <div class="mb-3">
                        <label for="quantity"></label>
                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add Income</button>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-muted">This is your income. Make as much as you can.</p>
        </div>
    </div>
    <div class="container m-4 p-4">
      <div class="row">
        <h6 class="fw-bold text-success">Income records</h6>
        <table class="table border table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Amout</th>
              </tr>
              <tr>
                <td></td>
              </tr>
          </thead>
          <tbody>
             
          </tbody>
      </table>
      </div>
    </div>
</div>
@endsection
