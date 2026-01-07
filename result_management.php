<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Results Management</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="dashboard"> <?php include "components/sidebar.php"; ?>

    <div class="main-content">
        
        <div class="topbar">
            <div class="topbar-info" style="display: flex; align-items: center; gap: 15px;">
                <button class="hamburger-btn" onclick="toggleSidebar()" style="display: none; border: none; background: none; font-size: 20px; cursor: pointer;">
                    <i class="fas fa-bars"></i>
                </button>
                <div>
                    <h1>Results Management</h1>
                    <p style="color: #666; font-size: 14px;">
                        Welcome, Administrator! Manage student results and grading systems
                    </p>
                </div>
            </div>
            <div class="topbar-actions" style="display: flex; gap: 10px;">
                
                <button class="login-button" onclick="document.getElementById('resultsModal').style.display='flex'">
                    <i class="fas fa-plus-circle"></i> Input Scores
                </button>
                <button class="login-button" onclick="document.getElementById('viewResultsModal').style.display='flex'">
                    <i class="fas fa-eye"></i> View Results
                </button>
            </div>
        </div>

        <!-- Existing table (optional for overview) -->
        <div class="stat-card" style="display: block; margin-bottom: 25px;">
            <h3 style="margin-bottom: 15px;"><i class="fas fa-filter"></i> Filter / Search Scores</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; align-items: end;">
                
                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Session</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Term</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Class</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Arm</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Division</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom:0;">
                    <select class="form-input">
                        <option>Subject</option>
                    </select>
                </div>

                <button class="login-button" style="background: #6c757d; color: white; box-shadow: none;">
                    <i class="fas fa-redo"></i> Reset
                </button>
            </div>
        </div>

        <!-- Scores Table -->
        <div class="stat-card" style="display: block; padding: 0; overflow-x: auto;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px; min-width: 700px;">
        <thead style="background: var(--navy-blue); color: white;">
            <tr>
                <th style="padding: 15px;">#</th>
                <th style="padding: 15px; text-align: left;">Student Name</th>
                <th style="padding: 15px; text-align: left;">Class</th>
                <th style="padding: 15px; text-align: left;">Assessment Type</th>
                <th style="padding: 15px; text-align: center;">Score</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 12px; text-align: center;">1</td>
                <td style="padding: 12px;">John Doe</td>
                <td style="padding: 12px;">SS1</td>
                <td style="padding: 12px;">1st CA</td>
                <td style="padding: 12px; text-align: center;">78</td>
            </tr>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 12px; text-align: center;">2</td>
                <td style="padding: 12px;">Jane Smith</td>
                <td style="padding: 12px;">SS1</td>
                <td style="padding: 12px;">2nd CA</td>
                <td style="padding: 12px; text-align: center;">85</td>
            </tr>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 12px; text-align: center;">3</td>
                <td style="padding: 12px;">Michael Johnson</td>
                <td style="padding: 12px;">SS2</td>
                <td style="padding: 12px;">Exam</td>
                <td style="padding: 12px; text-align: center;">92</td>
            </tr>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 12px; text-align: center;">4</td>
                <td style="padding: 12px;">Emily Davis</td>
                <td style="padding: 12px;">SS2</td>
                <td style="padding: 12px;">1st CA</td>
                <td style="padding: 12px; text-align: center;">74</td>
            </tr>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 12px; text-align: center;">5</td>
                <td style="padding: 12px;">William Brown</td>
                <td style="padding: 12px;">SS3</td>
                <td style="padding: 12px;">Exam</td>
                <td style="padding: 12px; text-align: center;">88</td>
            </tr>
        </tbody>
    </table>
</div>

    </div> 
</div> 

<!-- Input Scores Modal -->
<div class="modal-overlay" id="resultsModal" style="display: none;">
    <div class="modal-card" style="background: white; border-radius: 14px; padding: 25px; max-width: 900px; width: 95%;">
        
        <!-- Modal Header -->
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <h2 style="color: var(--navy-blue); font-size: 20px;">Input Student Scores</h2>
            <button onclick="document.getElementById('resultsModal').style.display='none'" style="border:none; background:none; font-size: 24px; cursor:pointer;">&times;</button>
        </div>
        
        <!-- Filters -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-bottom: 20px;">
            <div class="form-group">
                <label class="form-label">Session</label>
                <select class="form-input">
                    <option>2024/2025</option>
                    <option>2023/2024</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Term</label>
                <select class="form-input">
                    <option>1st Term</option>
                    <option>2nd Term</option>
                    <option>3rd Term</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Class</label>
                <select class="form-input">
                    <option>SS1</option>
                    <option>SS2</option>
                    <option>SS3</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Arm</label>
                <select class="form-input">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Division</label>
                <select class="form-input">
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Commercial</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Subject</label>
                <select class="form-input">
                    <option>Mathematics</option>
                    <option>English</option>
                    <option>Biology</option>
                </select>
            </div>
        </div>

        <!-- Students Table -->
        <div style="overflow-x: auto; max-height: 400px;">
            <table style="width: 100%; border-collapse: collapse; font-size: 14px; min-width: 800px;">
                <thead style="background: var(--navy-blue); color: white;">
                    <tr>
                        <th style="padding: 12px;">#</th>
                        <th style="padding: 12px; text-align: left;">Student Name</th>
                        <th style="padding: 12px;">1st CA</th>
                        <th style="padding: 12px;">2nd CA</th>
                        <th style="padding: 12px;">3rd CA</th>
                        <th style="padding: 12px;">Exam</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px; text-align: center;">1</td>
                        <td style="padding: 12px;">Natalie Sanchez</td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        
  
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px; text-align: center;">2</td>
                        <td style="padding: 12px;">John Doe</td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                        <td style="padding: 12px; text-align: center;"><input type="number" class="form-input" style="width: 60px;" /></td>
                      
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal Actions -->
        <div style="margin-top: 20px; display: flex; gap: 10px; justify-content: flex-end;">
            <button class="login-button" style="background: #6c757d; color: white; box-shadow: none;" onclick="document.getElementById('resultsModal').style.display='none'">Cancel</button>
            <button class="login-button">Save Scores</button>
        </div>
    </div>
</div>

<!-- VIEW RESULTS MODAL -->
<div class="modal-overlay" id="viewResultsModal" style="display:none;">
    <div class="modal-card" style="max-width:900px;width:95%;background:white;border-radius:14px;padding:25px;">

        <!-- Modal Header -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
            <h2 style="color:var(--navy-blue);font-size:20px;">View Student Results</h2>
            <button onclick="document.getElementById('viewResultsModal').style.display='none'" style="border:none;background:none;font-size:24px;cursor:pointer;">&times;</button>
        </div>

        <!-- Filters -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:10px;margin-bottom:15px;">
            <input type="text" class="form-input" placeholder="Student ID">
            <select class="form-input">
                <option>Session</option>
                <option>2025/2026</option>
            </select>
            <select class="form-input">
                <option>Term</option>
                <option>1st Term</option>
                <option>2nd Term</option>
                <option>3rd Term</option>
            </select>
            <select class="form-input">
                <option>Class</option>
                <option>JSS 1</option>
                <option>SS 1</option>
            </select>
            <select class="form-input">
                <option>Arm</option>
                <option>A</option>
                <option>B</option>
            </select>
            <select class="form-input">
                <option>Division</option>
                <option>Science</option>
                <option>Arts</option>
            </select>
            <button class="login-button" style="background:#6c757d;color:white;box-shadow:none;">Reset</button>
        </div>

        <!-- Student Info -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
            <div>
                <p><strong>Name:</strong> Kamilk Esquire</p>
                <p><strong>Registration Number:</strong> EL1420</p>
                <p><strong>Session:</strong> 2025/2026</p>
                <p><strong>Term:</strong> 3rd Term</p>
                <p><strong>Date of Resumption:</strong> January 15th</p>
                <p><strong>Average:</strong> 76.5%</p>
            </div>
            <div>
                <img src="assets/images/passport-placeholder.png" alt="Student Passport" style="width:100px;height:100px;border-radius:10px;object-fit:cover;">
            </div>
        </div>

        <!-- Result Table -->
        <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;min-width:800px;">
                <thead style="background:var(--navy-blue);color:white;">
                    <tr>
                        <th style="padding:12px;text-align:left;">Subjects</th>
                        <th style="padding:12px;">1st CA</th>
                        <th style="padding:12px;">2nd CA</th>
                        <th style="padding:12px;">3rd CA</th>
                        <th style="padding:12px;">Exam</th>
                        <th style="padding:12px;">Total</th>
                        <th style="padding:12px;">Grade</th>
                        <th style="padding:12px;">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom:1px solid #eee;">
                        <td style="padding:12px;">Mathematics</td>
                        <td style="padding:12px;text-align:center;">7</td>
                        <td style="padding:12px;text-align:center;">8</td>
                        <td style="padding:12px;text-align:center;">6</td>
                        <td style="padding:12px;text-align:center;">59</td>
                        <td style="padding:12px;text-align:center;">80</td>
                        <td style="padding:12px;text-align:center;">A1</td>
                        <td style="padding:12px;text-align:center;">Excellent</td>
                    </tr>
                    <tr style="border-bottom:1px solid #eee;">
                        <td style="padding:12px;">English</td>
                        <td style="padding:12px;text-align:center;">6</td>
                        <td style="padding:12px;text-align:center;">7</td>
                        <td style="padding:12px;text-align:center;">8</td>
                        <td style="padding:12px;text-align:center;">60</td>
                        <td style="padding:12px;text-align:center;">81</td>
                        <td style="padding:12px;text-align:center;">A1</td>
                        <td style="padding:12px;text-align:center;">Excellent</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal Actions -->
        <div style="display:flex;justify-content:flex-end;gap:10px;margin-top:15px;">
            <button class="login-button" onclick="document.getElementById('viewResultsModal').style.display='none'">Close</button>
        </div>
    </div>
</div>

<script>
    // Logic to open/close sidebar on mobile
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const btn = document.querySelector('.hamburger-btn');
        if (window.innerWidth <= 900) {
            if (!sidebar.contains(event.target) && !btn.contains(event.target)) {
                sidebar.classList.remove('active');
            }
        }
    });
</script>

</body>
</html>
