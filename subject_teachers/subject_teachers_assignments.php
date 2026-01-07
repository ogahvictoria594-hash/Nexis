<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

<div class="dashboard">

    <?php include "../components/subject_teacher_sidebar.php"?>

    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <main class="main-content fee-page">

        <!-- Topbar -->
        <div class="topbar">
            <h1>Assignments</h1>

            <div class="topbar-buttons">
                <button class="login-button" onclick="openAssignmentModal()">
                    <i class="fas fa-plus"></i> Create Assignment
                </button>
            </div>
        </div>

        <!-- =========================
             FILTERS (HORIZONTAL)
        ========================== -->
        <div class="stat-card filter-bar" style="margin-bottom: 25px;">

            <select class="form-input">
                <option>Filter by Subject</option>
            </select>

            <select class="form-input">
                <option>Class</option>
            </select>

            <select class="form-input">
                <option>Arm</option>
            </select>

            <select class="form-input">
                <option>Division</option>
            </select>

        </div>

        <!-- =========================
             ASSIGNMENTS TABLE
        ========================== -->
        <div class="stat-card">
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Algebra Practice</td>
                            <td>Mathematics</td>
                            <td>SS2 A</td>
                            <td>15 Feb 2026</td>
                            <td>
                                <button class="login-button">Edit</button>
                                <button class="login-button">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Essay Writing</td>
                            <td>English</td>
                            <td>SS1 B</td>
                            <td>20 Feb 2026</td>
                            <td>
                                <button class="login-button">Edit</button>
                                <button class="login-button">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<!-- =========================
     CREATE ASSIGNMENT MODAL
========================== -->
<div class="modal-overlay" id="assignmentModal">
    <div class="stat-card modal-card">

        <h3 style="margin-bottom: 20px;">Create Assignment</h3>

        <div class="form-group">
            <label class="form-label">Assignment Title</label>
            <input type="text" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Subject</label>
            <select class="form-input"></select>
        </div>

        <div class="form-group">
            <label class="form-label">Class</label>
            <select class="form-input"></select>
        </div>

        <div class="form-group">
            <label class="form-label">Arm</label>
            <select class="form-input"></select>
        </div>

        <div class="form-group">
            <label class="form-label">Division</label>
            <select class="form-input"></select>
        </div>

        <div class="form-group">
            <label class="form-label">Submission Date</label>
            <input type="date" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Assignment Question</label>
            <textarea class="form-input" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-input">
        </div>

        <div style="display:flex; gap:10px; margin-top:20px;">
            <button class="login-button">Save Assignment</button>
            <button class="login-button" onclick="closeAssignmentModal()">Cancel</button>
        </div>

    </div>
</div>

<!-- =========================
     MODAL SCRIPT
========================== -->
<script>
function openAssignmentModal() {
    document.getElementById('assignmentModal').style.display = 'flex';
}

function closeAssignmentModal() {
    document.getElementById('assignmentModal').style.display = 'none';
}
</script>

</body>
</html>
