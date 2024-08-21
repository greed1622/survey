<div>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Suffix</th>
                <th>Barangay</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Service Availed</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->FirstName }} {{$customer->MiddleName}} {{$customer->LastName}}</td>
                    {{-- <td>{{ $customer->MiddleName }}</td> --}}
                    {{-- <td>{{ $customer->LastName }}</td> --}}
                    <td>{{ $customer->Suffix }}</td>
                    <td>{{ $customer->Barangay }}</td>
                    <td>{{ $customer->Municipality }}</td>
                    <td>{{ $customer->Province }}</td>
                    <td>{{ $customer->ServiceAvailed }}</td>
                    <td>{{ $customer->Purpose }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>