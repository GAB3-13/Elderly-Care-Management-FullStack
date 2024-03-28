<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Salaries Page</title>
    <link rel="stylesheet" href="/css/adminNav.css">

</head>

<body>
    @include('adminpages/header')
    <div class="content-container">
        <h1>User Payments </h1>
        <table id="patientCost">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Total Due</th>
                    <th>Amount Paid</th>
                    <th>Amount Total</th>
                </tr>
                @foreach ($patients as $p)
                    <tr>
                        <td>{{ $p->fName }} {{ $p->lName }}</td>
                        <td>${{ $p->totalDue }}.00</td>
                        <td>${{ $p->payments }}.00</td>
                        <td>${{ $p->totalDue - $p->payments }}.00</td>
                    </tr>
                @endforeach
                </tr>
            </thead>
        </table>


        <form id="patientInformation" action="{{ route('updatePayment') }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}
            <label for="payments">Select Patient:</label>
            <select name="payments">
                <option value="" disabled selected hidden>Select Patient - Total Due</option>
                @foreach ($patients as $p)
                    <option value={{ $p->paymentID }}>{{ $p->fName }}
                        {{ $p->lName }} - Total Due: ${{ $p->totalDue - $p->payments }}.00</option>
                @endforeach
            </select>

            <input name="update" type="number" id="update" required>

            <input type="submit" id="submit">

        </form>

    </div>
</body>

</html>
