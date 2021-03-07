@extends('layouts.admin')
@section('content')


    <div class="content">

        <div class="row">
            <h3 style="text-align:left;"><strong>Withdrawals</strong></h3>

            <p style="text-align:left;"> ID No: 48u94utgfn98934u9034ui95u9</p>

            <div class="col-md-12">
                <h3>Title</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Branch</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Dismus Wambilianga</td>
                            <td>5/2/2035</td>
                            <td><span class="label label-success">Active</span></td>
                            <td>Texas</td>
                            <td>2500</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
    {{-- @endsection --}}
    {{-- @section('scripts') --}}
    {{-- @parent --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> --}}
    {{-- {!! $chart->renderJs() !!} --}}
@endsection
