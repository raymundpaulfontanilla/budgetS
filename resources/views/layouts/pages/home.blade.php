@extends('layouts/components/Navbar.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <img src="{{URL('images/avatar.png')}}"><h2>Welcome back, {{ Auth::user()->name }}<Check class="btn btn-light float-end rounded-pill">⊙&nbsp;Check Budget</h2>
            <p class="text-muted">This is your dashboard. It gives you an overview of everything.</p>
            <div class="card bg-success text-light" style="width: 18rem;">
                <p class="p-2 mt-3">Budget status</p>
                <hr class="m-1">
                <div class="card-body text-center">
                  <h5 class="card-title ">Looking good, {{ Auth::user()->name }}!</h5>
                  <p class="card-text">You have spent 0% of your expected monthly budget. You still have 100% to go.</p>
                  <a href="#" class="text-light">Adjust Budget &nbsp;👉🏻</a>
                </div>
              </div>
        </div>
    </div>
    <div class="container m-4 p-4">
      <div class="row">
        <h6 class="fw-bold text-success">Accounts<span><button class="btn btn-success float-end rounded-pill p-2">✚&nbsp;Add Account</button></span></h6>
        <hr>
        <table class="table border table-hover">
          <thead>
              <tr>
                  <th>Balance</th>
                  <th>Transactions</th>
                  <th>Date Created</th>
                  <th>Actions</th>
              </tr>
              <tr>
                <td>1000</td>
                <td>0</td>
                <td>January 21, 2023</td>
                <td>
                  <button type="submit" class="btn rounded-pill btn-success btn-sm">✎</button>
                  <button type="submit" class="btn rounded-pill btn-danger btn-sm">✕</button>
                </td>
              </tr>
          </thead>
          <tbody>
             
          </tbody>
      </table>
      </div>
    </div>
</div>
@endsection
