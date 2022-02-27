<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Employee List</title>
</head>

<body>



    <div class="container">

        <div class="row mt-2">
            <div class="col-12 m-1" style="text-align: center">
                <h2>
                    List of the Employees
                </h2>
            </div>

            @if (count($employees) > 0)
                <div class="col-12 m-2">
                    <form method="post" action="{{ route('search-employee') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Search Employees</button>
                                <a href="{{ route('employees') }}" class="btn btn-success">Clear Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            @endif

        </div>

        @if (count($employees) > 0)

            <div class="row mt-2">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Tazkeera</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($employees as $emp)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $emp->name }}</td>
                                    <td>{{ $emp->last_name }}</td>
                                    <td>{{ $emp->email }}</td>

                                    <td>{{ $emp->phone }}</td>
                                    <td>{{ $emp->tazkeera }}</td>
                                    <td>{{ $emp->address }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>




</body>

</html>
