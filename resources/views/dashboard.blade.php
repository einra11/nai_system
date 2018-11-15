@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Messages</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Test</td>
                                <td>test@email.com</td>
                                <td><button type="button" class="btn btn-secondary">Secondary</button></td>
                              </tr>
                              <tr>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Test</td>
                                <td>test@email.com</td>
                                <td><button type="button" class="btn btn-secondary">Secondary</button></td>
                              </tr>
                              <tr>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>Test</td>
                                <td>test@email.com</td>
                                <td><button type="button" class="btn btn-secondary">Secondary</button></td>
                              </tr>
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
