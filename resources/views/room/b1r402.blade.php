@extends('layouts.app')

@section('b1r402')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            Building 1 : Room 402

            <thead class="thead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Professor Name</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            @foreach ($b1r402 as $datab1r402)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$datab1r402->id}}</td>
                    <td>{{$datab1r402->b1r402subject}}</td>
                    <td>{{$datab1r402->b1r402professor}}</td>
                    <td>{{$datab1r402->b1r402schedulefrom}}</td>
                    <td>{{$datab1r402->b1r402scheduleto}}</td>

                    <td><a type="button" class="btn view-btn" href="/b1r402/{{$datab1r402->id}}">View</a></td>

                    <td>
                        <form action="/b1r402/{{$datab1r402->id}}" method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <input class="btn delete-btn" type="submit" value="Delete">
                        </form>
                    </td>

                    <td>
                        <select class="form-control" name="subject_status">
                                        
                            <option value="Pending">Pending</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Cancelled">Cancelled</option>
                            <option value="Ended">Ended</option>

                        </select>
                    </td>
                </tr>
            </tbody>
                
            @endforeach

        </table>

    </div>

@endsection