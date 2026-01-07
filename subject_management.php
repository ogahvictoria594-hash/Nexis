<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subject Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Existing CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<div class="dashboard">

    <?php include "components/sidebar.php"; ?>

    <!-- MAIN -->
    <main class="main-content">
        <span class="menu-toggle" onclick="toggleSidebar()">
         <i class="fas fa-bars"></i>
          </span>
        <!-- TOPBAR -->
        <div class="topbar">
            <h1>Subject Management</h1>

            <button class="login-button topbar-action-btn" onclick="openSubjectModal()">
                <i class="fas fa-plus"></i> Create Subject
            </button>
        </div>

        <!-- SUBJECT TABLE -->
        <div class="stat-card" style="flex-direction:column;align-items:flex-start;">
            <h3 style="margin-bottom:15px;color:#666;">Subject List</h3>

            <table style="width:100%;border-collapse:collapse;">
                <thead>
                    <tr style="background:#f1f5f9;">
                        <th style="padding:12px;">Subject Name</th>
                        <th style="padding:12px;">Class</th>
                        <th style="padding:12px;">Division</th>
                        <th style="padding:12px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding:12px;">Mathematics</td>
                        <td style="padding:12px;">SS 1</td>
                        <td style="padding:12px;">Science</td>
                        <td style="padding:12px;">
                            <button class="login-button">View Details</button>
                            <button class="login-button">Edit</button>
                            <button class="login-button">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:12px;">Literature</td>
                        <td style="padding:12px;">SS 2</td>
                        <td style="padding:12px;">Arts</td>
                        <td style="padding:12px;">
                            <button class="login-button">View Details</button>
                            <button class="login-button">Edit</button>
                            <button class="login-button">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

<!-- CREATE SUBJECT MODAL -->
<div id="subjectModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Create Subject</h3>

        <div class="form-group">
            <label class="form-label">Subject Name</label>
            <input type="text" class="form-input" placeholder="Enter subject name">
        </div>

        <div class="form-group">
            <label class="form-label">Class</label>
            <select class="form-input">
                <option>Select Class</option>
                <option>JSS 1</option>
                <option>JSS 2</option>
                <option>SS 1</option>
                <option>SS 2</option>
                <option>SS 3</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Division</label>
            <select class="form-input">
                <option>Select Division</option>
                <option>Science</option>
                <option>Arts</option>
                <option>Social Science</option>
                <option>All</option>
            </select>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="login-button">Save</button>
            <button class="login-button" onclick="closeSubjectModal()">Cancel</button>
        </div>
    </div>
</div>

<script>
const subjectModal = document.getElementById('subjectModal');

function openSubjectModal() {
    subjectModal.style.display = 'flex';
}

function closeSubjectModal() {
    subjectModal.style.display = 'none';
}

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}
  document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const toggle = document.querySelector('.menu-toggle');

    if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
        sidebar.classList.remove('active');
    }
});
</script>

</body>
</html>
