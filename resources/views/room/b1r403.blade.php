@extends('layouts.app')

@section('b1r403')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            Building 1 : Room 403

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

            @foreach ($b1r403 as $datab1r403)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$datab1r403->id}}</td>
                    <td>{{$datab1r403->b1r403subject}}</td>
                    <td>{{$datab1r403->b1r403professor}}</td>
                    <td>{{$datab1r403->b1r403schedulefrom}}</td>
                    <td>{{$datab1r403->b1r403scheduleto}}</td>

                    <td><a type="button" class="btn view-btn" href="/b1r403/{{$datab1r403->id}}">View</a></td>

                    <td>
                        <form action="/b1r403/{{$datab1r403->id}}" method="post">
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