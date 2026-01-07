<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="dashboard">

       <?php include "../components/subject_teacher_sidebar.php" ;?>

        <!-- =========================
             MAIN CONTENT
        ========================== -->
        <main class="main-content">

            <!-- Topbar -->
            <div class="topbar">
                <h1>Dashboard</h1>
            </div>

            <!-- Stats Cards -->
            <div class="stats">
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Total Classes Taught</h3>
                        <h2>5</h2> <!-- Replace with dynamic PHP -->
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Total Subjects Taught</h3>
                        <h2>3</h2> <!-- Replace with dynamic PHP -->
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>
            </div>

            <!-- Optional: quick links or announcements -->
            <div class="quick-links" style="margin-top: 30px;">
                <!-- Can add buttons linking to Student Scores, Assignments etc -->
            </div>
        </main>
    </div>
</body>
</html>
