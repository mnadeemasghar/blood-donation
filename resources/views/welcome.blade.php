<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Blood Donation</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Request a Doner</div>
            <div class="card-body">
                <form action="{{ route('blood.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Blood Group</label>
                            </div>
                            <div class="col">
                                <select class="form-control" name="blood_group">
                                    <option value="o_positive">O +</option>
                                    <option value="o_negative">O -</option>
                                    <option value="a_positive">A +</option>
                                    <option value="a_negative">A -</option>
                                    <option value="b_positive">B +</option>
                                    <option value="b_negative">B -</option>
                                    <option value="ab_positive">AB +</option>
                                    <option value="ab_negative">AB -</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Type</label>
                            </div>
                            <div class="col">
                                <select name="type" id="" class="form-control">
                                    <option value="donate">Donate</option>
                                    <option value="required">Required</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Country</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="country" placeholder="i.e Pakistan">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>City</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="city" placeholder="i.e Lahore">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Area</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="area" placeholder="i.e Johar Town or Jinnah Hospital">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Contact Detail</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="contact_detail" placeholder="i.e Nadeem 03001234567">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Donations and Requests</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Sr.</th>
                        <th>Group</th>
                        <th>Type</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Contact Detail</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->blood_group }}</td>
                            <td>{{ $row->type }}</td>
                            <td>{{ $row->country }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->area }}</td>
                            <td>{{ $row->contact_detail }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
