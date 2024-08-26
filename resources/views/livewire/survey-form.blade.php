<div class="card-body offset-2 col-8 p-12">
    <table class="table table-striped gy-7 gs-7">
        <thead>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
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