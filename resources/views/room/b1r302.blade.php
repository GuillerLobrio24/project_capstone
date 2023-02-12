@extends('layouts.app')

@section('b1r302')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            Building 1 : Room 302

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

            @foreach ($b1r302 as $datab1r302)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$datab1r302->id}}</td>
                    <td>{{$datab1r302->subject}}</td>
                    <td>{{$datab1r302->professor}}</td>
                    <td>{{$datab1r302->schedulefrom}}</td>
                    <td>{{$datab1r302->scheduleto}}</td>

                    <td><a type="button" class="btn view-btn" href="/b1r401/{{$datab1r302->id}}">View</a></td>

                    <td>
                        <form action="/b1r401/{{$datab1r302->id}}" method="post">
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