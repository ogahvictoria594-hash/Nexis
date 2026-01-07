<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Scores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Your main styles -->
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

<div class="dashboard">

    <!-- =========================
         SIDEBAR
    ========================== -->
    <aside class="sidebar">
        <div class="sidebar-header">Teacher Portal</div>

        <ul class="nav-links">
            <li><a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="student_scores.php" class="active"><i class="fas fa-chart-line"></i> Student Scores</a></li>
            <li><a href="#"><i class="fas fa-book"></i> Assignment</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> Timetable</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Classes</a></li>
            <li><a href="#"><i class="fas fa-bullhorn"></i> Announcements</a></li>
        </ul>

        <div class="logout">
            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </aside>

    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <main class="main-content fee-page">

        <!-- Topbar -->
        <div class="topbar">
            <h1>Student Scores</h1>

            <div class="topbar-buttons">
                <button class="login-button" onclick="openEnterScoresModal()">
                    <i class="fas fa-plus"></i> Enter Scores
                </button>
            </div>
        </div>

        <!-- =========================
             VIEW SCORES FILTERS
        ========================== -->
        <div class="stat-card" style="margin-bottom: 25px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit,minmax(180px,1fr)); gap: 15px; width: 100%;">
                
                <div class="form-group">
                    <label class="form-label">Session</label>
                    <select class="form-input">
                        <option>Select Session</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Term</label>
                    <select class="form-input">
                        <option>Select Term</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Class</label>
                    <select class="form-input">
                        <option>Select Class</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Arm</label>
                    <select class="form-input">
                        <option>Select Arm</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Subject</label>
                    <select class="form-input">
                        <option>Select Subject</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Division</label>
                    <select class="form-input">
                        <option>Science</option>
                        <option>Art</option>
                        <option>Social Science</option>
                    </select>
                </div>

            </div>

            <div style="margin-top: 15px; display: flex; gap: 10px;">
                <button class="login-button">
                    <i class="fas fa-filter"></i> Filter
                </button>
                <button class="login-button">
                    <i class="fas fa-rotate-left"></i> Reset
                </button>
            </div>
        </div>

        <!-- =========================
             VIEW SCORES TABLE
        ========================== -->
        <div class="stat-card">
            <div style="overflow-x:auto;">
                <table width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Assessment Type</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>SS2 A</td>
                            <td>1st CA</td>
                            <td>15</td>
                            <td>
                                <button class="login-button">Edit</button>
                                <button class="login-button">Delete</button>
                            </td>
                        </tr>
                        <!-- More rows -->
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<!-- =========================
     ENTER SCORES MODAL
========================== -->
<div class="modal-overlay" id="enterScoresModal">
    <div class="stat-card modal-card">

        <h3 style="margin-bottom: 15px; color: var(--navy-blue);">
            Enter Student Scores
        </h3>

        <!-- Filters -->
        <div style="display:grid; grid-template-columns: repeat(auto-fit,minmax(180px,1fr)); gap:15px;">
            <div class="form-group">
                <label class="form-label">Session</label>
                <select class="form-input"></select>
            </div>

            <div class="form-group">
                <label class="form-label">Term</label>
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
                <label class="form-label">Subject</label>
                <select class="form-input"></select>
            </div>

            <div class="form-group">
                <label class="form-label">Division</label>
                <select class="form-input">
                    <option>Science</option>
                    <option>Art</option>
                    <option>Social Science</option>
                </select>
            </div>
        </div>

        <button class="login-button" style="margin: 15px 0;">
            Load Students
        </button>

        <!-- Student Entry Table -->
        <div style="overflow-x:auto;">
            <table width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>1st CA</th>
                        <th>2nd CA</th>
                        <th>3rd CA</th>
                        <th>Exam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane Smith</td>
                        <td><input class="form-input" style="width:80px;"></td>
                        <td><input class="form-input" style="width:80px;"></td>
                        <td><input class="form-input" style="width:80px;"></td>
                        <td><input class="form-input" style="width:80px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display:flex; gap:10px; margin-top:15px;">
            <button class="login-button">Save Scores</button>
            <button class="login-button" onclick="closeEnterScoresModal()">Close</button>
        </div>

    </div>
</div>

<!-- =========================
     MODAL SCRIPT (UI ONLY)
========================== -->
<script>
function openEnterScoresModal() {
    document.getElementById('enterScoresModal').style.display = 'flex';
}

function closeEnterScoresModal() {
    document.getElementById('enterScoresModal').style.display = 'none';
}
</script>

</body>
</html>
