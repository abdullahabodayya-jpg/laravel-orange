<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studentss</title>
</head>
<body>

    <h1>Students List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Corses</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Bio</th>
        </tr>
        
            @foreach ($students as $student)
            <tr>
        
                <td>{{ $student->id }}</td>
                <td>{{ $student->student_name }}</td>
                <td>{{ $student->student_email }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    @forelse ( $student->courses as $course )
                        <div>{{ $course->title }}</div>
                    @empty
                        <span>No enroolments yet</span>
                    @endforelse
                </td>
                <td>
                    {{ $student->department?->name ?? 'Not assigned' }}
                </td>
                <td>
                    {{ $student->profile?->phone ?? 'No phone' }}
                </td>
                <td>
                    {{ $student->profile?->bio ?? 'No bio' }}
                </td>
                
            </tr>
                
            @endforeach
    </table>

    
</body>
</html>