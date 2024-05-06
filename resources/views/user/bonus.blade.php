@extends('user.base')
@section('content')
    @inject('injected','App\Defaults\Custom')


    <div class="container-fluid mt-5">
        <div class="ui-kit-cards grid mb-24">
            <h3>Bonus Table</h3>

            <div class="latest-transaction-area">
                <div class="table-responsive h-auto" data-simplebar>
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            <th scope="col">AMOUNT</th>
                            <th scope="col">SENT AT</th>
                            <th scope="col">STATUS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bonuses as $account)
                            <tr>
                                <td>${{number_format($account->amount,2)}}</td>
                                <td>{{$account->created_at}}</td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{$bonuses->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
