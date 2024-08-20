<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding:25px;
            text-align: left;
        }

        .narrow{
            padding: 8px,!important;
            text-align: left;
        }

       h1,h3,p{
           text-align: center;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
   
    <table>
    <tr>
        <th></th> <!-- This empty <th> is for the first cell in the first row, aligning with the days column -->
        @foreach($times as $t)
            <th class="narrow">{{$t->duration}}</th>
        @endforeach
    </tr>
    
    @php
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $breakLabel = str_split('BREAK');
        $lunchLabel = str_split('LUNCH');
    @endphp

    @foreach ($days as $day)
        <tr>
            <th scope="row">{{ $day }}</th>
            @php
                $subjectColumns = [];

                foreach ($timetable[$day] as $slot) {
                    $colIndex = (int) substr($slot->timeslot, -1) - 1;
                    $subjectColumns[$colIndex] = $slot->subject;
                }

                // Insert BREAK after c2
                if (!isset($subjectColumns[2])) {
                    $subjectColumns[2] = '<strong>' . $breakLabel[$loop->index] . '</strong>';
                }

                // Insert LUNCH after c5
                if (!isset($subjectColumns[5])) {
                    $subjectColumns[5] = '<strong>' . $lunchLabel[$loop->index] . '</strong>';
                }
            @endphp

            @for ($i = 0; $i < 7; $i++)
                <td>{!! $subjectColumns[$i] ?? '' !!}</td>
            @endfor
        </tr>
    @endforeach
</table>

</body>
</html>
