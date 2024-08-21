<div>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Service Availed</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->FirstName }} {{$customer->MiddleName}} {{$customer->LastName}} {{$customer->Suffix}}</td>
                    <td>{{ $customer->Barangay }}, {{$customer->Municipality}}, {{$customer->Province}}</td>
                    <td>{{ $customer->ServiceAvailed }}</td>
                    <td>{{ $customer->Purpose }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>