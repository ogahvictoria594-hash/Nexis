<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            School Admin
        </div>

        <ul class="nav-links">
            <li><a href="student_management.php"><i class="fas fa-user-graduate"></i> Student Management</a></li>
            <li><a href="staff_management.php"><i class="fas fa-chalkboard-teacher"></i> Staff Management</a></li>
            <li><a href="class_management.php"><i class="fas fa-school"></i> Class Management</a></li>
            <li><a href="subject_management.php"><i class="fas fa-book"></i> Subject Management</a></li>
            <li><a href="fee_management.php"><i class="fas fa-money-check-alt"></i> Fee Management</a></li>
            <li><a href="result_management.php"><i class="fas fa-chart-line"></i> Result Management</a></li>
        </ul>

        <div class="logout">
            <a href="#" class="nav-links a">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>

    <!-- Main -->
    <main class="main-content">
        <div class="topbar">
            <h1>Dashboard Overview</h1>
            <i class="fas fa-bars menu-toggle" onclick="toggleSidebar()"></i>
        </div>

        <!-- Stats -->
        <section class="stats">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>Total Students</h3>
                    <h2>1,250</h2>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-info">
                    <h3>Total Staff</h3>
                    <h2>85</h2>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-info">
                    <h3>Total Fees</h3>
                    <h2>₦12,500,000</h2>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-wallet"></i>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('active');
    }
</script>

</body>
</html>
