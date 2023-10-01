<!DOCTYPE html>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>temperature</th>
            <th>humidity</th>
            <th>rainfall</th>
            <th>wind_direction</th>
            <th>wind_direction_degrees</th>
            <th>wind_speed</th>
            <th>water_temperature</th>
            <th>aqi</th>
            <th>co2</th>
            <th>irradiation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($climateData as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->temperature }}</td>
                <td>{{ $data->humidity }}</td>
                <td>{{ $data->rainfall }}</td>
                <td>{{ $data->wind_direction }}</td>
                <td>{{ $data->wind_direction_degrees}}</td>
                <td>{{ $data->wind_speed}}</td>
                <td>{{ $data->water_temperature}}</td>
                <td>{{ $data->aqi }}</td>
                <td>{{ $data->co2 }}</td>
                <td>{{ $data->irradiation }}</td>
            </tr>
        @endforeach
    </tbody>
</table>