<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Your existing CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<div class="dashboard">

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


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">
            <h1>Class Management</h1>
            <button class="login-button" onclick="openModal()" style="width:auto;padding:12px 18px;">
                <i class="fas fa-plus"></i> Create Class
            </button>
        </div>

        <!-- CLASS LIST -->
        <div class="stat-card" style="flex-direction:column;align-items:flex-start;width:100%;">
            <h3 style="margin-bottom:15px;color:#666;">Available Classes</h3>

            <div style="width:100%;overflow-x:auto;">
                <table style="width:100%;border-collapse:collapse;">
                    <thead>
                        <tr style="background:#f1f5f9;">
                            <th style="padding:12px;text-align:left;">Branch</th>
                            <th style="padding:12px;text-align:left;">Class Name</th>
                            <th style="padding:12px;text-align:left;">Class Arm</th>
                            <th style="padding:12px;text-align:left;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding:12px;">Secondary</td>
                            <td style="padding:12px;">SS 1</td>
                            <td style="padding:12px;">A</td>
                            <td style="padding:12px;">
                                <button style="margin-right:8px;" class="login-button">Edit</button>
                                <button style="background:#eee;color:#333;" class="login-button">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;">Primary</td>
                            <td style="padding:12px;">Primary 5</td>
                            <td style="padding:12px;">B</td>
                            <td style="padding:12px;">
                                <button style="margin-right:8px;" class="login-button">Edit</button>
                                <button style="background:#eee;color:#333;" class="login-button">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<!-- CREATE CLASS MODAL -->
<div id="classModal" style="
    display:none;
    position:fixed;
    top:0;left:0;
    width:100%;height:100%;
    background:rgba(0,0,0,0.4);
    justify-content:center;
    align-items:center;
    z-index:2000;
">

    <div class="stat-card" style="width:100%;max-width:450px;flex-direction:column;align-items:flex-start;">
        <h3 style="margin-bottom:15px;color:var(--navy-blue);">Create Class</h3>

        <div class="form-group" style="width:100%;">
            <label class="form-label">School Branch</label>
            <select class="form-input">
                <option>Nursery</option>
                <option>Primary</option>
                <option>Secondary</option>
            </select>
        </div>

        <div class="form-group" style="width:100%;">
            <label class="form-label">Class Name</label>
            <input type="text" class="form-input" placeholder="e.g. SS 1">
        </div>

        <div class="form-group" style="width:100%;">
            <label class="form-label">Class Arm</label>
            <input type="text" class="form-input" placeholder="e.g. A">
        </div>

        <div style="display:flex;gap:10px;width:100%;margin-top:15px;">
            <button class="login-button" style="flex:1;">Save Class</button>
            <button class="login-button" onclick="closeModal()" style="flex:1;background:#eee;color:#333;">
                Cancel
            </button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('classModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('classModal').style.display = 'none';
    }
</script>

</body>
</html>
