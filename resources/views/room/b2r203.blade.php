@extends('layouts.app')

@section('b2r203')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            Building 2 : Room 203

            <thead class="thead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Professor Name</th>
                    <th scope="col">Duration</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($b2r203 as $datab2r203)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$datab2r203->id}}</td>
                    <td>{{$datab2r203->subject}}</td>
                    <td>{{$datab2r203->professor}}</td>
                    <td>{{$datab2r203->schedulefrom}}</td>
                    <td>{{$datab2r203->scheduleto}}</td>

                    <td><a type="button" class="btn view-btn" href="/b1r401/{{$datab2r203->id}}">View</a></td>

                    <td>
                        <form action="/b1r401/{{$datab2r203->id}}" method="post">
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