<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Management</title>
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
       <div class="topbar">
            <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
    <h1>Staff Management</h1>

    <button class="login-button topbar-action-btn" onclick="openStaffModal()">
        <i class="fas fa-plus"></i> Create Staff
    </button>
</div>


        <!-- STAFF TABLE -->
        <div class="stat-card" style="flex-direction:column;align-items:flex-start;">
            <h3 style="margin-bottom:15px;color:#666;">Staff List</h3>

            <table style="width:100%;border-collapse:collapse;">
                <thead>
                    <tr style="background:#f1f5f9;">
                        <th style="padding:12px;">Name</th>
                        <th style="padding:12px;">Category</th>
                        <th style="padding:12px;">Phone</th>
                        <th style="padding:12px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding:12px;">John Adewale</td>
                        <td style="padding:12px;">Academic</td>
                        <td style="padding:12px;">08012345678</td>
                        <td style="padding:12px;">
                            <button class="login-button" onclick="openRoleModal()">Assign Role</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:12px;">Mary Okorie</td>
                        <td style="padding:12px;">Non Academic</td>
                        <td style="padding:12px;">08198765432</td>
                        <td style="padding:12px;">
                            <button class="login-button" onclick="openRoleModal()">Assign Role</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

<!-- CREATE STAFF MODAL -->
  <div id="staffModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Create Staff</h3>

        <div class="form-group"><input class="form-input" placeholder="First Name"></div>
        <div class="form-group"><input class="form-input" placeholder="Surname"></div>
        <div class="form-group"><input class="form-input" placeholder="Other Names"></div>

        <div class="form-group">
            <select class="form-input">
                <option>Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>

        <div class="form-group"><input type="date" class="form-input"></div>
        <div class="form-group"><input type="date" class="form-input"></div>
        <div class="form-group"><input class="form-input" placeholder="Residential Address"></div>
        <div class="form-group"><input class="form-input" placeholder="Phone Number"></div>
        <div class="form-group"><input type="file" class="form-input"></div>
        <div class="form-group"><input class="form-input" placeholder="Job Description"></div>

        <div class="form-group">
            <select class="form-input">
                <option>Staff Category</option>
                <option>Academic</option>
                <option>Non Academic</option>
            </select>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="login-button">Save</button>
            <button class="login-button" onclick="closeStaffModal()">Cancel</button>
        </div>
    </div>
</div>


<!-- ASSIGN ROLE MODAL -->
<div id="roleModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Assign Role</h3>

        <div class="form-group">
            <input type="password" class="form-input" placeholder="Password">
        </div>

        <div class="form-group">
            <select class="form-input">
                <option>Select Staff</option>
                <option>John Adewale</option>
                <option>Mary Okorie</option>
            </select>
        </div>

        <div class="form-group">
            <select class="form-input" onchange="toggleRoleFields(this.value)">
                <option>Select Role</option>
                <option value="subject">Subject Teacher</option>
                <option value="class">Class Teacher</option>
                <option value="head">Head of School</option>
            </select>
        </div>

        <div id="subjectFields" style="display:none;">
            <div class="form-group">
                <select class="form-input"><option>Mathematics</option><option>English</option></select>
            </div>
            <div class="form-group">
                <select class="form-input"><option>SS 1</option><option>SS 2</option></select>
            </div>
            <div class="form-group">
                <select class="form-input"><option>A</option><option>B</option></select>
            </div>
        </div>

        <div id="classFields" style="display:none;">
            <div class="form-group">
                <select class="form-input"><option>Primary 5</option><option>SS 1</option></select>
            </div>
            <div class="form-group">
                <select class="form-input"><option>A</option><option>B</option></select>
            </div>
        </div>

        <div id="headFields" style="display:none;">
            <div class="form-group">
                <select class="form-input">
                    <option>Nursery</option>
                    <option>Primary</option>
                    <option>Secondary</option>
                </select>
            </div>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="login-button">Assign</button>
            <button class="login-button" onclick="closeRoleModal()">Cancel</button>
        </div>
    </div>
</div>


<script>
const staffModal   = document.getElementById('staffModal');
const roleModal    = document.getElementById('roleModal');
const subjectFields = document.getElementById('subjectFields');
const classFields   = document.getElementById('classFields');
const headFields    = document.getElementById('headFields');

function openStaffModal() {
    staffModal.style.display = 'flex';
}

function closeStaffModal() {
    staffModal.style.display = 'none';
}

function openRoleModal() {
    roleModal.style.display = 'flex';
}

function closeRoleModal() {
    roleModal.style.display = 'none';
}

function toggleRoleFields(role) {
    subjectFields.style.display = role === 'subject' ? 'block' : 'none';
    classFields.style.display   = role === 'class'   ? 'block' : 'none';
    headFields.style.display    = role === 'head'    ? 'block' : 'none';
}

const sidebar = document.getElementById('sidebar');
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});

document.addEventListener('click', function(e) {
    if (window.innerWidth <= 768 && !sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
        sidebar.classList.remove('active');
    }
});


</script>


</body>
</html>


