<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/dashboard') }}">Home</a></li>
            <li><a href="{{ route('lecturers.index') }}">Lecturer List</a></li>
        </ul>
    </nav>

    <header>
        <h1>Lecturer Management</h1>
    </header>

    <main>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <section>
            <h2>Add Lecturer</h2>
            <form action="{{ route('lecturers.insert') }}" method="POST">
                @csrf
                <div>
                    <label for="lec_name">Lecturer Name:</label>
                    <input type="text" id="lec_name" name="lec_name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="major">Major:</label>
                    <select id="major" name="major">
                        <option value="">Select Major</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Geo-informatics">Geo-informatics</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                    </select>
                </div>
                <button type="submit">Add Lecturer</button>
            </form>
        </section>

        <section>
            <h2>Lecturer List ({{ $lecturers->count() }})</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Lecturer ID</th>
                        <th>Lecturer Name</th>
                        <th>Email</th>
                        <th>Major</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $lecturer)
                        <tr>
                            <td>{{ $lecturer->id }}</td>
                            <td>{{ $lecturer->lec_name }}</td>
                            <td>{{ $lecturer->email }}</td>
                            <td>{{ $lecturer->major }}</td>
                            <td>
                                <form action="{{ route('lecturers.delete', ['lec_id' => $lecturer->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>    
        </section>
    </main>
</body>
</html>
