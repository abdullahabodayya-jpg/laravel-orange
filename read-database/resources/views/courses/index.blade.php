<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
</head>
<body>

    <h1>Courses List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description </th>
            <th>Houres</th>
            <th>Students</th>
        </tr>
        
            @foreach ($courses as $course)
            <tr>
        
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->hours }}</td>
                <td>
                    @forelse ($course->students  as $student )
                     <div>{{ $student->student_name }}</div>
                    @empty
                        <span>No students enrolled</span>
                    @endforelse
                </td>
            </tr>
                
            @endforeach
    </table>

    
</body>
</html>