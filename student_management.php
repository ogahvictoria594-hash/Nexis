<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
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

        <!-- TOPBAR -->
         <span class="menu-toggle" onclick="toggleSidebar()">
         <i class="fas fa-bars"></i>
          </span>

        <div class="topbar">
            <h1>Student Management</h1>

            <button class="login-button topbar-action-btn" onclick="openStudentModal()">
                <i class="fas fa-plus"></i> Create Student
            </button>
        </div>

        <!-- STUDENT TABLE -->
        <div class="stat-card" style="flex-direction:column;align-items:flex-start;">
            <h3 style="margin-bottom:15px;color:#666;">Student List</h3>

            <table style="width:100%;border-collapse:collapse;">
                <thead>
                    <tr style="background:#f1f5f9;">
                        <th style="padding:12px;">Student Name</th>
                        <th style="padding:12px;">Class</th>
                        <th style="padding:12px;">Arm</th>
                        <th style="padding:12px;">Parent Phone</th>
                        <th style="padding:12px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding:12px;">Daniel Okafor</td>
                        <td style="padding:12px;">SS 1</td>
                        <td style="padding:12px;">A</td>
                        <td style="padding:12px;">08034567890</td>
                        <td style="padding:12px;">
                            <button class="login-button">View</button>
                            <button class="login-button">Edit</button>
                            <button class="login-button">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:12px;">Amina Bello</td>
                        <td style="padding:12px;">JSS 2</td>
                        <td style="padding:12px;">B</td>
                        <td style="padding:12px;">08123456789</td>
                        <td style="padding:12px;">
                            <button class="login-button">View</button>
                            <button class="login-button">Edit</button>
                            <button class="login-button">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

<!-- CREATE STUDENT MODAL -->
<div id="studentModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Create Student</h3>

        <div class="form-group">
          <label for="firstName" class="form-label">First Name</label>
            <input class="form-input" placeholder="First Name">
        </div>

        <label for="SurName" class="form-label">Surname</label>
        <div class="form-group">
            <input class="form-input" placeholder="Surname">
        </div>

        <label for="OtherNames" class="form-label">Other Names</label>
        <div class="form-group">
            <input class="form-input" placeholder="Other Names">
        </div>

        <label for="gender" class="form-label">Select Your Gender</label>
        <div class="form-group">
            <select class="form-input">
                <option disabled >Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>

        <label for="date">Date Of Birth</label>
        <div class="form-group">
            <input type="date" class="form-input">
        </div>

        <label for="class" class="form-label">Select Class</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Class</option>
                <option>JSS 1</option>
                <option>JSS 2</option>
                <option>SS 1</option>
                <option>SS 2</option>
                <option>SS 3</option>
            </select>
        </div>

        <label for="classArm" class="form-label">Select An Arm</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Class Arm</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
            </select>
        </div>

        <label for="Address" class="form-label">Address</label>
        <div class="form-group">
            <input class="form-input" placeholder="Residential Address">
        </div>

        <label for="ParentName" class="form-label">Parent's Name</label>
        <div class="form-group">
            <input class="form-input" placeholder="Parent's Name">
        </div>

        <label for="ParentNumber" class="form-label">Parent's Phone Number</label>
        <div class="form-group">
            <input class="form-input" placeholder="Parent's Phone Number">
        </div>

        <label for="ProfilePicture" class="form-label">Profile Picture</label>
        <div class="form-group">
            <input type="file" class="form-input">
        </div>

        <label for="password" class="form-label">Password</label>
        <div class="form-group">
            <input type="password" class="form-input" placeholder="Password">
        </div>

        <div style="display:flex;gap:10px;">
            <button class="login-button">Save</button>
            <button class="login-button" onclick="closeStudentModal()">Cancel</button>
        </div>
    </div>
</div>

<script>
const studentModal = document.getElementById('studentModal');

function openStudentModal() {
    studentModal.style.display = 'flex';
}

function closeStudentModal() {
    studentModal.style.display = 'none';
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
