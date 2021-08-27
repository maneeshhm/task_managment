@extends('customer.cu-dashboard')
@section('content')

    <table class="table table-striped" id="datatable">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Inqurie ID</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Inqurie</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

                {{-- get employee name and inqurie --}}
                @php
                    $empId = $item['id'];
                    
                    $empName = DB::table('contacts')
                        ->where('id', $empId)
                        ->value('name');
                    $inqurie = DB::table('contacts')
                        ->where('id', $empId)
                        ->value('inqurie');
                    
                @endphp
                <tr>

                    <td>{{ $item['id'] }}</td>
                    <td>{{ $empName }}</td>
                    {{-- <input type="hidden" class="serdelete_val" value="{{ $item['email'] }}"> --}}
                    <td>{{ $inqurie }}</td>
                    
                    <td><button class="btn btn-danger servicedeletebtn">Delete</button>
                    </td>


                </tr>
                <!-- user details update Modal -->

            @endforeach

        </tbody>
    </table>

@endsection
