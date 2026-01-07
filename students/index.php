<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Management Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/student_dashboard.css">
    
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">Students Portal</div>
        <a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#"><i class="fas fa-bullhorn"></i> Announcements</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Timetable</a>
        <a href="#"><i class="fas fa-file-alt"></i> Results</a>
        <a href="#"><i class="fas fa-user"></i> Profile</a>
        <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </aside>

    <!-- Main content -->
    <main class="main-content">
        <div class="header">Welcome Back, Student!</div>

        <!-- Stats cards -->
        <div class="stats-grid">
            <div class="card">
                <div class="card-title">Current Average</div>
                <div class="card-value">87%</div>
            </div>
            <div class="card">
                <div class="card-title">Pending Assignments</div>
                <div class="card-value">3</div>
            </div>
            <div class="card">
                <div class="card-title">Total Fees</div>
                <div class="card-value">$1,250</div>
            </div>
        </div>
    </main>

</body>
</html>
