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
    <?php include "components/SideBar.php"; ?>

    <!-- Main -->
    <main class="main-content">
        <i class="fas fa-bars menu-toggle" onclick="toggleSidebar()"></i>
        <div class="topbar">
            <h1>Dashboard Overview</h1>
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
