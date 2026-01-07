<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Management</title>
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
    <h1>Fee Management</h1>

    <div class="topbar-buttons">
        <button class="login-button topbar-action-btn" onclick="openFeeSetupModal()">
            <i class="fas fa-plus-circle"></i> Fee Setup
        </button>
        <button class="login-button topbar-action-btn" onclick="openFeeRecordModal()">
            <i class="fas fa-file-invoice-dollar "></i> Fee Record
        </button>
    </div>
</div>


        <!-- FEE STRUCTURE TABLE -->
        <div class="stat-card" style="flex-direction:column; align-items:flex-start;">
            <h3 style="margin-bottom:15px; color:#666;">Fee Structures</h3>
            <table style="width:100%; border-collapse:collapse;">
                <thead>
                    <tr style="background:#f1f5f9;">
                        <th style="padding:12px;">#</th>
                        <th style="padding:12px;">Term</th>
                        <th style="padding:12px;">Class</th>
                        <th style="padding:12px;">Division</th>
                        <th style="padding:12px;">Gender</th>
                        <th style="padding:12px;">Amount Payable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding:12px;">1</td>
                        <td style="padding:12px;">1st Term</td>
                        <td style="padding:12px;">SS1</td>
                        <td style="padding:12px;">Arts</td>
                        <td style="padding:12px;">Both</td>
                        <td style="padding:12px;">₦50,000</td>
                    </tr>
                    <tr>
                        <td style="padding:12px;">2</td>
                        <td style="padding:12px;">1st Term</td>
                        <td style="padding:12px;">SS1</td>
                        <td style="padding:12px;">Science</td>
                        <td style="padding:12px;">Both</td>
                        <td style="padding:12px;">₦60,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- FEE RECORD TABLE -->
       <!-- FEE RECORDS SECTION -->
<div class="stat-card" style="flex-direction:column; align-items:flex-start; margin-top:20px;">
    <h3 style="margin-bottom:15px; color:#666;">Fee Records</h3>

    <!-- FILTERS (Horizontal, scrollable if needed) -->
    <div style="display:flex; gap:10px; margin-bottom:15px; overflow-x:auto; padding-bottom:5px;">
        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Select Session</option>
                <option>2024/2025</option>
                <option>2025/2026</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Select Term</option>
                <option>1st Term</option>
                <option>2nd Term</option>
                <option>3rd Term</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Select Class</option>
                <option>SS1</option>
                <option>SS2</option>
                <option>SS3</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Division</option>
                <option>Science</option>
                <option>Arts</option>
                <option>Social Science</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
        <select class="form-input">
                <option>Gender</option>
                <option>Female</option>
                <option>Male</option>
                <option>Both</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Select Fee Structure</option>
                <option>Arts - 50,000</option>
                <option>Science - 60,000</option>
                <option>Social Science - 55,000</option>
            </select>
        </div>

          <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Discount</option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Payment Method</option>
                <option>Cash</option>
                <option>Bank</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <select class="form-input">
                <option>Status</option>
                <option>Paid</option>
                <option>Owing</option>
                <option>Not Paid</option>
            </select>
        </div>

        <div class="form-group" style="flex:0 0 auto;">
            <input type="date" class="form-input" placeholder="Payment Date">
        </div>

        <button class="login-button" style="height:38px; flex:0 0 auto;">
            <i class="fas fa-filter"></i> Apply Filters
        </button>
    </div>

    <!-- FEE RECORD TABLE -->
    <div style="overflow-x:auto; width:100%;">
        <table style="width:100%; border-collapse:collapse; min-width:900px;">
            <thead>
                <tr style="background:#f1f5f9;">
                    <th style="padding:12px;">#</th>
                    <th style="padding:12px;">Registration No</th>
                    <th style="padding:12px;">Session</th>
                    <th style="padding:12px;">Term</th>
                    <th style="padding:12px;">Class</th>
                    <th style="padding:12px;">Fee Structure</th>
                    <th style="padding:12px;">Amount Paid</th>
                    <th style="padding:12px;">Date</th>
                    <th style="padding:12px;">Discount</th>
                    <th style="padding:12px;">Payment Method</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:12px;">1</td>
                    <td style="padding:12px;">REG123</td>
                    <td style="padding:12px;">2024/2025</td>
                    <td style="padding:12px;">1st Term</td>
                    <td style="padding:12px;">SS1</td>
                    <td style="padding:12px;">Arts - 50,000</td>
                    <td style="padding:12px;">₦50,000</td>
                    <td style="padding:12px;">2026-01-06</td>
                    <td style="padding:12px;">₦0</td>
                    <td style="padding:12px;">Cash</td>
                </tr>
                <tr>
                    <td style="padding:12px;">2</td>
                    <td style="padding:12px;">REG124</td>
                    <td style="padding:12px;">2024/2025</td>
                    <td style="padding:12px;">1st Term</td>
                    <td style="padding:12px;">SS1</td>
                    <td style="padding:12px;">Science - 60,000</td>
                    <td style="padding:12px;">₦30,000</td>
                    <td style="padding:12px;">2026-01-05</td>
                    <td style="padding:12px;">₦0</td>
                    <td style="padding:12px;">Bank</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


    </main>
</div>

<!-- FEE SETUP MODAL -->
<div id="feeSetupModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Fee Setup</h3>

        <label for="" class="form-label">Select Term</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Term</option>
                <option>1st Term</option>
                <option>2nd Term</option>
                <option>3rd Term</option>
            </select>
        </div>

        <label for="" class="form-label">Select Class</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Class</option>
                <option>SS1</option>
                <option>SS2</option>
                <option>SS3</option>
            </select>
        </div>

        <label for="" class="form-label">Select Division</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Division</option>
                <option>Arts</option>
                <option>Science</option>
                <option>Social Science</option>
                <option>Not Applicable</option>
            </select>
        </div>

        <label for="" class="form-label">Select Gender</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Both</option>
            </select>
        </div>

        <label for="" class="form-label">Amount Payable</label>
        <div class="form-group">
            <input type="number" class="form-input" placeholder="Amount Payable">
        </div>

        <div style="display:flex; gap:10px;">
            <button class="login-button">Save Fee Structure</button>
            <button class="login-button" onclick="closeFeeSetupModal()">Cancel</button>
        </div>
    </div>
</div>

<!-- FEE RECORD MODAL -->
<div id="feeRecordModal" class="modal-overlay" style="display:none;">
    <div class="stat-card modal-card">
        <h3 style="margin-bottom:15px;">Add Fee Record</h3>

        <label for="RegNum" class="form-label">Registeration Number</label>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Registration Number">
        </div>

        <label for="Session" class="form-label">Select Session</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Session</option>
                <option>2024/2025</option>
                <option>2025/2026</option>
            </select>
        </div>

        <label for="Term" class="form-label">Select Term</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Term</option>
                <option>1st Term</option>
                <option>2nd Term</option>
                <option>3rd Term</option>
            </select>
        </div>

        <label for="Class" class="form-label">Select Class</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Class</option>
                <option>SS1</option>
                <option>SS2</option>
                <option>SS3</option>
            </select>
        </div>

        <label for="FeeStructure" class="form-label">Select Fee Structure</label>
        <div class="form-group">
            <select class="form-input">
                <option>Select Fee Structure</option>
                <option>SS1 1st Term Arts - 50,000</option>
                <option>SS1 1st Term Science - 60,000</option>
                <option>SS1 1st Term Social Science - 55,000</option>
            </select>
        </div>

        <label for="Amount" class="form-label">Amount Paid</label>
        <div class="form-group">
            <input type="number" class="form-input" placeholder="Amount Paid">
        </div>

        <label for="date" class="form-label">Date Of Payment</label>
        <div class="form-group">
            <input type="date" class="form-input">
        </div>

        <label for="Discount" class="form-label">Discount</label>
        <div class="form-group">
            <input type="number" class="form-input" placeholder="Discount (if any)">
        </div>

        <label for="PaymentMethod" class="form-label">Payment Method</label>
        <div class="form-group">
            <select class="form-input">
                <option>Payment Method</option>
                <option>Cash</option>
                <option>Transfer</option>
            </select>
        </div>

        <div style="display:flex; gap:10px;">
            <button class="login-button">Save Fee Record</button>
            <button class="login-button" onclick="closeFeeRecordModal()">Cancel</button>
        </div>
    </div>
</div>

<script>
    const feeSetupModal  = document.getElementById('feeSetupModal');
    const feeRecordModal = document.getElementById('feeRecordModal');

    function openFeeSetupModal() { feeSetupModal.style.display = 'flex'; }
    function closeFeeSetupModal() { feeSetupModal.style.display = 'none'; }

    function openFeeRecordModal() { feeRecordModal.style.display = 'flex'; }
    function closeFeeRecordModal() { feeRecordModal.style.display = 'none'; }

    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.getElementById('menuToggle');

    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });

    document.addEventListener('click', function(e) {
        if(window.innerWidth <= 768 && !sidebar.contains(e.target) && !menuToggle.contains(e.target)){
            sidebar.classList.remove('active');
        }
    });
</script>

</body>
</html>
